🚗 CRUD Data Mobil - Laravel

Aplikasi sederhana CRUD (Create, Read, Update, Delete) data mobil menggunakan Laravel dan MySQL.

##  Fitur
- Tambah data mobil
- Edit data mobil
- Hapus data mobil
- Tampilkan daftar mobil

  ## Teknologi
- laravel 12
- PHP 
- MySQL

  ## Cara Install
1. Clone repository
git clone https://github.com/virsanda/Pemograman-Web-2
cd stokmobil_crud_web
2. Install dependency
composer create-project laravel/laravel:^12.0
3. Konfigurasi environment
cp .env.example .env
4. generate key
php artisan key:generate
5. Setting database di file .env
DB_DATABASE=stokmobil_crud_web
DB_USERNAME=root
DB_PASSWORD=
6.Jalankan database
php artisan migrate
7.Jalankan aplikasi
php artisan serve
Akses di browser
http://127.0.0.1:8000/products

  ##Keterangan
Project ini dibuat untuk memenuhi tugas project pemrograman web 2

   ##Author
 nama : virsanda anzalita
 nim  : 240180040

 
  

  

  
