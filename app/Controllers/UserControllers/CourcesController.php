<?php

namespace App\Controllers\UserControllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\RegisteredChildModel;
use App\Models\UserModel;
use App\Models\CoursesModel;

class CourcesController extends BaseController
{
    public function cources_list()
    {
        $coursesModel = new CoursesModel();
        $data['courses'] = $coursesModel->findAll();
        return view('pages/user_pannel/cources/cources', $data);
    }
    public function add_cource()
    {
        return view('pages/admin/cources/add_cource');
    }
    public function registration()
    {
        $session = \Config\Services::session();
        $userId = $session->get('userid');
        if (!$userId) {
            return redirect()->to('/login')->with('fail', 'Please login to access this page.');
        }
        $registeredChildModel = new RegisteredChildModel();
        $userModel = new UserModel();
        $coursesModel = new CoursesModel();
        // Fetch user details from UserModel
        $user = $userModel->find($userId);
        // Fetch all courses from CoursesModel
        $courses = $coursesModel->findAll();
        // Fetch registered child details from RegisteredChildModel
        $registeredChild = $registeredChildModel->where('user_id', $userId)->first();
        // Determine the profile image path
        $imagePath = !empty($registeredChild['category_img'])
            ? base_url('assets/upload/registered_form/' . $registeredChild['category_img'])
            : base_url('assets/img/user_defaultimg.png');
        // Initialize as empty arrays if no records are found
        if (!$registeredChild) {
            $registeredChild = [];
        }
        if (!$user) {
            $user = [];
        }
        if (!$courses) {
            $courses = [];
        }
        // Pass both sets of data to the view
        return view('pages/user_pannel/registration/registration_form', [
            'registeredChild' => $registeredChild,
            'user' => $user,
            'courses' => $courses,
            'imagePath' => $imagePath
        ]);
    }
    public function store_registeration()
    {
        $session = \Config\Services::session();
        $userId = $session->get('userid');
        // print_r($userId);exit;
        $model = new RegisteredChildModel();
        // Define validation rules
        $validationRules = [
            'username' => 'required',
            'fathername' => 'required',
            'email' => 'required|valid_email',
            'phone_number' => 'required|min_length[9]',
            'whatsapp' => 'required',
            'address' => 'required',
            'classes_per_week' => 'required',
            'contact_time' => 'required',
            'teacher_gender' => 'required',
            'country' => 'required',
            'state' => 'required',
            'language' => 'required',
            'courses' => 'required',
            'referred' => 'required',
            'agree_terms' => 'required'
        ];
        if (!$this->validate($validationRules)) {
            session()->setFlashdata(['fail' => 'Please fill your form correctly.']);
            return redirect()->back()->withInput();
        }
        // Collect form data
        $formData = [
            'user_id' => $userId,
            'username' => $this->request->getPost('username'),
            'fathername' => $this->request->getPost('fathername'),
            'email' => $this->request->getPost('email'),
            'gender' => $this->request->getPost('gender'),
            'birth' => $this->request->getPost('birth'),
            'phone_number' => $this->request->getPost('phone_number'),
            'whatsapp' => $this->request->getPost('whatsapp'),
            'skype' => $this->request->getPost('skype'),
            'address' => $this->request->getPost('address'),
            'classes_per_week' => $this->request->getPost('classes_per_week'),
            'contact_time' => $this->request->getPost('contact_time'),
            'teacher_gender' => $this->request->getPost('teacher_gender'),
            'country' => $this->request->getPost('country'),
            'state' => $this->request->getPost('state'),
            'language' => $this->request->getPost('language'),
            'courses' => $this->request->getPost('courses'),
            'referred' => $this->request->getPost('referred'),
            'category_img' => $this->request->getPost('category_img'),
            'agree_terms' => $this->request->getPost('agree_terms')
        ];
        // Check if the user is already registered
        $existingUser = $model->where('user_id', $userId)->first();
        if ($existingUser) {
            // User already registered
            session()->setFlashdata(['fail' => 'You are already registered']);
            return redirect()->back()->withInput();
        }
        // Insert data into the database
        $model->insert($formData);
        session()->setFlashdata(['success' => 'You are registered Successfully']);
        return redirect()->to('/user/dashboard');
    }
    public function upload_resized_images()
    {
        $width = $this->request->getPost('width');
        $height = $this->request->getPost('height');
        $image = $this->request->getFile('cover_image');
        $info       = getimagesize($image->getTempName());
        $fileWidth  = $info[0];
        $fileHeight = $info[1];
        $dimensionRule = '';
        if (!empty($width) && !empty($height)) {
            $dimensionRule = 'min_dims[' . $fileWidth . ',' . $fileHeight . ',' . $width . ',' . $height . ']';
        }
        $this->validation->setRules(
            [
                'cover_image' => 'uploaded[cover_image]|max_size[cover_image,5000]|mime_in[cover_image,image/png,image/jpg,image/jpeg,image/gif,image/bmp]|ext_in[cover_image,png,jpg,jpeg,gif,bmp]|' . $dimensionRule,
            ],
            [
                'cover_image' => [
                    'uploaded' => 'Please upload an image file (JPEG, PNG, JPG)',
                    'max_size' => 'Image size must be less than 5 MB',
                    'min_dims' => "Image dimensions must be atleast " . $width . "x" . $height,
                    'mime_in' => 'Please upload an image file (JPEG, PNG, JPG)',
                    'ext_in' => 'Please upload an image file (JPEG, PNG, JPG)',
                ],
            ]
        );
        if (!$this->validation->withRequest($this->request)->run()) {
            return $this->response->setJSON(['error' => true, 'errors' => $this->validation->getErrors()])->setStatusCode(400);
        }
        $image = $this->request->getFile('cover_image');
        $originalName = $image->getName();
        if (!empty($this->request->getPost('directory'))) {
            $directory = $this->request->getPost('directory');
        } else {
            return $this->response->setJSON(['error' => true, 'errors' => ['Provide the directory folders for image']])->setStatusCode(400);
        }
        if (!empty($this->request->getPost('dir_folder'))) {
            $subDirectory = $this->request->getPost('dir_folder');
        } else {
            return $this->response->setJSON(['error' => true, 'errors' => ['Provide the directory folders for thumbnails']])->setStatusCode(400);
        }
        if (!empty($this->request->getPost('dimensionsWithPath'))) {
            $dimensionsWithPath = $this->request->getPost('dimensionsWithPath');
        } else {
            return $this->response->setJSON(['error' => true, 'errors' => ['Provide the dimensions for thumbnails']])->setStatusCode(400);
        }
        $path = uploadResizeImage($directory, $subDirectory, $image, $dimensionsWithPath);
        $img_info = [
            'encoded_name' => $path,
            'original_name' => $originalName,
        ];
        return json_encode($img_info);
    }
    public function certificate()
    {
        return view('pages/user_pannel/certificate/certificate');
    }
}
