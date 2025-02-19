@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Tambah supplier</h6>
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
                    <form action="{{ route('supplier.store') }}" method="POST">
                        @csrf
                        <div class="input-group input-group-static mb-4">
                            <label>ID </label>
                            <input type="text" class="form-control" name="kode_supplier" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Nama </label>
                            <input type="text" class="form-control" name="nama_supplier" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Alamat </label>
                            <input type="text" class="form-control" name="alamat_supplier" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Kota </label>
                            <input type="text" class="form-control" name="kota_supplier" required>
                        </div>
                        <div class="input-group input-group-static mb-4">
                            <label>Telepon</label>
                            <input type="number" class="form-control" name="telepon_supplier" required>
                        </div>

                        <a href="{{ route('supplier.index') }}" class="btn btn-lg bg-gradient-secondary">Kembali</a>
                        <button type="submit" class="btn btn-lg bg-gradient-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
