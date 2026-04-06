Library API Project (Laravel + CodeIgniter 4)
Selamat datang di proyek Library API, sebuah sistem manajemen perpustakaan sederhana yang dibangun dengan arsitektur decoupled. Proyek ini memisahkan antara penyedia data (Back-End) dan penampil data (Front-End). Laravel berperan sebagai API Provider yang mengelola database dan logika bisnis, sementara CodeIgniter 4 berperan sebagai API Consumer yang menyajikan antarmuka pengguna kepada publik. Dengan pemisahan ini, aplikasi menjadi lebih fleksibel dan mudah dikembangkan di masa depan.

rasyarat Sistem
Sebelum menjalankan proyek, pastikan perangkat kamu telah memenuhi spesifikasi berikut:

PHP: Versi 8.1 atau yang lebih baru.

Composer: Alat manajemen dependensi PHP.
Database: MySQL atau MariaDB (direkomendasikan menggunakan XAMPP).
Web Browser: Chrome, Firefox, atau Edge versi terbaru.
Postman: Opsional, namun sangat disarankan untuk pengujian endpoint API secara mandiri.

##Langkah-Langkah Instalasi dan Menjalankan Proyek
1. Persiapan Database
Pertama, kamu perlu menyiapkan wadah datanya di MySQL:
Buka panel kontrol XAMPP dan aktifkan modul Apache serta MySQL.
Buka browser dan akses localhost/phpmyadmin.
Buat database baru dengan nama library_api.
Jika kamu memiliki file dump SQL, silakan import ke dalam database tersebut. Jika tidak, kamu bisa menggunakan fitur Migration pada langkah berikutnya.

2. Konfigurasi Server Back-End (Laravel)
Server ini akan berjalan di port default 8000.
Buka terminal atau command prompt, lalu masuk ke folder project Laravel.
Jalankan perintah composer install untuk mengunduh semua library yang dibutuhkan.
Salin file konfigurasi dengan perintah cp .env.example .env.
Buka file .env dan sesuaikan pengaturan database:
DB_DATABASE=library_api
DB_USERNAME=root
DB_PASSWORD= (kosongkan jika menggunakan standar XAMPP).
Generate kunci aplikasi dengan perintah php artisan key:generate.
Jalankan migrasi tabel ke database dengan perintah php artisan migrate --seed.
Terakhir, jalankan server dengan perintah php artisan serve.

3. Konfigurasi Server Front-End (CodeIgniter 4)
Server ini akan dijalankan di port 8081 agar tidak bentrok dengan Laravel.
Buka terminal baru dan masuk ke folder project CodeIgniter 4.
Jalankan perintah composer install.
Salin file lingkungan dengan perintah cp env .env.
Buka file .env dan pastikan baris berikut sudah sesuai:
CI_ENVIRONMENT = development (agar error terlihat jelas).
app.baseURL = 'http://localhost:8081/'
API_URL = 'http://localhost:8000/api/' (mengarahkan CI4 ke server Laravel).
Jalankan server CI4 dengan perintah php spark serve --port 8081.
