<?php
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->command->line('Seeder data User');

        $superadmin = User::create([
            'name'=>'superadmin',
            'email'=>'superadmin@kreditek.com',
            'password'=>bcrypt('12345678'),
            'jabatan'=>'Superadmin'
        ]);
    }
}
