<?php

namespace App\Controllers\Frontend;

use App\Controllers\Base\BaseController;

class Api extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->My_Query = model('My_query');
    }
    public function savemybet()
    {
        return json_encode($this->request->getPost('data'));
    }
    public function getmaxminbet(){

        $dataQuery = array(
            'tableDB' => 'tb_user',
            'selectData' => [
                '*'
            ],
            'whereData' => [
                'tb_user.user_id' => $this->session->session_member['user_id'],
                'tb_user.role' => 'member',
            ],
            'join' => [
                [
                    'tableJoin' => 'tb_cf_lotto',
                    'keyJoin' => 'user_id',
                    'keyHead' => 'user_id',
                    'typeJoin' => 'left'
                ],
            ],
            'limit' => [
                'limitCount' => 999,
                'startAt' => 0
            ]
        );
        $data = $this->My_Query->joinAndWhereData($dataQuery);
        return json_encode($this->loopnewdata($data)) ;
    }
    public function loopnewdata($data)
    {
        $checkData = [];
        $sortData =[];
        foreach ($data as $key => $valueData) {
            if (!in_array($valueData['user_id'], $checkData)) {
                array_push($checkData, $valueData['user_id']);
            }
        }
       
        foreach ($checkData as $keyCheckData => $valueCheckData) {    
            foreach ($data as $key => $valueData) {
                if ($valueCheckData == $valueData['user_id']) {
                    $sortData[$keyCheckData]['localTime']=time();
                    $sortData[$keyCheckData]['user_id'] = $valueData['user_id'];
                    $sortData[$keyCheckData]['username'] = $valueData['username'];
                    $sortData[$keyCheckData]['firstname'] = $valueData['firstname'];
                    $sortData[$keyCheckData]['phone'] = $valueData['phone'];
                    $sortData[$keyCheckData]['status'] = $valueData['status'];
                    $sortData[$keyCheckData]['detail']['t_'.$valueData['type_lotto']] = [
                        'cf_id' => $valueData['cf_id'],
                        'type_lotto' => $valueData['type_lotto'],
                        'minPerBet' => $valueData['minPerBet'],
                        'maxPerBet' => $valueData['maxPerBet'],
                        'maxCostPerNumber' => $valueData['maxCostPerNumber'],
                        'payRate' => $valueData['payRate'],
                        'percent' => $valueData['percent']
                    ];
                }
            }
        }
        
        return $sortData;
    }

    public function getbetlist()
    {
        $type = $this->request->getPost('slLottoType');
        $round = $this->request->getPost('roundlotto');
        if($type != ""){
            $where = [
                'tb_ticket.user_id'=>$this->session->session_member['user_id'],
                'tb_ticket.type_lotto'=> $type,
                'tb_ticket.round'=>$round
            ];
        }else{
            $where = [
                'tb_ticket.user_id'=>$this->session->session_member['user_id'],
                'tb_ticket.round'=>$round
            ];
        }
        
        $dataQuery = array(
            'tableDB' => 'tb_ticket',
            'selectData' => [
                '*'
            ],
            'whereData' => $where,
            'orderBy' => [
                'keyOrderBy' => 'user_id',
                'sortBy' => 'ASC',
            ],
            'limit' => [
                'limitCount' => 999,
                'startAt' => 0
            ]
        ); 
        return  json_encode($this->My_Query->selectData($dataQuery));
    }

    public function getround(){
        $status = $this->request->getPost('status');
        if($status != ""){
            $where = ['status'=>$status];
        }else{
            $where = [];
        }
        $dataQuerySum = array(
            'tableDB' => 'tb_close_time_bet',
            'selectData' => ['*'],
            'whereData' => $where,
            'orderBy' => [
                'keyOrderBy' => 'close_time_id',
                'sortBy' => 'ASC',
            ],     
            'limit' => [
                'limitCount' => 5,
                'startAt' => 0
            ]
        );

        return json_encode($this->My_Query->selectData($dataQuerySum));
    }

}
