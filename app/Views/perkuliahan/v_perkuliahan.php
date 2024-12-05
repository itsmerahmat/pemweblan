<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between mb-3">
            <h2 class="mb-0"><?= $title ?></h2>
            <a href="<?php echo site_url('perkuliahan/tambah') ?>" class="btn btn-primary">
                Tambah Perkuliahan
            </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>NIP</th>
                    <th>Kode Mata Kuliah</th>
                    <th>Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($getData as $row) { ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row->Nim ?></td>
                        <td><?php echo $row->Nip ?></td>
                        <td><?php echo $row->Kode_MK ?></td>
                        <td><?php echo $row->Nilai ?></td>
                        <td>
                            <a href="<?php echo site_url('perkuliahan/edit/' . $row->Id) ?>">Ubah</a>
                            |
                            <a href="<?php echo site_url('perkuliahan/delete/' . $row->Id) ?>">Hapus</a>
                        </td>
                    </tr>
                <?php $i++;
                } ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>