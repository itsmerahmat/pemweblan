<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<h2><?= $title ?></h2>
<div class="card">
    <div class="card-body">
        <?php echo form_open('matakuliah/submit') ?>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Kode Mata Kuliah</label>
                <input type="text" class="form-control" name="kode_mk">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Nama Mata Kuliah</label>
                <input type="text" class="form-control" name="nama_mk">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">SKS</label>
                <input type="text" class="form-control" name="sks">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>
<?= $this->endSection() ?>