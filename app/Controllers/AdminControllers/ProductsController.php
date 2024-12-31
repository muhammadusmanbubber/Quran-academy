<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProductsController extends BaseController
{
    public function product_list()
    {
        return view('pages/admin/products/product_list');
    }
    public function add_product()
    {
        return view('pages/admin/products/add_product');
    }

}
