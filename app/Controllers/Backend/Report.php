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
        return view('views_backend/report/view_report_reward');
    }

    public function reportByMember()
    {
        return view('views_backend/report/view_report_by_member');
    }
    public function reportByType()
    {
        return view('views_backend/report/view_report_by_type');
    }
}
