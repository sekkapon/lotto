<?php

namespace App\Controllers\Frontend;

use App\Controllers\Base\BaseController;

class Api extends BaseController
{
    public function __construct()
    {
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
                'tb_user.user_id' => 1,
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
}
