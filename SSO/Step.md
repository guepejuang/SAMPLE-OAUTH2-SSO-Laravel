[✓] Install laravel V-7
    [✓] composer create-project --prefer-dist laravel/laravel:^7.0 {NamaApp}
[✓] Install Laravel:ui V2
    [✓] composer require laravel/ui:v2
    [✓] Generate Auth : php artisan ui vue --auth
    [✓] Install depedencis : npm install && npm run dev  //Agak lama didie
    [✓] Edit .env sesuai database
[✓] Install Laravel Passport versi 9.0
    [✓] Download Librari  : composer require laravel/passport "~9.0"
    [✓] Migrasi Database  : php artisan migrate
    [✓] Install Passport  : php artisan passport:install
    [✓] Tambahkan HasApiTokens di Model User jangan lupa tambahkan use Laravel\Passport\HasApiTokens; pada awal model user
    [✓] Tambahkan Passport::routes(); di AuthServiceProvider jangan lupa use Laravel\Passport\Passport; pada awal file
    [✓] ubah guards api di config/auth.php, sebelumnya token jadi passport.
    [✓] Frontend Quickstart : php artisan vendor:publish --tag=passport-components
    [✓] Import component Passport di resources/js/app.js ---> https://laravel.com/docs/7.x/passport#introduction
    [✓] Import component vue kedalam blade
    [✓] npm install && npm run dev, untuk menerapkan perubahan vue
    [✓] Jalankan laravel : php artisan serve
    [✓] Cobain Registrasi

[✓] buat File contoh client
  [✓] Copas ajah biar cepet :v


[✓] Integrasi SSO dengan client
  [✓] Jalankan Client terlebih dahulu : php -S localhost:8001 -t .
  [✓] Buat Client ID dan Secret ID di server
      -> Name : Bebas
      -> Redirect URL : setelah berhasil login mau diarahin kmn? intinya gtu. contoh kali ini diarahin ke http://localhost:8001/callback.php || Moodle bisa lihat di dokumentasi nya
      -> Confidential : Entah apa maksudnya, ceklis ae :c
  [✓] Isi data client sesuai data di SSO
  [✓] Buka client -> Di arahin ke SSO {Lihat IP nya} Paste http://localhost:8001/ jadi http://127.0.0.1:8000/
  [✓] Jadi :) But naha Error null? karena setelah auth di callback minta data user di path /api/moodle/user tapi di server gk ada path kesana, kita buat dulu.
  [✓] Biar lebih jelas, logout dulu. Data berhasil keluar :)