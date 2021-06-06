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
        return view('views_backend/view_cutoff', $data);
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
            foreach ($data['dataUser'] as $key => $value) {
                if ($valueCheckData == $value['type_lotto']) {
                    array_push($sortData['num' . $valueCheckData], array(
                        'number_lotto' => $value['number_lotto'],
                        'amount_bet' => $value['sumBetByType']
                    ));
                    $i++;
                }
            }
        }
        if (sizeof($sortData) == 0) {
            echo json_encode(array('code' => 0, 'msg' => 'ไม่มีข้อมูลการแทง'));
            die;
        } else {
            echo json_encode(array('code' => 1, 'data' => $sortData));
            die;
        }
    }
}
