<?php

namespace App\Controllers;

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
}
