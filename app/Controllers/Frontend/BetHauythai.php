<?php

namespace App\Controllers\Frontend;

use App\Controllers\Base\BaseController;

class BetHauythai extends BaseController
{
    public function __construct()
    {
        $this->My_Query = model('My_query');
    }
    public function index()
    {
       $get = $this->getbetonround();
        $data['mybet'] = json_encode($get['data']);
        $data['sumbet'] =$get['sum']->sumbet;
        return view('views_frontend/view_bet',$data);
    }
    public function BetList(){

        return view('views_frontend/bet_list');
    }
    public function BetReport(){

        return view('views_frontend/bet_report');
    }
    public function BetResult(){

        return view('views_frontend/bet_result');
    }


    public function getbetonround(){

        $dataQuery = array(
            'tableDB' => 'tb_ticket',
            'selectData' => [
                '*',
            ],
            'whereData' => [
                'tb_ticket.user_id'=>1
        ],
            'orderBy' => [
                'keyOrderBy' => 'ticket_id',
                'sortBy' => 'ASC',
            ],
            'limit' => [
                'limitCount' => 999,
                'startAt' => 0
            ]
        ); 
        $dataQuerySum = array(
            'tableDB' => 'tb_ticket',
            'selectData' => [
                'SUM(amount_bet) AS sumbet',
            ],
            'whereData' => ['tb_ticket.user_id'=>1],
            'orderBy' => [
                'keyOrderBy' => 'ticket_id',
                'sortBy' => 'ASC',
            ],
        );
        
        return ['data'=>$this->My_Query->selectData($dataQuery),'sum'=>$this->My_Query->selectDataRow($dataQuerySum)];
    }
}
