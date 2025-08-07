<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = DB::table('kategoris')->get()->keyBy('nama_kategori');

         DB::table('alats')->insert([
            // Kantor Bmkg
            [
                'nama_alat' => 'Sangkar Meteorologi',
                'merek_tipe' => 'Kayu Lokal',
                'jumlah' => 1,
                'tahun_pemasangan' => 2004,
                'kategori_id' => $kategori['Peralatan Konvensional']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Thermometer BB/BK',
                'merek_tipe' => 'Scheneider',
                'jumlah' => 2,
                'tahun_pemasangan' => 2000,
                'kategori_id' => $kategori['Peralatan Konvensional']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Thermometer BB/BK',
                'merek_tipe' => 'F.Ketterer',
                'jumlah' => 2,
                'tahun_pemasangan' => 2011,
                'kategori_id' => $kategori['Peralatan Konvensional']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Thermometer Max./Min',
                'merek_tipe' => 'Scheneider',
                'jumlah' => 1,
                'tahun_pemasangan' => 1968,
                'kategori_id' => $kategori['Peralatan Konvensional']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Thermometer Max./Min',
                'merek_tipe' => 'Scheneider',
                'jumlah' => 1,
                'tahun_pemasangan' => 1994,
                'kategori_id' => $kategori['Peralatan Konvensional']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Thermometer Max./Min',
                'merek_tipe' => 'Scheneider',
                'jumlah' => 1,
                'tahun_pemasangan' => 2000,
                'kategori_id' => $kategori['Peralatan Konvensional']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
                        [
                'nama_alat' => 'Thermometer Max./Min',
                'merek_tipe' => 'F.Ketterer',
                'jumlah' => 1,
                'tahun_pemasangan' => 2011,
                'kategori_id' => $kategori['Peralatan Konvensional']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
                        [
                'nama_alat' => 'Barograph',
                'merek_tipe' => 'J.Richard',
                'jumlah' => 1,
                'tahun_pemasangan' => 1976,
                'kategori_id' => $kategori['Peralatan Konvensional']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
                        [
                'nama_alat' => 'Barometer Digital',
                'merek_tipe' => 'Vaisalla PTB 330',
                'jumlah' => 1,
                'tahun_pemasangan' => 2012,
                'kategori_id' => $kategori['Peralatan Konvensional']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
                        [
                'nama_alat' => 'Anemometer Digital',
                'merek_tipe' => 'RM.Young',
                'jumlah' => 1,
                'tahun_pemasangan' => 2018,
                'kategori_id' => $kategori['Peralatan Konvensional']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
                        [
                'nama_alat' => 'Cup Counter Anemometer',
                'merek_tipe' => 'DR.A.Muller/91 g',
                'jumlah' => 1,
                'tahun_pemasangan' => 2003,
                'kategori_id' => $kategori['Peralatan Konvensional']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
                        [
                'nama_alat' => 'Panci Penguapan',
                'merek_tipe' => 'Lokal',
                'jumlah' => 1,
                'tahun_pemasangan' => 1978,
                'kategori_id' => $kategori['Peralatan Konvensional']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Temperature & Humidity Sensor',
                'merek_tipe' => 'Vaisala/HMP155',
                'jumlah' => 1,
                'tahun_pemasangan' => 2018,
                'kategori_id' => $kategori['AWS Digital']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Barometer Sensor',
                'merek_tipe' => 'Vaisala/PTB330',
                'jumlah' => 2,
                'tahun_pemasangan' => 2018,
                'kategori_id' => $kategori['AWS Digital']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Water Thermometer',
                'merek_tipe' => 'Vaisala/QMT110',
                'jumlah' => 2,
                'tahun_pemasangan' => 2018,
                'kategori_id' => $kategori['AWS Digital']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Wind Speed Evaporation',
                'merek_tipe' => 'Vaisala/WAA151',
                'jumlah' => 1,
                'tahun_pemasangan' => 2018,
                'kategori_id' => $kategori['AWS Digital']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Ultrasonic Sensor',
                'merek_tipe' => 'Vaisala/WMT703',
                'jumlah' => 1,
                'tahun_pemasangan' => 2018,
                'kategori_id' => $kategori['AWS Digital']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Tipping Bucket',
                'merek_tipe' => 'Vaisala/RG13N2NN',
                'jumlah' => 1,
                'tahun_pemasangan' => 2018,
                'kategori_id' => $kategori['AWS Digital']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Water Level',
                'merek_tipe' => 'Thies Clima/6143210073',
                'jumlah' => 1,
                'tahun_pemasangan' => 2018,
                'kategori_id' => $kategori['AWS Digital']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Lightning Detector',
                'merek_tipe' => '-',
                'jumlah' => 1,
                'tahun_pemasangan' => 2018,
                'kategori_id' => $kategori['AWS Digital']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'Data Logger',
                'merek_tipe' => 'Campbel Scientific/CR3000',
                'jumlah' => 1,
                'tahun_pemasangan' => 2018,
                'kategori_id' => $kategori['AWS Digital']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'PC Server',
                'merek_tipe' => '-',
                'jumlah' => 1,
                'tahun_pemasangan' => 2018,
                'kategori_id' => $kategori['AWS Digital']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'PC Client',
                'merek_tipe' => '-',
                'jumlah' => 1,
                'tahun_pemasangan' => 2018,
                'kategori_id' => $kategori['AWS Digital']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_alat' => 'UIPS',
                'merek_tipe' => '-',
                'jumlah' => 1,
                'tahun_pemasangan' => 2018,
                'kategori_id' => $kategori['AWS Digital']->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
