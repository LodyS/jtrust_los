<?php

namespace App\Http\Controllers;
use App\Models\LaporanPosisiKeuanganTable;
use DB;
use Auth;
use App\Models\LaporanPosisiKeuangan;
use App\Models\HeaderImport;
use App\Models\InformasiPokokBprPelapor;
use App\Models\Header;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\LaporanPosisiKeuanganImport;
use Illuminate\Http\Request;
use DataTables;
use App\Http\Requests\ExcelRequest;
use App\Http\Requests\TxtRequest;

class LaporanPosisiKeuanganController extends Controller
{
    public function index ()
    {
        return view ('form/form-01/index');
    }

    public function store (TxtRequest $request)
    {
        $txt = $request->file('file');
        $file = $txt->getClientOriginalName();
        $folder = public_path('/txt');
        $txt->move($folder, $file);
        $folder = public_path('txt/'.$file);

        DB::beginTransaction ();

        try {

            $open = fopen($folder,'r');

            $getText = fgets($open);
            $explode = explode("|",$getText);

            $periode_data = $explode[3];
            $kode_form_laporan = $explode[5];

            // cek header
            $cek_header= Header::select('id')
            ->checkKodeFormLaporan($kode_form_laporan)
            ->checkPeriodeData($periode_data)
            ->first(); // panggil function dari model

            $id_header = (isset($cek_header)) ? $cek_header->id : null;

            if ($id_header == null):

                $header = new Header;   // input header
                $header->storeHeader($explode); // input memanggil function dari model yang dibuat untuk simpan header

                while (!feof($open)):
                    $getTextLine = fgets($open);
                    $explodeLine = explode("|",$getTextLine); // memecah string setiap delimeter |
                    $explodeLine['header_id'] = $header->id;

                    $txt = new LaporanPosisiKeuangan();
                    $txt->storeLaporanPosisiKeuangan($explodeLine);
                endwhile;

                LaporanPosisiKeuangan::where('sandi_kantor', 'Data Kosong')->where('sandi_pos', 'Data Kosong')->delete();

            else:

                Header::find($id_header)->delete();
                LaporanPosisiKeuangan::where('header_id', $id_header)->delete();

                // input header
                $header = new Header;   // input header
                $header->storeHeader($explode); // input memanggil function dari model yang dibuat untuk simpan header

                while (!feof($open)):
                    $getTextLine = fgets($open);
                    $explodeLine = explode("|",$getTextLine); // memecah string setiap delimeter |
                    $explodeLine['header_id'] = $header->id;

                    $txt = new LaporanPosisiKeuangan();
                    $txt->storeLaporanPosisiKeuangan($explodeLine);
                endwhile;

                LaporanPosisiKeuangan::where('sandi_kantor', 'Data Kosong')->where('sandi_pos', 'Data Kosong')->delete();

            endif;

            fclose($open);
            DB::commit();
            return redirect('/laporan-posisi-keuangan')->with('success', 'Data Saved Successfully');

       } catch (\Illuminate\Database\QueryException $e){
            DB::rollback();
            return back()->withError('Failed save data : '. $e->getMessage());
        }
    }

    public function import(Request $request)
    {
        $sandi_bpr = $request->sandi_bpr;
        return view('financial-highlight/laporan-posisi-keuangan/import', compact('sandi_bpr'));
    }

    public function importStore (ExcelRequest $request)
    {
        DB::beginTransaction();

        try {

            $req = $request->all();
            $req['periode_waktu'] = $request->periode_waktu;
            $req['status_excel'] = 'Y';
            $cek = HeaderImport::checkLaporanPosisiKeuangan($req)->value('id');

            if (isset($cek)):

                return back()->withError('Gagal import karena sudah di import');

            else:

                $header = HeaderImport::create($req);
                $id_header = $header->id;

                Excel::import(new LaporanPosisiKeuanganImport($id_header), $request->file('file'));
                LaporanPosisiKeuanganTable::filterDelete()->delete();
                LaporanPosisiKeuanganTable::deleteFilter()->delete();
                LaporanPosisiKeuanganTable::deleteJalan()->delete();

                DB::commit();
                return back()->with('success', 'Berhasil import laporan posisi keuangan');

            endif;

        } catch (Exception $e){
            DB::rollback();
            return back()->withError('Gagal Import');
        }
    }

    public function report (Request $request)
    {
        $tahun = (isset($request->tahun)) ? $request->tahun : date('Y');
        $tahun_sebelumnya = $tahun-1;
        $bpr = InformasiPokokBprPelapor::where('uuid', $request->sandi_bpr)->toBase()->first();
        $sandi_bpr = $request->sandi_bpr;

        $req['tahun'] = $tahun;
        $req['tahun_sebelumnya'] = $tahun_sebelumnya;
        $req['sandi_bpr'] = $request->sandi_bpr;
        $data = LaporanPosisiKeuanganTable::report($req);

        return view('financial-highlight/laporan-posisi-keuangan/report', compact('bpr', 'tahun', 'sandi_bpr', 'data'));
    }
}
