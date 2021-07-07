<?php
session_start();
session_destroy();
$url = "/";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <!-- botstrap css -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

    <!-- Data Tables Css -->
    <link rel="stylesheet" href="asset/js/datatables/dataTables.bootstrap4.css">
    <!-- my css -->

    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>


    <!-- form login -->
    <div class="container">
        <h3 class="font-weight-normal">Aplikasi E-Learning <br> SMK Maju Jaya</h3>
        <form action="?m=prosesLogin" method="post" enctype="multipart/form-data">
            <label class="font-weight-normal">Username</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><?php include ICON . 'user.php'; ?></span>
                </div>
                <input type="text" name="_username" class="form-control" placeholder="Masukkan Username" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            </div>
            <label class="font-weight-normal">Password</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><?php include ICON . 'password.php'; ?></span>
                </div>
                <input type="password" name="_password" class="form-control" placeholder="Masukkan Password" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Login <?php include ICON . 'right.php'; ?></button>
            <a href="<?= $url ?>" class="btn btn-danger" style="position:relative;top:-20px;"><?php include ICON . 'left.php'; ?> Kembali</a>
        </form>
    </div>


    <!-- bootstrap js -->
    <script src="asset/js/jquery.slim.min.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Data Tables Js  -->
    <script src="asset/js/datatables/jquery.dataTables.min.js"></script>
    <script src="asset/js/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="asset/js/datatables-demo.js"></script>

    <!-- Alert Js -->
    <script src="asset/js/alert.js"></script>

    <script>
        <?php
        if (isset($_SESSION['sukses'])) {
            echo "
                swal('Status','" . $_SESSION['sukses'] . "','success');";
            unset($_SESSION['sukses']);
        } elseif (isset($_SESSION['gagal'])) {
            echo "
                swal('Status','" . $_SESSION['gagal'] . "','error');";
            unset($_SESSION['gagal']);
        } elseif (isset($_SESSION['pesan'])) {
            echo "
                swal('Status','" . $_SESSION['pesan'] . "','warning');";
            unset($_SESSION['pesan']);
        }
        ?>
    </script>

</body>

</html>