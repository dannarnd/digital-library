<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Pastikan ini di-import
use Carbon\Carbon; // Helper untuk mengelola tanggal

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loans')->insert([
            [
                'member_id' => 1, // ID 'Ali'
                'book_id' => 2,   // ID 'Laskar Pelangi'
                'loan_date' => Carbon::now()->subDays(10), // Pinjam 10 hari lalu
                'return_date' => null, // Belum dikembalikan
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'member_id' => 2, // ID 'Budi'
                'book_id' => 1,   // ID 'Bumi'
                'loan_date' => Carbon::now()->subDays(5), // Pinjam 5 hari lalu
                'return_date' => Carbon::now()->subDays(1), // Dikembalikan kemarin
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
