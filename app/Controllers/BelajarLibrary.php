<?php

namespace App\Controllers;
use App\Libraries\CustomLib;
use App\Libraries\Indonesian;

class BelajarLibrary extends BaseController
{

    private $session;

    public function __construct() {
        $this->session = session();
    }

    public function index(){
        return view('v_belajar_library');
    }
    
    public function login()
    {
        $newData = [
            'username' => 'johndoe',
            'email' => 'johndoe@some-sit.com',
            'logged_in' => true
        ];
        $this->session->set($newData);
        return view('v_belajar_library');
    }

    public function cobaLib(){
        $lib = new CustomLib();
        echo $lib->nama_saya();
        echo "<br/>";
        echo $lib->nama_kamu('Jono');
    }

    public function logout(){
        $this->session->destroy();
        return redirect()->to('/belajar-library');
    }

    public function tugas() {
        $lib = new Indonesian();
        
        $angka = 120;
        echo $lib->terbilang($angka);
        echo '<br>';

        $timestamp = '2021-08-01 12:00:00';
        echo $lib->tanggal($timestamp);
        echo '<br>';
    }


}
