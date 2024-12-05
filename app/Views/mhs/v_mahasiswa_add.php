<!DOCTYPE html>
<html>

<head>
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <?php if (isset($validation)): ?>
        <div style="color: red;">
            <?php foreach ($validation->getErrors() as $error): ?>
                <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php echo form_open('mahasiswa/save', 'id="myform"'); ?>

    <?php echo form_label('NIM:', 'nim'); ?>
    <?php echo form_input(array('id' => 'nim', 'name' => 'nim')); ?><br><br>

    <?php echo form_label('Nama:', 'nama'); ?>
    <?php echo form_input(array('id' => 'nama', 'name' => 'nama')); ?><br><br>

    <?php echo form_label('Jenis Kelamin:', 'jk'); ?><br>
    <?php
    echo form_radio(array(
        'name' => 'jk',
        'id' => 'jk_l',
        'value' => 'L',
        'checked' => true
    ));
    echo form_label('Laki-laki', 'jk_l');

    echo form_radio(array(
        'name' => 'jk',
        'id' => 'jk_p',
        'value' => 'P'
    ));
    echo form_label('Perempuan', 'jk_p');
    ?><br><br>

    <?php echo form_label('Tanggal Lahir:', 'tgl'); ?>
    <?php echo form_input(array('type' => 'date', 'id' => 'tgl', 'name' => 'tgl')); ?><br><br>

    <?php echo form_label('Umur:', 'umur'); ?>
    <?php echo form_input(array('type' => 'number', 'id' => 'umur', 'name' => 'umur')); ?><br><br>

    <?php echo form_label('Jurusan:', 'jurusan'); ?>
    <?php echo form_input(array('id' => 'jurusan', 'name' => 'jurusan')); ?><br><br>

    <?php echo form_submit('submit', 'Simpan'); ?>

    <?php echo form_close(); ?>

</body>

</html>