<?php

namespace App\Controllers\TeacherControllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\RegisteredChildModel;

class DashboardController extends BaseController
{
    public function profile()
    {
        return view('pages/teacher_pannel/teacher_profile');
    }
    public function profile_backup()
    {
        $isUserLoggedIn = session('isUserLoggedIn');
        if (!$isUserLoggedIn) {
            session()->setFlashdata(['fail' => 'Please Login']);
            return redirect()->back()->withInput();
        }

        $userid = session('userid');
        $userModel = new UserModel();
        $registeredChildModel = new RegisteredChildModel();

        // Fetch the user's record from RegisteredChildModel
        $registeredChildRecord = $registeredChildModel->where('user_id', $userid)->first();

        // Fetch the user's record from UserModel
        $userRecord = $userModel->where('id', $userid)->first();

        // Fetch the course title
        $courseTitle = $registeredChildModel->getCourseTitle($registeredChildRecord['courses']);

        // Determine the profile image path
        $userimg = !empty($registeredChildRecord['category_img']) ? $registeredChildRecord['category_img'] : '';
        $imagePath = !empty($userimg)
            ? base_url('assets/upload/registered_form/' . $userimg)
            : base_url('assets/img/user_defaultimg.png');

        // Prepare the data for the view
        $data = [
            'registeredChildRecord' => $registeredChildRecord,
            'userRecord' => $userRecord,
            'profileImage' => $imagePath,
            'courseTitle' => $courseTitle, // Include the course title
        ];
        // print_r($data);exit;
        return view('pages/user_pannel/user/profile', $data);
    }
    public function edit_profile()
    {
        $userModel = new UserModel();
        $isUserLoggedIn = session('isUserLoggedIn');
        if ($isUserLoggedIn) {
            $userid = session('userid');
        } else {
            session()->setFlashdata(['fail' => 'Please Login']);
            return redirect()->back()->withInput();
        }
        $data['userrecord'] = $userModel->where('id', $userid)->first();
        return view('pages/user_pannel/user/edit_profile', $data);
    }
    public function save_edit_profile()
    {
        //print_r($_POST);exit;
        $first_name = $this->request->getPost('first_name');
        //  $last_name = $this->request->getPost('last_name');
        $gender = $this->request->getPost('gender');
        $date_of_birth = $this->request->getPost('date_of_birth');
        $email = $this->request->getPost('email');
        $phone_no = $this->request->getPost('phone_no');
        $country_id = intval($this->request->getPost('country_id'));
        //$state = intval($this->request->getPost('state'));
        //$password = $_POST['password'];
        $address = $this->request->getPost('address');
        $profile_img = $this->request->getPost('profile_img');
        if ($date_of_birth == '') {
            $date_of_birth = null;
        }
        $user_data = [
            'firstname' => $first_name,
            'lastname' => $first_name,
            'username' => $first_name,
            'gender' => $gender,
            'dateofbirth' => $date_of_birth,
            'email' => $email,
            'mobile' => $phone_no,
            'country_id' => $country_id,
            //'state_id' => $state,
            //'password_hash' =>  password_hash($password, PASSWORD_DEFAULT),
            'address' => $address,
            'cover' => $profile_img,
            'profile_pic' => $profile_img,
        ];

        $rules = [
            'first_name' => 'required',
            // 'last_name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'country_id' => 'required',
            //'state' => 'required',
            //'password' => 'required',
        ];

        $errors = [

            'first_name' => [
                'required' => 'Please provide first name.',
            ],
            // 'last_name' => [
            //     'required' => 'Please provide last name.',
            // ],
            'gender' => [
                'required' => 'Please provide gender.',
            ],
            'email' => [
                'required' => 'Please provide email.',
            ],
            'phone_no' => [
                'required' => 'Please provide phone number.',
            ],
            'country_id' => [
                'required' => 'Please provide country.',
            ],
            // 'state' => [
            //     'required' => 'Please provide state.',
            // ],
            // 'password' => [
            //     'required' => 'Please provide password.',
            // ],

        ];

        $this->validation->setRules($rules, $errors);


        // Check if the form data passes validation
        if (!$this->validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
        }

        $isUserLoggedIn = session('isUserLoggedIn');
        if ($isUserLoggedIn) {
            $userid = session('userid');
        }
        $user_model = new UserModel();
        $update_user = $user_model->update($userid, $user_data);

        if (!empty($profile_img)) {
            $this->session->set('user_profileimage', $profile_img);
        }

        if ($update_user) {
            session()->setFlashdata(['success' => 'User Updated Successfully']);
            return redirect()->to('/admin/profile');
        } else {
            session()->setFlashdata(['fail' => 'User not Updated']);
            return redirect()->back()->withInput();
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
}
