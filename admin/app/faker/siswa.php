<?php
require_once('vendor/autoload.php');

use Faker\Factory;

$faker = Factory::create('id_ID');

function jeniskelamin($panjang)
{
    $karakter = 'LP';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
        $pos = rand(0, strlen($karakter) - 1);
        $string .= $karakter{
            $pos};
    }
    return $string;
}

function angka($panjang)
{
    $karakter = '1234567890';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
        $pos = rand(0, strlen($karakter) - 1);
        $string .= $karakter{
            $pos};
    }
    return $string;
}

for ($i = 1; $i <= 30; $i++) {
    $nis = angka(4);
    $nama = $faker->name;
    $jk = jeniskelamin(1);
    $tempat_lahir = $faker->city;
    $tanggal_lahir = $faker->date($format = 'Y-m-d', $max = 'now');
    $alamat = $faker->address;
    $telepon = $faker->phoneNumber;
    $password = angka(2);
    $foto = "profil.png";

    $con = mysqli_connect('localhost', 'root', '', 'e-learning');
    mysqli_query($con, "INSERT INTO siswa(nis,nama,jeniskelamin,tempat_lahir,tanggal_lahir,alamat,telepon,password,foto) VALUES('$nis','$nama','$jk','$tempat_lahir','$tanggal_lahir','$alamat','$telepon','$password','$foto') ");
}
header("location: ?m=home");
