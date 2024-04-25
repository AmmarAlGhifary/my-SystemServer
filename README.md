## my-SystemServer

    Ini tuh RestAPI untuk project Gamecomm menggunakan PHP, Blade, dan a little bit of JS di tampung dengan laravel

## Cara nge _Clone_ 
Use `git clone git@github.com:AmmarAlGhifary/my-SystemServer.git`

## Cara nge _Start_ Project
Setelah mengkloning repositori, masuk ke direktori proyek dan jalankan perintah berikut untuk memulai server lokal menggunakan _Artisan_ :

`cd nama-repositori`
`composer install`
`cp .env.example .env`
`php artisan key:generate`
`php artisan migrate`
`php artisan serve`

Ini akan menjalankan server pengembangan di http://localhost:8000. Pastikan bahwa semua dependensi telah terinstal dan file .env telah dikonfigurasi dengan benar sebelum memulai server.

## Mengaktifkan XAMPP dan PHPMyAdmin
Untuk menggunakan PHPMyAdmin sebagai database interface, Anda perlu mengaktifkan XAMPP terlebih dahulu. Ikuti langkah-langkah berikut:

1. Buka XAMPP Control Panel.
2. Start modul Apache dan MySQL.
3. Buka browser dan akses http://localhost/phpmyadmin untuk memulai menggunakan PHPMyAdmin.
4. Pastikan bahwa konfigurasi database dalam file .env sesuai dengan pengaturan MySQL di PHPMyAdmin.
