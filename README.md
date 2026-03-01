# VarsaWeb Company Profile CMS

Website company profile dan CMS (Content Management System) berbasis **Laravel 12**, **Tailwind CSS**, dan **MySQL**.

## Fitur Utama

- **Public Website**: Landing page, About, Services, Portfolio, dan Contact dengan desain modern dan dinamis.
- **Admin Panel (CMS)**: Sistem manajemen konten kustom dengan autentikasi untuk mengelola:
  - Teks halaman utama (Home)
  - Detail halaman About dan Tim
  - Layanan, Proses Kerja, dan Portofolio (dengan rich text editor)
  - Pengaturan Kontak dan Footer
  - Manajemen tautan Sosial Media terpusat di seluruh situs
- Styling interaktif dengan Tailwind CSS v4 terbaru.

## Teknologi

- PHP 8.2+
- Laravel 12
- MySQL / MariaDB
- Tailwind CSS v4
- Trix Editor (Rich Text)

## Setup Lokal & Instalasi

1. Clone repositori dan masuk ke direktori proyek.
2. Install dependency backend (PHP):

```bash
composer install
```

3. Install dependency frontend (Node.js/npm):

```bash
npm install
```

4. Persiapkan file `.env`:

```bash
cp .env.example .env
php artisan key:generate
```

5. Atur koneksi database Anda di file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=varsaweb
DB_USERNAME=root
DB_PASSWORD=
```

6. Buat database `varsaweb` (atau nama lain sesuai `.env`) di MySQL.
7. Jalankan migrasi beserta **seeder** untuk mengisi CMS dengan data awal dan membuat akun admin:

```bash
php artisan migrate:fresh --seed
```

8. Buat *symbolic link* untuk penyimpanan gambar/foto:

```bash
php artisan storage:link
```

9. Jalankan server lokal:

```bash
php artisan serve
npm run dev
```

## Akses Admin Panel (CMS)

Setelah berhasil menjalankan seeder (`--seed`), Anda dapat masuk ke dasbor admin:

- **URL Admin**: `http://localhost:8000/admin/login`
- **Email**: `admin@varsaweb.com`
- **Password**: `password`

Silakan ganti password ini setelah berhasil login pertama kali jika website akan dionline-kan.

## Struktur Penting

- Halaman Public: `resources/views/*.blade.php` (home, about, services, contact, portfolio-detail)
- Halaman Admin: `resources/views/admin/**/*.blade.php`
- Controller Admin: `app/Http/Controllers/Admin/`
- Konfigurasi Styling: `resources/css/app.css`

## Build Production

Untuk server produksi (online):

```bash
npm run build
```
