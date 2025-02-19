# Laravel 10 CRUD dengan Relasi Supplier dan Barang

## Deskripsi
Proyek ini dibuat untuk melaksanakan Uji Kompetensi Keahlian yang diselenggarakan oleh SMK yang bekerjasama dengan LSP Digital. Proyek ini adalah aplikasi berbasis web yang dibangun menggunakan Laravel 10, yang menyediakan fitur CRUD (Create, Read, Update, Delete) untuk mengelola data supplier dan barang. Aplikasi ini juga memiliki fitur pencarian pada halaman utama untuk memudahkan pengguna dalam menemukan barang yang diinginkan.

## Fitur Utama
- **CRUD Supplier**: Tambah, lihat, ubah, dan hapus data supplier.
- **CRUD Barang**: Tambah, lihat, ubah, dan hapus data barang yang berelasi dengan supplier.
- **Relasi Supplier dan Barang**: Setiap barang dikaitkan dengan satu supplier.
- **Fitur Pencarian**: Mencari barang berdasarkan nama atau kriteria tertentu di halaman utama.

## Teknologi yang Digunakan
- **Framework**: Laravel 10
- **Database**: MySQL
- **Template Engine**: Blade
- **CSS Framework**: Bootstrap (Template Material Dashboard 3)

## Instalasi
1. **Clone Repository**
   ```sh
   git clone https://github.com/rannx0/Toko_Indonesia.git
   cd repository
   ```
2. **Install Dependensi**
   ```sh
   composer install
   ```
3. **Konfigurasi Environment**
   Salin file `.env.example` menjadi `.env` dan atur konfigurasi database:
   ```sh
   cp .env.example .env
   ```
   Kemudian ubah pengaturan database di `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```
4. **Generate Key Aplikasi**
   ```sh
   php artisan key:generate
   ```
5. **Migrasi dan Seeding Database**
   ```sh
   php artisan migrate --seed
   ```
6. **Jalankan Server**
   ```sh
   php artisan serve
   ```
   Akses aplikasi di browser: [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Penggunaan
- **Mengelola Supplier**: Akses halaman `/supplier` untuk menambah, mengedit, dan menghapus data supplier.
- **Mengelola Barang**: Akses halaman `/barang` untuk menambah, mengedit, dan menghapus data barang.
- **Mencari Barang**: Gunakan fitur pencarian di halaman utama untuk menemukan barang dengan cepat.

## Struktur Database
- **Suppliers**
  - `id` (Primary Key)
  - `kode_supplier`
  - `nama_supplier`
  - `alamat_supplier`
  - `kota_supplier`
  - `telepon_supplier`
  - `created_at`
  - `updated_at`
- **Barang**
  - `id` (Primary Key)
  - `kode_barang`
  - `nama_barang`
  - `kategori_barang`
  - `harga_barang`
  - `stok_barang`
  - `suppliers_id` (Foreign Key ke tabel `suppliers`)
  - `created_at`
  - `updated_at`

## Kontribusi
Jika ingin berkontribusi, silakan fork repository ini dan buat pull request dengan perubahan yang ingin diajukan.

## Lisensi
Proyek ini menggunakan lisensi MIT. Silakan baca [LICENSE](LICENSE) untuk detail lebih lanjut.

---
Dibuat dengan ❤️ menggunakan Laravel 10.

