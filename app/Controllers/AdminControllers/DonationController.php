<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;
use App\Models\DonationModel;
use App\Models\DonationPaymentModel;
use App\Models\UserModel;

class DonationController extends BaseController
{
    public function poor_people()
    {
        $donation = new DonationModel();
        // Validate input parameters
        $input = $this->request->getGet();
        $page = max((int) ($input['page'] ?? 1), 1);
        $perpage = max((int) ($input['page_limit'] ?? 5), 1);
        // Calculate offset for pagination
        $offset = ($page - 1) * $perpage;
        // Fetch paginated donations and total count
        $builder = $donation->db->table('donations');
        $total = $builder->countAllResults(false);
        $builder->orderBy('id', 'ASC');
        $builder->limit($perpage, $offset);
        $donations = $builder->get()->getResultArray();
        // Generate pager links
        $pager = service('pager');
        $pager_links = $pager->makeLinks($page, $perpage, $total, 'custom_pagination');
        // Add sequence number to each course
        $start_sequence_number = ($page - 1) * $perpage + 1;
        foreach ($donations as $index => &$donation) {
            $donation['sequence_number'] = $start_sequence_number + $index;
        }
        // Prepare data for view
        $data = [
            'donations' => $donations,
            'pager_links' => $pager_links,
        ];
        return view('pages/admin/donation/donation_category', $data);
    }
    public function add_category()
    {
        return view('pages/admin/donation/add_category');
    }
    public function save_category()
    {
        $rules = [
            'title' => 'required',
            'status' => 'required',
            'description' => 'required',
            'images' => 'required'
        ];

        $errors = [
            'title' => [
                'required' => 'Please provide the course name.',
            ],
            'status' => [
                'required' => 'Please provide the status.',
            ],
            'description' => [
                'required' => 'Please provide the description.',
            ],
            'images' => [
                'required' => 'Please provide the image.',
            ],
        ];

        // Validate the request
        if (!$this->validate($rules, $errors)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Collect form data
        $data = [
            'title' => $this->request->getPost('title'),
            'status' => $this->request->getPost('status'),
            'description' => $this->request->getPost('description'),
            'images' => $this->request->getPost('images'),
        ];

        // Insert data into the database
        $model = new DonationModel();
        $model->insert($data);

        // Set a success message
        session()->setFlashdata('success', 'Donation Category added successfully');

        // Redirect to the courses list
        return redirect()->to('/admin/donation/donation-category-list');
    }
    public function donation_payment()
    {
        $donationModel = new DonationModel();
        $donationPaymentModel = new DonationPaymentModel();
        // Fetch total donors (users with donations)
        $totalDonors = $donationPaymentModel->distinct()->select('user_id')->countAllResults();
        // Fetch total donations per category
        $donationCategories = $donationModel->select('title')->findAll();
        $donationsByCategory = [];
        foreach ($donationCategories as $category) {
            $donationsByCategory[$category['title']] = $donationPaymentModel
                ->join('donations', 'donation_payment.donation_id = donations.id')
                ->where('donations.title', $category['title'])
                ->selectSum('donation_payment.amount')
                ->get()
                ->getRow()
                ->amount;
        }
        // Fetch recent donations with user info
        $recentDonations = $donationPaymentModel
            ->select('donation_payment.*, users.username, users.email, users.phone_number, donations.title as donation_category')
            ->join('users', 'donation_payment.user_id = users.id')
            ->join('donations', 'donation_payment.donation_id = donations.id')
            ->orderBy('donation_payment.payment_date', 'DESC')
            ->findAll(10); // Limiting to 10 recent donations
        // Pass data to the view
        $data = [
            'totalDonors' => $totalDonors,
            'donationsByCategory' => $donationsByCategory,
            'recentDonations' => $recentDonations,
        ];
        return view('pages/admin/donation/donation_payment', $data);
    }

    // public function houses_donation()
    // {
    //     return view('pages/admin/donation/houses_donation');
    // }
    // public function our_donation()
    // {
    //     return view('pages/admin/donation/our_donation');
    // }
}
