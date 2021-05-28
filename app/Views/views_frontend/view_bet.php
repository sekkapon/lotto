<?php $this->extend('template/tem_frontend/content'); ?>
<?php $this->section('content'); ?>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>หวยไทย
                <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 card ">
            <div class="card-header">
                <div class="btn-actions-pane-center">
                    <div class="nav ">
                        <a data-toggle="tab" href="#tab-eg2-0" class="btn-pill btn-wide btn btn-outline-alternate btn-sm show active">แทงปกติ</a>
                        <a data-toggle="tab" href="#tab-eg2-1" class="btn-pill btn-wide mr-1 ml-1 btn btn-outline-alternate btn-sm show">แทงปักหลัก</a>
                        <a data-toggle="tab" href="#tab-eg2-2" class="btn-pill btn-wide btn btn-outline-alternate btn-sm show">แทงชุด</a>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <!-- แทงปกติ -->
                    <div class="tab-pane show active" id="tab-eg2-0" role="tabpanel">
                        <p>
                        <table class="mb-0 table table-striped">
                            <tbody>

                                <tr>
                                    <td class="text-10" align="center"><b>Copy</b></td>
                                    <td class="border-white" align="center"><input class="form-control" type="button" name="btnCopy1" value="คัดลอก" onclick="copyBetAmount(1);" title="กด Click เพื่อ copy จำนวนเงิน จากแถวแรก"></td>
                                    <td class="border-white" align="center"><input class="form-control" type="button" name="btnCopy2" value="คัดลอก" onclick="copyBetAmount(2);" title="กด Click เพื่อ copy จำนวนเงิน จากแถวแรก"></td>
                                    <td align="center"><input class="form-control" type="button" name="btnCopy3" value="คัดลอก" onclick="copyBetAmount(3);" title="กด Click เพื่อ copy จำนวนเงิน จากแถวแรก"></td>
                                </tr>
                                <tr>
                                    <td class="border-white" align="center"><span id="waiting1" style="display:none"><img src="/_MemberInfo/Resources/Images/ajax-loader.gif"></span></td>
                                    <td class="border-white" align="center"><span id="remain_show1" style="color:#0033CC;font-weight:bold;"></span>&nbsp;</td>
                                    <td class="border-white" align="center"><span id="remain_show2" style="color:#0033CC;font-weight:bold;"></span>&nbsp;</td>
                                    <td align="center"><span id="remain_show3" style="color:#0033CC;font-weight:bold;"></span>&nbsp;</td>
                                </tr>
                                <tr id="row_show_reward" style="">
                                    <td align="center" class="text-10"><b><label id="caption_reward">อัตราจ่าย</label></b></td>
                                    <td class="text-10" align="center"><span id="reward_show1" class="reward-white"></span></td>
                                    <td class="text-10" align="center"><span id="reward_show2" class="reward-white"></span></td>
                                    <td class="text-10" align="center"><span id="reward_show3" class="reward-white"></span></td>
                                </tr>
                                <tr>
                                    <td align="center" class="bg-gradient-gray LR10 text-8"><strong>หมายเลข</strong> </td>
                                    <td class="bg-gradient-gray LR10 text-9" align="center"><input class="form-check-input" type="checkbox" name="cbDisableAmt1" id="cbDisableAmt1" onclick="doDisableAmt(this.checked,1);"><label id="qty1"></label>&nbsp;</td>
                                    <td class="bg-gradient-gray LR10 text-9" align="center"><input class="form-check-input" type="checkbox" name="cbDisableAmt2" id="cbDisableAmt2" onclick="doDisableAmt(this.checked,2);"><label id="qty2"></label>&nbsp;</td>
                                    <td class="bg-gradient-gray LR10 text-9" align="center"><input class="form-check-input" type="checkbox" name="cbDisableAmt3" id="cbDisableAmt3" onclick="doDisableAmt(this.checked,3);"><label id="qty3"></label>&nbsp;</td>
                                </tr>


                                <?php for ($i = 0; $i < 10; $i++) { ?>
                                    <tr>
                                        <td class="border-white" align="center">
                                            <input class="form-control" type="text" name="bet_number[<?= $i; ?>]" id="bet_number_<?= $i; ?>" onkeyup="OnKeyUpBetNumber(this,0);" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','0');" autocomplete="off">
                                        </td>
                                        <td class="border-white" align="center">
                                            <input class="form-control" name="bet_amt[1][<?= $i; ?>]" id="bet_amt1_<?= $i; ?>" type="text" onfocus="showLottoRemain(1,0);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','0');" autocomplete="off">
                                        </td>
                                        <td class="border-white" align="center">
                                            <input class="form-control" name="bet_amt[2][<?= $i; ?>]" id="bet_amt2_<?= $i; ?>" type="text" onfocus="showLottoRemain(2,0);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','0');" autocomplete="off">
                                        </td>
                                        <td align="center">
                                            <input class="form-control" name="bet_amt[3][<?= $i; ?>]" id="bet_amt3_<?= $i; ?>" type="text" onfocus="showLottoRemain(3,0);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','0');" autocomplete="off">
                                        </td>
                                    </tr>
                                <?php  } ?>

                            </tbody>
                        </table>
                        </p>
                        <div class="d-block text-center card-footer">
                            <a href="javascript:void(0);" class="btn-wide btn btn-success">Saveแทงปกติ</a>
                        </div>
                    </div>
                    <!-- แทงปักหลัก -->
                    <div class="tab-pane show" id="tab-eg2-1" role="tabpanel">
                        <p>
                        <table class="mb-0 table table-striped">
                            <tbody>
                                <tr>
                                    <td class="border-white" align="center"><span id="waiting2" style="display:none"><img src="/_MemberInfo/Resources/Images/ajax-loader.gif"></span></td>
                                    <td class="border-white" align="center"><span id="remain_show-1" style="color:#0033CC;font-weight:bold;"></span>&nbsp;</td>
                                    <td class="border-white" align="center"><span id="remain_show-2" style="color:#0033CC;font-weight:bold;"></span>&nbsp;</td>
                                    <td align="center"><span id="remain_show-3" style="color:#0033CC;font-weight:bold;"></span>&nbsp;</td>
                                </tr>

                                <tr>
                                    <td align="center" class="bg-gradient-gray LR10 text-8"><strong>หมายเลข</strong> </td>
                                    <td class="bg-gradient-gray LR10 text-9" align="center">ปักหลักร้อย</td>
                                    <td class="bg-gradient-gray LR10 text-9" align="center">ปักหลักสิบ</td>
                                    <td class="bg-gradient-gray LR10 text-9" align="center">ปักหลักหน่วย</td>
                                </tr>
                                <tr>
                                    <td class="border-white" align="center">
                                        <input type="text" class="form-control" name="bet_number2[0]" id="bet_number2_0" maxlength="1" onkeypress="if(event.keyCode==13)NextOnEnter2('bet_number2',0);" autocomplete="off">
                                    </td>
                                    <td class="border-white" align="center">
                                        <input class="form-control" name="bet_amt[-1][0]" id="bet_amt-1_0" type="text" onfocus="showLottoRemain(-1,0);" onkeypress="if(event.keyCode==13)NextOnEnter2('bet_amt-1',0);" autocomplete="off">
                                    </td>
                                    <td class="border-white" align="center"><input class="form-control" name="bet_amt[-2][0]" id="bet_amt-2_0" type="text" onfocus="showLottoRemain(-2,0);" onkeypress="if(event.keyCode==13)NextOnEnter2('bet_amt-2',0);" autocomplete="off"></td>
                                    <td align="center"><input class="form-control" name="bet_amt[-3][0]" id="bet_amt-3_0" type="text" onfocus="showLottoRemain(-3,0);" onkeypress="if(event.keyCode==13)NextOnEnter2('bet_amt-3',0);"></td>
                                </tr>

                                <tr>
                                    <td colspan="4" class="bg-gradient-gray LR10 text-11" align="center"><input name="btnSubmit2" id="btnSubmit2" type="button" value="  แทง  " onclick="ProcessBet('InputBet2');" class="button-red2 text-8 text-white" style="visibility:hidden">
                                        <input name="btnReset2" id="btnReset2" type="reset" value="ยกเลิก" onclick="ResetBet();" class="button-red2 text-8 text-white" style="visibility:hidden">
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                        </p>
                        <div class="d-block text-center card-footer">
                            <a href="javascript:void(0);" class="btn-wide btn btn-success">Saveแทงปักหลัก</a>
                        </div>
                    </div>
                    <!-- แทงชุด -->
                    <div class="tab-pane show" id="tab-eg2-2" role="tabpanel">
                        <p>
                        <table class="mb-0 table table-striped">
                            <tr>
                                <td></td>
                                <td colspan="2" align="center" class="text-10 L10 text-orange">
                                    <select class="form-control-sm form-control" name="slSuitLottoType" id="slSuitLottoType">
                                        <option value="1">3 ตัวบน</option>
                                        <option value="2">3 ตัวล่าง</option>
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                            <tbody>
                                <tr>
                                    <td align="center" class="bg-gradient-gray LR10 text-8"><strong>หมายเลข</strong> </td>
                                    <td class="bg-gradient-gray LR10 text-9" align="center">ตรง</td>
                                    <td class="bg-gradient-gray LR10 text-9" align="center">กลับ</td>
                                    <td class="bg-gradient-gray LR10 text-9" align="center"><span id="waiting3"></span></td>
                                </tr>
                                <tr>
                                    <td class="border-white" align="center">
                                        <input type="text" class="form-control" name="fbet_number" id="fbet_number" maxlength="3" onkeypress="if(event.keyCode==13)NextOnEnter3('fbet_number');" autocomplete="off">
                                    </td>
                                    <td class="border-white" align="center">
                                        <input class="form-control" name="fbet_amt1" id="fbet_amt1" type="text" onkeypress="if(event.keyCode==13)NextOnEnter3('fbet_amt1');">
                                    </td>
                                    <td class="border-white" align="center"><input class="form-control" name="fbet_amt2" id="fbet_amt2" type="text" onkeypress="if(event.keyCode==13)NextOnEnter3('fbet_amt2');" autocomplete="off"></td>
                                    <td align="center"></td>
                                </tr>

                                <tr>
                                    <td colspan="4" class="bg-gradient-gray LR10 text-11" align="center" id="tbShowData" style="color:#F00">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                        </p>
                        <div class="d-block text-center card-footer">
                            <a href="javascript:void(0);" class="btn-wide btn btn-success">Saveแทงชุด</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="col-md-6 col-xl-6">
        <div class="main-card mb-3 card">
            <div class="card-header">
               </font>&nbsp;&nbsp;เครดิตคงเหลือ ::: <font size="+1"><b>&nbsp;4,460.00</b></font>
               &nbsp;&nbsp;<b>ยอดเล่น&nbsp;<font size="+1"><span id="total_amt">0</span></font>&nbsp;บาท</b>
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    <table class="mb-0 table table-striped">
                        <tbody>
                            <tr>
                                <td align="center">
                                    
                                    <input class="form-check-input" type="checkbox" name="cbAll" id="cbAll" onclick="CheckAll(this);">
                                    <span id="total_bet" style="font-weight:bold">(0)</span>
                                </td>
                                <td align="center">วันที่-เวลา</td>
                                <td align="center">ประเภท</td>
                                <td align="center">หมายเลข</td>
                                <td align="center">จำนวน</td>
                                <td align="center">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            <div class="card-footer">Footer</div>
        </div>



    </div>
    <div class="col-md-6 col-xl-2">
        <label>หมายเลขปิดรับ</label>
        <div class="card mb-3 widget-content ">
            <div class="widget-content-wrapper ">
                <div class="widget-content-left">
                    <div class="widget-heading">3 ตัวบน</div>
                    <div class="widget-subheading">123 - 456 - 789 - 321 - 654 - 987 </div>

                </div>
               
            </div>
        </div>
        <div class="card mb-3 widget-content ">
            <div class="widget-content-wrapper ">
                <div class="widget-content-left">
                    <div class="widget-heading">2 ตัวบน</div>
                    <div class="widget-subheading">12 - 34 - 56 - 78 - 90</div>

                </div>
            </div>
        </div>
    </div>

</div>




<?php $this->endSection(); ?>