<?php

namespace App\Http\Controllers;
use DB;
use App\Models\DocumentBpr;
use Illuminate\Http\Request;
use App\Traits\UploadFile;
use DataTables;

class DocumentBprController extends Controller
{
    use UploadFile;

    public function index(Request $request, $sandi_bpr)
    { 
        if($request->ajax()):

            $data = DocumentBpr::where('sandi_bpr', $sandi_bpr)->toBase()->get();

            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('download', function($row){
                
                return '<a href="'.url('preview-document', [$row->file, $row->status]).'" target="_blank" class="btn btn-danger">Preview</a>';
            })
            ->escapeColumns([])
            ->make(true);

        endif;

        return view('informasi-detail-bpr/detail-documents', compact('sandi_bpr'));
    }
    
    public function show($file_name,$status)
    {
        if($status == 'Y'):
            return '<iframe src="https://docs.google.com/gview?url='.url('protected/storage/dokumen/'.$file_name).'&embedded=true" style="width:100%; height:100%" frameborder="0"></iframe>';
        else:
             return '<iframe src="https://docs.google.com/gview?url='.url('storage/document_bpr/'.$file_name).'&embedded=true" style="width:100%; height:100%" frameborder="0"></iframe>';
        endif;
    }

    public function store(Request $request)
    {
        if(empty($request->file)):
            return back()->withError('Dokumen wajib di isi');
        endif;

        $request->validate([
            'file'=>'required'
        ]);

        $jumlah = count($request->file);
        for ($i=0; $i<$jumlah; $i++):
            
            if ($request->hasFile('file')):
                $filee = $this->upload($request->file('file')[$i], '', 'dokumen', 'Tambah');
            endif;

            DB::table('document_bpr')
            ->insert([
                'file'=>$filee,
                'sandi_bpr'=>$request->sandi_bpr,
                'keterangan'=>$request->keterangan[$i],
                'status'=>'Y',
                'created_at'=>\Carbon\Carbon::now(),
                'updated_at'=>\Carbon\Carbon::now(),
            ]);

        endfor;

        return back()->with('success', 'Berhasil input dokumen');
    }
}
