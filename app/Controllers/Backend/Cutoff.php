<?php

namespace App\Controllers\Backend;

use App\Controllers\Base\BaseController;

class Cutoff extends BaseController
{
    public function index()
    {
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

        $data['dataUser'] = $this->DB->table('tb_ticket')
            ->select('tb_user.firstname,tb_user.username,tb_ticket.user_id,tb_ticket.round,tb_ticket.type_lotto,SUM(tb_ticket.amount_bet) as sumBetByType')
            ->join('tb_user', 'tb_user.user_id = tb_ticket.user_id', 'left')
            ->where('tb_ticket.round', $round)
            ->where('tb_ticket.status', 0)
            ->groupBy('tb_ticket.type_lotto,tb_ticket.user_id')
            ->orderBy('tb_ticket.type_lotto', 'ASC')
            ->get()->getResultArray();

        $checkData = [];
        $sortData = [];
        foreach ($data['dataUser'] as $key => $value) {
            if (!in_array($value['user_id'], $checkData)) {
                array_push($checkData, $value['user_id']);
            }
        }
        foreach ($checkData as $keyCheckData => $valueCheckData) {
            $i = 0;
            foreach ($data['dataUser'] as $keydataUser => $valuedataUser) {
                if ($valueCheckData == $valuedataUser['user_id']) {
                    $sortData[$keyCheckData]['user_id'] = $valuedataUser['user_id'];
                    $sortData[$keyCheckData]['round'] = $valuedataUser['round'];
                    $sortData[$keyCheckData]['username'] = $valuedataUser['username'];
                    $sortData[$keyCheckData]['firstname'] = $valuedataUser['firstname'];
                    $sortData[$keyCheckData]['lotto'][$i] = [
                        'typeBet' => $valuedataUser['type_lotto'],
                        'SumBetByType' => $valuedataUser['sumBetByType']
                    ];
                    $i++;
                }
            }
        }
        $data['dataByUser'] = $sortData;
        return view('views_backend/cutoff/view_cutoff', $data);
    }

    public function callDataByUser()
    {
        $userID = $this->request->getPost('userID');
        // $userID = 1;
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
        $data['dataUser'] = [];
        $data['dataUser'] = $this->DB->table('tb_ticket')
            ->select('user_id,round,number_lotto,type_lotto,SUM(amount_bet) as sumBetByType')
            ->where('round', $round)
            ->where('status', 0)
            ->where('user_id', $userID)
            ->groupBy('number_lotto,type_lotto')
            ->orderBy('type_lotto', 'ASC')
            ->get()
            ->getResultArray();

        $checkData = [];
        $sortData = [];
        foreach ($data['dataUser'] as $keyDataUser => $valueDataUser) {
            if (!in_array($valueDataUser['type_lotto'], $checkData)) {
                array_push($checkData, $valueDataUser['type_lotto']);
            }
        }

        foreach ($checkData as $keyCheckData => $valueCheckData) {
            $sortData['num' . $valueCheckData] = [];
            $i = 0;
            $sum = 0;
            foreach ($data['dataUser'] as $key => $value) {

                if ($valueCheckData == $value['type_lotto']) {
                    $sum += $value['sumBetByType'];
                    array_push($sortData['num' . $valueCheckData], array(
                        'number_lotto' => $value['number_lotto'],
                        'amount_bet' => $value['sumBetByType']
                    ));
                    $i++;
                }
            }
            $sortData['sum']['sum' . $valueCheckData] = $sum;
        }
        if (sizeof($sortData) == 0) {
            echo json_encode(array('code' => 0, 'msg' => 'ไม่มีข้อมูลการแทง'));
            die;
        } else {
            echo json_encode(array('code' => 1, 'data' => $sortData));
            die;
        }
    }

    public function cutoffLotto()
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

