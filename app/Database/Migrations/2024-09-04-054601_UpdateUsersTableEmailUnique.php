<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateUsersTableEmailUnique extends Migration
{
    public function up()
    {
        // Modify the email column to be non-unique
        $fields = [
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 191,
                'unique' => false,
            ],
        ];
        $this->forge->modifyColumn('users', $fields);
    }

    public function down()
    {
        // Revert the change: make the email column unique again
        $fields = [
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 191,
                'unique' => true,
            ],
        ];
        $this->forge->modifyColumn('users', $fields);
    }
}
