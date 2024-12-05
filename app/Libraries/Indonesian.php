<?php

namespace App\Libraries;

class Indonesian
{
    /**
     * Konversi angka ke format terbilang Bahasa Indonesia
     * Contoh: 123 -> seratus dua puluh tiga
     */
    public function terbilang($angka)
    {
        $bilangan = array(
            '',
            'satu',
            'dua',
            'tiga',
            'empat',
            'lima',
            'enam',
            'tujuh',
            'delapan',
            'sembilan',
            'sepuluh',
            'sebelas'
        );

        if ($angka < 12) {
            return $bilangan[$angka];
        } elseif ($angka < 20) {
            return $bilangan[$angka - 10] . ' belas';
        } elseif ($angka < 100) {
            return $bilangan[floor($angka / 10)] . ' puluh ' . $bilangan[$angka % 10];
        } elseif ($angka < 200) {
            return 'seratus ' . $this->terbilang($angka - 100);
        } elseif ($angka < 1000) {
            return $bilangan[floor($angka / 100)] . ' ratus ' . $this->terbilang($angka % 100);
        }

        return 'angka terlalu besar';
    }

    /**
     * Format tanggal ke Bahasa Indonesia
     */
    public function tanggal($timestamp = '', $tampil_hari = false)
    {
        if (empty($timestamp)) {
            $timestamp = time();
        } elseif (!is_numeric($timestamp)) {
            $timestamp = strtotime($timestamp);
        }

        $hari = array(
            'Minggu',
            'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu'
        );

        $bulan = array(
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );

        $tanggal = date('j', $timestamp);
        $bulan = $bulan[date('n', $timestamp) - 1];
        $tahun = date('Y', $timestamp);

        $format = "$tanggal $bulan $tahun";
        if ($tampil_hari) {
            $format = $hari[date('w', $timestamp)] . ', ' . $format;
        }

        return $format;
    }
}
