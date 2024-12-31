<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateCoursesTable extends Migration
{
    public function up()
    {
        // Drop 'start_date' and 'end_date' fields
        $this->forge->dropColumn('courses', ['start_date', 'end_date']);

        // Add 'course_duration' field
        $this->forge->addColumn('courses', [
            'course_duration' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => true,
                'after'          => 'description',
            ],
        ]);
    }

    public function down()
    {
        // Re-add 'start_date' and 'end_date' fields
        $this->forge->addColumn('courses', [
            'start_date' => [
                'type'           => 'DATE',
                'null'           => true,
            ],
            'end_date' => [
                'type'           => 'DATE',
                'null'           => true,
            ],
        ]);

        // Drop 'course_duration' field
        $this->forge->dropColumn('courses', 'course_duration');
    }
}
