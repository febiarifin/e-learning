# e-learning

# Konfigurasi

Konfigurasi pada file ```conn.php``` didalam folder ```config/``` :

```
$server = "localhost";
$username = "root";
$password = "";
$database = "e-learning";
```

Konfigurasi pada file ```settings.ini.php``` didalam folder ```api/db``` :

```
host = localhost
user = root
password =
dbname = e-learning
```

>Sesuaikan dengan configurasi web server anda.

# Setting

Setelah file di download, extrak lalu copy-kan file ke folder ```root``` , dan rename folder hasil extrak menjadi ```e-learning``` , atau jika ingin dirubah misal menjadi ```App-E-learning```, jangan lupa untuk mengubah file ```url.php``` di semua folder ```config/``` baik didalam folder ```admin/```,```guru/```,```siswa/``` seperti berikut ini :
```
<?php 
  $url = "../../e-learning/"; //sesuaikan nama folder anda misal : App-E-learning
?>
```

setelah selesai komnfigurasi dan setting, coba jalankan di browser anda ```localhost/e-learning```, sesuaikan dengan nama folder anda.
untuk login sebagai admin dengan level __admin__ gunakan :
Username = ```admin```
Password = ```admin```
untuk login sebagai admin dengan level __user__ gunakan :
Username = ```user```
Password = ```user```

# API

file API ada di folder ```api/list/```, untuk url __GET__ :
* ```http://localhost/e-learning/?m=siswa``` untuk GET data siswa
* ```http://localhost/e-learning/?m=guru``` untuk GET data guru
* ```http://localhost/e-learning/?m=kelas``` untuk GET data kelas
* ```http://localhost/e-learning/?m=pelajaran``` untuk GET data pelajaran
* ```http://localhost/e-learning/?m=mapelkelas``` untuk GET data mapel kelas
* ```http://localhost/e-learning/?m=kelassiswa``` untuk GET data kelas siswa
* ```http://localhost/e-learning/?m=materipelajaran``` untuk GET data materi pelajaran

untuk hasilnya, akan menampilkan semua data yang ada di tabel dalam bentuk JSON seperti berikut :
```
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
```
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

Jika ingin bertanya lebih lanjut bisa WhatsApp ke ```+62 888-668-887-32``` atau email ke ```febiarifin0@gmail.com```.




