<div>
    <form action="?m=prosesTambahAdmin" method="post" enctype="multipart/form-data">
        <div>
            <label for="validationCustomUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend"><?php include ICON . 'user.php'; ?></span>
                <input type="text" name="username" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Masukkan username.
                </div>
            </div>
        </div>
        <div>
            <label for="validationCustomUsername" class="form-label">Password</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend"><?php include ICON . 'password.php'; ?></span>
                <input type="password" name="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Masukkan Password.
                </div>
            </div>
        </div>
        <br>
        <div>
            <a href="?m=manageAdmin" class="btn btn-danger"><?php include ICON . 'cancel.php'; ?> Batal</a>
            <button type="submit" class="btn btn-success"><?php include ICON . 'save.php'; ?> Simpan</button>
        </div>
    </form>
</div>