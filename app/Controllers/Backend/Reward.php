<?php

namespace App\Controllers\Backend;

use App\Controllers\Base\BaseController;

class Reward extends BaseController
{
    public function index()
    {
        return view('views_backend/reward/view_reward');
    }
}
