<?php

namespace App\Controllers\Sethuay;

use App\Controllers\Base\BaseController;


class Payrate extends BaseController
{
    public function __construct(){
        $this->M_sethuay = model('M_sethuay/M_sethuay');
    }
    public function index()
    {

        $data['datapayrate'] = $this->M_sethuay->detalimempayrate();
    
        return view('views_backend/setting_lotto/view_payrate',$data);
    }
 
}
