<?php

namespace App\Imports;
use DB;
use App\Models\LaporanAsetProduktif;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class LaporanAsetProduktifImport implements ToModel
{
    protected $id_header;

    public function __construct($id_header)
    {
        $this->id_header = $id_header;
    }

    public function model(array $row)
    {
        //print_r($row);
        return new LaporanAsetProduktif([
            'pos'=>$row[1],
            'l'=>$row[6],
            'dpk'=>$row[7],
            'kl'=>$row[9],
            'd'=>$row[10],
            'm'=>$row[11],
            'jumlah'=>$row[14],
            'header_import_id'=>$this->id_header
        ]);
    }
}
