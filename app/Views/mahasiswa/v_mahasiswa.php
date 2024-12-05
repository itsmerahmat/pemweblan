<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between mb-3">
            <h2 class="mb-0"><?= $title ?></h2>
            <a href="<?php echo site_url('mahasiswa/tambah') ?>" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($getData as $row) { ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row->Nim ?></td>
                        <td><?php echo $row->Nama_Mhs ?></td>
                        <td><?php echo $row->Jenis_Kelamin ?></td>
                        <td><?php echo date('d/m/Y', strtotime($row->Tgl_Lahir)) ?></td>
                        <td>
                            <a href="<?php echo site_url('mahasiswa/edit/' . $row->Nim) ?>">Ubah</a>
                            |
                            <a href="<?php echo site_url('mahasiswa/delete/' . $row->Nim) ?>">Hapus</a>
                        </td>
                    </tr>
                <?php $i++;
                } ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>