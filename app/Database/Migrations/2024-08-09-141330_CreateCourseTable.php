<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCourseTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'course_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'course_name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'description' => [
                'type'           => 'TEXT',
            ],
            'course_duration' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => true,
            ],
            'start_date' => [
                'type'           => 'DATE',
            ],
            'end_date' => [
                'type'           => 'DATE',
            ],
            'price' => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
                'default'        => 0.00,
            ],
            'cover_image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'status' => [
                'type'           => 'ENUM',
                'constraint'     => ['active', 'inactive', 'completed'],
                'default'        => 'active',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);

        $this->forge->addKey('course_id', true);
        $this->forge->createTable('courses');
    }

    public function down()
    {
        $this->forge->dropTable('courses');
    }
}
