<?php

namespace App\Controllers;

use App\Models\BelajarModel;

class Belajar extends BaseController
{
    public function index(): string
    {
        return view('belajar_view', [
            'test' => "Hello World"
        ]);
    }

    public function kali($angka1, $angka2): string
    {
        $hasil = $angka1 * $angka2;
        return view('belajar_view', [
            'test' => "$angka1 x $angka2 = $hasil"
        ]);
    }

    public function bagi($angka1, $angka2): string
    {
        $hasil = $angka1 / $angka2;
        return view('belajar_view', [
            'test' => "$angka1 / $angka2 = $hasil"
        ]);
    }

    public function pesan(): string
    {
        return view('belajar_view', [
            'test' => "Belajar Codeigniter",
            'pesan' => 'Saya sedang belajar View pada Codeigniter'
        ]);
    }

    public function latihan()
    {
        $belajarModel = new BelajarModel();
        $data = $belajarModel->getSource();
        return view('LatihanSatuView', ['data' => $data]);
    }
}
