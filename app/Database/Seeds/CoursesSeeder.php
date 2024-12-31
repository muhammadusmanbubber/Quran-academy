<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CoursesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'course_name'    => 'Introduction to Quranic Studies',
                'description'    => 'A comprehensive course on the basics of Quranic studies including history, interpretation, and memorization techniques.',
                'course_duration' => '4 months',
                'price'          => 150.00,
                'cover_image'    => 'assets/img/courses/cover1.png',
                'status'         => 'active',
                'created_at'     => '2024-08-09 00:00:00',
                'updated_at'     => '2024-08-09 00:00:00',
            ],
            [
                'course_name'    => 'Advanced Quranic Recitation',
                'description'    => 'An advanced course focused on perfecting the art of Quranic recitation with Tajweed rules and techniques.',
                'course_duration' => '5 months',
                'price'          => 200.00,
                'cover_image'    => 'assets/img/courses/cover2.png',
                'status'         => 'active',
                'created_at'     => '2024-08-09 00:00:00',
                'updated_at'     => '2024-08-09 00:00:00',
            ],
            [
                'course_name'    => 'Islamic Jurisprudence (Fiqh)',
                'description'    => 'An in-depth course on Islamic jurisprudence covering principles, sources, and applications of Islamic law.',
                'course_duration' => '6 months',
                'price'          => 250.00,
                'cover_image'    => 'assets/img/courses/cover3.png',
                'status'         => 'active',
                'created_at'     => '2024-08-09 00:00:00',
                'updated_at'     => '2024-08-09 00:00:00',
            ],
        ];

        // Using Query Builder
        $this->db->table('courses')->insertBatch($data);
    }
}
