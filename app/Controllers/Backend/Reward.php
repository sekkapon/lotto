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
                'reward_1st' => json_encode([$arrData['reward1st']]),
                'reward_3upper' => json_encode([substr($arrData['reward1st'], 3)]),
                'reward_3toad' => json_encode($this->genToad(3,substr($arrData['reward1st'], 3))),
                'reward_3under_1st' => json_encode([$arrData['reward3under1st']]),
                'reward_3under_2nd' => json_encode([$arrData['reward3under2nd']]),
                'reward_3under_3th' => json_encode([$arrData['reward3under3th']]),
                'reward_3under_4th' => json_encode([$arrData['reward3under4th']]),
                'reward_2under' => json_encode([$arrData['reward2under']]),
                'reward_2upper' => json_encode([substr($arrData['reward1st'], 4)]),
                'reward_2toad' => json_encode($this->genToad(2,substr($arrData['reward1st'], 3))),
                'reward_float_under' => json_encode($this->genToad(1,substr($arrData['reward1st'], 4))),
                'reward_float_upper' => json_encode($this->genToad(1,substr($arrData['reward1st'], 3))),
                'reward_4toad' => json_encode($this->genToad(4,substr($arrData['reward1st'], 2))),
                'reward_5toad' => json_encode($this->genToad(5,substr($arrData['reward1st'], 1))),
            ]
        );
        $this->calculateReward($dataQuery['data']);
     
        if ($this->My_Query->insertData($dataQuery) === FALSE) {
            return json_encode(array('code' => 2, 'msg' => 'ไม่สามารถเพิ่มข้อมูลได้กรุณาติดต่อโปรแกรมเมอร์'));
  
        } else {

            $data = array(
                'reward_date' => $arrData['date'],
                'reward_1st' => $arrData['reward1st'],
                'reward_3under_1st' => $arrData['reward3under1st'],
                'reward_3under_2nd' => $arrData['reward3under2nd'],
                'reward_3under_3th' => $arrData['reward3under3th'],
                'reward_3under_4th' => $arrData['reward3under4th'],
                'reward_2upper' => substr($arrData['reward1st'], 4),
            );
            $this->calculateReward($dataQuery['data']);
            return json_encode(array('code' => 1, 'data' => $data));

        }
    }
                        //  2 , 123
    public function genToad($L, $a){
        $_a = str_split($a);
        $output = $this->permutation($L,$_a);
        return $output;

    }
    function permutation($L,$_a,$buffer='', $delimiter='') {
        
        $output = array();
        $num = count($_a);
        if ($num > 1) {
            foreach ($_a as $key=>$val) {
                $temp = $_a;
                unset($temp[$key]);
                sort($temp);
    
                $return = $this->permutation($L,$temp, trim($buffer.$delimiter.$val, $delimiter), $delimiter);
    
                if(is_array($return)) {
                    $output = array_merge($output, $return);
                    $output = array_unique($output);
                }
                else {
                    if($L==2){
                         $output[] = substr($return,0,2);
                    }else if($L==1){
                            $output[] = substr($return,0,1);
                    }else{
                         $output[] = $return;
                    }
                   
                }
    
            }
            return $output;
        }
        else {
            return $buffer.$delimiter.$_a[0];
        }
    }

    public function calculateReward($reward){

        echo "<pre>";
        print_r($reward);
        // 'reward_date' 
        // 'reward_1st' 
        // 'reward_3upper' 
        // 'reward_3under_1st' 
        // 'reward_3under_2nd'
        // reward_3under_3th
        // reward_3under_4th
        // 'reward_2under' 
        // 'reward_2upper' 
        // reward_2toad 
        // 'reward_float_under'
        // 'reward_float_upper' 
        // 'reward_4toad' 
        // 'reward_5toad'
        
        die;


    }

}
