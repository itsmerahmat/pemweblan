<?php

function belajar($data) {
    return "tulisan ini dipanggil melalui helper belajar, berikut data yang dikirimkan <b>$data</b><br/>";
}

if(!function_exists('tanggal')){
    function tanggal($tgl) {
        $bulan = [
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        ];

        $pecah = explode('.', $tgl);
        $newTgl = $pecah[2] . " " . $bulan[$pecah[1]] . " " . $pecah[0];
        return $newTgl;
    }
}