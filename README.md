# Sistem Manajemen Produk

Proyek ini adalah sebuah sistem manajemen produk yang dibangun menggunakan framework CodeIgniter 4. Sistem ini menyediakan fitur untuk mengelola data produk, registrasi pengguna, dan autentikasi login.

## Fitur

- **Manajemen Produk**: 
  - Tambah produk baru dengan kode, nama, dan harga.
  - Ubah informasi produk yang sudah ada.
  - Hapus produk dari sistem.
  - Lihat daftar semua produk.
  - Lihat detail produk tertentu.

- **Registrasi Pengguna**: 
  - Pengguna dapat mendaftar dengan nama, email, dan password yang terenkripsi.

- **Autentikasi Login**: 
  - Pengguna dapat login menggunakan email dan password yang terdaftar.
  - Sistem menghasilkan token autentikasi untuk sesi pengguna.

## Struktur Proyek

- **Controllers**: Mengelola logika aplikasi dan menangani permintaan HTTP.
  - `ProdukController`: Mengelola operasi CRUD untuk produk.
  - `LoginController`: Mengelola proses login pengguna.
  - `RegistrasiController`: Mengelola proses registrasi pengguna.
  - `RestfulController`: Menyediakan metode respons JSON yang konsisten.
  - `BaseController`: Kelas dasar untuk semua controller, memuat komponen yang dibutuhkan.

- **Models**: Mengelola interaksi dengan database.
  - `MProduk`: Model untuk tabel produk, mengelola data produk.
  - `MLogin`: Model untuk tabel token anggota, menyimpan token autentikasi.
  - `MMember`: Model untuk tabel anggota, mengelola data pengguna.
  - `MRegistrasi`: Model untuk registrasi anggota, menyimpan data pengguna baru.

- **Config/Routes.php**: Mengelola rute aplikasi, mendefinisikan endpoint API untuk setiap fitur.

## Instalasi

1. Clone repositori ini:
   ```bash
   git clone https://github.com/username/repo-name.git
   ```
2. Masuk ke direktori proyek:
   ```bash
   cd repo-name
   ```
3. Instal dependensi menggunakan Composer:
   ```bash
   composer install
   ```
4. Salin file `.env.example` menjadi `.env` dan sesuaikan pengaturan database Anda.
5. Jalankan migrasi database jika diperlukan:
   ```bash
   php spark migrate
   ```

## Penggunaan

1. Jalankan server pengembangan:
   ```bash
   php spark serve
   ```
2. Akses aplikasi melalui browser di `http://localhost:8080`.

## Kontribusi

Kami menyambut kontribusi dari siapa pun. Silakan fork repositori ini dan kirimkan pull request untuk perbaikan atau fitur baru.

1. Fork repositori ini.
2. Buat branch fitur baru (`git checkout -b fitur-Anda`).
3. Commit perubahan Anda (`git commit -m 'Menambahkan fitur'`).
4. Push ke branch (`git push origin fitur-Anda`).
5. Buat Pull Request.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

## Kontak

Untuk pertanyaan lebih lanjut, silakan hubungi kami melalui email: email@domain.com
