<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Tambahkan baris ini

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kode ini untuk mengisi data ke tabel 'authors'
        DB::table('authors')->insert([
            ['name' => 'Tere Liye'],
            ['name' => 'Andrea Hirata'],
        ]);
    }
}
