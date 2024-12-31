<?php

namespace App\Controllers\AuthenticationControllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index_backup()
    {
        $email = $this->request->getPost('email');
        $password = $_POST['password'];
        // Start Form Validation
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];
        $errors = [
            'email' => [
                'required' => 'Please provide email.',
            ],
            'password' => [
                'required' => 'Please provide password.',
            ],
        ];
        $this->validation->setRules($rules, $errors);
        // Check if the form data passes validation
        if (!$this->validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
        }
        // End Form Validation
        $user = new UserModel();
        $check_user = $user->where('email', $email)->first();
        if (!empty($check_user)) {
            // Check if user's status is false
            if ($check_user['status'] == 'inactive') {
                session()->setFlashdata(['fail' => 'Your account has been deactivated. Please contact with Administration.']);
                return redirect()->back()->withInput();
            }
            // Check if user's email is verified
            if ($check_user['verified'] == 0) {
                // Email exists but not verified
                session()->setFlashdata(['fail' => 'Email Already Exists but not verified. Please check your email for verification Code.']);
                return redirect()->to('/verify_email');
            }
            if (password_verify($password, $check_user['password'])) {
                $this->session->set('isUserLoggedIn', true);
                $this->session->set('userid', $check_user['id']);
                $this->session->set('username', $check_user['username']);
                // Start checking login user role
                $getuserrole = getuserrecord($check_user['role_id']);
                $this->session->set('role_id', $getuserrole['id']);
                //admin
                if ($getuserrole['id'] == 3) {
                    return redirect()->to('/admin/dashboard');
                    //student
                } else if ($getuserrole['id'] == 1) {
                    return redirect()->to('/user/dashboard');
                    //student
                } else if ($getuserrole['id'] == 2) {
                    return redirect()->to('/teachers/profile');
                }
            } else {
                session()->setFlashdata(['fail' => 'Password not matched']);
                return redirect()->back()->withInput();
            }
        } else {
            session()->setFlashdata(['fail' => 'Email not found']);
            return redirect()->back()->withInput();
        }
    }
    public function index()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        // Form validation rules
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];
        $errors = [
            'email' => [
                'required' => 'Please provide email.',
            ],
            'password' => [
                'required' => 'Please provide password.',
            ],
        ];
        $this->validation->setRules($rules, $errors);
        // Check if the form data passes validation
        if (!$this->validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
        }
        $userModel = new UserModel();
        $check_user = $userModel->where('email', $email)->first();
        if ($check_user) {
            if ($check_user['status'] == 'inactive') {
                session()->setFlashdata('fail', 'Your account has been deactivated. Please contact Administration.');
                return redirect()->back()->withInput();
            }
            if ($check_user['verified'] == 0) {
                session()->setFlashdata('fail', 'Email is not verified. Please check your email for the verification code.');
                return redirect()->to('/verify_email');
            }
            if (password_verify($password, $check_user['password'])) {
                $this->session->set('isUserLoggedIn', true);
                $this->session->set('userid', $check_user['id']);
                $this->session->set('username', $check_user['username']);
                $this->session->set('role_id', $check_user['role_id']);
                // Redirect based on role
                switch ($check_user['role_id']) {
                    case 1:
                        return redirect()->to('/user/dashboard');
                    case 2:
                        return redirect()->to('/teachers/profile');
                    case 3:
                        return redirect()->to('/admin/dashboard');
                    default:
                        return redirect()->to('/');
                }
            } else {
                session()->setFlashdata('fail', 'Password does not match.');
                return redirect()->back()->withInput();
            }
        } else {
            session()->setFlashdata('fail', 'Email not found.');
            return redirect()->back()->withInput();
        }
    }
}
