<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<h2><?= $title ?></h2>
<div class="card">
    <div class="card-body">
        <?php echo form_open('dosen/submit') ?>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Nip</label>
                <input type="text" class="form-control" name="nip">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Nama Dosen</label>
                <input type="text" class="form-control" name="nama_dosen">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>
<?= $this->endSection() ?>