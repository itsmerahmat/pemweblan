<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Register extends BaseController
{
    public function index()
    {
        helper(['form']);
        return view('v_regis');
    }

    public function save()
    {
        $session = session();
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => sha1($this->request->getPost('password')),
            'nama' => $this->request->getPost('nama'),
            'role' => 'user'
        ];
        $model = new AuthModel();
        $result = $model->saveData($data);
        if ($result) {
            $session->setFlashdata('msg', 'Register Berhasil');
            return redirect()->to('/login');
        } else {
            $session->setFlashdata('error', 'Gagal Register');
            // echo "Data gagal disimpan.";
        }
    }
}
