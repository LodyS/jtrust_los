<?php

namespace App\Imports;
use DB;
use App\Models\LaporanLabaRugiTable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class LaporanLabaRugiImport implements ToModel
{
    protected $id_header;

    public function __construct($id_header)
    {
        $this->id_header = $id_header;
    }

    public function model(array $row)
    {
        return new LaporanLabaRugiTable([
            'pos'=>$row[2],
            'posisi_tanggal_laporan'=>$row[6],
            'posisi_yang_sama_tahun_sebelumnya'=>$row[7],
            'header_import_id'=>$this->id_header
        ]);
    }
}
