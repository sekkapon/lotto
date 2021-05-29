<?php

namespace App\Controllers\Backend;

use App\Controllers\Base\BaseController;

class User extends BaseController
{
    public function index()
    {
        $dataQuery = array(
            'tableDB' => 'tb_user',
            'selectData' => [
                '*'
            ],
            'whereData' => [
                'role' => 'member'
            ],
            'orderBy' => [
                'keyOrderBy' => 'user_id',
                'sortBy' => 'ASC',
            ],
            'limit' => [
                'limitCount' => 999,
                'startAt' => 0
            ]
        );
        $data['member'] = $this->My_Query->selectData($dataQuery);
        return view('views_backend/user/view_user', $data);
    }
}
