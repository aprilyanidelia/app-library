<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username'=>'admin',
            'password'=>'admin123',
            'email'=>'admin123@gmail.com',
            'nm_lengkap'=>'adminperpus',
            'alamat'=>'bandung',
            'role'=>'admin'
        ]);

        User::create([
            'username'=>'delia',
            'password'=>'deprilni',
            'email'=>'delia@gmail.com',
            'nm_lengkap'=>'delia aprilyani',
            'alamat'=>'bandung',
            'role'=>'user'
        ]);

        User::create([
            'username'=>'lia',
            'password'=>'lia123',
            'email'=>'lia@gmail.com',
            'nm_lengkap'=>'lia gatau',
            'alamat'=>'bandung',
            'role'=>'petugas'
        ]);
    }
}
