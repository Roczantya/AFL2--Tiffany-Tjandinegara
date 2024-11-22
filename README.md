# Portofolio Website

Ini adalah website portofolio saya yang dibangun menggunakan Laravel (atau teknologi lain yang digunakan). Di sini, saya menampilkan berbagai proyek, pengalaman, keterampilan, dan informasi tentang diri saya.

## Fitur Utama

- Halaman utama dengan informasi singkat tentang saya.
- Daftar proyek-proyek yang telah saya kerjakan.
- Formulir kontak untuk menghubungi saya.
- Responsif dan dapat diakses di berbagai perangkat (desktop dan mobile).

## Teknologi yang Digunakan

- **Backend**: Laravel (versi X)
- **Frontend**: HTML, CSS, JavaScript (jQuery atau Vue.js jika digunakan)
- **Database**: MySQL atau SQLite (jika diperlukan)
- **CSS Framework**: Bootstrap (atau framework CSS lainnya seperti Tailwind CSS)
- **Version Control**: Git, GitHub
- **Deployment**: Platform seperti Heroku, DigitalOcean, atau Netlify (sesuaikan dengan platform yang digunakan)

## Prasyarat

Sebelum memulai, pastikan kamu sudah menginstal hal-hal berikut:

- [PHP](https://www.php.net/) versi 7.x atau lebih tinggi.
- [Composer](https://getcomposer.org/) untuk mengelola dependensi.
- [MySQL](https://www.mysql.com/) atau database lain jika diperlukan.
- [Node.js](https://nodejs.org/) dan [npm](https://www.npmjs.com/) jika proyek menggunakan fitur front-end yang di-compile.
- [Laravel](https://laravel.com/) 8.x atau lebih tinggi.

## Instalasi

Ikuti langkah-langkah berikut untuk menjalankan website portofolio ini secara lokal:

### 1. Clone Repository
Clone repositori ini ke direktori lokalmu:
```bash
git clone https://github.com/username/portfolio-website.git 
```
### 2. Install Dependensi
Di dalam direktori proyek, jalankan perintah berikut untuk menginstal dependensi PHP:

```bash
composer install
```

Jika proyek ini menggunakan front-end yang di-compile, jalankan juga:

```bash
npm install
```

3. Salin File .env.example (kasusku saya tidak pakai)
Salin file .env.example menjadi .env:

```bash
cp .env.example .env
```

Tentu! Berikut adalah README lengkap yang bisa kamu langsung gunakan untuk proyek website portofolio berbasis Laravel atau framework lain:

markdown
Copy code
# Portofolio Website

Ini adalah website portofolio saya yang dibangun menggunakan **Laravel**. Di sini, saya menampilkan berbagai proyek, pengalaman, keterampilan, dan informasi tentang diri saya.

## Fitur Utama

- Halaman utama dengan informasi singkat tentang saya.
- Daftar proyek-proyek yang telah saya kerjakan.
- Halaman detail proyek dengan penjelasan lebih lanjut tentang setiap proyek.
- Formulir kontak untuk menghubungi saya.
- Responsif dan dapat diakses di berbagai perangkat (desktop dan mobile).

## Teknologi yang Digunakan

- **Backend**: Laravel (versi X)
- **Frontend**: HTML, CSS, JavaScript (jQuery atau Vue.js jika digunakan)
- **Database**: MySQL atau SQLite (jika diperlukan)
- **CSS Framework**: Bootstrap (atau framework CSS lainnya seperti Tailwind CSS)
- **Version Control**: Git, GitHub
- **Deployment**: Platform seperti Heroku, DigitalOcean, atau Netlify (sesuaikan dengan platform yang digunakan)

## Prasyarat

Sebelum memulai, pastikan kamu sudah menginstal hal-hal berikut:

- [PHP](https://www.php.net/) versi 7.x atau lebih tinggi.
- [Composer](https://getcomposer.org/) untuk mengelola dependensi.
- [MySQL](https://www.mysql.com/) atau database lain jika diperlukan.
- [Node.js](https://nodejs.org/) dan [npm](https://www.npmjs.com/) jika proyek menggunakan fitur front-end yang di-compile.
- [Laravel](https://laravel.com/) 8.x atau lebih tinggi.

## Instalasi

Ikuti langkah-langkah berikut untuk menjalankan website portofolio ini secara lokal:

### 1. Clone Repository
Clone repositori ini ke direktori lokalmu:
```bash
git clone https://github.com/username/portfolio-website.git
```
### 2. Install Dependensi
Di dalam direktori proyek, jalankan perintah berikut untuk menginstal dependensi PHP:

```bash

composer install
```
Jika proyek ini menggunakan front-end yang di-compile, jalankan juga:

```bash
npm install
```

### 3. Salin File .env.example
Salin file .env.example menjadi .env:

```bash
cp .env.example .env
```

### 4. Generate Kunci Aplikasi
Generate kunci aplikasi Laravel:

```bash
php artisan key:generate
```

### 5. Setel Pengaturan Database
Buka file .env dan atur konfigurasi database sesuai dengan lingkungan lokalmu:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=root
DB_PASSWORD=
```

6. Migrasi Database
Jika menggunakan database dan perlu migrasi, jalankan:

```bash
php artisan migrate
```

7. Menjalankan Aplikasi
Untuk menjalankan aplikasi di server pengembangan lokal, gunakan perintah berikut:

```bash
php artisan serve
```
Website akan tersedia di http://localhost:8000.

## Fitur dan Deskripsi
### 1. Halaman utama 
menyajika informasi singkat tentang saya, proyek yang pernah di kerjakan, link media sosial.

# Deployment
Langkah deployment:
1.  ke Vercel
    - Kunjungi https://vercel.com dan login dengan akun GitHub, GitLab, atau Bitbucket.
2. Buat Proyek Baru:
   - Klik pada tombol "New Project" di dashboard Vercel.
   - Pilih "Import Git Repository", dan pilih repositori GitHub yang sudah kamu buat untuk Laravel.
   - Vercel akan otomatis mengonfigurasi build untuk aplikasi frontend (jika ada).
3. Konfigurasi Aplikasi di Vercel:
   - Pilih konfigurasi build yang sesuai jika kamu menggunakan aplikasi frontend berbasis JavaScript.
   - Untuk backend Laravel, kamu mungkin perlu menyesuaikan pengaturan atau menggunakan layanan lain (seperti server VPS).

## Deploy Aplikasi Frontend di Vercel
> Jika kamu hanya ingin meng-host frontend (misalnya React atau Next.js) di Vercel, pastikan bahwa repositori hanya berisi file frontend yang di-build dengan benar.
-  Klik "Deploy" setelah memilih repositori.
- Vercel akan otomatis membuat build dan menyediakan URL untuk aplikasi frontend.
