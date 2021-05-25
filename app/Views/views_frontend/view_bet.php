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
        <div class="card mb-3 widget-content bg-midnight-bloom">
            <div class="widget-content-wrapper ">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr bgcolor="#fff">
                            <td height="30" colspan="4" align="center" bgcolor="#FFCC00" class="text-10 L10 text-orange"><strong>แทงปกติ</strong></td>
                        </tr>
                        <tr bgcolor="#FFCC66" height="25px">
                            <td width="85" class="text-10" align="center"><b>Copy</b></td>
                            <td width="85" class="border-white" align="center"><input type="button" name="btnCopy1" value="คัดลอก" onclick="copyBetAmount(1);" title="กด Click เพื่อ copy จำนวนเงิน จากแถวแรก"></td>
                            <td width="89" class="border-white" align="center"><input type="button" name="btnCopy2" value="คัดลอก" onclick="copyBetAmount(2);" title="กด Click เพื่อ copy จำนวนเงิน จากแถวแรก"></td>
                            <td width="85" align="center"><input type="button" name="btnCopy3" value="คัดลอก" onclick="copyBetAmount(3);" title="กด Click เพื่อ copy จำนวนเงิน จากแถวแรก"></td>
                        </tr>
                        <tr bgcolor="#fff" height="25px">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center"><span id="waiting1" style="display:none"><img src="/_MemberInfo/Resources/Images/ajax-loader.gif"></span></td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center"><span id="remain_show1" style="color:#0033CC;font-weight:bold;"></span>&nbsp;</td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><span id="remain_show2" style="color:#0033CC;font-weight:bold;"></span>&nbsp;</td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><span id="remain_show3" style="color:#0033CC;font-weight:bold;"></span>&nbsp;</td>
                        </tr>
                        <tr bgcolor="#FF0000" id="row_show_reward" style="display:none">
                            <td height="30" align="center" bgcolor="#FF0000" class="text-10" style="color:#fff;"><b><label id="caption_reward">อัตราจ่าย</label></b></td>
                            <td height="30" class="text-10" align="center"><span id="reward_show1" class="reward-white"></span></td>
                            <td height="30" class="text-10" align="center"><span id="reward_show2" class="reward-white"></span></td>
                            <td height="30" class="text-10" align="center"><span id="reward_show3" class="reward-white"></span></td>
                        </tr>
                        <tr bgcolor="#fff">
                            <td height="30" align="center" bgcolor="#fff" class="bg-gradient-gray LR10 text-8"><strong>หมายเลข</strong> </td>
                            <td height="30" bgcolor="#fff" class="bg-gradient-gray LR10 text-9" align="center"><input type="checkbox" name="cbDisableAmt1" id="cbDisableAmt1" onclick="doDisableAmt(this.checked,1);"><label id="qty1"></label>&nbsp;</td>
                            <td height="30" bgcolor="#fff" class="bg-gradient-gray LR10 text-9" align="center"><input type="checkbox" name="cbDisableAmt2" id="cbDisableAmt2" onclick="doDisableAmt(this.checked,2);"><label id="qty2"></label>&nbsp;</td>
                            <td height="30" bgcolor="#fff" class="bg-gradient-gray LR10 text-9" align="center"><input type="checkbox" name="cbDisableAmt3" id="cbDisableAmt3" onclick="doDisableAmt(this.checked,3);"><label id="qty3"></label>&nbsp;</td>
                        </tr>

                        <tr bgcolor="#fff">

                        </tr>
                        <tr bgcolor="#fff">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input type="text" class="bg-insert" name="bet_number1[0]" id="bet_number1_0" onkeyup="OnKeyUpBetNumber(this,0);" style="width:60;text-align:center;font-weight:bold;" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','0');" autocomplete="off">
                            </td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input class="bg-insert" name="bet_amt[1][0]" id="bet_amt1_0" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(1,0);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','0');" autocomplete="off">
                            </td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><input class="bg-insert" name="bet_amt[2][0]" id="bet_amt2_0" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(2,0);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','0');" autocomplete="off"></td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><input class="bg-insert" name="bet_amt[3][0]" id="bet_amt3_0" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(3,0);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','0');" autocomplete="off"></td>
                        </tr>

                        <tr bgcolor="#fff">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input type="text" class="bg-insert" name="bet_number1[1]" id="bet_number1_1" onkeyup="OnKeyUpBetNumber(this,1);" style="width:60;text-align:center;font-weight:bold;" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','1');" autocomplete="off">
                            </td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input class="bg-insert" name="bet_amt[1][1]" id="bet_amt1_1" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(1,1);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','1');" autocomplete="off">
                            </td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><input class="bg-insert" name="bet_amt[2][1]" id="bet_amt2_1" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(2,1);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','1');" autocomplete="off"></td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><input class="bg-insert" name="bet_amt[3][1]" id="bet_amt3_1" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(3,1);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','1');" autocomplete="off"></td>
                        </tr>

                        <tr bgcolor="#fff">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input type="text" class="bg-insert" name="bet_number1[2]" id="bet_number1_2" onkeyup="OnKeyUpBetNumber(this,2);" style="width:60;text-align:center;font-weight:bold;" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','2');" autocomplete="off">
                            </td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input class="bg-insert" name="bet_amt[1][2]" id="bet_amt1_2" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(1,2);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','2');" autocomplete="off">
                            </td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><input class="bg-insert" name="bet_amt[2][2]" id="bet_amt2_2" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(2,2);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','2');" autocomplete="off"></td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><input class="bg-insert" name="bet_amt[3][2]" id="bet_amt3_2" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(3,2);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','2');" autocomplete="off"></td>
                        </tr>

                        <tr bgcolor="#fff">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input type="text" class="bg-insert" name="bet_number1[3]" id="bet_number1_3" onkeyup="OnKeyUpBetNumber(this,3);" style="width:60;text-align:center;font-weight:bold;" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','3');" autocomplete="off">
                            </td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input class="bg-insert" name="bet_amt[1][3]" id="bet_amt1_3" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(1,3);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','3');" autocomplete="off">
                            </td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><input class="bg-insert" name="bet_amt[2][3]" id="bet_amt2_3" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(2,3);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','3');" autocomplete="off"></td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><input class="bg-insert" name="bet_amt[3][3]" id="bet_amt3_3" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(3,3);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','3');" autocomplete="off"></td>
                        </tr>

                        <tr bgcolor="#fff">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input type="text" class="bg-insert" name="bet_number1[4]" id="bet_number1_4" onkeyup="OnKeyUpBetNumber(this,4);" style="width:60;text-align:center;font-weight:bold;" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','4');" autocomplete="off">
                            </td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input class="bg-insert" name="bet_amt[1][4]" id="bet_amt1_4" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(1,4);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','4');" autocomplete="off">
                            </td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><input class="bg-insert" name="bet_amt[2][4]" id="bet_amt2_4" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(2,4);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','4');" autocomplete="off"></td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><input class="bg-insert" name="bet_amt[3][4]" id="bet_amt3_4" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(3,4);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','4');" autocomplete="off"></td>
                        </tr>

                        <tr bgcolor="#fff">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input type="text" class="bg-insert" name="bet_number1[5]" id="bet_number1_5" onkeyup="OnKeyUpBetNumber(this,5);" style="width:60;text-align:center;font-weight:bold;" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','5');" autocomplete="off">
                            </td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input class="bg-insert" name="bet_amt[1][5]" id="bet_amt1_5" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(1,5);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','5');" autocomplete="off">
                            </td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><input class="bg-insert" name="bet_amt[2][5]" id="bet_amt2_5" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(2,5);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','5');" autocomplete="off"></td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><input class="bg-insert" name="bet_amt[3][5]" id="bet_amt3_5" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(3,5);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','5');" autocomplete="off"></td>
                        </tr>

                        <tr bgcolor="#fff">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input type="text" class="bg-insert" name="bet_number1[6]" id="bet_number1_6" onkeyup="OnKeyUpBetNumber(this,6);" style="width:60;text-align:center;font-weight:bold;" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','6');" autocomplete="off">
                            </td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input class="bg-insert" name="bet_amt[1][6]" id="bet_amt1_6" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(1,6);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','6');" autocomplete="off">
                            </td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><input class="bg-insert" name="bet_amt[2][6]" id="bet_amt2_6" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(2,6);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','6');" autocomplete="off"></td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><input class="bg-insert" name="bet_amt[3][6]" id="bet_amt3_6" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(3,6);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','6');" autocomplete="off"></td>
                        </tr>

                        <tr bgcolor="#fff">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input type="text" class="bg-insert" name="bet_number1[7]" id="bet_number1_7" onkeyup="OnKeyUpBetNumber(this,7);" style="width:60;text-align:center;font-weight:bold;" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','7');" autocomplete="off">
                            </td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input class="bg-insert" name="bet_amt[1][7]" id="bet_amt1_7" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(1,7);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','7');" autocomplete="off">
                            </td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><input class="bg-insert" name="bet_amt[2][7]" id="bet_amt2_7" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(2,7);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','7');" autocomplete="off"></td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><input class="bg-insert" name="bet_amt[3][7]" id="bet_amt3_7" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(3,7);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','7');" autocomplete="off"></td>
                        </tr>

                        <tr bgcolor="#fff">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input type="text" class="bg-insert" name="bet_number1[8]" id="bet_number1_8" onkeyup="OnKeyUpBetNumber(this,8);" style="width:60;text-align:center;font-weight:bold;" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','8');" autocomplete="off">
                            </td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input class="bg-insert" name="bet_amt[1][8]" id="bet_amt1_8" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(1,8);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','8');" autocomplete="off">
                            </td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><input class="bg-insert" name="bet_amt[2][8]" id="bet_amt2_8" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(2,8);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','8');" autocomplete="off"></td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><input class="bg-insert" name="bet_amt[3][8]" id="bet_amt3_8" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(3,8);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','8');" autocomplete="off"></td>
                        </tr>

                        <tr bgcolor="#fff">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input type="text" class="bg-insert" name="bet_number1[9]" id="bet_number1_9" onkeyup="OnKeyUpBetNumber(this,9);" style="width:60;text-align:center;font-weight:bold;" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','9');" autocomplete="off">
                            </td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input class="bg-insert" name="bet_amt[1][9]" id="bet_amt1_9" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(1,9);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','9');" autocomplete="off">
                            </td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><input class="bg-insert" name="bet_amt[2][9]" id="bet_amt2_9" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(2,9);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','9');" autocomplete="off"></td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><input class="bg-insert" name="bet_amt[3][9]" id="bet_amt3_9" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(3,9);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','9');" autocomplete="off"></td>
                        </tr>

                        <tr bgcolor="#fff">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input type="text" class="bg-insert" name="bet_number1[10]" id="bet_number1_10" onkeyup="OnKeyUpBetNumber(this,10);" style="width:60;text-align:center;font-weight:bold;" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','10');" autocomplete="off">
                            </td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input class="bg-insert" name="bet_amt[1][10]" id="bet_amt1_10" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(1,10);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','10');" autocomplete="off">
                            </td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><input class="bg-insert" name="bet_amt[2][10]" id="bet_amt2_10" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(2,10);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','10');" autocomplete="off"></td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><input class="bg-insert" name="bet_amt[3][10]" id="bet_amt3_10" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(3,10);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','10');" autocomplete="off"></td>
                        </tr>

                        <tr bgcolor="#fff">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input type="text" class="bg-insert" name="bet_number1[11]" id="bet_number1_11" onkeyup="OnKeyUpBetNumber(this,11);" style="width:60;text-align:center;font-weight:bold;" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','11');" autocomplete="off">
                            </td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input class="bg-insert" name="bet_amt[1][11]" id="bet_amt1_11" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(1,11);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','11');" autocomplete="off">
                            </td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><input class="bg-insert" name="bet_amt[2][11]" id="bet_amt2_11" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(2,11);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','11');" autocomplete="off"></td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><input class="bg-insert" name="bet_amt[3][11]" id="bet_amt3_11" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(3,11);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','11');" autocomplete="off"></td>
                        </tr>

                        <tr bgcolor="#fff">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input type="text" class="bg-insert" name="bet_number1[12]" id="bet_number1_12" onkeyup="OnKeyUpBetNumber(this,12);" style="width:60;text-align:center;font-weight:bold;" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','12');" autocomplete="off">
                            </td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input class="bg-insert" name="bet_amt[1][12]" id="bet_amt1_12" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(1,12);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','12');" autocomplete="off">
                            </td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><input class="bg-insert" name="bet_amt[2][12]" id="bet_amt2_12" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(2,12);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','12');" autocomplete="off"></td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><input class="bg-insert" name="bet_amt[3][12]" id="bet_amt3_12" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(3,12);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','12');" autocomplete="off"></td>
                        </tr>

                        <tr bgcolor="#fff">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input type="text" class="bg-insert" name="bet_number1[13]" id="bet_number1_13" onkeyup="OnKeyUpBetNumber(this,13);" style="width:60;text-align:center;font-weight:bold;" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','13');" autocomplete="off">
                            </td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input class="bg-insert" name="bet_amt[1][13]" id="bet_amt1_13" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(1,13);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','13');" autocomplete="off">
                            </td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><input class="bg-insert" name="bet_amt[2][13]" id="bet_amt2_13" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(2,13);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','13');" autocomplete="off"></td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><input class="bg-insert" name="bet_amt[3][13]" id="bet_amt3_13" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(3,13);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','13');" autocomplete="off"></td>
                        </tr>

                        <tr bgcolor="#fff">
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input type="text" class="bg-insert" name="bet_number1[14]" id="bet_number1_14" onkeyup="OnKeyUpBetNumber(this,14);" style="width:60;text-align:center;font-weight:bold;" maxlength="5" onkeypress="if(event.keyCode==13)NextOnEnter('bet_number1','14');" autocomplete="off">
                            </td>
                            <td width="85" bgcolor="#E2E2E2" class="border-white" align="center">
                                <input class="bg-insert" name="bet_amt[1][14]" id="bet_amt1_14" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(1,14);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt1','14');" autocomplete="off">
                            </td>
                            <td width="89" bgcolor="#E2E2E2" class="border-white" align="center"><input class="bg-insert" name="bet_amt[2][14]" id="bet_amt2_14" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(2,14);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt2','14');" autocomplete="off"></td>
                            <td width="85" bgcolor="#E2E2E2" align="center"><input class="bg-insert" name="bet_amt[3][14]" id="bet_amt3_14" type="text" style="width:60;text-align:right" onfocus="showLottoRemain(3,14);" onkeypress="if(event.keyCode==13)NextOnEnter('bet_amt3','14');" autocomplete="off"></td>
                        </tr>
                        <tr bgcolor="#fff">
                            <td colspan="4" bgcolor="#fff" class="bg-gradient-gray LR10 text-11" align="center"><input name="btnSubmit1" id="btnSubmit1" type="button" value="  แทง  " onclick="ProcessBet('InputBet1');" class="button-red2 text-8 text-white" style="visibility:hidden">
                                <input name="btnReset1" id="btnReset1" type="reset" value="ยกเลิก" onclick="ResetBet();" class="button-red2 text-8 text-white" style="visibility:hidden">
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-6">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="bg-gradient-yellow">
                    <tbody>
                        <tr>
                            <td align="center">
                                <table width="96%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr height="30px">
                                            <td width="85%" bgcolor="#E2E2E2" class="text-10" align="left">&nbsp;&nbsp;USERNAME ::: <font size="+1"><b>AAAAA</b></font>&nbsp;&nbsp;&nbsp;&nbsp;เครดิตคงเหลือ ::: <font size="+1"><b>4,460.00</b></font>
                                            </td>
                                            <td width="15%" bgcolor="#E2E2E2" class="text-10" align="center">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="85%" height="39" bgcolor="#f1b624" class="text-10"><a href="betlist2Excel.php" target="_blank" style="text-decoration:none"><img src="../_MemberInfo/Resources/Images/lotto-admin/lotto-admin_22.png" width="152" height="39" alt="" style="vertical-align:middle;"></a> &nbsp;&nbsp; <b>ยอดพนันทั้งหมด&nbsp;<span id="total_amt">0</span>&nbsp;บาท</b></td>
                                            <td width="15%" bgcolor="#f1b624" class="text-10" align="center"><img src="../_MemberInfo/Resources/Images/lotto-admin/lotto-admin_23.png" width="39" height="39" style=" vertical-align:middle;cursor:pointer" onclick="SubmitForm();"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table width="96%" border="0" cellspacing="0" cellpadding="0" class="bg-gradient-gray-2 text-10">
                                    <tbody>
                                        <tr>
                                            <td width="4%" align="center">
                                                <input type="checkbox" name="cbAll" id="cbAll" onclick="CheckAll(this);">
                                                <span id="total_bet" style="font-weight:bold">(0)</span>
                                            </td>
                                            <td width="24%" align="center">วันที่-เวลา</td>
                                            <td width="19%" align="center">ประเภท</td>
                                            <td width="19%" align="center">หมายเลข</td>
                                            <td width="19%" align="center">จำนวน</td>
                                            <td width="15%" align="center">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table width="96%" border="0" cellspacing="1" cellpadding="0" class="text-10">
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-2">
        <div class="card mb-3 widget-content bg-grow-early">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Followers</div>
                    <div class="widget-subheading">People Interested</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>46%</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-premium-dark">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Products Sold</div>
                    <div class="widget-subheading">Revenue streams</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-warning"><span>$14M</span></div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php $this->endSection(); ?>