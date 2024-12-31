<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRegisteredChildTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => [
                'type'              => 'BIGINT',
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'user_id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
                'null' => true,
            ],
            'username'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'fathername'        => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'email'             => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'gender'            => [
                'type'              => 'ENUM',
                'constraint'        => ['Male', 'Female', 'Other'],
            ],
            'birth'             => [
                'type'              => 'DATE',
            ],
            'phone_number'      => [
                'type'              => 'VARCHAR',
                'constraint'        => '15',
            ],
            'whatsapp'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '15',
                'null'              => true,
            ],
            'skype'             => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'null'              => true,
            ],
            'address'           => [
                'type'              => 'TEXT',
            ],
            'classes_per_week'  => [
                'type'              => 'INT',
                'constraint'        => '11',
            ],
            'contact_time'      => [
                'type'              => 'ENUM',
                'constraint'        => ['Morning', 'Day', 'Evening'],
            ],
            'teacher_gender'    => [
                'type'              => 'ENUM',
                'constraint'        => ['Male', 'Female', 'Anyone'],
            ],
            'country'           => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'state'             => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'language'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'courses'           => [
                'type'              => 'TEXT',
            ],
            'referred'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'category_img'      => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'null'              => true,
            ],
            'agree_terms'       => [
                'type'              => 'BOOLEAN',
                'default'           => false,
            ],
            'created_at'        => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'updated_at'        => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('registered_child');
    }

    public function down()
    {
        $this->forge->dropTable('registered_child');
    }
}
