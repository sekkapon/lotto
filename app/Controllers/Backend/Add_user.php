<?php

namespace App\Controllers\Backend;

use App\Controllers\Base\BaseController;

class Add_user extends BaseController
{
    public function index()
    {
        return view('views_backend/user/view_add_user');
    }
    public function addUser()
    {

        $arrData = $this->request->getPost('arrData');
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
        if ($this->My_Query->checkHaveData($dataQuery) == TRUE) {
            echo json_encode(array('code' => 3, 'msg' => 'ยูสเซอร์เนมถูกใช้งานแล้ว'));
            die;
        }
        $insertID = $this->My_Query->insertData($dataQuery);
        if ($insertID == FALSE) {
            echo json_encode(array('code' => 2, 'msg' => 'ไม่สามารถเพิ่มข้อมูลได้กรุณาติดต่อโปรแกรมเมอร์'));
            die;
        }
        $checkData = [];
        foreach ($arrData['dataConfig'] as $key => $value) {
            $cutData = explode('_', $value['name']);
            if (!in_array($cutData[0], $checkData)) {
                array_push($checkData, $cutData[0]);
            }
        }
        $i = 0;
        foreach ($checkData as $key => $valueCheckData) {
            foreach ($arrData['dataConfig'] as $key => $valueDataConfig) {
                $cutData = explode('_', $valueDataConfig['name']);
                if ($valueCheckData == $cutData[0]) {
                    $sortData[$i]['user_id'] =  $insertID;
                    $sortData[$i]['type_lotto'] = $cutData[0];
                    $sortData[$i][$cutData[1]] = str_replace(',', '',  $valueDataConfig['value']);
                    $sortData[$i]['status'] = 1;
                }
            }
            $i++;
        }

        foreach ($sortData as $key => $valueSortData) {
            $dataQuery = array(
                'tableDB' => 'tb_cf_lotto',
                'data' => $valueSortData
            );
            if ($this->My_Query->insertData($dataQuery) == FALSE) {
                echo json_encode(array('code' => 2, 'msg' => 'ไม่สามารถเพิ่มข้อมูลได้กรุณาติดต่อโปรแกรมเมอร์'));
                die;
            }
        }
        echo json_encode(array('code' => '1'));
        die;
    }
}
