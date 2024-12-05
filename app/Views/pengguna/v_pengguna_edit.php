<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<h2><?= $title ?></h2>
<div class="card">
    <div class="card-body">
        <?php echo form_open('pengguna/update') ?>
        <div class="row">
            <div class="col-md-6 mb-3" hidden>
                <label class="form-label">Id</label>
                <input type="text" class="form-control" name="id" value="<?= $getData->id ?>">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $getData->nama ?>">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username" value="<?= $getData->username ?>">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Role</label>
                <select class="form-select" name="role" style="height: 41px;">
                    <option value="admin" <?= $getData->role == 'admin' ? 'selected' : '' ?>>Admin</option>
                    <option value="user" <?= $getData->role == 'user' ? 'selected' : '' ?>>User</option>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>
<?= $this->endSection() ?>