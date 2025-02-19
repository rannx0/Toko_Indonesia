<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        $suppliers = Supplier::all();

        return view('welcome', compact('barangs', 'suppliers'));
    }

    public function search()
    {
        $keyword = request('keyword');
        $barangs = Barang::where('nama_barang', 'like', '%' . $keyword . '%')
                    ->orWhere('stok_barang', 'like', '%' . $keyword . '%')
                    ->orWhere('kategori_barang', 'like', '%' . $keyword . '%')
                    ->orWhere('harga_barang', 'like', '%' . $keyword . '%')
                    ->orWhereHas('suppliers', function ($query) use ($keyword) {
                        $query->where('nama_supplier', 'like', '%' . $keyword . '%');
                    })
                    ->get();

        return view('welcome', compact('barangs'));
    }
}
