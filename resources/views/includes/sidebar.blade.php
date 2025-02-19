<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0"
            href="{{ route('dashboard') }}">
            <i class="navbar-brand-img material-symbols-rounded" width="26" height="26">store</i>
            <span class="ms-1 text-sm text-dark">Toko Indonesia</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- Dashboard Link -->
            <li class="nav-item">
                <a class="nav-link {{ Route::is('dashboard') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('dashboard') }}">
                    <i class="material-symbols-rounded opacity-5">dashboard</i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Kelola Data</h6>
            </li>

            <!-- Supplier Link -->
            <li class="nav-item">
                <a class="nav-link {{ Route::is(['supplier.index', 'supplier.create', 'supplier.edit']) ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('supplier.index') }}">
                    <i class="material-symbols-rounded opacity-5">table_view</i>
                    <span class="nav-link-text ms-1">Kelola Supplier</span>
                </a>
            </li>

            <!-- Barang Link -->
            <li class="nav-item">
                <a class="nav-link {{ Route::is(['barang.index', 'barang.create', 'barang.edit']) ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('barang.index') }}">
                    <i class="material-symbols-rounded opacity-5">receipt_long</i>
                    <span class="nav-link-text ms-1">Kelola Barang</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
