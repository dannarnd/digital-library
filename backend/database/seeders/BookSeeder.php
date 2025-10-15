<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Perbaikan #2: Tambahkan baris ini

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Perbaikan #1: Isi data ke tabel 'books', bukan 'members'
        DB::table('books')->insert([
            ['title' => 'Bumi', 'author_id' => 1, 'publisher_id' => 1],
            ['title' => 'Laskar Pelangi', 'author_id' => 2, 'publisher_id' => 2],
        ]);
    }
}
