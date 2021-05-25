<?php

namespace App\Controllers\Backend;

use App\Controllers\Base\BaseController;

class Add_user extends BaseController
{
    public function index()
    {
        return view('views_backend/view_add_user');
    }
    public function addUser()
    {
        $arrData = $this->request->getPost('arrData');

        $password =   $this->My_Library->hash_password($arrData['password']);
        // echo '<pre>';
        // print_r($this->request->getPost());
        die;
    }
}
