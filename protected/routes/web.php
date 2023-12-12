<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'BerandaController@index');
Route::get('home', 'BerandaController@home'); 
Route::get('/migrate', 'BerandaController@migrate');
Route::get('/clear-cache', 'BerandaController@clear');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => ['superadmin']], function () {
        Route::resource('list-user', 'UserController')->except(['show']);
        Route::post('update-status-user', 'UserController@updateStatusUser');
        // Product
        Route::resource('product', 'ProductController')->except(['show']);
        Route::resource('coa', 'CoaController')->except(['destroy', 'show']);
        Route::resource('branch', 'BranchController')->except(['show']);
        Route::resource('region', 'RegionListingController')->except(['show']);
        Route::resource('manajemen-pertanyaan', 'ManajemenPertanyaanController')->except(['show']);
        Route::resource('jabatan', 'JabatanController');
        Route::resource('jabatan-bpr', 'JabatanBprController');
        Route::resource('jenis-pengajuan', 'JenisPengajuanController');
        Route::resource('informasi-grup-usaha', 'InformasiGrupUsahaController');
        Route::resource('master-jawaban-pertanyaan', 'MasterJawabanPertanyaanController')->except(['show']);
        Route::resource('skema-kredit', 'SkemaKreditController')->except(['show']);
        Route::resource('komponen-tks', 'KomponenTksController')->except(['show']);
        Route::resource('nilai-komponen-tks', 'NilaiKomponenTksController')->except(['show']);
        Route::resource('predikat-tks', 'PredikatTksController')->except(['show']);
        Route::resource('setting-flow', 'SettingFlowController')->except(['show', 'destroy']);
        Route::resource('fasilitas-kredit', 'FasilitasKreditController')->except(['show']);
        Route::resource('logs', 'LogController');
        Route::resource('bwmk', 'BwmkController');

        Route::get('backup-database', 'BackupDatabaseController@index');
        Route::get('do-backup-database', 'BackupDatabaseController@backup');
        Route::post('download-backup-db', 'BackupDatabaseController@download'); 
    });
    // Laporan Laba Rugi
    Route::get('detail-laporan-laba-rugi/{sandi_bpr}', 'LaporanLabaRugiController@report');
    Route::post('cari-detail-laporan-laba-rugi', 'LaporanLabaRugiController@report');
    // Laporan Posisi Keuangan atau Trial Balance
    Route::get('detail-laporan-posisi-keuangan/{sandi_bpr}', 'LaporanPosisiKeuanganController@report');
    Route::post('cari-detail-laporan-posisi-keuangan', 'LaporanPosisiKeuanganController@report');
    // Laporan Aset Produktifindex
    Route::get('detail-laporan-aset-produktif/{sandi_bpr}', 'LaporanAsetProduktifController@report');
    Route::post('cari-detail-laporan-aset-produktif', 'LaporanAsetProduktifController@report');
   
    Route::get('kepemilikan-bpr/{id}', 'KepemilikanBprController@index'); //form01
    Route::get('anggota-direksi-komisaris/{id}', 'DireksiBprController@index'); //form02
    Route::get('organ-pelaksana-bpr/{id}', 'OrganBprController@index'); //form03
    Route::get('slik/{id}', 'PinjamanDiterimaController@index'); //form07
    
    // Master Data BPR
    Route::group(['middleware' => ['business-division']], function () {
        Route::get('list-data-bpr', 'MasterDataBprController@index');
    });

    Route::group(['middleware' => ['ao']], function () {
        Route::get('form-data-bpr', 'MasterDataBprController@create');
        Route::post('master-data-bpr-store', 'MasterDataBprController@store');
        Route::get('edit-list-bpr/{id}', 'MasterDataBprController@edit');
        Route::get('rincian-kantor-bpr/{id}', 'RincianBprController@eindex'); //form04
        Route::get('pihak-terkait-bpr/{id}', 'PihakTerkaitController@index'); //form05

        Route::resource('organ-pelaksana-bpr', 'OrganBprController')->except(['index']);
        Route::resource('rincian-kantor-bpr', 'RincianBprController')->except(['index']);
        Route::resource('pihak-terkait-bpr', 'PihakTerkaitController')->except('index');
        Route::resource('anggota-direksi-komisaris', 'DireksiBprController')->except(['index']);
        Route::resource('slik', 'PinjamanDiterimaController')->except(['index']);
        Route::resource('kepemilikan-bpr', 'KepemilikanBprController')->except(['index']);

        // import slik txt
        Route::get('import-slik-txt/{id}', 'SlikTxtController@create');
        Route::post('upload-slik-txt', 'SlikTxtController@store');
        Route::get('header/{sandi_bpr}', 'HeaderController@index');
        Route::get('edit-header/{id}', 'HeaderController@edit');
        Route::post('update-header-import', 'HeaderController@update');

        // data applicant atau loan application        
        Route::get('tambah-pengajuan-pinjaman', 'DataApplicantController@create');
        Route::post('simpan-pengajuan-pinjaman', 'DataApplicantController@store');
        Route::get('edit-pengajuan-pinjaman/{id}', 'DataApplicantController@edit');
        Route::post('update-pengajuan-pinjaman', 'DataApplicantController@update');
        Route::get('delete-pengajuan-pinjaman', 'DataApplicantController@delete')->name('delete-pengajuan-pinjaman');
        Route::post('destroy-pengajuan-pinjaman', 'DataApplicantController@destroy')->name('destroy-pengajuan-pinjaman');
        Route::post('excute-pengajuan-pinjaman', 'DataApplicantController@excute')->name('excute-pengajuan-pinjaman');
        Route::get('perpanjangan-pinjaman/{id}', 'DataApplicantController@perpanjangan');
        Route::get('edit-perpanjangan-pinjaman/{id}', 'DataApplicantController@editPerpanjangan');
        Route::post('simpan-perpanjangan-pinjaman', 'DataApplicantController@simpanPerpanjangan');
        Route::post('update-perpanjangan-pinjaman', 'DataApplicantController@updatePerpanjangan');
        
        // laporan posisi keuangan
        Route::get('import-laporan-posisi-keuangan/{sandi_bpr}', 'LaporanPosisiKeuanganController@import');
        Route::post('import-laporan-posisi-keuangan', 'LaporanPosisiKeuanganController@importStore');
        // laporan laba rugi
        Route::get('import-laporan-laba-rugi/{sandi_bpr}', 'LaporanLabaRugiController@import');
        Route::post('import-laporan-laba-rugi', 'LaporanLabaRugiController@importStore');
        // laporan aset produktif
        Route::get('import-laporan-aset-produktif/{sandi_bpr}', 'LaporanAsetProduktifController@import');
        Route::post('import-laporan-aset-produktif', 'LaporanAsetProduktifController@importStore');
        // Informasi Pokok BPR Pelapor - form 000
        Route::get('informasi-pokok-bpr-pelapor', 'InformasiPokokBprPelaporController@index');
        Route::post('simpan-informasi-pokok-bpr-pelapor', 'InformasiPokokBprPelaporController@store');
        // Data kepemilikan BPR Controller - form 001
        Route::get('data-kepemilikan-bpr', 'DataKepemilikanBprController@index');
        Route::post('simpan-data-kepemilikan-bpr', 'DataKepemilikanBprController@store');
        // Data Anggota Direksi dan Komisaris BPR Controller - form 002
        Route::get('data-anggota-direksi-dan-komisaris-bpr', 'DataAnggotaDireksiDanKomisarisBprController@index');
        Route::post('simpan-data-anggota-direksi-dan-komisaris-bpr', 'DataAnggotaDireksiDanKomisarisBprController@store');
        // Data Organ Pelaksana BPR - form 003
        Route::get('data-organ-pelaksana-bpr', 'DataOrganPelaksanaBprController@index');
        Route::post('simpan-data-organ-pelaksana-bpr', 'DataOrganPelaksanaBprController@store');
        // Daftar Rincian Kantor BPR - form 004
        Route::get('daftar-rincian-kantor-bpr', 'DaftarRincianKantorBprController@index');
        Route::post('simpan-daftar-rincian-kantor-bpr', 'DaftarRincianKantorBprController@store');
        // Data Pihak Terkait BPR - form 005
        Route::get('data-pihak-terkait-bpr', 'DataPihakTerkaitBprController@index');
        Route::post('simpan-data-pihak-terkait-bpr', 'DataPihakTerkaitBprController@store');
        // Daftar pinjaman yang diterima - form 007
        Route::get('daftar-pinjaman-yang-diterima', 'DaftarPinjamanYangDiterimaController@index');
        Route::post('simpan-daftar-pinjaman-yang-diterima', 'DaftarPinjamanYangDiterimaController@store');
        // Rincian Rasio keuangan triwulan - form 008
        Route::get('rincian-rasio-keuangan-triwulan', 'RincianRasioKeuanganTriwulanController@index');
        Route::post('simpan-rincian-rasio-keuangan-triwulan', 'RincianRasioKeuanganTriwulanController@store');
        // Laporan posisi Keuangan - form 01
        Route::get('laporan-posisi-keuangan', 'LaporanPosisiKeuanganController@index');
        Route::post('simpan-laporan-posisi-keuangan', 'LaporanPosisiKeuanganController@store');
        // Laporan laba rugi - form 02
        Route::get('form-laporan-laba-rugi', 'LaporanLabaRugiController@index');
        Route::post('simpan-laporan-laba-rugi-txt', 'LaporanLabaRugiController@store');
        // rincian liabilitas segera - form 10
        Route::get('rincian-liabilitas-segera', 'RincianLiabilitasSegeraController@index');
        Route::post('simpan-rincian-liabilitas-segera', 'RincianLiabilitasSegeraController@store');
        // rincian liabiltas lainnya - form 14
        Route::get('rincian-liabilitas-lainnya', 'RincianLiabilitasLainnyaController@index');
        Route::post('simpan-rincian-liabilitas-lainnya', 'RincianLiabilitasLainnyaController@store');
        // Deviasi
        // jawaban pertanyaan bpr
        Route::get('jawaban-pertanyaan-bpr/{sandi_bpr}', 'JawabanPertanyaanBprController@index');
        Route::get('jawaban-pertanyaan-bpr-create/{sandi_bpr}', 'JawabanPertanyaanBprController@create');
        Route::get('jawaban-pertanyaan-bpr-edit/{sandi_bpr}/{review_date_month}/{review_date_year}', 'JawabanPertanyaanBprController@edit');
        Route::post('jawaban-pertanyaan-bpr-store', 'JawabanPertanyaanBprController@store');
        Route::post('jawaban-pertanyaan-bpr-update', 'JawabanPertanyaanBprController@update');
        Route::post('jawaban-pertanyaan-bpr-delete', 'JawabanPertanyaanBprController@destroy');
    });

    Route::post('master-data-bpr-update', 'MasterDataBprController@update');
    Route::get('edit-manajemen', 'MasterDataBprController@editManajemen')->name('edit-manajemen');
    Route::post('/update-manajemen', 'MasterDataBprController@updateManajemen')->name('update-manajemen');
    Route::post('hapus-list-bpr', 'MasterDataBprController@destroy');
    
    // Histori Ratio
    Route::get('histori-ratio/{sandi_bpr}', 'HistoriRatioController@index');
    Route::post('cari-histori-ratio', 'HistoriRatioController@index');

    // Tingkat Kesehatan Bank
    Route::get('tingkat-kesehatan-bank/{sandi_bpr}', 'TingkatKesehatanBankController@index');
    Route::post('tingkat-kesehatan-bank-search', 'TingkatKesehatanBankController@index');
    // NAK
    Route::get('nak/{id}', 'NakController@index');
    Route::post('update-main-page', 'NakController@updateMainPage')->name('update-main-page');

    Route::get('nak-informasi-debitur/{id}', 'NakInformasiDebiturController@informasiDebitur');
    Route::post('update-informasi-debitur', 'NakInformasiDebiturController@updateInformasiDebitur');

    Route::get('nak-permohonan-debitur/{id}', 'NakController@permohonanDebitur');
    Route::post('update-permohonan-debitur', 'NakController@updatePermohonanDebitur');

    Route::get('nak-fasilitas-debitur/{id}', 'FasilitasDebiturController@fasilitasDebitur');
    Route::post('simpan-fasilitas-debitur', 'FasilitasDebiturController@storeFasilitasDebitur');

    Route::get('nak-informasi-group/{id}', 'NakController@informasiGroupUsaha');
    Route::post('update-informasi-group', 'NakController@updateInformasiGroupUsaha');

    Route::get('nak-financial-highlight/{id}', 'NakFinancialHiglightController@financialHighlight');
    Route::post('update-nak-financial-highlight', 'NakFinancialHiglightController@updateFinancialHighlight');

    Route::get('nak-kondisi-keuangan-debitur/{id}', 'NakController@kondisiKeuanganDebitur');
    Route::post('save-kondisi-keuangan-debitur', 'NakController@saveKondisiKeuanganDebitur');

    Route::get('nak-prospek-dan-kinerja-usaha/{id}', 'NakController@prospekDanKinerjaUsaha');
    Route::post('save-prospek-dan-kinerja-usaha', 'NakController@saveProspekDanKinerjaUsaha');

    Route::get('nak-kegiatan-usaha/{id}', 'NakController@kegiatanUsaha');
    Route::post('save-kegiatan-usaha', 'NakController@saveKegiatanUsaha');

    Route::get('nak-manajemen-perusahaan/{id}', 'ManajemenPerusahaanController@index');
    Route::post('save-manajemen-perusahaan', 'ManajemenPerusahaanController@store');

    Route::get('nak-pemasaran/{id}', 'NakController@pemasaran');
    Route::post('save-pemasaran', 'NakController@savePemasaran');

    Route::get('nak-perhitungan-kredit/{id}', 'NakController@perhitunganKebutuhanKredit');
    Route::post('save-perhitungan-kredit', 'NakController@savePerhitunganKebutuhanKredit');

    Route::get('nak-legalitas/{id}', 'NakController@legalitas');
    Route::post('save-legalitas', 'NakController@saveLegalitas');

    Route::get('nak-resume-hasil-observasi/{id}', 'NakController@resumeHasilObservasi');
    Route::post('save-resume-hasil-observasi', 'NakController@saveResumeHasilObservasi');

    Route::get('nak-agunan/{id}', 'NakAgunanController@agunan');
    Route::post('save-agunan', 'NakAgunanController@saveAgunan');

    Route::get('nak-kepatuhan/{id}', 'NakController@kepatuhan');
    Route::post('save-kepatuhan', 'NakController@saveKepatuhan');

    Route::get('nak-usulan-kredit/{id}', 'NakController@usulanKredit');
    Route::post('save-usulan-kredit', 'NakController@saveUsulanKredit');

    Route::get('nak-disclaimer/{id}', 'NakController@disclaimer');
    Route::post('save-disclaimer', 'NakController@saveDisclaimer');

    Route::get('nak-deviasi/{id}', 'NakDeviasiController@deviasi');
    Route::get('edit-deviasi/{id}/{nak_id}', 'NakDeviasiController@editDeviasi');
    Route::post('save-deviasi', 'NakDeviasiController@saveDeviasi');
    Route::post('update-deviasi', 'NakDeviasiController@updateDeviasi');
    Route::post('destroy-deviasi', 'NakDeviasiController@destroyDeviasi');

    // NAK PROSES
    Route::get('nak-proses-bussiness-unit/{id}', 'NakController@bussinessUnitProses');
    Route::post('nak-proses-bussiness-unit', 'NakController@prosesBussinessUnit');

    Route::get('nak-proses-corporate-legal-officer/{id}', 'NakController@corporateLegalOfficerProses');
    Route::post('nak-proses-corporate-legal-officer', 'NakController@prosesCorporateLegalOfficer');

    Route::get('nak-proses-credit-administration/{id}', 'NakController@creditAdministrationProses');
    Route::post('nak-proses-credit-administration', 'NakController@prosesCreditAdministration');

    Route::get('nak-proses-compliance/{id}', 'NakController@complianceProses');
    Route::post('nak-proses-compliance', 'NakController@prosesCompliance');

    Route::get('nak-credit-risk-reviewer/{id}', 'NakController@crrdProses');
    Route::post('nak-credit-risk-reviewer', 'NakController@prosesCrrd');
    // Print NAK
    Route::get('nak-print/{id}', 'NakPrintController@index');
 
    Route::group(['middleware' => ['user_proses']], function () {
        Route::get('proses-workflow', 'ProsesWorkFlowController@index');
        Route::get('proses-workflow/{id}', 'ProsesWorkFlowController@show');
        Route::get('informasi-workflow/{id}', 'ProsesWorkFlowController@detail');
        Route::post('proses-workflow', 'ProsesWorkFlowController@store');  
    });

    // Opini
    Route::get('cad-opini/{id}', 'OpiniController@caOpini');
    Route::get('compliance-opini/{id}', 'OpiniController@complianceOpini');
    Route::get('legal-opini/{id}', 'OpiniController@legalOpini');
    Route::get('edit-legal-opini/{id}', 'OpiniController@editLegalOpini');
    Route::post('lembar-opini-legal', 'OpiniController@opiniLegal');
    Route::post('lembar-opini-compliance', 'OpiniController@opiniCompliance');
    Route::post('lembar-opini-cad', 'OpiniController@opiniCad');

    // Print Dokumen
    Route::get('print-opini-credit-administration/{id}', 'OpiniPrintController@ca');
    Route::get('print-opini-legal/{id}', 'OpiniPrintController@legal');
    Route::get('print-opini-compliance/{id}', 'OpiniPrintController@compliance');

    // ARR
    Route::get('arr/{id}', 'ArrController@index');
    Route::get('arr-rekomendasi/{id}', 'ArrController@rekomendasi');
    Route::post('arr-rekomendasi', 'ArrController@storeRekomendasi');
    Route::get('informasi-debitur-dan-group/{id}', 'ArrController@informasiDebiturDanGroup');
    Route::post('store-loan-applicant', 'ArrController@storeLoanApplicant');
    Route::get('key-risk-issue/{id}', 'ArrController@keyRiskIssue');
    Route::post('store-key-risk-issue', 'ArrController@storeKeyRiskIssue');
    Route::post('tambah-pertanyaan-key-risk-issue', 'ArrController@tambahKeyRiskIssue');
    Route::get('covenant-checklist/{id}', 'ArrController@covenantCheckList');
    Route::post('store-covenant-checklist', 'ArrController@storeCovenantCheckList');
    Route::get('catatan-penting-lainnya/{id}', 'ArrController@catatanPentingLainnya');
    Route::post('store-catatan-penting-lainnya', 'ArrController@storeCatatanPentingLainnya');
    Route::get('arr-financial-higlight/{id}', 'ArrController@financialHiglight');
    Route::post('store-arr-financial-higlight', 'ArrController@storeFinancialHighlight');
    Route::get('informasi-fasilitas-kredit-debitur-dan-group/{id}', 'ArrController@informasiFasilitasKreditDebiturGroup');
    Route::get('arr-print/{id}', 'ArrController@print');
    // Document
    Route::get('upload-documents-bpr/{sandi_bpr}', 'DocumentBprController@index'); //documents
    Route::get('preview-document/{file_name}/{status}', 'DocumentBprController@show');
    Route::post('save-upload-document', 'DocumentBprController@store');
    
    // Short NAK
    Route::get('short-nak/{id}', 'ShortNakController@index');
    Route::get('short-nak-informasi-debitur/{id}', 'ShortNakController@informasiDebitur');
    Route::get('short-nak-latar-belakang/{id}', 'ShortNakController@latarBelakang');
    Route::get('short-nak-pembahasan/{id}', 'ShortNakController@pembahasan');
    Route::get('short-nak-usulan/{id}', 'ShortNakController@usulan');
    Route::get('short-nak-disclaimer/{id}', 'ShortNakController@disclaimer');
    Route::post('update-loan-applicant', 'ShortNakController@updateLoanApplicant');
    Route::post('update-short-nak', 'ShortNakController@update');
    Route::get('short-nak-print/{id}', 'ShortNakController@print');
    // Lembar Keputusan Kredit
    Route::get('lembar-keputusan-kredit-header/{id}', 'LembarKeputusanKreditController@index');
    Route::post('lembar-keputusan-kredit-header', 'LembarKeputusanKreditController@storeHeader');
    Route::get('lembar-keputusan-kredit-fasilitas-kredit/{id}', 'LembarKeputusanKreditController@fasilitasKredit');
    Route::get('lembar-keputusan-kredit-agunan-fasilitas-kredit/{id}', 'LembarKeputusanKreditController@agunanFasilitasKredit');
    Route::get('syarat-dan-kondisi-penyediaan-fasilitas/{id}', 'LembarKeputusanKreditController@syaratKondisiFasilitasKredit');
    Route::post('store-syarat-dan-kondisi-penyediaan-fasilitas', 'LembarKeputusanKreditController@storeSyaratKondisiFasilitasKredit');
    Route::get('persetujuan-khusus-dan-deviasi/{id}', 'LembarKeputusanKreditController@persetujuanKhususDeviasi');
    Route::post('persetujuan-khusus-dan-deviasi', 'LembarKeputusanKreditController@storePersetujuanKhususDeviasi');
    Route::get('usulan-dan-persetujuan-kredit/{id}', 'LembarKeputusanKreditController@usulanPersetujuanKredit');
    Route::post('usulan-dan-persetujuan-kredit', 'LembarKeputusanKreditController@storeUsulanPersetujuanKredit');
    Route::get('lembar-keputusan-kredit-print/{id}', 'LembarKeputusanKreditController@print');
    // Fiducia
    Route::get('fiducia/{id}', 'FiduciaController@index');
    Route::post('store-fiducia', 'FiduciaController@store');

    // Laporan Bulanan
    Route::get('laporan-keuangan-bulanan/{sandi_bpr}', 'LaporanNeracaBulananController@index');
    Route::post('simpan-laporan-neraca', 'LaporanNeracaBulananController@store');
    Route::get('cari-laporan-keuangan-bulanan/{sandi_bpr}', 'LaporanNeracaBulananController@search');
    Route::post('search-laporan-keuangan-bulanan', 'LaporanNeracaBulananController@search');
    Route::post('update-laporan-keuangan-bulanan', 'LaporanNeracaBulananController@update');

    /* Laporan Laba Rugi */
    Route::get('laporan-bulanan-laba-rugi/{sandi_bpr}', 'LaporanLabaRugiBulananController@index');
    Route::post('simpan-laporan-laba-rugi', 'LaporanLabaRugiBulananController@store');
    Route::get('cari-laporan-laba-rugi/{sandi_bpr}', 'LaporanLabaRugiBulananController@search');
    Route::post('search-laporan-laba-rugi', 'LaporanLabaRugiBulananController@search');
    Route::post('update-laporan-laba-rugi', 'LaporanLabaRugiBulananController@update');
  
    // rekening administratif
    Route::get('rekening-administratif/{sandi_bpr}', 'RekeningAdministratifBulananController@index');
    Route::post('rekening-administratif-store', 'RekeningAdministratifBulananController@store');
    Route::get('cari-rekening-administratif/{sandi_bpr}', 'RekeningAdministratifBulananController@cari');
    Route::post('search-rekening-administratif', 'RekeningAdministratifBulananController@cari');
    Route::post('update-rekening-administratif', 'RekeningAdministratifBulananController@update');
  
    // input profil
    Route::get('input-profil/{sandi_bpr}', 'InputProfilBulananController@index');
    Route::post('store-input-profil', 'InputProfilBulananController@store');
    Route::get('cari-input-profil/{sandi_bpr}', 'InputProfilBulananController@cari');
    Route::post('search-input-profil', 'InputProfilBulananController@cari');
    Route::post('update-input-profil', 'InputProfilBulananController@update');

    // Input financial Highlight
    Route::get('input-financial-highlight/{sandi_bpr}', 'LaporanKeuanganBulananController@financialHiglight');
    Route::post('cari-financial-highlight', 'LaporanKeuanganBulananController@cari');
    Route::post('store-input-financial-highlight', 'LaporanKeuanganBulananController@store');
    Route::get('edit-financial-highlight/{sandi_bpr}', 'LaporanKeuanganBulananController@edit');
    Route::get('aksi-financial-highlight/{sandi_bpr}', 'LaporanKeuanganBulananController@edit');
    Route::post('aksi-financial-highlight', 'LaporanKeuanganBulananController@edit');
    Route::post('update-financial-highlight', 'LaporanKeuanganBulananController@update');

    // PPAP
    Route::get('ppap/{sandi_bpr}', 'SpreadSheetController@ppap');
    Route::post('cari-ppap', 'SpreadSheetController@ppap');

    Route::get('atmr/{sandi_bpr}', 'AtmrController@index');
    Route::post('cari-atmr', 'AtmrController@show');
    Route::post('store-atmr', 'AtmrController@store');

    Route::get('kpmm/{sandi_bpr}', 'KpmmController@index');
    Route::post('cari-kpmm', 'KpmmController@index');

    Route::get('rasio/{sandi_bpr}', 'RasioController@index');
    Route::post('cari-rasio', 'RasioController@index');
    Route::post('simpan-rasio', 'RasioController@store');
    // kertas kerja screening calon debitur
    Route::get('kertas-kerja-screening-calon-debitur/{sandi_bpr}', 'KertasKerjaScreeningCaDebController@index');
    Route::get('print-kertas-kerja-screening-calon-debitur/{sandi_bpr}', 'KertasKerjaScreeningCaDebController@print');
    Route::post('kertas-kerja-screening-cadeb-store', 'KertasKerjaScreeningCaDebController@store');
        
    // Publikasi OJK
    Route::get('publikasi-ojk/{sandi_bpr}', 'FinancialHighlightController@index');
    // BMPK
    Route::get('edit-bmpk/{id}/{loan_applicant}', 'NakController@editBmpk');
    Route::post('update-bmpk', 'NakController@updateBmpk');
    Route::post('destroy-bmpk', 'NakController@destroyBmpk');
});
