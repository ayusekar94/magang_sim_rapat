<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tambah 3 Divisi
        DB::table('divisis')->insert([
            [
                'nama_divisi' => 'Administrator',
            ],
            [
                'nama_divisi' => 'Divisi TQA',
            ],
            [
                'nama_divisi' => 'Divisi Quality Assurance',
            ], 
            [
                'nama_divisi' => 'Divisi Teknologi Informasi',
            ],       
        ]);
    }
}
