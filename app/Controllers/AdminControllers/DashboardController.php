<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;
use App\Models\RegisteredChildModel;
use App\Models\CoursesModel;
use App\Models\InstructorModel;
use App\Models\DonationModel;
use App\Models\DonationPaymentModel;
use App\Models\UserModel;
use App\Models\StudentAssigned;
use App\Models\BankModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $courseModel = new CoursesModel();
        $donationCategory = new DonationModel();
        $donationPayment = new DonationPaymentModel();
        $instructorModel = new InstructorModel();
        $userModel = new UserModel();
        $studentModel = new RegisteredChildModel();
        $studentAssigned = new StudentAssigned();
        $bankModel = new BankModel();
        $totalCourses = $courseModel->countAll();
        $totalDonationCategory = $donationCategory->countAll();
        $totalDoners = $donationPayment->countAll();
        $mount = $donationPayment->selectSum('amount', 'total_amount')->first();
        $totalAmount = $mount['total_amount'];
        $jobApplications = $instructorModel->countAll();
        $totalTeachers = $userModel->where('instructor_id !=', null)->countAllResults();
        $totalUsers = $userModel->countAll();
        $totalStudents = $studentModel->countAll();
        $student_assigned = $studentAssigned->countAll();
        $total_bank = $bankModel->countAll();
        // Pass data to view
        return view('pages/admin/dashboard', [
            'totalCourses'    => $totalCourses,
            'totalDonationCategory'  => $totalDonationCategory,
            'totalDoners'   => $totalDoners,
            'totalamount' => $totalAmount, 
            'jobApplications'   => $jobApplications,
            'totalUsers'   => $totalUsers,
            'total_teachers'   => $totalTeachers,
            'totalStudents'   => $totalStudents,
            'student_assigned'   => $student_assigned,
            'total_bank'   => $total_bank,
        ]);
    }
    public function registration()
    {
        return view('pages/admin/registration/registration_form');
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

}

