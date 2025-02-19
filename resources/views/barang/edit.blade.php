@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Edit Barang</h6>
                    </div>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('barang.update', $barang->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="input-group input-group-static mb-4">
                            <label>ID barang</label>
                            <input type="text" class="form-control" value="{{ old('kode_barang', $barang->kode_barang) }}" name="kode_barang" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Nama barang</label>
                            <input type="text" class="form-control" value="{{ old('nama_barang', $barang->nama_barang) }}" name="nama_barang" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label for="Kategoribarang" class="ms-0">Kategori</label>
                            <select class="form-control" id="Kategoribarang" name="kategori_barang">
                                <option selected value="{{ old('kategori_barang', $barang->kategori_barang) }}">{{ $barang->kategori_barang }}</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Kosmetik">Kosmetik</option>
                                <option value="Aksesoris">Aksesoris</option>
                            </select>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Harga</label>
                            <input type="number" class="form-control" value="{{ old('harga_barang', $barang->harga_barang) }}" name="harga_barang" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Stok</label>
                            <input type="number" class="form-control" value="{{ old('stok_barang', $barang->stok_barang) }}" name="stok_barang" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label for="SupplierBarang" class="ms-0">Supplier</label>
                            <select class="form-control" id="SupplierBarang" value="{{ old('suppliers_id', $barang->suppliers_id) }}" name="suppliers_id">
                                <option value="{{ old('suppliers_id', $barang->suppliers_id) }}">{{ $barang->suppliers->nama_supplier }}</option>
                                @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->nama_supplier }}</option>
                                @endforeach
                            </select>
                        </div>
                        <a href="{{ route('barang.index') }}" class="btn btn-lg bg-gradient-secondary">Kembali</a>
                        <button type="submit" class="btn btn-lg bg-gradient-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
