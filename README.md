##Prasyarat:

Server: Anda membutuhkan server yang sudah terinstal PHP (versi 7.4 ke atas), Composer, dan database MySQL.
Akses SSH: Anda perlu memiliki akses SSH ke server Anda untuk menjalankan perintah-perintah.
Editor Kode: Pilih editor kode yang Anda sukai, seperti Visual Studio Code, Sublime Text, atau Atom.
Langkah-langkah:

1. Sambungkan ke Server:

Buka terminal atau command prompt Anda.
Gunakan perintah ssh user@your_server_ip untuk terhubung ke server Anda. Ganti user dengan username Anda dan your_server_ip dengan alamat IP server Anda.

2. Buat Direktori Proyek:

Setelah terhubung, buat direktori baru untuk proyek Laravel Anda:
Bash
mkdir my_laravel_project
cd my_laravel_project
Gunakan kode dengan hati-hati.

Ganti my_laravel_project dengan nama yang Anda inginkan.

3. Instal Laravel:

Gunakan Composer untuk menginstal Laravel:
Bash
composer create-project --prefer-dist laravel/laravel my_laravel_project
Gunakan kode dengan hati-hati.

Perintah ini akan mendownload dan menginstal Laravel ke dalam direktori yang telah Anda buat.

4. Konfigurasi Database:

Buka file .env pada direktori proyek Anda menggunakan editor kode.
Ubah nilai variabel-variabel database sesuai dengan konfigurasi database Anda:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password   

Ganti nilai-nilai placeholder dengan informasi database Anda.

5. Jalankan Migrasi:

Jalankan perintah migrasi untuk membuat tabel-tabel yang dibutuhkan oleh Laravel:
Bash
php artisan migrate
Gunakan kode dengan hati-hati.

6. Akses Aplikasi:

Melalui Server:
Jika Anda menggunakan web server seperti Nginx atau Apache, konfigurasikan virtual host agar aplikasi Laravel Anda dapat diakses melalui alamat URL tertentu.
Restart web server Anda.
Melalui PHP Built-in Server:
Untuk pengembangan lokal, Anda bisa menggunakan server bawaan PHP:
Bash
php artisan serve
Gunakan kode dengan hati-hati.

Akses aplikasi Anda melalui alamat yang ditampilkan di terminal, biasanya http://127.0.0.1:8000.

7. Menjalankan Seeder

Untuk menjalankan seeder secara manual, gunakan perintah artisan berikut:

php artisan db:seed --class=DatabaseSeeder

## Untuk mengakses halaman admin dan petugas, ketik '/login/admin' untuk admin dan '/login/staff' untuk petugas di url dan masukan username dan password yang ada di halaman seeder.
=======
