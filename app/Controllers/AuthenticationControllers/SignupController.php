<?php

namespace App\Controllers\AuthenticationControllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class SignupController extends BaseController
{
    public function signup_submit()
    {
        $session = session();
        // Define validation rules
        $rules = [
            'username' => 'required|max_length[15]',
            'email' => 'required|valid_email',
            'phone_number' => 'required|numeric|min_length[10]|max_length[15]',
            'password' => 'required|min_length[8]',
            'confirm_password' => 'required|matches[password]'
        ];

        // Define custom error messages
        $errors = [
            'username' => [
                'required' => 'Please provide your name.',
                'max_length' => 'Name cannot exceed 15 characters.'
            ],
            'email' => [
                'required' => 'Please provide your email address.',
                'valid_email' => 'Please provide a valid email address.'
            ],
            'phone_number' => [
                'required' => 'Please provide your phone number.',
                'numeric' => 'Phone number must contain only numbers.',
                'min_length' => 'Phone number must be at least 10 digits long.',
                'max_length' => 'Phone number cannot exceed 15 digits.'
            ],
            'password' => [
                'required' => 'Please provide a password.',
                'min_length' => 'Password must be at least 8 characters long.'
            ],
            'confirm_password' => [
                'required' => 'Please confirm your password.',
                'matches' => 'Passwords do not match.'
            ]
        ];
        // Run validation
        $this->validation->setRules($rules, $errors);
        // Check if the form data passes validation
        if (!$this->validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
        }
        // Retrieve input data
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $_POST['password'];
        $confirm_password = $this->request->getPost('confirm_password');
        $phone_number = $this->request->getPost('phone_number');
        $user_model = new UserModel();
        $check_user = $user_model->where('email', $email)->first();

        if (!empty($check_user)) {
            // Check if the email is verified or not:
            if ($check_user['verified'] == 0) {
                // Email exists but not verified
                session()->setFlashdata(['fail' => 'Email already exists but not verified. Please check your email for verification Code.']);
                return redirect()->to('/verify_email');
            } else {
                // Email already exists
                session()->setFlashdata(['fail' => 'Email already exists.']);
                return redirect()->back()->withInput();
            }
        }
        // Email does not exist, proceed with registration
        if ($password == $confirm_password) {
            $activation_hash = rand(100000, 999999);
            // Prepare data for insertion
            $data = [
                'role_id' => 1,
                'username' => $username,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'phone_number' => $phone_number,
                'activation_hash' => $activation_hash,
            ];
            // Insert user data
            $insert = $user_model->insert($data);
            if ($insert) {
                // Send verification email (you need to implement this function)
                helper('common_helper');
                account_verify_send_email($email, $activation_hash, $username);
                // Flash success message and redirect
                $session->setFlashdata('success', 'We sent you a verification code, please check your email.');
                return redirect()->to('/verify_email');
            } else {
                // Flash fail message and redirect
                $session->setFlashdata('fail', 'User not created. Please try again.');
                return redirect()->back()->withInput();
            }
        }
    }
    public function verify_emailform()
    {
        $email = $this->request->getPost('email');
        $activateHash = $this->request->getPost('activation_hash');
        $rules = [
            'email' => 'required|valid_email',
            'activation_hash' => 'required',
        ];
        $errors = [
            'email' => [
                'required' => 'Please provide email.',
                'valid_email' => 'Please provide a valid email address.',
            ],
            'activation_hash' => [
                'required' => 'Please provide verification code.',
            ],
        ];
        $this->validation->setRules($rules, $errors);

        if (!$this->validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
        }
        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();
        if (!$user) {
            session()->setFlashdata(['fail' => 'This email does not exist.']);
            return redirect()->back()->withInput();
        }
        if ($user['activation_hash'] === $activateHash) {
            $userModel->update($user['id'], ['verified' => true]);
            return redirect()->to('/login')->with('success', 'Email verified successfully. You can now login.');
        } else {
            session()->setFlashdata(['fail' => 'Invalid verification code. Please try again.']);
            return redirect()->back()->withInput();
        }
    }
}
