# e-learning app

## Fitur 
- [x] Authentifikasi dengan token.
- [x] Faker generator untuk insert data Guru dan Siswa.
- [x] Share file maks 50 Mb.
- [x] Read file.
- [x] Absensi.
- [x] CRUD materi, kelas, siswa, guru, ruang kelas, mata pelajaran => untuk role ```admin```
- [x] Diskusi 
- [ ] Chat admin *next*

## Konfigurasi

Buat database dulu di ```phpMyAdmin``` dengan nama ```e-learning```, kemudian import database ```e-learning.sql```

Konfigurasi pada file ```conn.php``` didalam folder ```config/``` :

```php
$server = "localhost";
$username = "root";
$password = "";
$database = "e-learning";
```

Konfigurasi pada file ```settings.ini.php``` didalam folder ```api/db``` :

```php
host = localhost
user = root
password =
dbname = e-learning
```

>Sesuaikan dengan configurasi web server anda.

## Running

Jalankan __CMD / Git Bash__, lalu masuk ke direktori folder ```e-learning/``` , dan ketikkan perintah ```php -S localhost:3000```, kemudian buka __Browser__ kalian dan tulis alamat ```localhost:3000```.

Atau jalankan manual seperti biasa ```localhost/e-learning```, tetapi file sudah disimpan di ```xampp/htdocs/```.

* untuk login sebagai admin dengan level __admin__ gunakan :
Username = ```admin```
Password = ```admin```
* untuk login sebagai admin dengan level __user__ gunakan :
Username = ```user```
Password = ```user```
* untuk login sebagai guru :
NIP = ```013933```
Password = ```61```
* untuk login sebagai Siswa :
NIS = ```0273```
Password = ```79```

## Tools
- bootstrap 4.6.0 https://getbootstrap.com/docs/4.6/getting-started/download/
- Faker generator by https://github.com/fzaninotto/Faker
- Sweetalert by https://github.com/t4t5/sweetalert

## Notulensi
Jika ingin bertanya lebih lanjut bisa WhatsApp ke __+62 888-668-887-32__ atau email ke __febiarifin0@gmail.com__ .

~terima kasih