<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::insert([
            ['kode' => 1, 'kategori' => 'Residensial', 'keterangan' => 'Maks 2 tingkat', 'golongan_tarif' => 'R-1/TR', 'batas_daya' => '900', 'rp_per_kwh' => '1352.00', 'luas_atap' => '100%'],
            ['kode' => 2, 'kategori' => 'Residensial', 'keterangan' => 'Maks 2 tingkat', 'golongan_tarif' => 'R-1/TR', 'batas_daya' => '1300', 'rp_per_kwh' => '1444.70', 'luas_atap' => '100%'],
            ['kode' => 3, 'kategori' => 'Residensial', 'keterangan' => 'Maks 2 tingkat', 'golongan_tarif' => 'R-1/TR', 'batas_daya' => '2200', 'rp_per_kwh' => '1444.70', 'luas_atap' => '100%'],
            ['kode' => 4, 'kategori' => 'Residensial', 'keterangan' => 'Maks 2 tingkat', 'golongan_tarif' => 'R-2/TR', 'batas_daya' => '5500', 'rp_per_kwh' => '1699.53', 'luas_atap' => '100%'],
            ['kode' => 5, 'kategori' => 'Residensial', 'keterangan' => 'Maks 2 tingkat', 'golongan_tarif' => 'R-3/TR', 'batas_daya' => '>6600', 'rp_per_kwh' => '1699.53', 'luas_atap' => '100%'],
            ['kode' => 6, 'kategori' => 'Bisnis', 'keterangan' => 'Maks 2 tingkat', 'golongan_tarif' => 'B-2/TR', 'batas_daya' => '6600-200KVA', 'rp_per_kwh' => '1444.70', 'luas_atap' => '85%'],
            ['kode' => 10, 'kategori' => 'Pemerintah', 'keterangan' => 'Maks 2 tingkat', 'golongan_tarif' => 'R-1/TR', 'batas_daya' => '6600-200KVA', 'rp_per_kwh' => '1699.53', 'luas_atap' => '100%'],
            ['kode' => 12, 'kategori' => 'Pemerintah', 'keterangan' => 'Maks 2 tingkat', 'golongan_tarif' => 'R-3/TR', 'batas_daya' => '', 'rp_per_kwh' => '1699.53', 'luas_atap' => '100%'],
            ['kode' => 60, 'kategori' => 'Bisnis', 'keterangan' => '> 2 tingkat', 'golongan_tarif' => 'B-2/TR', 'batas_daya' => '6600-200KVA', 'rp_per_kwh' => '1444.70', 'luas_atap' => '40%'],
            ['kode' => 100, 'kategori' => 'Pemerintah', 'keterangan' => '> 2 tingkat', 'golongan_tarif' => 'P-1/TR', 'batas_daya' => '6600 -200KVA', 'rp_per_kwh' => '1699.53', 'luas_atap' => '80%'],
            ['kode' => 120, 'kategori' => 'Pemerintah', 'keterangan' => '> 2 tingkat', 'golongan_tarif' => 'P-3/TR', 'batas_daya' => '', 'rp_per_kwh' => '1699.53', 'luas_atap' => '80%'],
        ]);
    }
}
