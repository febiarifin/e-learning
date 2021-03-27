<div>
    <form action="?m=prosesEditProfil&username=<?= $nama ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="nip" value="<?= $nip; ?>">
        <input type="hidden" name="password" value="<?= $password; ?>">
        <div class="form-group col-md-6">
            <label for="validationCustom04" class="form-label">Pilih Foto profil</label>
            <input type="file" name="foto" class="form-control" id="validationCustom03" required>
            <p><small>*maksimal <b>1 Mb</b></small></p>
        </div>
        <br>
        <div>
            <a href="?m=manageProfil" class="btn btn-danger"><?php include ICON . 'cancel.php'; ?> Batal</a>
            <button type="submit" class="btn btn-success"><?php include ICON . 'save.php'; ?> Simpan</button>
        </div>
    </form>
</div>