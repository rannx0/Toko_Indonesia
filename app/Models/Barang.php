<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'kategori_barang',
        'harga_barang',
        'stok_barang',
        'suppliers_id',
    ];


    public function suppliers()
    {
        return $this->belongsTo(Supplier::class);
    }
}
