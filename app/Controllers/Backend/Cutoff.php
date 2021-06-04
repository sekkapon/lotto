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

        $data = $this->DB->table('tb_ticket')
            ->select('round,type_lotto,SUM(amount_bet) AS sumBet')
            ->where('round', $round)
            ->groupBy('type_lotto')
            ->orderBy('ticket_id', 'ASC')
            ->get()->getResultArray();
        echo '<pre>';
        print_r($data);
        die;
        return view('views_backend/view_cutoff');
    }
}
