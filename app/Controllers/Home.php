<?php

namespace App\Controllers;

use App\Models\CoursesModel;
use App\Models\InstructorModel;
use App\Models\UserModel;
use App\Models\SubjectModel;

class Home extends BaseController
{
    public function index()
    {
        $coursesModel = new CoursesModel();
        $data['courses'] = $coursesModel->findAll();
        return view('pages/landing_pages/index', $data);
    }
    public function signup()
    {
        return view('pages/auth/signup');
    }
    public function verify_email()
    {
        return view('pages/auth/verify_email');
    }
    public function login()
    {
        return view('pages/auth/login');
    }
    public function products()
    {
        return view('pages/landing_pages/products');
    }
    public function donation()
    {
        return view('pages/landing_pages/donation');
    }
    public function donation_form()
    {
        $userModel = new UserModel();
        $userId = session()->get('userid');
        $userData = $userModel->find($userId);
        $data = [
            'username' => $userData['username'],
            'email' => $userData['email'],
            'phone_number' => $userData['phone_number'],
        ];
        return view('pages/landing_pages/donation_form', $data);
    }
    public function jobs()
    {
        return view('pages/landing_pages/jobs');
    }
    public function jobs_form()
    {
        $coursesModel = new CoursesModel();
        $courses = $coursesModel->findAll();
        return view('pages/landing_pages/job_form', [
            'courses' => $courses
        ]);
    }
    public function save_jobs_form()
    {
        $validationRules = [
            'instructor_name' => 'required',
            'email' => 'required|valid_email',
            'phone_no' => 'required|min_length[9]',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'language' => 'required',
            'whatsapp' => 'required',
            'certificate' => 'required',
            'specialization' => 'required',
            'english_level' => 'required',
            'course_id' => 'required',
            'desired_pay' => 'required',
            'availability_schedule' => 'required',
            'referred' => 'required',
            'bio' => 'required',
            'agree_terms' => 'required',
            'current_employment' => 'required',
            'id_card_no' => 'required',
        ];
        // form validation message
        if (!$this->validate($validationRules)) {
            session()->setFlashdata(['fail' => 'Please fill your form correctly.']);
            return redirect()->back()->withInput();
        }
        // Collect form data
        $data = [
            'instructor_name' => $this->request->getPost('instructor_name'),
            'email' => $this->request->getPost('email'),
            'phone_no' => $this->request->getPost('phone_no'),
            'date_of_birth' => $this->request->getPost('date_of_birth'),
            'gender' => $this->request->getPost('gender'),
            'address' => $this->request->getPost('address'),
            'country' => $this->request->getPost('country'),
            'state' => $this->request->getPost('state'),
            'language' => $this->request->getPost('language'),
            'whatsapp' => $this->request->getPost('whatsapp'),
            'certificate' => $this->request->getPost('certificate'),
            'specialization' => $this->request->getPost('specialization'),
            'other_skills' => $this->request->getPost('other_skills'),
            'english_level' => $this->request->getPost('english_level'),
            'course_id' => $this->request->getPost('course_id'),
            'desired_pay' => $this->request->getPost('desired_pay'),
            'availability_schedule' => $this->request->getPost('availability_schedule'),
            'referred' => $this->request->getPost('referred'),
            'facebook' => $this->request->getPost('facebook'),
            'instagram' => $this->request->getPost('instagram'),
            'youtube' => $this->request->getPost('youtube'),
            'twiter' => $this->request->getPost('twiter'),
            'id_card_no' => $this->request->getPost('id_card_no'),
            'current_employment' => $this->request->getPost('current_employment'),
            'bio' => $this->request->getPost('bio'),
            'profile_image' => $this->request->getPost('profile_image'),
            'id_card_pic_front' => $this->request->getPost('id_card_pic_front'),
            'id_card_pic_back' => $this->request->getPost('id_card_pic_back')
        ];
        // Check if an instructor with the same ID card number or email already exists
        $model = new InstructorModel();
        $existingByIdCard = $model->where('id_card_no', $this->request->getPost('id_card_no'))->first();
        $existingByEmail = $model->where('email', $this->request->getPost('email'))->first();
        if ($existingByIdCard) {
            // ID card number already exists
            session()->setFlashdata(['fail' => 'An instructor with this ID card number already exists.']);
            return redirect()->back()->withInput();
        }
        // Email already exists
        if ($existingByEmail) {
            session()->setFlashdata(['fail' => 'An instructor with this email already exists.']);
            return redirect()->back()->withInput();
        }
        // Insert data into the database
        $model->insert($data);
        // Redirect with success message
        session()->setFlashdata(['success' => 'Your application has been submitted successfully.We will verify your application and call back you soon.']);
        return redirect()->to('/jobs-form');
    }
    public function detail($serviceId)
    {
        $serviceId = filter_var($serviceId, FILTER_SANITIZE_STRING);
        return view('pages/landing_pages/detail_page', ['serviceId' => $serviceId]);
    }
    public function course_detail($course_id)
    {
        $course_id = filter_var($course_id, FILTER_SANITIZE_NUMBER_INT);
        return view('pages/landing_pages/course_detail', ['course_id' => $course_id]);
    }



    // --------for test purpos function------------------ 
    public function show_form()
    {
        return view('pages/landing_pages/form');
    }
    public function form_submit()
    {
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $phone_number = $this->request->getPost('phone_number');
        $name = $this->request->getPost('name');
        $detail = $this->request->getPost('detail');
        $fee = $this->request->getPost('fee');
        $data1 = [
            'username' => $username,
            'email' => $email,
            'phone_number' => $phone_number,
        ];
        // print_r($data);exit;
        $user_model = new UserModel();
        $insert1 = $user_model->insert($data1);
        $data2 = [
            'user_id' => $insert1,
            'name' => $name,
            'detail' => $detail,
            'fee' => $fee,
        ];
        // print_r($data2);exit;
        $SubjectModel = new SubjectModel();
        $subject_data = $SubjectModel->insert($data2);
        // to fetch data and show into the table 
        $builder = $SubjectModel->db->table('subjects_detail');
        $builder->select('subjects_detail.*, users.username as username, users.email as email, users.phone_number as phone_number');
        $builder->join('users', 'users.id = subjects_detail.user_id');
        $users = $builder->get()->getResultArray();
        $data = [
            'user_detail' => $users,
        ];
        // print_r($data);exit;
        return view('pages/landing_pages/form', $data);
    }
}