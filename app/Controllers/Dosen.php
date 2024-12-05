<?php

namespace App\Controllers;

use App\Models\DosenModel;

class Dosen extends BaseController
{
    public function index()
    {
        $model = new DosenModel();
        $data = [
            'title' => 'Dosen',
            'getData' => $model->getAllData()
        ];
        return view('Dosen/v_dosen', $data);
    }

    public function tambah()
    {
        helper(['form']);
        $data = [
            'title' => 'Form Dosen',
        ];
        return view('Dosen/v_dosen_add', $data);
    }

    public function edit($id)
    {
        helper(['form']);
        $model = new DosenModel();
        $data = [
            'title' => 'Ubah Dosen',
            'getData' => $model->getDataById($id)
        ];
        return view('Dosen/v_dosen_edit', $data);
    }

    public function submit()
    {
        $data = array(
            'Nip' => $this->request->getPost('nip'),
            'Nama_Dosen' => $this->request->getPost('nama_dosen'),
        );

        $model = new DosenModel();
        $result = $model->insertData($data);
        if ($result)
            return redirect()->to('dosen');
        else
            echo "Data gagal disimpan.";
    }

    public function update()
    {
        $model = new DosenModel();
        $nip = $this->request->getPost('nip');
        $data = array(
            'Nama_Dosen' => $this->request->getPost('nama_dosen'),
        );

        $result = $model->updateData($nip, $data);
        if ($result)
            return redirect()->to('dosen');
        else
            echo "Data gagal diubah.";
    }

    public function delete($id)
    {
        $model = new DosenModel();
        $result = $model->deleteData($id);
        if ($result)
            return redirect()->to('dosen');
        else
            echo "Data gagal dihapus.";
    }
}
