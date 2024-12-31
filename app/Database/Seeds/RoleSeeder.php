<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\RoleModel;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'user',
                'description' => '',
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'title' => 'teacher',
                'description' => '',
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'title' => 'admin',
                'description' => '',
                'created_by' => 1,
                'updated_by' => 1
            ],
        ];

        // Load the model
        $rolemodel = new RoleModel();

        // Loop through the data and insert each set
        foreach ($data as $roleData) {
            $rolemodel->insert($roleData);
        }
    }
}
