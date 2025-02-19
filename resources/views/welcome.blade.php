@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <div class="row">
                                <div class="col-4"><h3 class="mb-3">Data Barang</h3></div>
                                <form action="{{ route('search') }}" method="GET">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-group input-group-outline">
                                                <input type="text" class="form-control" name="keyword" value="{{ request('keyword') }}" placeholder="Cari Barang">
                                            </div>
                                        </div>

                                        <button type="submit" class="col-3 btn btn-secondary">Cari</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-bordered p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-xxs font-weight-bolder">Id Barang</th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">Kategori</th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">Nama Barang</th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">Harga</th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">Stok</th>
                                    <th class="text-uppercase text-xxs font-weight-bolder">Supplier</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($barangs as $barang)
                                    <tr>
                                        <td class="px-3 py-1"><p class="text-xs mb-0 px-2 py-1">{{ $barang->kode_barang }}</p></td>
                                        <td><p class="text-xs mb-0 px-3 py-1">{{ $barang->kategori_barang }}</p></td>
                                        <td><p class="text-xs mb-0 px-3 py-1">{{ $barang->nama_barang }}</p></td>
                                        <td><p class="text-xs mb-0 px-3 py-1">{{ number_format($barang->harga_barang, 0, ',', '.') }}</p></td>
                                        <td><p class="text-xs mb-0 px-3 py-1">{{ $barang->stok_barang }}</p></td>
                                        <td><p class="text-xs mb-0 px-3 py-1">{{ $barang->suppliers->nama_supplier }}</p></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No results found for "{{ request('keyword') }}"</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
        </div>
    </div>
@endsection
