<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MataKuliah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Kode_MK' => [
                'type'           => 'VARCHAR',
                'constraint'     => 6,
            ],
            'Nama_MK' => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'Sks' => [
                'type'           => 'INT',
                'constraint'     => 2,
            ],
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);

        $this->forge->addKey('Kode_MK', true);
        $this->forge->createTable('matakuliah');
    }

    public function down()
    {
        $this->forge->dropTable('matakuliah');
    }
}
