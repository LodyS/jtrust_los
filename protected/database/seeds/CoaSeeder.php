<?php
use App\Models\Coa;
use Illuminate\Database\Seeder;

class CoaSeeder extends Seeder
{
    public function run()
    {
        DB::table('coa')->truncate();
        $this->command->line('Hapus data table COA');

        Coa::insert([
            // Laporan Posisi Keuangan 0100 - Aset
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1101010000',
                'nama_coa'=>'Kas Dalam Rupiah'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1101020000',
                'nama_coa'=>'Kas Dalam Valuta Asing'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1102000000',
                'nama_coa'=>'Surat Berharga'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1103010000',
                'nama_coa'=>'Penempatan Pada Bank Lain'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1103020000',
                'nama_coa'=>'-/-Penyisihan Penghapusan Aset Produktif'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1104010100',
                'nama_coa'=>'Kredit Yang Diberikan (BAKI DEBET)'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1104010200',
                'nama_coa'=>'-/-Provisi Belum Diamortasi'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1104010300',
                'nama_coa'=>'Biaya Transaksi Belum Diamortasi'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1104010400',
                'nama_coa'=>'-/-Pendapatan Bunga Yang Ditangguhkan dalam rangka restrukturiasi'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1104010500',
                'nama_coa'=>'-/-Cadangan kerugian restrukturiasi'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1104020000',
                'nama_coa'=>'-/-Penyisihan Penghapusan Aset Produktif'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1201000000',
                'nama_coa'=>'Agunan yang diambil alih'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1202010000',
                'nama_coa'=>'Aset tetap dan inventaris'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1202020000',
                'nama_coa'=>'-/-Akumulasi Penyusutan dan Penurunan Nilai'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1203010000',
                'nama_coa'=>'Aset Tidak Berwujud'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1203020000',
                'nama_coa'=>'-/-Akumulasi Amortasasi dan Penurunan Nilai'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1204000000',
                'nama_coa'=>'Aset Antar Kantor'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1299000000',
                'nama_coa'=>'Aset Lainnya'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan 0100 - Aset',
                'sandi_coa'=>'1000000000',
                'nama_coa'=>'TOTAL ASET'
            ],

            // Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'2101000000',
                'nama_coa'=>'Liabilitas Segera'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'2102010000',
                'nama_coa'=>'Simpanan'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'2102010100',
                'nama_coa'=>'a. Tabungan'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'2102010200',
                'nama_coa'=>'-/-Biaya Transaksi Belum Diamortisasi'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'2102020100',
                'nama_coa'=>'b. Deposito'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'2103010000',
                'nama_coa'=>'Simpanan Dari Bank Lain'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'2103020000',
                'nama_coa'=>'-/-Biaya Transaksi Belum Diamortisasi'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'2201010000',
                'nama_coa'=>'Pinjaman yang Diterima'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'2201020000',
                'nama_coa'=>'-/-Biaya Transaksi Belum Diamortisasi'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'2201030000',
                'nama_coa'=>'-/-Diskonto Belum Diamortisasi'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'2202000000',
                'nama_coa'=>'Dana Setoran Modal-Kewajiban'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'2203000000',
                'nama_coa'=>'Liabilitas Antar Kantor'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'2299000000',
                'nama_coa'=>'Liabilitas Lainnya'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'2000000000',
                'nama_coa'=>'TOTAL LIABILITAS'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3101000000',
                'nama_coa'=>'Modal Disetor'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3101010000',
                'nama_coa'=>'a. Modal Dasar'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3101020000',
                'nama_coa'=>'b. Modal yang belum disetor -/-'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3102000000',
                'nama_coa'=>'Tambahan Modal yang disetor'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3102010000',
                'nama_coa'=>'a. Agio (Disagio)'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3102020000',
                'nama_coa'=>'b. Modal Sumbangan'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3102030000',
                'nama_coa'=>'c. Dana Setoran Modal - Ekuitas'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3102990000',
                'nama_coa'=>'d. Tambahan Modal Disetor Lainnya'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3103000000',
                'nama_coa'=>'Ekuitas Lainnya'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3103010000',
                'nama_coa'=>'Keuntungan (kerugian) dari perubahan nilai aset keuangan dalam kelompok'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3103020000',
                'nama_coa'=>'Keuntungan revaluasi aset tetap'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3103990000',
                'nama_coa'=>'Lainnya'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3103980000',
                'nama_coa'=>'Pajak Penghasilan terkait dengan ekuitas lain'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3104000000',
                'nama_coa'=>'Cadangan'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3104010000',
                'nama_coa'=>'Umum'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3104020000',
                'nama_coa'=>'Tujuan'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3105000000',
                'nama_coa'=>'Laba (Rugi)'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3105010000',
                'nama_coa'=>'Tahun - tahun lalu'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3105020000',
                'nama_coa'=>'Tahun berjalan'
            ],
            [
                'bagian'=>'Laporan Posisi Keuangan Form 0100 - Liabilitas dan ekuitas',
                'sandi_coa'=>'3000000000',
                'nama_coa'=>'TOTAL EKUITAS'
            ],

            // Form 0101 Rekening Administratif - Aset
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6101000000',
                'nama_coa'=>'Tagihan Komitmen'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6101010000',
                'nama_coa'=>'a. Fasilitas Pinjaman yang diterima yang belum ditarik'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6101990000',
                'nama_coa'=>'b. Tagihan Komitimen Lainnya'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6102000000',
                'nama_coa'=>'Kewajiban Komitmen',
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6102010000',
                'nama_coa'=>'a. Fasilitas Kredit Kepada Nasabah yang belum ditarik'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6102020000',
                'nama_coa'=>'b. Penerusan Kredit'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6102990000',
                'nama_coa'=>'c. Kewajiban Komitmen Lainnya'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6201000000',
                'nama_coa'=>'Tagihan Kontinjensi'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6201010000',
                'nama_coa'=>'a. Pendapatan Bunga Dalam Penyelesaian'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6201010100',
                'nama_coa'=>'1) Bunga Kredit yang diberikan'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6201010200',
                'nama_coa'=>'2) Bunga Penempatan pada bank lain'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6201020000',
                'nama_coa'=>'b. Aset Produktif yang dihapus Buku'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6201020100',
                'nama_coa'=>'1) Kredit yang diberikan'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6201020200',
                'nama_coa'=>'2) Penempatan pada bank lain'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6201020300',
                'nama_coa'=>'3) Pendapatan Bunga atas kredit yang dihapus buku'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6201020400',
                'nama_coa'=>'4) Pendapatan Bunga atas penempatan dana pada bank lain yang'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6201030000',
                'nama_coa'=>'c. Agunan dalam proses penyelesaian kredit'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6201990000',
                'nama_coa'=>'d. Tagihan Kontinjensi Lainnya'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6202000000',
                'nama_coa'=>'Kewajiban Kontinjensi'
            ],
            [
                'bagian'=>'Form 0101 Rekening Administratif - Aset',
                'sandi_coa'=>'6900000000',
                'nama_coa'=>'Rekening Administratif Lainnya'
            ],

