<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CertificateController extends BaseController
{
    public function certificate()
    {
        return view('pages/admin/certificate/certificate');
    }
    public function add_certificate()
    {
        return view('pages/admin/certificate/add_certificate');
    }
}
