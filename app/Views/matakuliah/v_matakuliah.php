<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between mb-3">
            <h2 class="mb-0"><?= $title ?></h2>
            <a href="<?php echo site_url('matakuliah/tambah') ?>" class="btn btn-primary">Tambah Mata Kuliah</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Mata Kuliah</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($getData as $row) { ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row->Kode_MK ?></td>
                        <td><?php echo $row->Nama_MK ?></td>
                        <td><?php echo $row->Sks ?></td>
                        <td>
                            <a href="<?php echo site_url('matakuliah/edit/' . $row->Kode_MK) ?>">Ubah</a>
                            |
                            <a href="<?php echo site_url('matakuliah/delete/' . $row->Kode_MK) ?>">Hapus</a>
                        </td>
                    </tr>
                <?php $i++;
                } ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>