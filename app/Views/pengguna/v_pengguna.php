<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between mb-3">
            <h2 class="mb-0"><?= $title ?></h2>
            <a href="<?php echo site_url('pengguna/tambah') ?>" class="btn btn-primary">Tambah Pengguna</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($getData as $row) { ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row->nama ?></td>
                        <td><?php echo $row->username ?></td>
                        <td><?php echo $row->role ?></td>
                        <td>
                            <a href="<?php echo site_url('pengguna/edit/' . $row->id) ?>">Ubah</a>
                            |
                            <a href="<?php echo site_url('pengguna/delete/' . $row->id) ?>">Hapus</a>
                        </td>
                    </tr>
                <?php $i++;
                } ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>