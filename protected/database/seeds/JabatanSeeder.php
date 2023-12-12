<?php
use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jabatan::insert([
            [
                'nama_jabatan'=>'Account Officer'
            ],
            [
                'nama_jabatan'=>'Account Officer Departemen Head'
            ],
            [
                'jabatan'=>'Credit Analyst Officer',
            ],
            [
                'nama_jabatan'=>'Credit Analyst Head',
            ],
            [
                'nama_jabatan'=>'Business Division Head',
            ],
            [
                'nama_jabatan'=>'Credit Comittee'
            ],
            [
                'nama_jabatan'=>'Legal'
            ],
            [
                'nama_jabatan'=>'Loan Admin'
            ]
        ]);
    }
}
