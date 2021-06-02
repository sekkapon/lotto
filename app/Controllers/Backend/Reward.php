<?php

namespace App\Controllers\Backend;

use App\Controllers\Base\BaseController;

class Reward extends BaseController
{
    public function index()
    {
        return view('views_backend/reward/view_reward');
    }


    public function insertReward()
    {
        $arrData = $this->request->getPost('arrData');
        if ($arrData['reward1st'] == '' || $arrData['reward3under1st'] == '' || $arrData['reward3under2nd'] == '') {
            echo json_encode(array('code' => 3, 'msg' => 'กรุณาใส่ผลรางวัล'));
            die;
        }

        $dataQuery = array(
            'tableDB' => 'tb_raward',
            'data' => [
                'reward_date' => $arrData['date'],
                'reward_1st' => $arrData['reward1st'],
                'reward_3upper' => substr($arrData['reward1st'], 3),
                'reward_3under_1st' => $arrData['reward3under1st'],
                'reward_3under_2nd' => $arrData['reward3under2nd'],
                'reward_2under' => $arrData['reward2under'],
                'reward_2upper' => substr($arrData['reward1st'], 4),
                'reward_float_under' => substr($arrData['reward1st'], 4),
                'reward_float_upper' => substr($arrData['reward1st'], 3),
                'reward_4toad' => substr($arrData['reward1st'], 2),
                'reward_5toad' => substr($arrData['reward1st'], 1),
            ]
        );


        if ($this->My_Query->insertData($dataQuery) == FALSE) {
            echo json_encode(array('code' => 2, 'msg' => 'ไม่สามารถเพิ่มข้อมูลได้กรุณาติดต่อโปรแกรมเมอร์'));
            die;
        } else {

            $data = array(
                'reward_1st' => $arrData['reward1st'],
                'reward_3under_1st' => $arrData['reward3under1st'],
                'reward_3under_2nd' => $arrData['reward3under2nd'],
                'reward_2upper' => substr($arrData['reward1st'], 4),
            );

            echo json_encode(array('code' => 1, 'data' => $data));
            die;
        }
    }
}
