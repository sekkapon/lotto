<?php

namespace App\Controllers\Backend;

use App\Controllers\Base\BaseController;

class Cutoff extends BaseController
{
    public function index()
    {
        return view('views_backend/view_cutoff');
    }

}
