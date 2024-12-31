<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\RoleModel;
use App\Models\StudentAssigned;

class UserController extends BaseController
{
    public function user_list()
    {
        $userModel = new UserModel();
        $roleModel = new RoleModel();
        // Validate input parameters
        $input = $this->request->getGet();
        $page = max((int) ($input['page'] ?? 1), 1);
        $perpage = max((int) ($input['page_limit'] ?? 7), 1);
        // Calculate offset for pagination
        $offset = ($page - 1) * $perpage;
        // Fetch paginated users with role_id = 1 and total count
        $builder = $userModel->db->table('users');
        $builder->select('users.*, roles.title as role_title');
        $builder->join('roles', 'roles.id = users.role_id');
        $builder->where('users.role_id', 1);
        $total = $builder->countAllResults(false);
        $builder->orderBy('users.id', 'ASC');
        $builder->limit($perpage, $offset);
        $users = $builder->get()->getResultArray();
        // Generate pager links
        $pager = service('pager');
        $pager_links = $pager->makeLinks($page, $perpage, $total, 'custom_pagination');
        // Add sequence number to each user
        $start_sequence_number = ($page - 1) * $perpage + 1;
        foreach ($users as $index => &$user) {
            $user['sequence_number'] = $start_sequence_number + $index;
        }
        // Fetch all Teachers with role_id = 2 for the dropdown
        $dropdownBuilder = $userModel->db->table('users');
        $dropdownBuilder->select('users.id, users.username');
        $dropdownBuilder->where('users.role_id', 2);
        $dropdown_users = $dropdownBuilder->get()->getResultArray();
        // Fetch all roles
        $roles = $roleModel->findAll();
        // Prepare data for view
        $data = [
            'roles' => $roles,
            'user_list' => $users,
            'dropdown_users' => $dropdown_users,
            'pager_links' => $pager_links,
        ];
        return view('pages/admin/user/user_list', $data);
    }
    public function add_user()
    {
        return view('pages/admin/user/add_user');
    }
    public function save_user_form()
    {
        // print_r('hskfs');exit;
        $session = session();
        // Retrieve input data
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $_POST['password'];
        $confirm_password = $this->request->getPost('confirm_password');
        $phone_number = $this->request->getPost('phone_number');
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
                'role_id' => 1,
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
                $session->setFlashdata('success', 'Student Create Successfuly');
                return redirect()->to('admin/users/user-list');
            } else {
                // Flash fail message and redirect
                $session->setFlashdata('fail', 'User not created. Please try again.');
                return redirect()->back()->withInput();
            }
        }
    }
    public function user_profile()
    {
        $session = \Config\Services::session();
        $userId = $session->get('userid');
        $userModel = new UserModel();
        $user = $userModel->find($userId);
        return view('pages/admin/user/user_profile', ['user' => $user]);
    }
    public function attendance()
    {
        return view('pages/admin/attendance/attendance');
    }
    public function save_assigned_student()
    {
        $userId = $this->request->getPost('user_id');
        $instructorId = $this->request->getPost('instructor_id');
        // Validate form input
        if (!$userId || !$instructorId) {
            return redirect()->back()->with('error', 'Invalid data submitted.');
        }
        $data = [
            'user_id' => $userId,
            'instructor_id' => $instructorId,
            'created_at' => date('Y-m-d H:i:s')
        ];
        // print_r($data);exit;
        $assignedStudentModel = new StudentAssigned();
        $assignedStudentModel->insert($data);
        return redirect()->to(base_url('admin/users/user-list'))->with('success', 'Student assigned successfully.');
    }
}
