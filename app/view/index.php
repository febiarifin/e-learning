<?php 
    $url ="/";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <!-- botstrap css -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <!-- my css -->

    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>

    <!-- main form -->
    <div class="container">
        <h3 class="font-weight-normal">Aplikasi E-Learning <br> SMK Maju Jaya</h3>
        <a href="<?= $url ?>siswa" class="btn btn-primary">Login Siswa</a>
        <a href="<?= $url ?>guru" class="btn btn-primary">Login Guru</a>
        <a href="<?= $url ?>admin" class="btn btn-primary">Login Admin</a>
    </div>

</body>

</html>