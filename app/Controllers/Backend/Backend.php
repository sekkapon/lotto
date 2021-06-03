<?php

namespace App\Controllers\Backend;

use App\Controllers\Base\BaseController;

class Backend extends BaseController
{
    public function index()
    {
        return view('views_backend/view_backend');
    }

    public function system()
    {
        return view('views_backend/view_system');
    }
}
