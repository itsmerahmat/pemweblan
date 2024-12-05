<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<h2><?= $title ?></h2>
<div class="card">
    <div class="card-body">
        <?php echo form_open('perkuliahan/update') ?>
        <div class="row">
            <div class="col-md-6 mb-3" hidden>
                <label class="form-label">Id</label>
                <input type="text" class="form-control" name="id" value="<?= $getData->Id ?>">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Nim</label>
                <!-- <input type="text" class="form-control" name="nim" value="<?= $getData->Nim ?>"> -->
                <select class="form-select" name="nim" style="height: 41px;">
                    <?php foreach ($dataMahasiswa as $mahasiswa): ?>
                        <option value="<?= $mahasiswa->Nim ?>" <?= $getData->Nim == $mahasiswa->Nim ? 'selected' : '' ?>><?= $mahasiswa->Nama_Mhs ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Nip</label>
                <!-- <input type="text" class="form-control" name="nip" value="<?= $getData->Nip ?>"> -->
                <select class="form-select" name="nip" style="height: 41px;">
                    <?php foreach ($dataDosen as $dosen): ?>
                        <option value="<?= $dosen->Nip ?>" <?= $getData->Nip == $dosen->Nip ? 'selected' : '' ?>><?= $dosen->Nama_Dosen ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Kode Mata Kuliah</label>
                <!-- <input type="text" class="form-control" name="kode_mk" value="<?= $getData->Kode_MK ?>"> -->
                <select class="form-select" name="kode_mk" style="height: 41px;">
                    <?php foreach ($dataMataKuliah as $matakuliah): ?>
                        <option value="<?= $matakuliah->Kode_MK ?>" <?= $getData->Kode_MK == $matakuliah->Kode_MK ? 'selected' : '' ?>><?= $matakuliah->Nama_MK ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Nilai</label>
                <select class="form-select" name="nilai" style="height: 41px;">
                    <option value="A" <?= $getData->Nilai == 'A' ? 'selected' : '' ?>>A</option>
                    <option value="B" <?= $getData->Nilai == 'B' ? 'selected' : '' ?>>B</option>
                    <option value="C" <?= $getData->Nilai == 'C' ? 'selected' : '' ?>>C</option>
                    <option value="D" <?= $getData->Nilai == 'D' ? 'selected' : '' ?>>D</option>
                    <option value="E" <?= $getData->Nilai == 'E' ? 'selected' : '' ?>>E</option>
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