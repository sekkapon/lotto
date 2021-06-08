<?php

namespace App\Controllers\Frontend;

use App\Controllers\Base\BaseController;

class BetHauythai extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();

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

        $dataQuerySum = array(
            'tableDB' => 'tb_close_time_bet',
            'selectData' => ['*'],
            'whereData' => ['status'=>1],
            'orderBy' => [
                'keyOrderBy' => 'close_time_id',
                'sortBy' => 'ASC',
            ],
        );
        $data['round'] = json_encode($this->My_Query->selectDataRow($dataQuerySum));
        return view('views_frontend/bet_list',$data);
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
                'tb_ticket.user_id'=>$this->session->session_member['user_id'],
                'tb_ticket.status'=>0,

        ],
            'orderBy' => [
                'keyOrderBy' => 'ticket_id',
                'sortBy' => 'DESC',
            ],
            'limit' => [
                'limitCount' => 999,
                'startAt' => 0
            ]
        );   
        
        return ['data'=>$this->My_Query->selectData($dataQuery),'sum'=>json_decode($this->getsumbet())];
    }
    public function getround(){

        $dataQuerySum = array(
            'tableDB' => 'tb_close_time_bet',
            'selectData' => ['*'],
            'whereData' => ['status'=>1],
            'orderBy' => [
                'keyOrderBy' => 'close_time_id',
                'sortBy' => 'DESC',
            ]
        );

        return $this->My_Query->selectDataRow($dataQuerySum);
    }

    public function getsumbet(){
        $dataQuerySum = array(
            'tableDB' => 'tb_ticket',
            'selectData' => [
                '*',
            ],
            'whereData' => ['tb_ticket.user_id'=>$this->session->session_member['user_id'],'status !='=>3],
            'orderBy' => [
                'keyOrderBy' => 'ticket_id',
                'sortBy' => 'ASC',
            ],
            'limit' => [
                'limitCount' => 99999,
                'startAt' => 0
            ]
        );
   
        $sumbet = 0;
        $sumcom = 0;
        foreach ( $this->My_Query->selectData($dataQuerySum) as $key => $value) {
            if($value['status'] == 0 || $value['status'] == 1 || $value['status'] == 2){
            if($value['status'] == 1){
                $sumbet += floatval($value['amount_bet']);
            }else{
                $sumbet += floatval($value['amount_bet']);
            }
            $sumcom += floatval($value['commission']);
        }
        } 
        $sumclear = $sumbet - $sumcom;
       
        return json_encode(['sumbet'=>$sumbet,'sumcom'=>$sumcom,'sumclear'=>$sumclear,'round'=>$this->getround()->round] );
    }



}
