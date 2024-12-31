<?php
namespace App\Models;

use CodeIgniter\Model;

class RegisteredChildModel extends Model
{
    protected $table      = 'registered_child';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'user_id',
        'username',
        'fathername',
        'email',
        'gender',
        'birth',
        'phone_number',
        'whatsapp',
        'skype',
        'address',
        'classes_per_week',
        'contact_time',
        'teacher_gender',
        'country',
        'state',
        'language',
        'courses',
        'referred',
        'category_img',
        'agree_terms'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [];

    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getCourseTitle($courseId)
    {
        $courseModel = new \App\Models\CoursesModel();
        // Ensure the course_id is being queried correctly
        $course = $courseModel->where('course_id', $courseId)->first();
        return $course ? $course['course_name'] : '';
    }
}