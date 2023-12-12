<?php

namespace App\Http\Controllers;
use App\Models\RincianRasioKeuanganTriwulan;
use DB;
use Auth;
use App\Models\Header;
use App\Http\Requests\TxtRequest;
use Illuminate\Http\Request;

class RincianRasioKeuanganTriwulanController extends Controller
{
    public function index ()
    {
        return view ('form/form-008/index');
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
            // buka file txt
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

                    // input rasio keuangan
                    $txt = new RincianRasioKeuanganTriwulan;
                    $txt->storeRincianRasioKeuanganTriwulan($explodeLine);
                endwhile;

            else:
                // jika header sudah ada maka data header yang sudah diinput dan di form akan di hapus
                Header::find($id_header)->delete();
                RincianRasioKeuanganTriwulan::where('header_id', $id_header)->delete();

                // input header
                $header = new Header;
                $header->storeHeader($explode);

                while (!feof($open)):
                    $getTextLine = fgets($open);
                    $explodeLine = explode("|",$getTextLine); // memecah string setiap delimeter |
                    $explodeLine['header_id'] = $header->id;

                    // input rasio keuangan
                    $txt = new RincianRasioKeuanganTriwulan;
                    $txt->storeRincianRasioKeuanganTriwulan($explodeLine);

                    DB::table('form_008')->where('sandi_pos', 'Data Kosong')->delete();
                endwhile;

            endif;

            fclose($open);
            DB::commit();
            return redirect('/rincian-rasio-keuangan-triwulan')->with('success', 'Data Saved Successfully');

        } catch (\Illuminate\Database\QueryException $e){
            DB::rollback();
            return back()->withError('Failed save data : '. $e->getMessage());
        }
    }
}
