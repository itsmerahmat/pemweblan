<?php
$name = [
    'name' => 'Nama',
    'placeholder' => 'Masukan nama anda'
];

$opsi = [
    'sma' => 'Sekolah Menengah Atas',
    's1' => "Strata 1"
];

echo form_open(base_url('/belajar-helper/simpan-belajar'));
echo 'Nama: ';
echo form_input($name);
echo "</br>";
echo 'Pendidikan: ';
echo form_dropdown('pendidikan', $opsi, 'sma');
echo form_submit('simpan', 'Simpan');
echo form_close();
echo $data;