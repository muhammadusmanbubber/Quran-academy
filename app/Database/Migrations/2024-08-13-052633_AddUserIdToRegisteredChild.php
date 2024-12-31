<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserIdToRegisteredChild extends Migration
{
    public function up()
    {
        $this->forge->addColumn('registered_child', [
            'user_id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
                'after' => 'id', // Place the column after the 'id' column
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('registered_child', 'user_id');
    }
}
