<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between mb-3">
            <h2 class="mb-0"><?= $title ?></h2>
            <a href="<?php echo site_url('dosen/tambah') ?>" class="btn btn-primary">Tambah Dosen</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nip</th>
                    <th>Nama Dosen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($getData as $row) { ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row->Nip ?></td>
                        <td><?php echo $row->Nama_Dosen ?></td>
                        <td>
                            <a href="<?php echo site_url('dosen/edit/' . $row->Nip) ?>">Ubah</a>
                            |
                            <a href="<?php echo site_url('dosen/delete/' . $row->Nip) ?>">Hapus</a>
                        </td>
                    </tr>
                <?php $i++;
                } ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>