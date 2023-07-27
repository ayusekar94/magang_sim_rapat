<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karyawans')->insert([
            [ // ADMIN
            'NIP' => '190282637182',
            'Nama' => 'Ony Novianti',
            'password' => bcrypt('12345'),
            'divisi' => 'Teknologi Informasi',
            'jabatan' => 'Kepala Devisi',
            'departemen' => 'Tata Kelola',
            'email' => 'onynovii@gmail.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ],
            [
            'NIP' => '182930485766',
            'Nama' => 'Ahmad Abdullah',
            'password' => bcrypt('abc123'),
            'divisi' => 'Sumber Daya Manusia',
            'jabatan' => 'Manager',
            'departemen' => 'SDM',
            'email' => 'ahmad.abdullah@example.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]            
        ]);
    }
}
