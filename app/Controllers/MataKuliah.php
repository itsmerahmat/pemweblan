<?php

namespace App\Controllers;

use App\Models\MataKuliahModel;

class MataKuliah extends BaseController
{
    public function index()
    {
        $model = new MataKuliahModel();
        $data = [
            'title' => 'Mata Kuliah',
            'getData' => $model->getAllData()
        ];
        return view('matakuliah/v_matakuliah', $data);
    }

    public function tambah()
    {
        helper(['form']);
        $data = [
            'title' => 'Form Mata Kuliah',
        ];
        return view('matakuliah/v_matakuliah_add', $data);
    }

    public function edit($id)
    {
        helper(['form']);
        $model = new MataKuliahModel();
        $data = [
            'title' => 'Ubah Mata Kuliah',
            'getData' => $model->getDataById($id)
        ];
        return view('matakuliah/v_matakuliah_edit', $data);
    }

    public function submit()
    {
        $data = array(
            'Kode_MK' => $this->request->getPost('kode_mk'),
            'Nama_MK' => $this->request->getPost('nama_mk'),
            'Sks' => $this->request->getPost('sks'),
        );

        $model = new MataKuliahModel();
        $result = $model->insertData($data);
        if ($result)
            return redirect()->to('matakuliah');
        else
            echo "Data gagal disimpan.";
    }

    public function update()
    {
        $model = new MataKuliahModel();
        $Kode_MK = $this->request->getPost('kode_mk');
        $data = array(
            'Nama_MK' => $this->request->getPost('nama_mk'),
            'Sks' => $this->request->getPost('sks'),
        );

        $result = $model->updateData($Kode_MK, $data);
        if ($result)
            return redirect()->to('matakuliah');
        else
            echo "Data gagal diubah.";
    }

    public function delete($id)
    {
        $model = new MataKuliahModel();
        $result = $model->deleteData($id);
        if ($result)
            return redirect()->to('matakuliah');
        else
            echo "Data gagal dihapus.";
    }
}
