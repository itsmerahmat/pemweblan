<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class Pengguna extends BaseController
{
    public function index()
    {
        $model = new PenggunaModel();
        $data = [
            'title' => 'Pengguna',
            'getData' => $model->getAllData()
        ];
        return view('pengguna/v_pengguna', $data);
    }

    public function tambah()
    {
        helper(['form']);
        $data = [
            'title' => 'Form Pengguna',
        ];
        return view('pengguna/v_pengguna_add', $data);
    }

    public function edit($id)
    {
        helper(['form']);
        $model = new PenggunaModel();
        $data = [
            'title' => 'Ubah Pengguna',
            'getData' => $model->getDataById($id)
        ];
        return view('pengguna/v_pengguna_edit', $data);
    }

    public function submit()
    {
        $data = array(
            'username' => $this->request->getPost('username'),
            'password' => sha1($this->request->getPost('password')),
            'nama' => $this->request->getPost('nama'),
            'role' => $this->request->getPost('role'),
        );

        $model = new PenggunaModel();
        $result = $model->insertData($data);
        if ($result)
            return redirect()->to('pengguna');
        else
            echo "Data gagal disimpan.";
    }

    public function update()
    {
        $model = new PenggunaModel();
        $id = $this->request->getPost('id');
        $data = array(
            'username' => $this->request->getPost('username'),
            'password' => sha1($this->request->getPost('password')),
            'nama' => $this->request->getPost('nama'),
            'role' => $this->request->getPost('role'),
        );

        $result = $model->updateData($id, $data);
        if ($result)
            return redirect()->to('pengguna');
        else
            echo "Data gagal diubah.";
    }

    public function delete($id)
    {
        $model = new PenggunaModel();
        $result = $model->deleteData($id);
        if ($result)
            return redirect()->to('pengguna');
        else
            echo "Data gagal dihapus.";
    }
}
