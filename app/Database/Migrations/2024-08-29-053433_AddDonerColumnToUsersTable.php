<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDonerColumnToUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'doner' => [
                'type' => 'ENUM',
                'constraint' => ['active', 'inactive'],
                'default' => 'inactive',
                'after' => 'verified',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'doner');
    }
}
