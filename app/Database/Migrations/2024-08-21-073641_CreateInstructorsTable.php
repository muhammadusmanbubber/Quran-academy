<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInstructorsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            
            // Personal Information
            'instructor_id'           => ['type' => 'INT', 'auto_increment' => true, 'unsigned' => true],
            'instructor_name'         => ['type' => 'VARCHAR', 'constraint' => 255],
            'email'                   => ['type' => 'VARCHAR', 'constraint' => 255],
            'phone_no'                => ['type' => 'VARCHAR', 'constraint' => 20],
            'date_of_birth'           => ['type' => 'DATE', 'null' => true],
            'gender'                  => ['type' => 'VARCHAR', 'constraint' => 10],
            'address'                 => ['type' => 'TEXT', 'null' => true],
            'country'                 => ['type' => 'VARCHAR', 'constraint' => 100],
            'profile_image'           => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'id_card_no'              => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'id_card_pic_front'       => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'id_card_pic_back'        => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],

            // Educational/Professional Information
            'course_id'               => ['type' => 'INT', 'unsigned' => true],
            'specialization'          => ['type' => 'VARCHAR', 'constraint' => 255],
            'language'                => ['type' => 'VARCHAR', 'constraint' => 50],
            'english_level'           => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'other_skills'            => ['type' => 'TEXT', 'null' => true],
            'certificate'             => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],

            // Employment Details
            'current_employment'      => ['type' => 'BOOLEAN', 'default' => false],
            'desired_pay'             => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'availability_schedule'   => ['type' => 'TEXT', 'null' => true],
            'bio'                     => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'status'                  => ['type' => 'VARCHAR', 'constraint' => 20],

            // Social and Referrals
            'facebook'                => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'whatsapp'                => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'tiktok'                  => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'youtube'                 => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'instagram'               => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'twiter'                  => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'referred'                => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],

            // Timestamps
            'created_at'              => ['type' => 'DATETIME', 'null' => true],
            'updated_at'              => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('instructor_id', true);
        $this->forge->createTable('instructors');
    }

    public function down()
    {
        $this->forge->dropTable('instructors');
    }
}
