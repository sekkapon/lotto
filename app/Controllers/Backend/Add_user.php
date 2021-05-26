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
        // echo '<pre>';
        // print_r($this->request->getPost());
        // die;

        $dataQuery = array(
            'tableDB' => 'tb_user',
            'whereData' => [
                'username' => $arrData['username'],
            ],
            'data' => [
                'username' => $arrData['username'],
                'firstname' => $arrData['firstname'],
                'phone' => $arrData['phone'],
                'password' =>  $this->My_Library->hash_password($arrData['password']),
                'role' => 'member',
                'create_time' => time(),
                'status' => 1
            ]
        );
        // if ($this->My_Query->checkHaveData($dataQuery) == TRUE) {
        //     echo json_encode(array('code' => 3, 'msg' => 'ยูสเซอร์เนมถูกใช้งานแล้ว'));
        //     die;
        // }
        // if ($this->My_Query->insertData($dataQuery) == FALSE) {
        //     echo json_encode(array('code' => 2, 'msg' => 'ไม่สามารถเพิ่มข้อมูลได้กรุณาติดต่อโปรแกรมเมอร์'));
        //     die;
        // }
        foreach ($arrData['dataConfig'] as $key => $valueDataConfig) {
            $cutData = explode('_', $valueDataConfig['name']);
            $typeLotto = $cutData[0];
            echo '<pre>';
            print_r($typeLotto);
        }

        die;
        // echo '<pre>';
        // print_r($this->My_Query->insertData($dataQuery));
        // die;
    }
}
