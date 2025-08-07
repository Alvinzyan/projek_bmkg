<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('lokasis')->insert([
            [
                'nama_lokasi' => 'Kantor Meteorologi Banyuwangi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lokasi' => 'Pos Meteorologi Bandara Banyuwangi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lokasi' => 'Pos Meteorologi Pelabuhan Ketapang Banyuwangi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lokasi' => 'Pos Meteorologi Bandara Notohadinegoro Jember',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
