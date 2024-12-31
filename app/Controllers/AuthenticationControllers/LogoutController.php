<?php

namespace App\Controllers\AuthenticationControllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LogoutController extends BaseController
{
    public function index()
    {
        //
        session()->destroy();
        return redirect()->to(base_url());
    }
}
