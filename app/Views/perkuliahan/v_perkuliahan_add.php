<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<h2><?= $title ?></h2>
<div class="card">
    <div class="card-body">
        <?php echo form_open('perkuliahan/submit') ?>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Nim</label>
                <!-- <input type="text" class="form-control" name="nim"> -->
                <select class="form-select" name="nim" style="height: 41px;">
                    <?php foreach ($dataMahasiswa as $mahasiswa): ?>
                        <option value="<?= $mahasiswa->Nim ?>"><?= $mahasiswa->Nama_Mhs ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Nip</label>
                <!-- <input type="text" class="form-control" name="nip"> -->
                <select class="form-select" name="nip" style="height: 41px;">
                    <?php foreach ($dataDosen as $dosen): ?>
                        <option value="<?= $dosen->Nip ?>"><?= $dosen->Nama_Dosen ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Kode Mata Kuliah</label>
                <!-- <input type="text" class="form-control" name="kode_mk"> -->
                <select class="form-select" name="kode_mk" style="height: 41px;">
                    <?php foreach ($dataMataKuliah as $matakuliah): ?>
                        <option value="<?= $matakuliah->Kode_MK ?>"><?= $matakuliah->Nama_MK ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Nilai</label>
                <select class="form-select" name="nilai" style="height: 41px;">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
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