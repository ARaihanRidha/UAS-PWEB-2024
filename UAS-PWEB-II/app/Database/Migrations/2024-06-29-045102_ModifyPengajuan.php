<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifyPengajuan extends Migration
{
    public function up()
    {
        $fields = [
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
        ];

        $this->forge->addColumn('pengajuan', $fields);

        // Add foreign key constraint
        $this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->forge->dropForeignKey('pengajuan', 'pengajuan_id_user_foreign');
        $this->forge->dropColumn('pengajuan', 'id_user');
    }
}
