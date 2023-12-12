<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\Models\Header;
use App\Models\RincianLiabilitasLainnya;
use App\Http\Requests\TxtRequest;
use Illuminate\Http\Request;

class RincianLiabilitasLainnyaController extends Controller
{
    public function index ()
    {
        return view ('form/form-14/index');
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

                    $txt = new RincianLiabilitasLainnya();
                    $txt->storeRincianLiabilitasLainnya($explodeLine);
                endwhile;

            else:

                Header::find($id_header)->delete();
                RincianLiabilitasLainnya::where('header_id', $id_header)->delete();

                // input header
                $header = new Header;   // input header
                $header->storeHeader($explode); // input memanggil function dari model yang dibuat untuk simpan header

                while (!feof($open)):
                    $getTextLine = fgets($open);
                    $explodeLine = explode("|",$getTextLine); // memecah string setiap delimeter |
                    $explodeLine['header_id'] = $header->id;

                    $txt = new RincianLiabilitasLainnya();
                    $txt->storeRincianLiabilitasLainnya($explodeLine);
                endwhile;
            endif;

            fclose($open);
            DB::commit();
            return redirect('/rincian-liabilitas-lainnya')->with('success', 'Data Saved Successfully');
       } catch (\Illuminate\Database\QueryException $e){
            DB::rollback();
            return back()->withError('Failed save data : '. $e->getMessage());
        }
    }
}
