@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="text-white text-capitalize ps-3">Daftar Suplier</h4>
                            <a href="{{ route('supplier.create') }}" class="btn btn-primary p-2 mx-4">+ Tambah Supplier</a>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible text-white fade show mt-2" role="alert">
                            <span class="alert-icon align-middle">
                                <span class="material-symbols-rounded text-md">
                                    thumb_up_off_alt
                                </span>
                            </span>
                            <span class="alert-text"><strong>Success!</strong>{{ $message }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>

                <div class="card-body px-0 pb-2">
                    <div class="table-bordered p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Id
                                        Supplier
                                    </th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">
                                        Nama</th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">
                                        Alamat</th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">
                                        Kota</th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">
                                        Telepon</th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suppliers as $supplier)
                                    <tr>
                                        <td class="px-4 py-1"><p class="text-xs px-3 py-1 mb-0">{{ $supplier->kode_supplier }}</p></td>
                                        <td><p class="text-xs px-3 py-1 mb-0">{{ $supplier->nama_supplier }}</p></td>
                                        <td><p class="text-xs px-3 py-1 mb-0">{{ $supplier->alamat_supplier }}</p></td>
                                        <td><p class="text-xs px-3 py-1 mb-0">{{ $supplier->kota_supplier }}</p></td>
                                        <td><p class="text-xs px-3 py-1 mb-0">{{ $supplier->telepon_supplier }}</p></td>
                                        <td>
                                            <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary"
                                                    href="{{ route('supplier.edit', $supplier->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
