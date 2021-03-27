<!-- header -->
<div class="header">
    <p class="font-weight-normal">Panel-Admin ->
        <small><?= $username; ?></small>
        <img src="<?= $url ?>upload/profil/<?= $foto ?>" alt="porfil" width="40" height="40">
        <a href="?m=logout" class="btn btn-outline-primary">Logout <?php include ICON . 'logout.php'; ?></a>
    </p>
</div>
<!-- main -->
<div class="row">
    <div class="col-md-3">
        <div class="sidebar">
            <div class="card card-sidebar">
                <div class="card-header">
                    <h5>Navigasi</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="?m=home"><?php include ICON . 'home.php'; ?> Home</a>
                        </li>
                        <?php
                        if ($levelAdmin == "admin") { ?>
                            <li class="list-group-item">
                                <a href="?m=manageAdmin"><?php include ICON . 'user_plus.php'; ?> Manage Admin</a>
                            </li>
                        <?php }
                        ?>
                        <li class="list-group-item">
                            <a href="?m=manageGuru"><?php include ICON . 'user_cek.php'; ?> Manage Guru</a>
                        </li>
                        <li class="list-group-item">
                            <a href="?m=manageSiswa"><?php include ICON . 'user_many.php'; ?> Manage Siswa</a>
                        </li>
                        <li class="list-group-item">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="kelas" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php include ICON . 'door.php'; ?> Manage Kelas
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="kelas">
                                    <li class="list-group-item">
                                        <a href="?m=manageKelas"> <?php include ICON . 'add.php'; ?> Tambah Kelas</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="?m=buatKelas"> <?php include ICON . 'add.php'; ?> Buat Kelas Siswa</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="?m=daftarKelas"> <?php include ICON . 'pelajaran.php'; ?> Daftar Kelas Siswa</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="pelajaran" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php include ICON . 'pelajaran.php'; ?> Manage Pelajaran
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="pelajaran">
                                    <li class="list-group-item">
                                        <a href="?m=managePelajaran"><?php include ICON . 'add.php'; ?> Tambah Pelajaran</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="?m=buatMapel"><?php include ICON . 'add.php'; ?> Buat Mapel Kelas</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="?m=daftarMapel"><?php include ICON . 'pelajaran.php'; ?> Daftar Mapel Kelas</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <a href="?m=manageProfil"><?php include ICON . 'profil.php'; ?> Manage Profil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="main">
            <div class="card card-main">
                <div class="card-header">
                    <h5><?php echo $title; ?></h5>
                </div>
                <div class="card-body">
                    <?php include $submain; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<div class="footer">
    <center>
        <p>COPYRIGHT &copy 2021 Febi Arifin</p>
    </center>
</div>