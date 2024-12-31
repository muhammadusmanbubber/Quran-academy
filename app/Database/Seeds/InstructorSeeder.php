<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InstructorSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'course_id'              => 3,
                'role_id'                => 2,
                'language'               => 'Arabic',
                'facebook_account'       => 'http://usmankhan',
                'gender'                 => 'Male',
                'date_of_birth'          => '2000-01-01',
                'qualification'          => 'Bachelor\'s Degree',
                'specialization'         => 'Mufti',
                'experience'             => 5,
                'languages'              => 'English, Urdu',
                'availability_schedule' => 'Evening time',
                'profile_picture'        => 'assets/img/instructors/farhan.png',
                'bio'                    => 'Experienced Mufti with a deep understanding of Islamic teachings.',
                'certification'          => 'Islamic Studies Certification',
                'address'                => 'Jampur',
                'country'                => 'Pakistan',
                'english_language_level' => 'Poor',
                'other_skills'           => 'English/Urdu',
                'resume'                 => 'assets/resumes/resume.pdf',
                'status'                 => 'Active',
                'joining_date'           => '2024-04-04',
                'rating'                 => 4.5,
                'fees'                   => 1500.00,
                'notes'                  => 'No additional notes.',
                'created_at'             => '2024-04-04 00:00:00',
                'updated_at'             => '2024-04-04 00:00:00',
            ],
        ];

        // Using Query Builder
        $this->db->table('instructors')->insertBatch($data);
    }
}
