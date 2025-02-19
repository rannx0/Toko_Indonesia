@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="text-white text-capitalize ps-3">Daftar Barang</h6>
                            <a href="{{ route('barang.create') }}" class="btn btn-primary p-2 mx-4">+ Tambah Barang</a>
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

                <div class="card-body px-0">
                    <div class="table-bordered p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-xxs font-weight-bolder">Id
                                        barang
                                    </th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">Kategori
                                    </th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">
                                        Nama barang</th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">
                                        Harga</th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">
                                        Stok</th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">
                                        Suplier</th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangs as $barang)
                                    <tr>
                                        <td class="px-4 py-1"><p class="text-xs">{{ $barang->kode_barang }}</p></td>
                                        <td><p class="text-xs px-3 py-1 mb-0">{{ $barang->kategori_barang }}</p></td>
                                        <td><p class="text-xs px-3 py-1 mb-0">{{ $barang->nama_barang }}</p></td>
                                        <td><p class="text-xs mb-0 px-3 py-1">{{ number_format($barang->harga_barang, 0, ',', '.') }}</p></td>
                                        <td><p class="text-xs px-3 py-1 mb-0">{{ $barang->stok_barang }}</p></td>
                                        <td><p class="text-xs px-3 py-1 mb-0">{{ $barang->suppliers->nama_supplier}}</p></td>
                                        <td>
                                            <form action="{{ route('barang.destroy', $barang->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary"
                                                    href="{{ route('barang.edit', $barang->id) }}">Edit</a>
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
