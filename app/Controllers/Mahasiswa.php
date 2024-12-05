<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];

        if (session()->has('validation')) {
            $data['validation'] = session('validation');
        }

        return view('mhs/v_mahasiswa_add', $data);
    }

    public function save()
    {
        $validation = \Config\Services::validation();
        $rules = [
            'nim' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NIM harus diisi',
                ],
            ],
            'umur' => 'required|integer',
            'nama' => 'required',
            'jk' => 'required',
            'tgl' => 'required|valid_date',
            'jurusan' => 'required'
        ];

        if ($this->validate($rules)) {
            echo 'Sukses, data anda valid';
            $data = array(
                "nim" => $this->request->getPost("nim"),
                "nama" => $this->request->getPost("nama"),
                "jeniskelamin" => $this->request->getPost("jk"),
                "tgl_lahir" => $this->request->getPost("tgl"),
                "umur" => $this->request->getPost("umur"),
                "jurusan" => $this->request->getPost("jurusan"),
            );

            echo '<pre>';
            print_r($data);
            echo '</pre>';
        } else {
            return redirect()->back()->withInput()->with('validation', $validation);
        }
    }

    // public function submitForm()
    // {
    //     // Setelah data berhasil disimpan atau aksi berhasil
    //     session()->setFlashdata('success', 'Form submitted successfully!');
    //     return redirect()->to('/form/success');
    // }

    public function tugas()
    {
        helper(['form']);
        $data = [];

        if (session()->has('validation')) {
            $data['validation'] = session('validation');
        }

        return view('v_user_add', $data);
    }

    public function saveLatihan()
    {
        $validation = \Config\Services::validation();
        $rules = [
            'username' => 'required',
            'email' => 'required|valid_email',
            'password' => 'required',
            'confirm-password' => 'required|matches[password]',
            'display-name' => 'required',
            'name' => 'required',
            'nickname' => 'required',
            'website' => 'required|valid_url',
            'bio' => 'required'
        ];

        if ($this->validate($rules)) {
            echo 'Sukses, data anda valid';
            $data = array(
                "username" => $this->request->getPost("username"),
                "email" => $this->request->getPost("email"),
                "password" => $this->request->getPost("password"),
                "display_name" => $this->request->getPost("display-name"),
                "name" => $this->request->getPost("name"),
                "nickname" => $this->request->getPost("nickname"),
                "website" => $this->request->getPost("website"),
                "bio" => $this->request->getPost("bio"),
            );

            echo '<pre>';
            print_r($data);
            echo '</pre>';
        } else {
            return redirect()->back()->withInput()->with('validation', $validation);
        }
    }

    public function show()
    {
        $model = new MahasiswaModel();
        $data = [
            'title' => 'Mahasiswa',
            // 'content' => 'v_mahasiswa',
            'getData' => $model->getAllData()
        ];
        return view('mahasiswa/v_mahasiswa', $data);
    }

    public function tambah()
    {
        helper(['form']);
        $data = [
            'title' => 'Form Mahasiswa',
            // 'content' => 'v_mahasiswa',
        ];
        return view('mahasiswa/v_mahasiswa_add', $data);
    }

    public function edit($id)
    {
        helper(['form']);
        $model = new MahasiswaModel();
        $data = [
            'title' => 'Ubah Mahasiswa',
            // 'content' => 'v_mahasiswa_formedit',
            'getData' => $model->getDataById($id)
        ];
        return view('mahasiswa/v_mahasiswa_edit', $data);
    }

    public function submit()
    {
        $data = array(
            'Nim' => $this->request->getPost('nim'),
            'Nama_Mhs' => $this->request->getPost('nama_mhs'),
            'Tgl_Lahir' => $this->request->getPost('tgl_lahir'),
            'Alamat' => $this->request->getPost('alamat'),
            'Jenis_Kelamin' => $this->request->getPost('jenis_kelamin')
        );

        $model = new MahasiswaModel();
        $result = $model->insertData($data);
        if ($result)
            return redirect()->to('mahasiswa');
        else
            echo "Data gagal disimpan.";
    }

    public function update()
    {
        $model = new MahasiswaModel();
        $nim = $this->request->getPost('nim');
        $data = array(
            'Nama_Mhs' => $this->request->getPost('nama_mhs'),
            'Tgl_Lahir' => $this->request->getPost('tgl_lahir'),
            'Alamat' => $this->request->getPost('alamat'),
            'Jenis_Kelamin' => $this->request->getPost('jenis_kelamin')
        );

        $result = $model->updateData($nim, $data);
        if ($result)
            return redirect()->to('mahasiswa');
        else
            echo "Data gagal diubah.";
    }

    public function delete($id)
    {
        $model = new MahasiswaModel();
        $result = $model->deleteData($id);
        if ($result)
            return redirect()->to('mahasiswa');
        else
            echo "Data gagal dihapus.";
    }

    function getJoinData()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('mahasiswa m');
        $builder->select('m.nim, m.nama_mhs, mk.nama_mk');
        $builder->join('perkuliahan p', 'p.nim=m.nim');
        $builder->join('matakuliah mk', 'mk.kode_mk=p.kode_mk');
        return $builder->get()->getResult();
    }
}
