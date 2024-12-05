<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        return view('v_login');
    }

    public function auth()
    {
        helper(['form', 'url']);
        $session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $model = new AuthModel();
        $data = $model->checkData($username, sha1($password));
        if ($data) {
            $sessdata = [
                'username' => $data->username,
                'nama' => $data->nama,
                'role' => $data->role,
                'logged_in' => TRUE
            ];
            $session->set($sessdata);
            return redirect()->to('admin/dashboard');
        } else {
            $session->setFlashdata('error', 'Username/Password Salah');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
