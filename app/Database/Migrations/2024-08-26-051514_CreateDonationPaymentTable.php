<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDonationPaymentTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'              => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id'         => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'donation_id'         => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'amount'          => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
            ],
            'payment_date'    => [
                'type'           => 'DATETIME',
            ],
            'payment_method'  => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'transaction_id'  => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'payment_status'  => [
                'type'           => 'ENUM',
                'constraint'     => ['Pending', 'Completed', 'Failed', 'Refunded'],
                'default'        => 'Pending',
            ],
            'created_at'      => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'      => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('donation_payment');
    }

    public function down()
    {
        $this->forge->dropTable('donation_payment');
    }
}