            // Form 002 - Laporan Laba Rugi _nama rekening
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4100000000',
                'nama_coa'=>'Pendapatan Operasional'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101000000',
                'nama_coa'=>'Pendapatan Bunga'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101010000',
                'nama_coa'=>'a. Bunga Kontraktual'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101010100',
                'nama_coa'=>'i. Surat Berharga'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101010200',
                'nama_coa'=>'ii. Penempatan pada bank lain'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101010201',
                'nama_coa'=>'Giro'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101010202',
                'nama_coa'=>'Tabungan'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101010203',
                'nama_coa'=>'Deposito'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101010204',
                'nama_coa'=>'Sertifikat Deposito'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101010300',
                'nama_coa'=>'iii. Kredit yang diberikan'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101010301',
                'nama_coa'=>'Kepada Bank lain'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101010302',
                'nama_coa'=>'Kepada Pihak Ketiga yang bukan Bank'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101020000',
                'nama_coa'=>'b. Provisi kredit'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101020100',
                'nama_coa'=>'i. Kepada Bank Lain'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101020200',
                'nama_coa'=>'ii. Kepada pihak ketiga bukan Bank'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101030000',
                'nama_coa'=>'C. Biaya Transaksi -/-'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101030100',
                'nama_coa'=>'Surat Berharga'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101030200',
                'nama_coa'=>'Kredit yang diberikan'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101030201',
                'nama_coa'=>'Kepada Bank Lain'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101030202',
                'nama_coa'=>'Kepada Pihak Ketiga bukan Bank'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4101040000',
                'nama_coa'=>'Koreksi atas pendapatan Bunga -/-'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4102000000',
                'nama_coa'=>'Pendapatan Lainnya'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4102010000',
                'nama_coa'=>'Pendapatan Jasa Transaksi'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4102020000',
                'nama_coa'=>'b. Keuntungan Penjualan Valuta Asing'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4102030000',
                'nama_coa'=>'c. Keuntungan Penjualan Surat Berharga'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4102040000',
                'nama_coa'=>'d. Penerimaan Aset Produktif yang dihapus buku'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4102050000',
                'nama_coa'=>'e. Pemulihan Penyisihan Penghapusan Aset Produktif'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4102990000',
                'nama_coa'=>'f. Lainnya'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5100000000',
                'nama_coa'=>'Beban Operasional'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5101000000',
                'nama_coa'=>'Beban Bunga'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5101010000',
                'nama_coa'=>'Beban Bunga Kontraktual'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5101010100',
                'nama_coa'=>'i. Tabungan'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5101010200',
                'nama_coa'=>'ii. Deposito'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5101010300',
                'nama_coa'=>'iii. Simpanan dari bank lain'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5101010400',
                'nama_coa'=>'iv. Pinjaman yang diterima'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5101010401',
                'nama_coa'=>'1. Dari Bank Indonesia'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5101010402',
                'nama_coa'=>'2. Dari Bank Lain'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5101010403',
                'nama_coa'=>'3. Dari pihak ketiga bukan bank'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5101010404',
                'nama_coa'=>'4. Berupa Pinjaman dari subordinasi'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5101019900',
                'nama_coa'=>'v. Lainnya'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5101020000',
                'nama_coa'=>'b. Biaya Transaksi'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5101020100',
                'nama_coa'=>'1. Kepada Bank Lain'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5101020200',
                'nama_coa'=>'ii. Kepada Pihak Ketiga bukan bank'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5102000000',
                'nama_coa'=>'2. Beban Kerugian Restrukturisasi Kredit'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5103000000',
                'nama_coa'=>'3. Beban Penyisihan Penghapusan Aset Produkti'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5103010000',
                'nama_coa'=>'a. Surat Berharga'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5103020000',
                'nama_coa'=>'b. Penempatan Pada Bank Lain'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5103030000',
                'nama_coa'=>'c. Bunga Kredit yang diberikan'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5103030100',
                'nama_coa'=>'i. Kepada Bank Lain'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5103030200',
                'nama_coa'=>'ii. Kepada Pihak Ketiga yang bukan Bank'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5104000000',
                'nama_coa'=>'4. Beban Pemasaran'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5105000000',
                'nama_coa'=>'5. Beban Penelitian dan Pengembangan'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5106000000',
                'nama_coa'=>'6. Beban Administrasi dan Umum'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5106010000',
                'nama_coa'=>'a. Beban Tenaga kerja'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5106010100',
                'nama_coa'=>'i. Gaji dan upah'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5106010200',
                'nama_coa'=>'ii. Honorarium'
            ],

            // Form 0200 Laporan Laba Rugi
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5106019900',
                'nama_coa'=>'iii. Lainnya'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5106020000',
                'nama_coa'=>'b. Beban Pendidikan dan pelatihan'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'51060130000',
                'nama_coa'=>'c. Beban Sewa'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5106030100',
                'nama_coa'=>'Gedung kantor'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5106039900',
                'nama_coa'=>'ii. Lainnya'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5106040000',
                'nama_coa'=>'d. Beban Penyusutan/Penghapusan atas aset tetap dan inventaris'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5106050000',
                'nama_coa'=>'e. Beban Amortisasi aset tidak berwujud'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5106060000',
                'nama_coa'=>'f. Beban Premi Asuransi'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5106070000',
                'nama_coa'=>'g. Beban Pemeliharaan dan perbaikan'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5106080000',
                'nama_coa'=>'h. Beban Barang dan Jasa'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5106090000',
                'nama_coa'=>'i. Pajak-pajak'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5199000000',
                'nama_coa'=>'7. Beban Lainnya'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5199010000',
                'nama_coa'=>'a. Kerugian Penjualan Valuta Asing'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5199020000',
                'nama_coa'=>'b. Kerugian Penjualan Surat Berharga'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5199990000',
                'nama_coa'=>'c. Lainnya'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'3104040100',
                'nama_coa'=>'Laba Rugi Operasional'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4200000000',
                'nama_coa'=>'Pendapatan Non Operasional'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4201000000',
                'nama_coa'=>'Keuntungan Penjualan'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4201010000',
                'nama_coa'=>'a. Aset tetap dan invetaris'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4201020000',
                'nama_coa'=>'b. Ayda'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4202000000',
                'nama_coa'=>'2. Pemulihan Penurunan Nilai'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4202010000',
                'nama_coa'=>'a. Aset tetap dan invetaris'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4202020000',
                'nama_coa'=>'b. Ayda'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4203000000',
                'nama_coa'=>'3. Pendapatan Ganti Rugi Asuransi'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4204000000',
                'nama_coa'=>'4. Bunga Antar Kota'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4205000000',
                'nama_coa'=>'5. Selisih Kurs'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4299000000',
                'nama_coa'=>'6. Lainnya'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5200000000',
                'nama_coa'=>'Beban Non Operasional'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5201000000',
                'nama_coa'=>'1. Kerugian Penjualan/Kehilangan'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5201010000',
                'nama_coa'=>'a. Aset dan Invetaris'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5201020000',
                'nama_coa'=>'b. Ayda'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5202000000',
                'nama_coa'=>'2. Kerugian Penurunan Nilai'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5202010000',
                'nama_coa'=>'a. Aset tetap dan invetaris'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5202020000',
                'nama_coa'=>'b. Ayda'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5203000000',
                'nama_coa'=>'3. Bunga Antar Kantor'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5204000000',
                'nama_coa'=>'4. Selisih Kurs'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5299000000',
                'nama_coa'=>'5. Lainnya'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'3104040200',
                'nama_coa'=>'Laba (Rugi) Non Operasional'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'3104040300',
                'nama_coa'=>'Laba (Rugi) Tahun Berjalan Sebelum Pajak'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5300000000',
                'nama_coa'=>'Taksiran Pajak Penghasilan'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'4400000000',
                'nama_coa'=>'Pendapatan Pajak Tangguhan'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'5400000000',
                'nama_coa'=>'Beban Pajak Tangguhan'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'3104040400',
                'nama_coa'=>'Jumlah Laba (Rugi) Tahun Berjalan'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'7100000000',
                'nama_coa'=>'Penghasilan Komprehensif Lainnya'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'7101000000',
                'nama_coa'=>'1. Tidak akan direklasifikasi ke laba rugi'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'7101010000',
                'nama_coa'=>'a. Keuntungan Revaluasi Aset tetap'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'7101990000',
                'nama_coa'=>'b. Lainnya'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'7101980000',
                'nama_coa'=>'c. Pajak penghasilan terkait'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'7102000000',
                'nama_coa'=>'2. Akan Direklasifikasikan ke laba rugi'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'7102010000',
                'nama_coa'=>'a. Keuntungan (kerugian) dan perubahan nilai aset keuangan dalam kelompok'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'7102990000',
                'nama_coa'=>'b. Lainnya'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'7102980000',
                'nama_coa'=>'c. Pajak penghasilan terkait'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'3104040500',
                'nama_coa'=>'Penghasilan Komperehensif lain setelah pajak'
            ],
            [
                'bagian'=>'Form 002 - Laporan Laba Rugi ',
                'sandi_coa'=>'3104040600',
                'nama_coa'=>'Total laba (rugi) komperehensif tahun berjalan'
            ],
        ]);
    }
}
