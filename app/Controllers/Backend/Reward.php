<?php

namespace App\Controllers\Backend;

use App\Controllers\Base\BaseController;
use Kint\Parser\JsonPlugin;

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
        if (date('d', time()) != substr($round, 8)) {
            echo json_encode(array('code' => 3, 'msg' => 'ไม่สามารถเพิ่มผลรางวัลได้'));
            die;
        }


        $dataQuery = array(
            'tableDB' => 'tb_raward',
            'data' => [
                'reward_date' => $arrData['date'],
                'reward_1st' => json_encode([$arrData['reward1st']]),
                'reward_3upper' => json_encode([substr($arrData['reward1st'], 3)]),
                'reward_3toad' => json_encode($this->genToad(3, substr($arrData['reward1st'], 3))),
                'reward_3under_1st' => json_encode([$arrData['reward3under1st']]),
                'reward_3under_2nd' => json_encode([$arrData['reward3under2nd']]),
                'reward_3under_3th' => json_encode([$arrData['reward3under3th']]),
                'reward_3under_4th' => json_encode([$arrData['reward3under4th']]),
                'reward_2under' => json_encode([$arrData['reward2under']]),
                'reward_2upper' => json_encode([substr($arrData['reward1st'], 4)]),
                'reward_2toad' => json_encode($this->genToad(2, substr($arrData['reward1st'], 3))),
                'reward_float_under' => json_encode($this->genToad(1, substr($arrData['reward1st'], 4))),
                'reward_float_upper' => json_encode($this->genToad(1, substr($arrData['reward1st'], 3))),
                'reward_4toad' => json_encode([substr($arrData['reward1st'], 3)]),
                'reward_5toad' => json_encode([substr($arrData['reward1st'], 3)]),
            ]
        );

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

            return json_encode(array('code' => 1, 'data' => $data));
        }
    }
    //  2 , 123
    public function genToad($L, $a)
    {
        $_a = str_split($a);
        $output = $this->permutation($L, $_a);
        return $output;
    }
    function permutation($L, $_a, $buffer = '', $delimiter = '')
    {

        $output = array();
        $num = count($_a);
        if ($num > 1) {
            foreach ($_a as $key => $val) {
                $temp = $_a;
                unset($temp[$key]);
                sort($temp);

                $return = $this->permutation($L, $temp, trim($buffer . $delimiter . $val, $delimiter), $delimiter);

                if (is_array($return)) {
                    $output = array_merge($output, $return);
                    $output = array_unique($output);
                } else {
                    if ($L == 1) {
                        $output[] = substr($return, 0, 1);
                    } else if ($L == 2) {
                        $output[] = substr($return, 0, 2);
                    } else if ($L == 4 || $L == 5) {
                        $output[] = substr($return, 0, 3);
                    } else {
                        $output[] = $return;
                    }
                }
            }
            return $output;
        } else {
            return $buffer . $delimiter . $_a[0];
        }
    }
    public function getround($status)
    {
        //  = $this->request->getPost('status');
        if ($status != 0) {
            $where = ['status' => $status];
        } else {
            $where = [];
        }
        $dataQuerySum = array(
            'tableDB' => 'tb_close_time_bet',
            'selectData' => ['*'],
            'whereData' => $where,
            'orderBy' => [
                'keyOrderBy' => 'close_time_id',
                'sortBy' => 'DESC',
            ],
            'limit' => [
                'limitCount' => 6,
                'startAt' => 0
            ]
        );

        return json_encode($this->My_Query->selectData($dataQuerySum));
    }
    public function calculateReward()
    {
        $round = json_decode($this->getround(1))[0]->round;

        $dataQRewrad = array(
            'tableDB' => 'tb_raward',
            'selectData' => [
                '*'
            ],
            'whereData' => ['tb_raward.reward_date' => $round],
            'orderBy' => [
                'keyOrderBy' => 'reward_id',
                'sortBy' => 'ASC',
            ]
        );
        $dataRewrad =  $this->My_Query->selectDataRow($dataQRewrad);



        $dataCheck = [
            'tableDB' => 'tb_ticket',
            'whereData' => ['status' => 0, 'round' => $round],

        ];
        // $before = microtime(true);
        $count = 0;
        while (($check = $this->My_Query->countData($dataCheck)) > 0) {
            $dataQuery = array(
                'tableDB' => 'tb_ticket',
                'selectData' => [
                    'ticket_id', 'number_lotto', 'type_lotto'
                ],
                'whereData' => ['status' => 0, 'round' => $round],
                'orderBy' => [
                    'keyOrderBy' => 'ticket_id',
                    'sortBy' => 'ASC',
                ]
            );
            $rowdata = $this->My_Query->selectDataRow($dataQuery);
            $dataUpdate = array(
                'tableDB' => 'tb_ticket',
                'whereData' => [
                    'ticket_id' => $rowdata->ticket_id
                ],
                'data' => [
                    'status' => ($this->checkbet($rowdata->number_lotto, $rowdata->type_lotto, $dataRewrad)) ? 1 : 2,
                ]
            );
            $this->My_Query->updateData($dataUpdate);
            $count++;
        }

        $dataQuery = array(
            'tableDB' => 'tb_close_time_bet',
            'whereData' => [],
            'data' => [
                'status' => 0
            ]
        );
        if ($this->My_Query->updateData($dataUpdate) === FALSE) {
            return json_encode("อัพเดทงวดไม่สำเร็จกรุณาติดต่อโปรแกรมเมอร์");
            die;
        }

        if (date('d', time()) == '30' || date('d', time()) == '31' || date('d', time()) == '01' || date('d', time()) == '02' || date('d', time()) == '03') {
            if (date('d', time()) == '30' || date('d', time()) == '31') {
                $month = date('m', time());
                if ($month == '12') {
                    $nextRoundTypeYear = date('Y', time());
                    $nextRoundTypeYear = (string)((int)$nextRoundTypeYear + 1);
                    $round = date($nextRoundTypeYear . '-01-16', time());
                } else {
                    $nextRoundTypeMonth = (int)$month + 1;
                    if (strlen($nextRoundTypeMonth) == 1) {
                        $nextRoundTypeMonth = '0' . (string)$nextRoundTypeMonth;
                    } else {
                        $nextRoundTypeMonth = (string)$nextRoundTypeMonth;
                    }
                    $round = date('Y-' . $nextRoundTypeMonth . '-16', time());
                }
            } else {
                $round = date('Y-m-16', time());
            }
        }
        if (date('d', time()) == '14' || date('d', time()) == '15' || date('d', time()) == '16' || date('d', time()) == '17' || date('d', time()) == '18') {
            $month = date('m', time());
            if ($month == '12') {
                $nextRoundTypeYear = date('Y', time());
                $nextRoundTypeYear = (string)((int)$nextRoundTypeYear + 1);
                $round = date($nextRoundTypeYear . '-01-01', time());
            } else {
                $nextRoundTypeMonth = (int)$month + 1;
                if (strlen($nextRoundTypeMonth) == 1) {
                    $nextRoundTypeMonth = '0' . (string)$nextRoundTypeMonth;
                } else {
                    $nextRoundTypeMonth = (string)$nextRoundTypeMonth;
                }
                $round = date('Y-' . $nextRoundTypeMonth . '-01', time());
            }
        }
        $dataQuery = array(
            'tableDB' => 'tb_close_time_bet',
            'data' => [
                'round' => $round,
                'close_time' => '15:00',
                'open_time' => '21:00',
                'status' => 1
            ]
        );
        if ($this->My_Query->insertData($dataUpdate) === FALSE) {
            return json_encode("อัพเดทงวดไม่สำเร็จกรุณาติดต่อโปรแกรมเมอร์");
            die;
        }

        return json_encode("สำเร็จ " . $count . " รายการ");
    }


    public function checkbet($number_lotto, $type_lotto, $dataRewrad)
    {

        switch ($type_lotto) {
            case "3upper":
                // 'reward_3upper' 
                if (in_array($number_lotto, json_decode($dataRewrad->reward_3upper))) {
                    return true;
                }
                break;
            case "3under":
                // 'reward_3under_1st' 
                if (in_array($number_lotto, json_decode($dataRewrad->reward_3under_1st))) {
                    return true;
                }
                // 'reward_3under_2nd'
                if (in_array($number_lotto, json_decode($dataRewrad->reward_3under_2nd))) {
                    return true;
                }
                // reward_3under_3th
                if (in_array($number_lotto, json_decode($dataRewrad->reward_3under_3th))) {
                    return true;
                }
                // reward_3under_4th
                if (in_array($number_lotto, json_decode($dataRewrad->reward_3under_4th))) {
                    return true;
                }
                break;
            case "3toad":
                // reward_3toad
                if (in_array($number_lotto, json_decode($dataRewrad->reward_3toad))) {
                    return true;
                }
                break;
            case "2upper":
                // 'reward_2upper' 
                if (in_array($number_lotto, json_decode($dataRewrad->reward_2upper))) {
                    return true;
                }
                break;
            case "2under":
                // 'reward_2under' 
                if (in_array($number_lotto, json_decode($dataRewrad->reward_2under))) {
                    return true;
                }
                break;
            case "2toad":
                // reward_2toad
                if (in_array($number_lotto, json_decode($dataRewrad->reward_2toad))) {
                    return true;
                }
                break;
            case "floatUpper":
                // 'reward_float_upper' 
                if (in_array($number_lotto, json_decode($dataRewrad->reward_float_upper))) {
                    return true;
                }
                break;
            case "floatUnder":
                // 'reward_float_under'
                if (in_array($number_lotto, json_decode($dataRewrad->reward_float_under))) {
                    return true;
                }
                break;
            case "4toad":
                // 'reward_4toad'                

                if (in_array(json_decode($dataRewrad->reward_4toad)[0], $this->genToad(4, $number_lotto))) {
                    return true;
                }
                break;
            case "5toad":
                // 'reward_5toad'
                if (in_array(json_decode($dataRewrad->reward_4toad)[0], $this->genToad(5, $number_lotto))) {
                    return true;
                }
                break;
            default:
                return false;
                break;
        }
        return false;
    }
}
