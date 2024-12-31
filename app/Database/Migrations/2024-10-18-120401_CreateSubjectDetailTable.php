<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSubjectDetailTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'detail' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'fee' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
        ]);

        $this->forge->addKey('user_id', true);
        $this->forge->createTable('subjects_detail');
    }

    public function down()
    {
        $this->forge->dropTable('subjects_detail');
    }
}
