<?php

namespace App\Controllers;

use App\Models\DosenModel;
use App\Models\MahasiswaModel;
use App\Models\MataKuliahModel;
use App\Models\PerkuliahanModel;

class Perkuliahan extends BaseController
{
    public function index()
    {
        $model = new PerkuliahanModel();
        $data = [
            'title' => 'Perkuliahan',
            'getData' => $model->getAllData()
        ];
        return view('perkuliahan/v_perkuliahan', $data);
    }

    public function tambah()
    {
        helper(['form']);
        $dataMahasiswa = new MahasiswaModel();
        $dataDosen = new DosenModel();
        $dataMataKuliah = new MataKuliahModel();
        $data = [
            'title' => 'Form Perkuliahan',
            'dataMahasiswa' => $dataMahasiswa->getAllData(),
            'dataDosen' => $dataDosen->getAllData(),
            'dataMataKuliah' => $dataMataKuliah->getAllData()
        ];
        return view('perkuliahan/v_perkuliahan_add', $data);
    }

    public function edit($id)
    {
        helper(['form']);
        $model = new PerkuliahanModel();
        $dataMahasiswa = new MahasiswaModel();
        $dataDosen = new DosenModel();
        $dataMataKuliah = new MataKuliahModel();
        $data = [
            'title' => 'Ubah Perkuliahan',
            'dataMahasiswa' => $dataMahasiswa->getAllData(),
            'dataDosen' => $dataDosen->getAllData(),
            'dataMataKuliah' => $dataMataKuliah->getAllData(),
            'getData' => $model->getDataById($id)
        ];
        return view('perkuliahan/v_perkuliahan_edit', $data);
    }

    public function submit()
    {
        $data = array(
            'Nim' => $this->request->getPost('nim'),
            'Nip' => $this->request->getPost('nip'),
            'Kode_MK' => $this->request->getPost('kode_mk'),
            'Nilai' => $this->request->getPost('nilai'),
        );

        $model = new PerkuliahanModel();
        $result = $model->insertData($data);
        if ($result)
            return redirect()->to('perkuliahan');
        else
            echo "Data gagal disimpan.";
    }

    public function update()
    {
        $model = new PerkuliahanModel();
        $Id = $this->request->getPost('id');
        $data = array(
            'Nim' => $this->request->getPost('nim'),
            'Nip' => $this->request->getPost('nip'),
            'Kode_MK' => $this->request->getPost('kode_mk'),
            'Nilai' => $this->request->getPost('nilai'),
        );

        $result = $model->updateData($Id, $data);
        if ($result)
            return redirect()->to('perkuliahan');
        else
            echo "Data gagal diubah.";
    }

    public function delete($id)
    {
        $model = new PerkuliahanModel();
        $result = $model->deleteData($id);
        if ($result)
            return redirect()->to('perkuliahan');
        else
            echo "Data gagal dihapus.";
    }
}
