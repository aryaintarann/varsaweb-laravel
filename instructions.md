Product Requirements Document (PRD)

Project Name: VarsaWeb - Company Profile Website
Document Version: 1.0
Date: 7 Maret 2026

⚠️ CATATAN PENTING: > Seluruh proses perencanaan, desain, pengembangan, hingga eksekusi proyek ini wajib selalu mengacu dan menggunakan panduan yang sesuai dari Context7.

1. Pendahuluan

VarsaWeb adalah sebuah proyek pengembangan website company profile yang dirancang untuk menampilkan identitas perusahaan, layanan yang ditawarkan, dan portofolio karya atau proyek yang telah diselesaikan. Website ini juga akan dilengkapi dengan Content Management System (CMS) khusus untuk memudahkan administrator dalam mengelola konten secara mandiri tanpa perlu mengubah kode sumber.

2. Tujuan Proyek

Membangun kehadiran digital (online presence) yang profesional untuk VarsaWeb.

Menampilkan portofolio dan layanan untuk menarik calon klien atau mitra bisnis.

Mempermudah calon klien menghubungi perusahaan melalui halaman kontak.

Menyediakan panel admin yang mudah digunakan (CMS) untuk mengelola seluruh konten website secara dinamis.

3. Teknologi yang Digunakan (Tech Stack)

Backend & Framework: Laravel (PHP) dengan menerapkan standar arsitektur MVC (Model-View-Controller).

Frontend Styling: Tailwind CSS

Database: MySQL

JavaScript (Opsional untuk interaktivitas): Alpine.js atau Vanilla JS

Version Control: Git

4. Target Pengguna

Pengunjung Publik / Calon Klien: Pengguna internet yang ingin mengetahui profil VarsaWeb, melihat layanan, portofolio, dan menghubungi perusahaan.

Administrator (Internal): Staf atau pemilik perusahaan yang bertugas memperbarui konten website secara berkala (menambah portofolio, mengubah teks layanan, membaca pesan masuk).

5. Fitur Detail & Ruang Lingkup (Scope of Work)

5.1. Bagian Publik (Frontend)

Website harus sepenuhnya responsif (mobile-friendly), memiliki navigasi yang jelas, dan waktu muat yang cepat.

A. Halaman Home

Hero Section: Banner/Slider utama dengan headline menarik, sub-headline, dan tombol Call to Action (CTA) menuju halaman Contact atau Service.

About Us (Ringkasan): Paragraf singkat yang menjelaskan siapa VarsaWeb, disertai tombol "Read More" menuju halaman About.

Services (Highlight): Menampilkan 3-4 layanan utama dalam bentuk cards dengan ikon.

Featured Portfolio: Menampilkan 3-6 proyek terbaik atau terbaru.

Testimonial / Klien (Opsional): Menampilkan logo klien yang pernah bekerja sama.

Footer: Informasi kontak singkat, tautan ke sosial media, dan menu navigasi cepat.

B. Halaman About

Sejarah Perusahaan: Penjelasan detail mengenai latar belakang berdirinya VarsaWeb.

Visi & Misi: Menampilkan arah dan tujuan perusahaan.

Tim Kami (Our Team): Menampilkan profil singkat (foto, nama, jabatan) dari manajemen atau anggota tim kunci.

C. Halaman Service

Daftar Layanan: Penjelasan komprehensif mengenai semua layanan yang ditawarkan perusahaan.

Setiap layanan ditampilkan dengan judul, ikon/gambar ilustrasi, dan deskripsi detail.

Tombol CTA untuk memesan layanan atau bertanya lebih lanjut.

D. Halaman Portfolio

Grid Portofolio: Menampilkan seluruh proyek yang pernah dikerjakan dalam bentuk grid gambar.

Filter/Kategori: Pengunjung dapat memfilter portofolio berdasarkan kategori layanan (misal: Web Design, Branding, SEO).

Detail Proyek (Modal/Halaman Baru): Saat gambar portofolio diklik, akan muncul detail proyek yang mencakup: Nama Klien, Tanggal, Deskripsi Singkat, dan Gambar penuh.

E. Halaman Contact Us

