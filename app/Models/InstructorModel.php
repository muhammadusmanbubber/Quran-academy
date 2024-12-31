<?php

namespace App\Models;

use CodeIgniter\Model;

class InstructorModel extends Model
{
    protected $table      = 'instructors';
    protected $primaryKey = 'instructor_id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'instructor_id',
        'instructor_name',
        'email',
        'phone_no',
        'date_of_birth',
        'gender',
        'address',
        'country',
        'profile_image',
        'id_card_no',
        'id_card_pic_front',
        'id_card_pic_back',
        'course_id',
        'specialization',
        'language',
        'english_level',
        'other_skills',
        'certificate',
        'current_employment',
        'desired_pay',
        'availability_schedule',
        'bio',
        'status',
        'facebook',
        'whatsapp',
        'tiktok',
        'youtube',
        'instagram',
        'twiter',
        'referred',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
