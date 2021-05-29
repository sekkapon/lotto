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

    public function viewEditUser()
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
                'limitCount' => 25,
                'startAt' => 0
            ]
        );
        $data['member'] = $this->My_Query->selectData($dataQuery);

        return view('views_backend/user/view_editUser', $data);
    }

    public function getData()
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
                'limitCount' => 25,
                'startAt' => 0
            ]
        );
        $data['member'] = $this->My_Query->selectData($dataQuery);
        if ($this->request->getPost('check') == 1) {
            echo json_encode(array('code' => 1, 'data' => $data));
            die;
        }
    }

    public function updateUser()
    {

        $arrData = $this->request->getPost('arrData');
        $dataQuery = array(
            'tableDB' => 'tb_user',
            'whereData' => [
                'user_id' => $arrData['user_id']
            ],
            'data' => [
                'username' => $arrData['username'],
                'firstname' => $arrData['firstname'],
                'phone' => $arrData['phone'],
                'status' => $arrData['status'],
            ]
        );
        if ($this->My_Query->checkHaveData($dataQuery) == TRUE) {
            if ($this->My_Query->updateData($dataQuery)) {
                echo json_encode(array('code' => 1));
                die;
            } else {
                echo json_encode(array('code' => 2, 'msg' => 'อัพเดทข้อมูลไม่สำเร็จกรุณาติดต่อโปรแกรมเมอร์'));
                die;
            }
        } else {
            echo json_encode(array('code' => 3, 'msg' => 'ไม่มีข้อมูลสมาชิกกรุณาสร้างสมา่ชิก'));
            die;
        }
    }
}