Formulir Kontak: Field untuk Nama, Email, Subjek, dan Pesan. Ketika disubmit, data akan tersimpan di database dan memicu notifikasi email ke admin.

Informasi Kontak: Menampilkan Alamat Lengkap, Nomor Telepon/WhatsApp, dan Email perusahaan.

Google Maps Embed: Menampilkan titik lokasi kantor perusahaan.

5.2. Admin Panel / CMS (Backend)

Panel admin dilindungi oleh sistem autentikasi (Login). Dibangun dengan Laravel Blade dan didesain menggunakan Tailwind CSS.

A. Dashboard

Statistik Ringkas: Menampilkan jumlah pengunjung (opsional), total pesan kontak yang masuk, total portofolio, dan total layanan.

Pesan Terbaru: Cuplikan 5 pesan terakhir dari halaman Contact Us.

B. Pengelolaan Konten Halaman (Pages CMS)

Home Setup: Mengubah teks Hero Section, gambar banner, dan teks pengantar.

About Setup: Form Editor (WYSIWYG/Rich Text) untuk memperbarui Visi, Misi, Sejarah, dan data Anggota Tim (CRUD Anggota Tim).

C. Pengelolaan Layanan (Service Management)

CRUD Services: Fitur Create, Read, Update, Delete untuk layanan perusahaan.

Field: Judul Layanan, Ikon/Gambar, Deskripsi Singkat, Deskripsi Lengkap.

D. Pengelolaan Portofolio (Portfolio Management)

CRUD Kategori Portofolio: Menambah atau menghapus kategori.

CRUD Portofolio: Fitur menambah karya baru.

Field: Judul Proyek, Kategori, Gambar Utama (Upload image), Deskripsi Proyek, Nama Klien, Tanggal Pengerjaan.

E. Pengelolaan Pesan Masuk (Inbox)

Daftar Pesan: Melihat tabel data pesan yang dikirim dari halaman Contact Us.

Aksi: Baca pesan detail, tandai sudah dibaca (mark as read), atau hapus pesan.

F. Pengaturan Website (Site Settings)

Informasi Umum: Mengubah Nama Website, Logo (Upload), Favicon.

Informasi Kontak: Memperbarui Alamat, Email, No. Telepon, dan link Google Maps.

Sosial Media: Memperbarui URL Facebook, Instagram, LinkedIn, dll. yang akan muncul di Footer.

6. Persyaratan Non-Fungsional (Non-Functional Requirements)

Keamanan (Security):

Proteksi terhadap SQL Injection, XSS, dan CSRF (bawaan Laravel).

Halaman admin dilindungi middleware Authentication.

Upload file harus divalidasi (hanya ekstensi gambar: jpg, jpeg, png, webp, svg dengan batas ukuran maksimal 2MB).

Performa (Performance):

Aset gambar, CSS, dan JS harus dioptimasi agar loading website cepat.

Penggunaan Pagination pada halaman portofolio atau pesan masuk di admin jika datanya banyak.

SEO (Search Engine Optimization):

Struktur URL yang SEO-friendly.

Terdapat tag meta judul dan deskripsi dinamis untuk setiap halaman.

Desain Responsif: UI dari Tailwind CSS harus disesuaikan untuk tampilan Desktop, Tablet, dan Mobile.

7. Rencana Fase Pengembangan (Milestones)

Fase 1: Perencanaan & Desain (Minggu 1)

Penyusunan Database Schema (ERD).

Wireframing dan Pemilihan Tema UI (Tailwind Components).

Fase 2: Pengembangan Backend & CMS Admin (Minggu 2-3)

Setup Laravel, Migrations, Models (Sesuai kaidah MVC).

Pembuatan modul Autentikasi Admin.

Pembuatan modul CRUD (Portfolio, Service, Settings).

Fase 3: Pengembangan Frontend & Integrasi API/CMS (Minggu 4)

Slicing UI Frontend dengan Tailwind.

Menghubungkan data dari View ke Controller dan Database ke halaman publik (Home, About, Portfolio, dsb).

Fase 4: Testing & Deployment (Minggu 5)

Pengujian fungsionalitas (UAT), bug fixing, dan pengujian perangkat mobile.

Setup server hosting/VPS (cPanel atau Forge) dan rilis produksi.
