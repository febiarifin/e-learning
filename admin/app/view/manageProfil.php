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
                <td>Username </td>
                <td><b><?= $username ?></b></td>
            </tr>
            <tr>
                <td>Password </td>
                <td><b><?= $password_dafault ?></b></td>
            </tr>
            <tr>
                <td>Level </td>
                <td><b><?= $levelAdmin ?></b></td>
            </tr>
        </table>
    </div>
    <div class="card-footer">
        <a href="?m=editProfil" class="btn btn-primary"><?php include ICON . 'edit.php'; ?> Edit</a>
    </div>
</div>