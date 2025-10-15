<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Tambahkan baris ini

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kode ini untuk mengisi data ke tabel 'publishers'
        DB::table('publishers')->insert([
            ['name' => 'Gramedia'],
            ['name' => 'Mizan'],
        ]);
    }
}
