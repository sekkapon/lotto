<?php

namespace App\Controllers\Frontend;

use App\Controllers\Base\BaseController;

class BetHauythai extends BaseController
{
    public function index()
    {
        return view('views_frontend/view_bet');
    }
    public function BetList(){

        return view('views_frontend/bet_list');
    }
    public function BetReport(){

        return view('views_frontend/bet_report');
    }
    public function BetResult(){

        return view('views_frontend/bet_result');
    }
}
