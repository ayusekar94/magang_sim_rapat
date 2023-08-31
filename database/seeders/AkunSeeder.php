<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tambah 3 akun (3 Divisi)
        DB::table('akuns')->insert([
            [
                'username' => 'divti',
                'password' => bcrypt('divti'),
                'divisi_id' => '4' 
            ],
            [
                'username' => 'divtqa',
                'password' => bcrypt('divtqa'),
                'divisi_id' => '2' 
            ],
            [
                'username' => 'divqa',
                'password' => bcrypt('divqa'),
                'divisi_id' => '3' 
            ],   
            [
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'divisi_id' => '1' 
            ],    
        ]);
    }
}
