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

## API

file API ada di folder ```api/list/```, untuk url __GET__ :
* ```http://localhost/e-learning/?m=siswa``` untuk GET data siswa
* ```http://localhost/e-learning/?m=guru``` untuk GET data guru
* ```http://localhost/e-learning/?m=kelas``` untuk GET data kelas
* ```http://localhost/e-learning/?m=pelajaran``` untuk GET data pelajaran
* ```http://localhost/e-learning/?m=mapelkelas``` untuk GET data mapel kelas
* ```http://localhost/e-learning/?m=kelassiswa``` untuk GET data kelas siswa
* ```http://localhost/e-learning/?m=materipelajaran``` untuk GET data materi pelajaran

untuk hasilnya, akan menampilkan semua data yang ada di tabel dalam bentuk JSON seperti berikut :
```json
{
    "info": "success",
    "num": 4,
    "result": [
        {
            "nis": "4230",
            "nama": "Sri Aeni",
            "jeniskelamin": "P",
            "tempat_lahir": "Wonosobo",
            "tanggal_lahir": "2003-04-15",
            "alamat": "Wadaslintang",
            "telepon": "081765234908",
            "foto": "profil.png",
            "date_time": "2021-03-27 13:33:13"
        },
        {
            "nis": "4231",
            "nama": "Nurul",
            "jeniskelamin": "P",
            "tempat_lahir": "Wonosobo",
            "tanggal_lahir": "2003-08-20",
            "alamat": "Gemblengan",
            "telepon": "0897653546455",
            "foto": "profil.png",
            "date_time": "2021-03-27 13:33:27"
        },
        {
            "nis": "4232",
            "nama": "Solihin",
            "jeniskelamin": "L",
            "tempat_lahir": "Magelang",
            "tanggal_lahir": "2003-03-25",
            "alamat": "Magelang",
            "telepon": "0897653353",
            "foto": "profil.png",
            "date_time": "2021-03-27 13:33:48"
        },
        {
            "nis": "4234",
            "nama": "Hidayat",
            "jeniskelamin": "L",
            "tempat_lahir": "Wonosobo",
            "tanggal_lahir": "2003-08-12",
            "alamat": "Lengkong, Mojotengah",
            "telepon": "08353453345",
            "foto": "profil.png",
            "date_time": "2021-03-27 14:05:53"
        }
    ]
}
```

untuk menampilkan beberapa data gunakan ```limit=[jumlah_data]``` contoh: ```limit=1``` , caranya seperti ini : 
```http://localhost/e-learning/?m=siswa&limit=1``` ,maka akan menampilkan 1 dari semua data siswa.
```json
{
    "info": "success",
    "num": 1,
    "result": [
        {
            "nis": "4230",
            "nama": "Sri Aeni",
            "jeniskelamin": "P",
            "tempat_lahir": "Wonosobo",
            "tanggal_lahir": "2003-04-15",
            "alamat": "Wadaslintang",
            "telepon": "081765234908",
            "foto": "profil.png",
            "date_time": "2021-03-27 13:33:13"
        }
    ]
}
```
Untuk Get data Siswa dan Guru, kita bisa menggunakan filter : 
```
nis = [nis] / nip = [nip] => untuk menampilkan nama berdasarkan NIS/NIP 
nama = [nama] => untuk menampilkan nama berdasarkan nama 
jk = [jk] => untuk menampilkan nama berdasarkan jenis kelamin P/L
alamat = [alamat] => untuk menampilkan nama berdasarkan alamat
lahir = [lahir] => untuk menampilkan nama berdasarkan temapat lahir
```

Contoh penggunaan untuk ```GET``` data Siswa :
```http://localhost/e-learning/?m=siswa&nis=[nis]```
```http://localhost/e-learning/?m=siswa&nama=[nama]```
```http://localhost/e-learning/?m=siswa&jk=[jk]```
```http://localhost/e-learning/?m=siswa&alamat=[alamat]```
```http://localhost/e-learning/?m=siswa&lahir=[lahir]```

Contoh penggunaan untuk ```GET``` data Guru :
```http://localhost/e-learning/?m=guru&nip=[nip]```
```http://localhost/e-learning/?m=guru&nama=[nama]```
```http://localhost/e-learning/?m=guru&jk=[jk]```
```http://localhost/e-learning/?m=guru&alamat=[alamat]```
```http://localhost/e-learning/?m=guru&lahir=[lahir]```

## Tools
- bootstrap 4.6.0 https://getbootstrap.com/docs/4.6/getting-started/download/
- Faker generator by https://github.com/fzaninotto/Faker
- Sweetalert by https://github.com/t4t5/sweetalert

## Notulensi
Jika ingin bertanya lebih lanjut bisa WhatsApp ke __+62 888-668-887-32__ atau email ke __febiarifin0@gmail.com__ .

~terima kasih