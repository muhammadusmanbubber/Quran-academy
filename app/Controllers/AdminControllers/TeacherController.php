<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\InstructorModel;
use App\Models\CoursesModel;

class TeacherController extends BaseController
{
    public function teacher_list()
    {
        $InstructorsModel = new InstructorModel();
        $data['teachers'] = $InstructorsModel->findAll();
        return view('pages/admin/teachers/teacher_list', $data);
    }
    public function add_teacher($instructor_id)
    {
        return view('pages/admin/teachers/add_teacher', ['instructor_id' => $instructor_id]);
    }
    public function save_teacher_form()
    {
        // print_r($instructor_id);exit;
        $session = session();
        // Retrieve input data
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $_POST['password'];
        $confirm_password = $this->request->getPost('confirm_password');
        $phone_number = $this->request->getPost('phone_number');
        $instructor_id = $this->request->getPost('instructor_id');

        // user model 
        $user_model = new UserModel();
        $check_user = $user_model->where('email', $email)->first();
        // Email already exists
        if (!empty($check_user)) {
            session()->setFlashdata(['fail' => 'Email already exists.']);
            return redirect()->back()->withInput();
        }
        // Email does not exist, proceed with registration
        if ($password == $confirm_password) {
            $activation_hash = rand(100000, 999999);
            // Prepare data for insertion
            $data = [
                'role_id' => 2,
                'instructor_id' => $instructor_id,
                'username' => $username,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'phone_number' => $phone_number,
                'activation_hash' => $activation_hash,
                'verified' => 1,
            ];
            // Insert user data
            $insert = $user_model->insert($data);
            if ($insert) {
                // Flash success message and redirect
                $session->setFlashdata('success', 'Teacher add Successfuly');
                return redirect()->to('admin/users/user-list');
            } else {
                // Flash fail message and redirect
                $session->setFlashdata('fail', 'User not created. Please try again.');
                return redirect()->back()->withInput();
            }
        }
    }
    public function teacher_profile()
    {
        return view('pages/admin/teachers/teacher_profile');
    }
    public function applicants()
    {
        $InstructorModel = new InstructorModel();
        // Validate input parameters
        $input = $this->request->getGet();
        $page = max((int) ($input['page'] ?? 1), 1);
        $perpage = max((int) ($input['page_limit'] ?? 5), 1);
        // Calculate offset for pagination
        $offset = ($page - 1) * $perpage;
        // Fetch paginated courses and total count
        $builder = $InstructorModel->db->table('instructors');
        $total = $builder->countAllResults(false);
        $builder->orderBy('instructor_id', 'ASC');
        $builder->limit($perpage, $offset);
        $instructors = $builder->get()->getResultArray();
        // Generate pager links
        $pager = service('pager');
        $pager_links = $pager->makeLinks($page, $perpage, $total, 'custom_pagination');
        // Add sequence number to each course
        $start_sequence_number = ($page - 1) * $perpage + 1;
        foreach ($instructors as $index => &$course) {
            $course['sequence_number'] = $start_sequence_number + $index;
        }
        // Prepare data for view
        $data = [
            'instructors' => $instructors,
            'pager_links' => $pager_links,
        ];
        return view('pages/admin/teachers/applicants', $data);
    }
    public function applicants_detail($instructor_id)
    {
        $model = new InstructorModel();
        $instructor = $model->find($instructor_id);

        if ($instructor) {
            return view('pages/admin/teachers/applicant_detail', ['instructor' => $instructor]);
        } else {
            // Handle the case where the instructor is not found
            return redirect()->back()->with('error', 'Instructor not found.');
        }
    }
    public function attendance()
    {
        return view('pages/admin/teachers/attendance');
    }
    public function salary_slip()
    {
        return view('pages/admin/teachers/salary_slip');
    }
    public function shedule()
    {
        return view('pages/admin/teachers/shedule');
    }
}
