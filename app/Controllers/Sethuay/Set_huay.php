<?php

namespace App\Controllers\Sethuay;

use App\Controllers\Base\BaseController;

class Set_huay extends BaseController
{
    public function __construct()
    {
        $this->M_sethuay = model('M_sethuay/M_sethuay');
        $this->dataAll = $this->M_sethuay->detalimem();
    }
    public function index()
    {
    }
    public function Payrate()
    {
        $data['datapayrate'] = $this->dataAll;

        return view('views_backend/setting_lotto/view_payrate', $data);
    }

    public function Perbet()
    {
        $data['dataperbet'] = $this->dataAll;
        return view('views_backend/setting_lotto/view_perbet', $data);
    }
    public function Maxminbet()
    {
        if ($this->request->getPost('getdata')) {
            return json_encode($this->dataAll);
        }

        return view('views_backend/setting_lotto/view_maxminbet');
    }
    public function Commission()
    {
        $data['datacommision'] = $this->dataAll;
        return view('views_backend/setting_lotto/view_commission', $data);
    }

    public function CloseNumber()
    {
        return view('views_backend/setting_lotto/view_close_number');
    }

    public function setCloseNumber()
    {
        $arrData = json_decode($this->request->getPost('arrData'));
        $dataQuery = array(
            'tableDB' => 'tb_close_time_bet',
            'selectData' => [
                'round'
            ],
            'whereData' => [
                'status' => 1
            ],
            'orderBy' => [
                'keyOrderBy' => 'close_time_id',
                'sortBy' => 'ASC',
            ],
        );
        $round = $this->My_Query->selectDataRow($dataQuery)->round;

        foreach ($arrData->data as $key => $value) {
            $dataQuery = array(
                'tableDB' => 'tb_close_number',
                'data' => [
                    'round' => $round,
                    'number_lotto' => $value->number_lotto,
                    'type_lotto' => $arrData->type_lotto,
                    'status' => 1
                ]
            );
            if ($this->My_Query->insertData($dataQuery) === FALSE) {
                echo json_encode(array('code' => 0, 'msg' => 'เพิ่มเลขปิดไม่สำเร็จกรุณาติดต่อโปรแกรมเมอร์'));
                die;
            }
        }
        echo json_encode(array('code' => 1, 'msg' => 'เพิ่มเลขปิดสำเร็จ'));
        die;
    }

    public function Closetime()
    {
        $dataQuery = array(
            'tableDB' => 'tb_close_time_bet',
            'selectData' => [
                '*'
            ],
            'whereData' => [],
            'orderBy' => [
                'keyOrderBy' => 'close_time_id',
                'sortBy' => 'DESC',
            ],
            'limit' => [
                'limitCount' => 10,
                'startAt' => 0
            ]
        );

        $dataCloseTime['dataUser'] =  $this->My_Query->selectData($dataQuery);
        return view('views_backend/setting_lotto/view_closetime', $dataCloseTime);
    }

    public function updateTime()
    {
        $arrData = $this->request->getPost('arrData');
        if ($arrData['closeTime'] == '' || $arrData['openTime'] == '') {
            echo json_encode(array('code' => 2, 'msg' => 'กรุณาเลือกเวลา'));
            die;
        }
        if ($arrData['round'] == '') {
            echo json_encode(array('code' => 2, 'msg' => 'กรุณาเลือกงวด'));
            die;
        }

        $dataQuery = array(
            'tableDB' => 'tb_close_time_bet',
            'whereData' => [
                'close_time_id' => $arrData['tableID']
            ],
            'data' => [
                'round' => $arrData['round'],
                'close_time' => $arrData['closeTime'],
                'open_time' => $arrData['openTime'],
                'status' => 1
            ]
        );
        if ($this->My_Query->checkHaveData($dataQuery) == TRUE) {
            if ($this->My_Query->updateData($dataQuery) == TRUE) {
                echo json_encode(array('code' => 1, 'msg' => 'อัพเดทข้อมูลสำเร็จ'));
                die;
            } else {
                echo json_encode(array('code' => 0, 'msg' => 'อัพเดทข้อมูลไม่สำเร็จ'));
                die;
            }
        }
    }

    public function updatedata()
    {
        $dataArry = $this->request->getPost('dataArry');
        $errlog = [];
        $fup = $this->request->getPost('type');
        foreach ($dataArry as $key => $value) {
            foreach ($value['dataF'] as $k => $v) {
                if ($v != "" || $v > 0) {
                    $nkey = strval(substr($k, 2));
                    $dataQuery = array(
                        'tableDB' => 'tb_cf_lotto',
                        'whereData' => [
                            'user_id' => $value['id'],
                            'type_lotto' => $nkey
                        ],
                        'data' => [
                            $fup => $v
                        ]
                    );
                    array_push($errlog, [
                        'id' => $value['id'],
                        'typeLotto' => $nkey,
                        'new' => $v,
                        'status' => $this->My_Query->updateData($dataQuery)
                    ]);
                }
            }
        }
        return json_encode($errlog);
    }
}
