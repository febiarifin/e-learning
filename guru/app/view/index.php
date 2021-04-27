<?php
session_start();
include 'config/url.php';
include 'config/token.php';
include 'config/timer.php';

if (!isset($_SESSION['token'])) {
    header('location: ?m=login');
}
if (isset($_SESSION['nip'], $_SESSION['password'])) {
    $nip = base64_decode($_SESSION['nip']);
    $password = base64_decode($_SESSION['password']);
    $sql = "SELECT * FROM guru WHERE nip=:nip AND password=:password";
    $stmt = $con->prepare($sql);
    $params = array(
        ":nip" => $nip,
        ":password" => $password
    );
    $stmt->execute($params);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $nama = $row['nama'];
    $jeniskelamin = $row['jeniskelamin'];
    $tempat_lahir = $row['tempat_lahir'];
    $tanggal_lahir = $row['tanggal_lahir'];
    $alamat = $row['alamat'];
    $telepon = $row['telepon'];
    $foto = $row['foto'];
} else {
    header('location: ?m=login');
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <!-- botstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Data Tables Css -->
    <link rel="stylesheet" href="asset/js/datatables/dataTables.bootstrap4.css">
    <!-- my css -->

    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>

    <!-- import main -->

    <?php include $main; ?>

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

    <!-- Data Tables Js  -->
    <script src="asset/js/datatables/jquery.dataTables.min.js"></script>
    <script src="asset/js/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="asset/js/datatables-demo.js"></script>

    <!-- Alert Js -->
    <script src="asset/js/alert.js"></script>

    <script>
        <?php
        if (isset($_SESSION['username'])) {
            echo "
                swal('Login Berhasil','Hallo guru " . base64_decode($_SESSION['username']) . "','info');";
            unset($_SESSION['username']);
        } elseif (isset($_SESSION['sukses'])) {
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
            // validasi
            (function() {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })
            })()
        // modal
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>

</body>

</html>