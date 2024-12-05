<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Nim' => [
                'type'           => 'VARCHAR',
                'constraint'     => 18,
            ],
            'Nama_Mhs' => [
                'type'           => 'VARCHAR',
                'constraint'     => 25,
            ],
            'Tgl_Lahir' => [
                'type'           => 'DATE',
            ],
            'Alamat' => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'Jenis_Kelamin' => [
                'type'           => 'ENUM',
                'constraint'     => ['Laki-laki', 'Perempuan'],
            ],
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);

        $this->forge->addKey('Nim', true);
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa');
    }
}
