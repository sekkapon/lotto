<?php

namespace App\Controllers\Backend;

use App\Controllers\Base\BaseController;

class Reward extends BaseController
{
    public function index()
    {

        // echo date("01 H:i:s", time()) . '<br>';
        // echo date("16 H:i:s", time()) . '<br>';

        // die;
        return view('views_backend/reward/view_reward');
    }


    public function insertReward()
    {
    }
}
