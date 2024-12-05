<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Perkuliahan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Nim' => [
                'type'           => 'VARCHAR',
                'constraint'     => 18,
            ],
            'Kode_MK' => [
                'type'           => 'VARCHAR',
                'constraint'     => 6,
            ],
            'Nip' => [
                'type'           => 'VARCHAR',
                'constraint'     => 18,
            ],
            'Nilai' => [
                'type'           => 'CHAR',
                'constraint'     => 1,
            ],
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
        
        $this->forge->addKey('Nim', true);
        $this->forge->addKey('Kode_MK', true);
        $this->forge->addKey('Nip', true);
        $this->forge->addForeignKey('Nim', 'mahasiswa', 'Nim');
        $this->forge->addForeignKey('Kode_MK', 'matakuliah', 'Kode_MK');
        $this->forge->addForeignKey('Nip', 'dosen', 'Nip');
        $this->forge->createTable('perkuliahan');
    }

    public function down()
    {
        $this->forge->dropTable('perkuliahan');
    }
}
