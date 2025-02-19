@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Edit Supplier</h6>
                    </div>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('supplier.update', $supplier->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="input-group input-group-static mb-4">
                            <label>ID supplier</label>
                            <input type="text" class="form-control" value="{{ old('kode_supplier',$supplier->kode_supplier) }}" name="kode_supplier" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Nama supplier</label>
                            <input type="text" class="form-control" value="{{ old('nama_supplier',$supplier->nama_supplier) }}" name="nama_supplier" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Alamat supplier</label>
                            <input type="text" class="form-control" value="{{ old('alamat_supplier',$supplier->alamat_supplier) }}" name="alamat_supplier" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Kota supplier</label>
                            <input type="text" class="form-control" value="{{ old('kota_supplier',$supplier->kota_supplier) }}" name="kota_supplier" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Telepon Penebit</label>
                            <input type="tel" class="form-control" value="{{ old('telepon_supplier',$supplier->telepon_supplier) }}" name="telepon_supplier" required>
                        </div>

                        <a href="{{ route('supplier.index') }}" class="btn btn-lg bg-gradient-secondary">Kembali</a>
                        <button type="submit" class="btn btn-lg bg-gradient-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
