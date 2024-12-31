<?php

namespace App\Controllers\AuthenticationControllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class ForgetpasswordController extends BaseController
{
    public function forget()
    {
        return view('pages/auth/forget_password');
    }
    public function forget_passwordform()
    {
        $email = $this->request->getPost('email');
        $user = new UserModel();
        $user = $user->where('email', $email)->first();
        if (!empty($user)) {
            $reset_link = base_url('change_password/?userid=' . $user['id']);
            $username = $user['username'];
            helper('common_helper');
            resetpassword_send_email($email, $reset_link, $username);
            session()->setFlashdata(['success' => 'Check your email for update password']);
            return redirect()->back();
        } else {
            session()->setFlashdata(['fail' => 'Email not found']);
            return redirect()->back()->withInput();
        }
    }
    public function change_password()
    {
        $user_id = $this->request->getGET('userid');
        $user = new UserModel();
        $user = $user->where('id', $user_id)->first();
        if (!empty($user)) {

            return view('pages/auth/change_password');
        } else {
            session()->setFlashdata(['fail' => 'No record found']);
            return redirect()->back()->withInput();
        }
    }
    public function change_password_form($id)
    {
        // print_r($_POST['password']);exit;
        $user_model = new UserModel();
        $password = $_POST['password'];
        $user_data = [
            'password' =>  password_hash($password, PASSWORD_DEFAULT),
            'force_password_reset' => 0,
        ];
        $update_user = $user_model->update($id, $user_data);
        if ($update_user) {
            session()->setFlashdata(['success' => 'Password updated successfully']);
            return redirect()->to('login');
        } else {
            session()->setFlashdata(['fail' => 'Password not updated']);
            return redirect()->to('change_password/?userid=' . $id);
        }
    }
}
