<!-- header -->
<div class="header">
    <p class="font-weight-normal">Panel-Siswa ->
        <small><?= $nama; ?></small>
        <img src="<?= $url ?>upload/profil/<?= $foto ?>" alt="porfil" width="40" height="40">
        <a href="?m=logout&username=<?= $nama ?>" class="btn btn-outline-primary">Logout <?php include ICON . 'logout.php'; ?></a>
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
                        <li class="list-group-item">
                            <a href="?m=pelajaran"><?php include ICON . 'pelajaran.php'; ?> Pelajaran</a>
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