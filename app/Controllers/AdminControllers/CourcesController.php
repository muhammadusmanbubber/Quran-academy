<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;
use App\Models\CoursesModel;


class CourcesController extends BaseController
{
    public function cources_list()
    {
        $coursesModel = new CoursesModel();
        // Validate input parameters
        $input = $this->request->getGet();
        $page = max((int) ($input['page'] ?? 1), 1);
        $perpage = max((int) ($input['page_limit'] ?? 5), 1);
        // Calculate offset for pagination
        $offset = ($page - 1) * $perpage;
        // Fetch paginated courses and total count
        $builder = $coursesModel->db->table('courses');
        $total = $builder->countAllResults(false);
        $builder->orderBy('course_id', 'ASC');
        $builder->limit($perpage, $offset);
        $courses = $builder->get()->getResultArray();
        // Generate pager links
        $pager = service('pager');
        $pager_links = $pager->makeLinks($page, $perpage, $total, 'custom_pagination');
        // Add sequence number to each course
        $start_sequence_number = ($page - 1) * $perpage + 1;
        foreach ($courses as $index => &$course) {
            $course['sequence_number'] = $start_sequence_number + $index;
        }
        // Prepare data for view
        $data = [
            'courses' => $courses,
            'pager_links' => $pager_links,
        ];
        return view('pages/admin/cources/cources', $data);
    }
    public function add_cource()
    {
        return view('pages/admin/cources/add_cource');
    }
    public function save_cource()
    {
        $rules = [
            'course_name' => 'required',
            'price' => 'required',
            'course_duration' => 'required',
            'status' => 'required',
            'description' => 'required',
            'cover_image' => 'required'
        ];

        $errors = [
            'course_name' => [
                'required' => 'Please provide the course name.',
            ],
            'price' => [
                'required' => 'Please provide the price.',
            ],
            'course_duration' => [
                'required' => 'Please provide the course duration.',
            ],
            'status' => [
                'required' => 'Please provide the status.',
            ],
            'description' => [
                'required' => 'Please provide the description.',
            ],
            'cover_image' => [
                'required' => 'Please provide the cover_image.',
            ],
        ];

        // Validate the request
        if (!$this->validate($rules, $errors)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Collect form data
        $data = [
            'course_name' => $this->request->getPost('course_name'),
            'price' => $this->request->getPost('price'),
            'course_duration' => $this->request->getPost('course_duration'),
            'status' => $this->request->getPost('status'),
            'description' => $this->request->getPost('description'),
            'cover_image' => $this->request->getPost('cover_image'),
        ];

        // Insert data into the database
        $model = new CoursesModel();
        $model->insert($data);

        // Set a success message
        session()->setFlashdata('success', 'Course added successfully');

        // Redirect to the courses list
        return redirect()->to('/admin/cources/cources-list');
    }
    public function detail($course_id)
    {
        $course_id = filter_var($course_id, FILTER_SANITIZE_NUMBER_INT);
        return view('pages/admin/cources/course_detail', ['course_id' => $course_id]);
    }
    public function update_course_status()
    {
        $course_id = $this->request->getVar('course_id');
        $status = $this->request->getVar('status');

        if ($course_id && in_array($status, ['active', 'inactive'])) {
            $courseModel = new CoursesModel();
            $updated = $courseModel->update($course_id, ['status' => $status]);

            return redirect()->back()->with('message', 'Course status updated successfully');
        } else {
            return redirect()->back()->with('error', 'Invalid course ID or status');
        }
    }
    public function edit_cource($id)
    {
        $coursesModel = new CoursesModel();
        $data['course'] = $coursesModel->find($id);
        return view('pages/admin/cources/edit_cource', $data);
    }
    public function save_edit_cource($id)
    {
        $rules = [
            'course_name' => 'required',
            'price' => 'required',
            'course_duration' => 'required',
            'status' => 'required',
            'description' => 'required',
            'cover_image' => 'required'
        ];
        $errors = [
            'course_name' => [
                'required' => 'Please provide the course name.',
            ],
            'price' => [
                'required' => 'Please provide the price.',
            ],
            'course_duration' => [
                'required' => 'Please provide the course duration.',
            ],
            'status' => [
                'required' => 'Please provide the status.',
            ],
            'description' => [
                'required' => 'Please provide the description.',
            ],
            'cover_image' => [
                'required' => 'Please provide the cover image.',
            ],
        ];
        // Validate the request
        if (!$this->validate($rules, $errors)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
        // Collect form data
        $data = [
            'course_name' => $this->request->getPost('course_name'),
            'price' => $this->request->getPost('price'),
            'course_duration' => $this->request->getPost('course_duration'),
            'status' => $this->request->getPost('status'),
            'description' => $this->request->getPost('description'),
            'cover_image' => $this->request->getPost('cover_image'),
        ];
        // Update the data in the database
        $model = new CoursesModel();
        $model->update($id, $data);
        // Set a success message
        session()->setFlashdata('success', 'Course updated successfully');
        // Redirect to the courses list
        return redirect()->to('/admin/cources/cources-list');
    }
}
