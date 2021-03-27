<div>
    <form action="?m=prosesEditProfil" method="post" enctype="multipart/form-data">
        <input type="hidden" name="usernameLama" value="<?= $username; ?>">
        <input type="hidden" name="foto" value="<?= $foto; ?>">
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="validationCustom03" value="<?= $username; ?>" required>
            <div class="invalid-feedback">
                Buat username baru
            </div>
        </div>
        <div class="col-md-8">
            <label for="validationCustom03" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" id="validationCustom03" value="<?= $password_dafault; ?>" required>
            <div class="invalid-feedback">
                Buat password baru
            </div>
        </div>

        <div class="form-group col-md-6">
            <label for="validationCustom04" class="form-label">Foto profil</label>
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