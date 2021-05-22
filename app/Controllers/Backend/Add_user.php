<?php

namespace App\Controllers\Backend;

use App\Controllers\Base\BaseController;

class Add_user extends BaseController
{
    public function index()
    {
        return view('views_backend/view_add_user');
    }
}
