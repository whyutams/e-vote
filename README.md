<p align="center">
<img src="public/favicon.ico" width="400" alt="Vitely Logo">
</p>


<p align="center"><h1>Vitely - Aplikasi E-Voting</h1></p>

<p align="center">
<img src="https://img.shields.io/badge/status-development-yellow" alt="Status">
<img src="https://img.shields.io/badge/version-1.0-blue" alt="Versi">
<img src="https://img.shields.io/badge/license-MIT-green" alt="Lisensi">
</p>

## 🚀 Tentang Vitely

Vitely adalah aplikasi pemungutan suara elektronik yang aman, dibangun dengan Laravel sebagai bagian dari kompetisi web development Fakultas Teknik Universitas Negeri Gorontalo dalam rangka Dies Natalis fakultas. Aplikasi ini menyediakan platform yang handal dengan fitur-fitur utama:

- 🗳️ Manajemen pemilihan (elections) yang fleksibel dan terstruktur
- 👥 Sistem manajemen admin/operator dengan tingkat akses berbeda
- 📊 Dashboard real-time untuk pemantauan hasil suara
- 🔐 Autentikasi dan otorisasi pengguna yang aman
- 📱 Antarmuka responsif untuk mobile
- ✅ Sistem verifikasi suara
- 📈 Pelaporan dan analitik detail


## 💻 Persyaratan Sistem

- PHP >= 8.1
- Composer
- MySQL/PostgreSQL
- Node.js & NPM

## 🛠️ Instalasi

1. Clone repositori
```bash
git clone https://github.com/yourusername/vitely.git
```

2. Install dependensi
```bash
composer install
npm install && npm run dev
```

3. Konfigurasi environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Jalankan migrasi
```bash
php artisan migrate
```

## 📖 Cara Penggunaan

### Super Admin
1. Login sebagai Super Admin
2. Kelola Admin/Operator
    - Tambah admin/operator baru
    - Atur hak akses
    - Monitor aktivitas admin
3. Kelola Pemilihan
    - Buat pemilihan baru
    - Atur parameter dan jadwal
    - Validasi data pemilihan

### Admin/Operator
1. Login ke dashboard
2. Atur parameter pemilihan
3. Tambahkan data pemilih
4. Mulai sesi pemilihan
5. Pantau hasil pemungutan suara

## 🔒 Keamanan

Aplikasi ini menerapkan berbagai langkah keamanan termasuk:
- Tidak ada fitur pendaftaran publik untuk mencegah manipulasi data
- Penambahan pemilih dilakukan manual oleh admin/operator atau melalui import Excel
- 

## 🤝 Kontribusi

Kontribusi sangat diterima! Silakan baca panduan kontribusi kami sebelum mengajukan pull request.

## 📝 Lisensi

Proyek ini dilisensikan di bawah Lisensi MIT - lihat file [LICENSE](LICENSE) untuk detail.

