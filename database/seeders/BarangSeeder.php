<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'BR1001',
                'kategori_barang' => 'Makanan',
                'nama_barang' => 'Krupuk Ikan',
                'harga_barang' => 25000,
                'stok_barang' => 60,
                'suppliers_id' => 1,
            ],
            [
                'kode_barang' => 'BR1002',
                'kategori_barang' => 'Makanan',
                'nama_barang' => 'Keripik Singkong',
                'harga_barang' => 15000,
                'stok_barang' => 60,
                'suppliers_id' => 1,
            ],
            [
                'kode_barang' => 'BR1003',
                'kategori_barang' => 'Makanan',
                'nama_barang' => 'Keripik Kentang',
                'harga_barang' => 40000,
                'stok_barang' => 25,
                'suppliers_id' => 1,
            ],
            [
                'kode_barang' => 'BR2001',
                'kategori_barang' => 'Kosmetik',
                'nama_barang' => 'Sabun Herbal',
                'harga_barang' => 10000,
                'stok_barang' => 40,
                'suppliers_id' => 2,
            ],
            [
                'kode_barang' => 'BR2002',
                'kategori_barang' => 'Kosmetik',
                'nama_barang' => 'Masker Spirulina',
                'harga_barang' => 17000,
                'stok_barang' => 40,
                'suppliers_id' => 2,
            ],
            [
                'kode_barang' => 'BR2003',
                'kategori_barang' => 'Kosmetik',
                'nama_barang' => 'Lulur Bengkoang',
                'harga_barang' => 30000,
                'stok_barang' => 35,
                'suppliers_id' => 2,
            ],
            [
                'kode_barang' => 'BR3001',
                'kategori_barang' => 'Aksesoris',
                'nama_barang' => 'Jam Tangan Kayu Pria',
                'harga_barang' => 320000,
                'stok_barang' => 15,
                'suppliers_id' => 3,
            ],
            [
                'kode_barang' => 'BR3002',
                'kategori_barang' => 'Aksesoris',
                'nama_barang' => 'Jam Tangan Kayu Wanita',
                'harga_barang' => 270000,
                'stok_barang' => 20,
                'suppliers_id' => 3,
            ],
            [
                'kode_barang' => 'BR3003',
                'kategori_barang' => 'Aksesoris',
                'nama_barang' => 'Kalung Etnik',
                'harga_barang' => 175000,
                'stok_barang' => 10,
                'suppliers_id' => 3,
            ],
            [
                'kode_barang' => 'BR3004',
                'kategori_barang' => 'Aksesoris',
                'nama_barang' => 'Kalung Etnik',
                'harga_barang' => 155000,
                'stok_barang' => 12,
                'suppliers_id' => 4,
            ],
        ]);
    }
}
