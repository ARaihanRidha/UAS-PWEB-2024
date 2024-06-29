<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up(){
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => FALSE,
            ],
            'password' => [
                'type' => 'text',
                'null' => FALSE,
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => FALSE,
            ],
            'no_handphone' => [
                'type' => 'int',
                'constraint' => 15,
                'null' => FALSE,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => FALSE,
            ],
            'nim' => [
                'type' => 'int',
                'constraint' => 20,
                'null' => FALSE,
            ],
            'program_studi' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => FALSE,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => TRUE
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => TRUE
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('users');
    }

    public function down(){
        $this->forge->dropTable('users');
    }
}
