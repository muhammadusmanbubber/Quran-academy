<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'role_id' => 1,
                'username' => 'user',
                'email' => 'khanusman4949@gmail.com',
                'password' => password_hash('Admin123_', PASSWORD_DEFAULT),
                'phone_number' => '09719923222',
                'verified' => 1,
            ],
            [
                'role_id' => 2,
                'username' => 'teacher',
                'email' => 'usman@tecishsol.com',
                'password' => password_hash('Admin123_', PASSWORD_DEFAULT),
                'phone_number' => '09719923222',
                'verified' => 1,
            ],
            [
                'role_id' => 3,
                'username' => 'Admin',
                'email' => 'khanusman8685@gmail.com',
                'password' => password_hash('Admin123_', PASSWORD_DEFAULT),
                'phone_number' => '03317344949',
                'verified' => 1,
            ],
        ];

        // Load the model
        $usermodel = new UserModel();

        foreach ($data as $userData) {
            $usermodel->insert($userData);
        }
    }
}
