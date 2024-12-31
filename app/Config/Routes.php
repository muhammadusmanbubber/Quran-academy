<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('show-form', 'Home::show_form');
$routes->post('form_submit', 'Home::form_submit');

$routes->get('/', 'Home::index');
$routes->get('products', 'Home::products');
$routes->get('donation', 'Home::donation');
$routes->get('donation-form', 'Home::donation_form');
$routes->get('jobs', 'Home::jobs');
$routes->get('jobs-form', 'Home::jobs_form');
$routes->post('save-jobs-form', 'Home::save_jobs_form');
$routes->get('detail/(:segment)', 'Home::detail/$1');
$routes->get('course-detail/(:segment)', 'Home::course_detail/$1');
$routes->get('/signup', 'Home::signup');
$routes->get('/login', 'Home::login');
$routes->get('forget', 'AuthenticationControllers\ForgetpasswordController::forget');
$routes->post('forget_form', 'AuthenticationControllers\ForgetpasswordController::forget_passwordform');
$routes->get('/change_password', 'AuthenticationControllers\ForgetpasswordController::change_password');
$routes->post('/forget_passwordform', 'AuthenticationControllers\ForgetpasswordController::forget_passwordform');
$routes->post('/change_password_form/(:num)', 'AuthenticationControllers\ForgetpasswordController::change_password_form/$1');
$routes->post('/signup_submit', 'AuthenticationControllers\SignupController::signup_submit');
$routes->get('/verify_email', 'Home::verify_email');
$routes->post('/verify_emailform', 'AuthenticationControllers\SignupController::verify_emailform');
$routes->post('/login_user', 'AuthenticationControllers\LoginController::index');
$routes->get('logout', 'AdminControllers\DashboardController::logout');
// *** payment Routes ***
$routes->post('payment-process', 'PaymentController::paymentProcess');
// *** Admin Routes ***
$routes->group('admin', ['filter' => 'authlogin_and_adminroutes'], function ($routes) {
    $routes->get('dashboard', 'AdminControllers\DashboardController::index');
    $routes->get('registration', 'AdminControllers\DashboardController::registration');
    // *** Courses Routes ***
    $routes->group('cources', function ($routes) {
        $routes->get('cources-list', 'AdminControllers\CourcesController::cources_list');
        $routes->get('add-cource', 'AdminControllers\CourcesController::add_cource');
        $routes->post('save-cource', 'AdminControllers\CourcesController::save_cource');
        $routes->get('edit-cource/(:segment)', 'AdminControllers\CourcesController::edit_cource/$1');
        $routes->post('save-edit-cource/(:segment)', 'AdminControllers\CourcesController::save_edit_cource/$1');
        $routes->get('detail/(:segment)', 'AdminControllers\CourcesController::detail/$1');
        $routes->get('update-course-status', 'AdminControllers\CourcesController::update_course_status');
    });
    // *** Users Routes ***
    $routes->group('users', function ($routes) {
        $routes->get('user-list', 'AdminControllers\UserController::user_list');
        $routes->get('add-user', 'AdminControllers\UserController::add_user');
        $routes->post('save-user-form', 'AdminControllers\UserController::save_user_form');
        $routes->post('save-assigned-student', 'AdminControllers\UserController::save_assigned_student');
        // $routes->get('user-profile', 'AdminControllers\UserController::user_profile');
    });
    // *** Users Attandance Report Routes ***
    $routes->group('attendance', function ($routes) {
        $routes->get('attendance', 'AdminControllers\UserController::attendance');
    });
    // *** Teachers Routes ***
    $routes->group('teachers', function ($routes) {
        $routes->get('teacher-list', 'AdminControllers\TeacherController::teacher_list');
        $routes->get('add-teacher/(:segment)', 'AdminControllers\TeacherController::add_teacher/$1');
        $routes->post('save-teacher-form', 'AdminControllers\TeacherController::save_teacher_form');
        $routes->get('teacher-profile', 'AdminControllers\TeacherController::teacher_profile');
        $routes->get('applicants', 'AdminControllers\TeacherController::applicants');
        $routes->get('applicant-detail/(:segment)', 'AdminControllers\TeacherController::applicants_detail/$1');
        $routes->get('attendance', 'AdminControllers\TeacherController::attendance');
        $routes->get('salary-slip', 'AdminControllers\TeacherController::salary_slip');
        $routes->get('shedule', 'AdminControllers\TeacherController::shedule');
    });
    // *** Donation Report Routes ***
    $routes->group('donation', function ($routes) {
        $routes->get('donation-category-list', 'AdminControllers\DonationController::poor_people');
        $routes->get('add-category', 'AdminControllers\DonationController::add_category');
        $routes->post('save-category', 'AdminControllers\DonationController::save_category');
        $routes->get('donation-payment', 'AdminControllers\DonationController::donation_payment');
        // $routes->get('houses-donation', 'AdminControllers\DonationController::houses_donation');
        // $routes->get('our-donation', 'AdminControllers\DonationController::our_donation');
    });
    // *** Certificate Routes ***
    $routes->group('certificate', function ($routes) {
        $routes->get('certificate', 'AdminControllers\CertificateController::certificate');
        $routes->get('add-certificate', 'AdminControllers\CertificateController::add_certificate');
    });
    // *** Products Routes ***
    $routes->group('products', function ($routes) {
        $routes->get('product-list', 'AdminControllers\ProductsController::product_list');
        $routes->get('add-product', 'AdminControllers\ProductsController::add_product');
    });
    // *** Site Settings Routes ***
    $routes->group('settings', function ($routes) {
        $routes->get('site-settings', 'AdminControllers\SettingController::site_settings');
        $routes->get('update-password', 'AdminControllers\SettingController::update_password');
    });
});
// *** User Routes ***
$routes->group('user', ['filter' => 'authlogin_and_adminroutes'], function ($routes) {
    $routes->get('dashboard', 'UserControllers\DashboardController::profile');
    $routes->get('edit-profile', 'UserControllers\DashboardController::edit_profile');
    // *** Courses Routes ***
    $routes->group('cources', function ($routes) {
        $routes->get('cources-list', 'UserControllers\CourcesController::cources_list');
        $routes->get('registration', 'UserControllers\CourcesController::registration');
        $routes->post('store-registeration', 'UserControllers\CourcesController::store_registeration');
        $routes->post('upload-resized-images', 'UserControllers\CourcesController::upload_resized_images');
    });
    // *** Users Attandance Report Routes ***
    $routes->group('attendance', function ($routes) {
        $routes->get('attendance', 'AdminControllers\UserController::attendance');
    });
    // *** Teachers Routes ***
    $routes->group('teachers', function ($routes) {
        $routes->get('teacher-list', 'AdminControllers\TeacherController::teacher_list');
        $routes->get('teacher-profile', 'AdminControllers\TeacherController::teacher_profile');
        $routes->get('applicants', 'AdminControllers\TeacherController::applicants');
        $routes->get('attendance', 'AdminControllers\TeacherController::attendance');
        $routes->get('salary-slip', 'AdminControllers\TeacherController::salary_slip');
        $routes->get('shedule', 'AdminControllers\TeacherController::shedule');
    });
    // *** Donation Report Routes ***
    $routes->group('donation', function ($routes) {
        $routes->get('poor-people', 'AdminControllers\DonationController::poor_people');
        $routes->get('mosque-donation', 'AdminControllers\DonationController::mosque_donation');
        $routes->get('houses-donation', 'AdminControllers\DonationController::houses_donation');
        $routes->get('our-donation', 'AdminControllers\DonationController::our_donation');
    });
    // *** Certificate Routes ***
    $routes->group('certificate', function ($routes) {
        $routes->get('certificate', 'UserControllers\CourcesController::certificate');
    });
    // *** Products Routes ***
    $routes->group('products', function ($routes) {
        $routes->get('product-list', 'AdminControllers\ProductsController::product_list');
        $routes->get('add-product', 'AdminControllers\ProductsController::add_product');
    });
    // *** Site Settings Routes ***
    $routes->group('settings', function ($routes) {
        $routes->get('site-settings', 'AdminControllers\SettingController::site_settings');
        $routes->get('update-password', 'AdminControllers\SettingController::update_password');
    });
});
// *** Teacher Routes ***
$routes->group('teachers', ['filter' => 'authlogin_and_adminroutes'], function ($routes) {
    $routes->get('certificate', 'UserControllers\CourcesController::certificate');
    $routes->get('profile', 'TeacherControllers\DashboardController::profile');
});