        foreach ($arrData->data as $key => $valueCutoff) {

            $dataQuery = array(
                'tableDB' => 'tb_ticket',
                'selectData' => [
                    '*'
                ],
                'whereData' => [
                    'user_id' => $arrData->user_id,
                    'round' => $round,
                    'number_lotto' => $valueCutoff->number_lotto,
                    'type_lotto' => $valueCutoff->type_lotto,
                ],
                'orderBy' => [
                    'keyOrderBy' => 'ticket_id',
                    'sortBy' => 'ASC',
                ],
                'limit' => [
                    'limitCount' => 1,
                    'startAt' => 0
                ]
            );
            $amount_bet = $this->My_Query->selectData($dataQuery)[0]['amount_bet'];
            if (str_replace(',', '',  $valueCutoff->amount_cutoff) > $amount_bet) {
                echo json_encode(array('code' => 0, 'msg' => $this->typeEnToTh($valueCutoff->type_lotto) . ' เลข ' . $valueCutoff->number_lotto . ' ไม่สามารถตัดยอดมากกว่าจำนวนเงินที่แทงมาได้'));
                die;
            }
            $dataQuery = array(
                'tableDB' => 'tb_cutoff',
                'whereData' => [
                    'user_id' => $arrData->user_id,
                    'round' => $round,
                    'number_lotto' => $valueCutoff->number_lotto,
                    'type_lotto' => $valueCutoff->type_lotto,
                ],
                'data' => [
                    'user_id' => $arrData->user_id,
                    'round' => $round,
                    'number_lotto' => $valueCutoff->number_lotto,
                    'type_lotto' => $valueCutoff->type_lotto,
                    'amount_cutoff' => str_replace(',', '',  $valueCutoff->amount_cutoff),
                ]
            );

            if ($this->My_Query->countData($dataQuery) == 1) {
                if ($this->My_Query->updateData($dataQuery) === FALSE) {
                    echo json_encode(array('code' => 0, 'msg' => 'อัพเดทข้อมูลการตัดยอดไม่สำเร็จกรุณาติดต่อโปรแกรมมเมอร์'));
                    die;
                }
            } else {
                if ($this->My_Query->insertData($dataQuery) === FALSE) {
                    echo json_encode(array('code' => 0, 'msg' => 'เพิ่มข้อมูลการตัดยอดไม่สำเร็จกรุณาติดต่อโปรแกรมมเมอร์'));
                    die;
                }
            }
        }
        echo json_encode(array('code' => 1, 'msg' => 'ทำรายการตัดยอดสำเร็จ'));
        die;
    }

    public function typeEnToTh($type)
    {
        if ($type == '3upper') {
            return '3ตัวบน';
        } else if ($type == '3under') {
            return '3ตัวล่าง';
        } else if ($type == '3toad') {
            return '3ตัวโต๊ด';
        } else if ($type == '2upper') {
            return '2ตัวบน';
        } else if ($type == '2under') {
            return '2ตัวล่าง';
        } else if ($type == '2toad') {
            return '2ตัวโต๊ด';
        } else if ($type == 'floatUpper') {
            return 'ลอยบน';
        } else if ($type == 'floatUnder') {
            return 'ลอยล่าง';
        } else if ($type == '4toad') {
            return '4ตัวโต๊ด';
        } else {
            return '5ตัวโต๊ด';
        }
    }

    public function printCutoff()
    {

        $dataQuery = array(
            'tableDB' => 'tb_user',
            'selectData' => [
                'user_id', 'username', 'firstname'
            ],
            'whereData' => [
                'user_id !=' => 0,
                'status' => 1
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
        $data['dataUser'] = $this->My_Query->selectData($dataQuery);

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

        $data['dataCutoff'] = $this->DB->table('tb_cutoff')
            ->select('round,number_lotto,type_lotto,SUM(amount_cutoff) as sumBetByType')
            ->where('round', $round)
            ->groupBy('number_lotto,type_lotto')
            ->orderBy('type_lotto', 'ASC')
            ->get()
            ->getResultArray();

        return view('views_backend/cutoff/view_print', $data);
    }
}
