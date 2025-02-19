<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'kode_supplier' => 'SP01',
                'nama_supplier' => 'PD Idola Snack',
                'alamat_supplier' => 'Jl. Kud-Sukadami',
                'kota_supplier' => 'Bekasi',
                'telepon_supplier' => '085693725494',
            ],
            [
                'kode_supplier' => 'SPO2',
                'nama_supplier' => 'Herborist',
                'alamat_supplier' => 'JI Daan Mogot Km.11',
                'kota_supplier' => 'Jakarta',
                'telepon_supplier' => '021-54368111',
            ],
            [
                'kode_supplier' => 'SPO3',
                'nama_supplier' => 'Indocraft',
                'alamat_supplier' => 'Jl. Raya Mas No. 47',
                'kota_supplier' => 'Bali',
                'telepon_supplier' => '0361-973091',
            ],
            [
                'kode_supplier' => 'SP04',
                'nama_supplier' => 'Onecraft',
                'alamat_supplier' => 'JI. Soreang Indah I-12',
                'kota_supplier' => 'Bandung',
                'telepon_supplier' => '022-7298644',
            ],
        ]);

    }
}
