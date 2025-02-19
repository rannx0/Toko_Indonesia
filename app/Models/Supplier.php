<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';

    protected $fillable = [
        'kode_supplier',
        'nama_supplier',
        'alamat_supplier',
        'kota_supplier',
        'telepon_supplier',
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
