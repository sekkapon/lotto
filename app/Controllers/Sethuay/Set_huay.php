<?php

namespace App\Controllers\Sethuay;

use App\Controllers\Base\BaseController;

class Set_huay extends BaseController
{
    public function __construct(){
        $this->M_sethuay = model('M_sethuay/M_sethuay');
        $this->dataAll = $this->M_sethuay->detalimem();
    }
    public function index()
    {
       
    }
    public function Payrate()
    {
        $data['datapayrate'] = $this->dataAll;
    
        return view('views_backend/setting_lotto/view_payrate',$data);
    }

    public function Perbet()
    {
        $data['dataperbet'] = $this->dataAll;
        return view('views_backend/setting_lotto/view_perbet',$data);
    }
    public function Maxminbet()
    {   
        if($this->request->getPost('getdata')){
            return json_encode($this->dataAll);
        }

        return view('views_backend/setting_lotto/view_maxminbet');
    }
    public function Commission()
    {
        $data['datacommision'] = $this->dataAll;
        return view('views_backend/setting_lotto/view_commission',$data);
    }
    public function Closetime()
    {
       
        return view('views_backend/setting_lotto/view_closetime');
    }

    public function updatedata(){

        $dataArry = $this->request->getPost('dataArry');
        $errlog = [];
        $fup = $this->request->getPost('type');
        foreach ($dataArry as $key => $value) {

            foreach ($value['dataF'] as $k => $v) {
                if ($v != "" || $v > 0) {
                    $nkey = strval(substr($k, 2));
                    $dataQuery = array(
                        'tableDB' => 'tb_cf_lotto',
                        'whereData' => [
                            'user_id' => $value['id'],
                            'type_lotto' => $nkey
                        ],
                        'data' => [
                            $fup => $v
                        ]
                    );
                    array_push($errlog,[
                                        'id' => $value['id'],
                                        'typeLotto'=>$nkey,
                                        'new' => $v,
                                        'status' => $this->My_Query-> updateData($dataQuery)
                                        ]);
                }
            }
            
        }

        return json_encode($errlog);
    }
}