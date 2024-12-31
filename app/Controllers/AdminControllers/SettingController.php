<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;

class SettingController extends BaseController
{
    public function site_settings()
    {
        return view('pages/admin/site_settings/site_settings');
    }
    public function update_password()
    {
        return view('pages/admin/site_settings/update_password');
    }
}
