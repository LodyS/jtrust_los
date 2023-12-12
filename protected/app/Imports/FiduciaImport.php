<?php

namespace App\Imports;
use DateTime;
use App\Models\Fiducia;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class FiduciaImport implements ToModel, WithChunkReading
{
    protected $loan_applicant_id;

    public function __construct($loan_applicant_id)
    {
        $this->loan_applicant_id = $loan_applicant_id;
    }

    public function model(array $row)
    {
        return new Fiducia([
            'tanggal_menjadi_anggota'=>($row[1] !== 'Tgl Menjadi Anggota') ? $this->transformDate($row[1]) : '',
            'no_akad'=>$row[2],
            'produk'=>$row[3],
            'nama_peminjam'=>$row[4],
            'cabang'=>$row[5],
            'kota'=>$row[6],
            'plafond'=>$row[7],
            'os'=>$row[8],
            'tanggal_pencairan'=>($row[9] !== 'Tgl Pencairan') ? $this->transformDate($row[9]) : '',
            'jangka_waktu'=>$row[10],
            'status'=>$row[11],
            'tujuan_penggunaan'=>$row[12],
            'hari_tunggakan'=>$row[13],
            'kolektibilitas'=>$row[14],
            'loan_applicant_id'=>$this->loan_applicant_id
        ]);
    }

    public function chunkSize(): int
    {
        return 50;
    }

    public function transformDate($value, $format = 'Y-m-d')
    {
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }
}
