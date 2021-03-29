<center>
    <img src="<?= $url ?>upload/profil/<?= $foto ?>" alt="Profil" width="200" height="200" style="border-radius: 100%;box-shadow: 0px 2px 3px black;">
</center>
<br>
<div class="card">
    <div class="card-header">
        <h6>Data diri : </h6>
    </div>
    <div class="card-body">
        <table cellpadding="10" cellspacing="10">
            <tr>
                <td>NIS </td>
                <td><b><?= $nis ?></b></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td><b><?= $nama ?></b></td>
            </tr>
            <tr>
                <td>Jenis kelamin </td>
                <td><b><?= $jeniskelamin ?></b></td>
            </tr>
            <tr>
                <td>Tempat Lahir </td>
                <td><b><?= $tempat_lahir ?></b></td>
            </tr>
            <tr>
                <td>Tanggal Lahir </td>
                <td><b><?= $tanggal_lahir ?></b></td>
            </tr>
            <tr>
                <td>Alamat </td>
                <td><b><?= $alamat ?></b></td>
            </tr>
            <tr>
                <td>Telepon </td>
                <td><b><?= $telepon ?></b></td>
            </tr>
            <tr>
                <td>Kelas </td>
                <td><b><?= $kelas ?></b></td>
            </tr>
            <tr>
                <td>Password </td>
                <td><b><?= $password ?></b></td>
            </tr>
        </table>
    </div>
    <div class="card-footer">
        <a href="?m=editProfil" class="btn btn-primary"><?php include ICON . 'edit.php'; ?> Edit Foto</a>
    </div>
</div>