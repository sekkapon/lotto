<?php

namespace App\Controllers\Backend;

use App\Controllers\Base\BaseController;

class Report extends BaseController
{
    public function index()
    {
    }

    public function reportReward()
    {

        return view('views_backend/report/view_report_reward');
    }

    public function reportByMember()
    {
        $dataQuery = array(
            'tableDB' => 'tb_close_time_bet',
            'selectData' => [
                'round'
            ],
            'whereData' => [
                'status' => 0
            ],
            'orderBy' => [
                'keyOrderBy' => 'close_time_id',
                'sortBy' => 'DESC',
            ],
            'limit' => [
                'limitCount' => 12,
                'startAt' => 0
            ]
        );
        $data['round'] = $this->My_Query->selectData($dataQuery);
        return view('views_backend/report/view_report_by_member', $data);
    }

    public function reportByMemberByRound()
    {
        $round = $this->request->getPost('round');
 
        $data['dataReportUser'] = $this->DB->table('tb_ticket')
            ->select('tb_user.firstname,tb_user.username,tb_ticket.*')
            ->join('tb_user', 'tb_user.user_id = tb_ticket.user_id', 'left')
            ->where('tb_ticket.round', $round)
            ->where('tb_ticket.status', 2)
            ->orWhere('tb_ticket.status', 1)
            ->orderBy('tb_ticket.type_lotto', 'ASC')
            ->get()
            ->getResultArray();

        $checkData = [];
        foreach ($data['dataReportUser'] as $keyDataReportUser => $valueDataReportUser) {
            if (!in_array($valueDataReportUser['user_id'], $checkData)) {
                array_push($checkData, $valueDataReportUser['user_id']);
            }
        }
        $sortData = [];
        foreach ($checkData as $keyCheckData => $valueCheckData) {
            $win = 0;
            $amount_bet = 0;
            $sortData[$keyCheckData]['win'] = 0;
            foreach ($data['dataReportUser'] as $keyDataReportUser => $valueDataReportUser) {
                if ($valueDataReportUser['user_id'] == $valueCheckData) {
                    if ($valueDataReportUser['status'] == 1) { //win
                        $win += $valueDataReportUser['if_win'];
                        $sortData[$keyCheckData]['user_id'] =  $valueDataReportUser['user_id'];
                        $sortData[$keyCheckData]['firstname'] =  $valueDataReportUser['firstname'];
                        $sortData[$keyCheckData]['round'] =  $valueDataReportUser['round'];
                        $sortData[$keyCheckData]['win'] =  $win;
                    } else {
                        $sortData[$keyCheckData]['user_id'] =  $valueDataReportUser['user_id'];
                        $sortData[$keyCheckData]['firstname'] =  $valueDataReportUser['firstname'];
                        $sortData[$keyCheckData]['round'] =  $valueDataReportUser['round'];
                    }
                    $amount_bet += $valueDataReportUser['amount_bet'];
                    $sortData[$keyCheckData]['amount_bet'] =  $amount_bet;
                }
            }
        }
        if (sizeof($sortData) == 0) {
            echo json_encode(array('code' => 0, 'msg' => 'ไม่มีข้อมูลรายงาน'));
            die;
        } else {
            echo json_encode(array('code' => 1, 'data' => $sortData));
            die;
        }
    }
    public function reportByType()
    {
        return view('views_backend/report/view_report_by_type');
    }
}
