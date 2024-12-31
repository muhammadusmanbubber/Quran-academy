<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddInstructorIdToUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'instructor_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
                'after' => 'id',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'instructor_id');
    }
}
