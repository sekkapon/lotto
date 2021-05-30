<?php

namespace App\Controllers\Sethuay;

use App\Controllers\Base\BaseController;

class Commission extends BaseController
{
    public function index()
    {
        return view('views_backend/setting_lotto/view_commission');
    }
 
}
