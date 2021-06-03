<?php

namespace App\Controllers\Backend;

use App\Controllers\Base\BaseController;

class Report extends BaseController
{
    public function index()
    {
    }

    public function reportReward()
    {
        return view('views_backend/report/report_reward');
    }
}
