<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        category::create(['kategori' => 'IPA']);
        category::create(['kategori' => 'IPS']);
        category::create(['kategori' => 'Matematika']);
        category::create(['kategori' => 'Bahasa indonesia']);
        category::create(['kategori' => 'Bahasa inggris']);
        category::create(['kategori' => 'Informatika']);
        category::create(['kategori' => 'PABP']);
    }
}
