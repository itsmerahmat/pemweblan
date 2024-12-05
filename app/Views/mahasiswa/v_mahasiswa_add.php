<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<h2><?= $title ?></h2>
<div class="card">
    <div class="card-body">
        <?php echo form_open('mahasiswa/submit') ?>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">NIM</label>
                <input type="text" class="form-control" name="nim">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nama_mhs">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jenis_kelamin" style="height: 41px;">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>
<?= $this->endSection() ?>