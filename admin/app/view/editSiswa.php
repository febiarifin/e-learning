<div>
    <form action="?m=prosesEditSiswa" method="post" enctype="multipart/form-data">
        <input type="hidden" name="nisLama" value="<?= $nis; ?>">
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">NIS Siswa</label>
            <input type="text" name="nis" class="form-control" id="validationCustom03" value="<?= $nis; ?>" required>
            <div class="invalid-feedback">
                Masukkan NIS
            </div>
        </div>
        <div class="col-md-8">
            <label for="validationCustom03" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" id="validationCustom03" value="<?= $nama; ?>" required>
            <div class="invalid-feedback">
                Masukkan Nama Lengkap
            </div>
        </div>
        <div class="form-group col-md-2">
            <label for="validationCustom04" class="form-label">Jenis Kelamin</label>
            <select class="form-select form-control" name="jeniskelamin" id="validationCustom04" required>
                <option selected disabled value=""><?= $jeniskelamin; ?></option>
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
        </div>
        <div class="row" style="margin-left:0px;">
            <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" id="validationCustom03" value="<?= $tempat_lahir; ?>" required>
                <div class="invalid-feedback">
                    Tempat Lahir
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" id="validationCustom03" value="<?= $tanggal_lahir; ?>" required>
            </div>
        </div>
        <div class="col-md-8">
            <label for="validationCustom03" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="validationCustom03" cols="30" rows="3" required><?= $alamat; ?></textarea>
            <div class="invalid-feedback">
                Masukkan Alamat
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Nomor Telepon</label>
            <input type="text" name="telepon" class="form-control" id="validationCustom03" value="<?= $telepon; ?>" required>
            <div class="invalid-feedback">
                Masukkan Nomor Telepon
            </div>
        </div>
        <div class="col-md-8">
            <label for="validationCustom03" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" id="validationCustom03" value="<?= $password_siswa; ?>" required>
            <div class="invalid-feedback">
                Masukkan Password
            </div>
        </div>
        <br>
        <div>
            <a href="?m=manageSiswa" class="btn btn-danger"><?php include ICON . 'cancel.php'; ?> Batal</a>
            <button type="submit" class="btn btn-success"><?php include ICON . 'save.php'; ?> Simpan</button>
        </div>
    </form>
</div>