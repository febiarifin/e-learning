<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "e-learning";

try {
    $con = new PDO("mysql:host=$server;dbname=$database", $username, $password);
} catch (PDOException $e) {
    $pesan = "Terjadi masalah pada : " . $e->getMessage();
     echo "
        <script>
            alert('Tidak terhubung ke database');
        </script>
    ";
}
