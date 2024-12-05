<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddAdmin extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'password' => sha1('admin'), // Hash the password
            'nama' => 'Admin',
            'role' => 'admin'
        ];

        // Using Query Builder
        $this->db->table('pengguna')->insert($data);
    }
}
