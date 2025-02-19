@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Tambah barang</h6>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error!</strong> <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body p-4">
                    <form action="{{ route('barang.store') }}" method="POST">
                        @csrf
                        <div class="input-group input-group-static mb-4">
                            <label>ID barang</label>
                            <input type="text" class="form-control" name="kode_barang" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Nama barang</label>
                            <input type="text" class="form-control" name="nama_barang" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label for="Kategoribarang" class="ms-0">Kategori</label>
                            <select class="form-control" id="Kategoribarang" name="kategori_barang">
                                <option disabled selected>Pilih Kategori</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Kosmetik">Kosmetik</option>
                                <option value="Aksesoris">Aksesoris</option>
                            </select>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga_barang" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Stok</label>
                            <input type="number" class="form-control" name="stok_barang" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label for="SupplierBarang" class="ms-0">Supplier</label>
                            <select class="form-control" id="SupplierBarang" name="suppliers_id">
                                <option disabled selected>Pilih Suplier</option>
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
