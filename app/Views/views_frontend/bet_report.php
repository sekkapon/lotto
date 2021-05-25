<?php $this->extend('template/tem_frontend/content'); ?>
<?php $this->section('content'); ?>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>รายงานการเงิน
                <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-6 col-xl-12">
        <div class="card mb-3 widget-content ">
            <div class="widget-content-wrapper ">
                <table width="95%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" class="bg-gradient-gray">
                    <tbody>
                        <tr>
                            <td align="center" valign="top">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="bg-gradient-yellow">
                                    <tbody>
                                        <tr>
                                            <td align="center"><img src="../_MemberInfo/Resources/Images/h-statement.png" width="186" height="40" alt="" style="margin-top:-8px;"></td>
                                        </tr>
                                        <tr>
                                            <td align="left" valign="top">
                                                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" class="text-10">
                                                    <tbody>
                                                        <tr align="left" bgcolor="#fff">
                                                            <td align="center" bgcolor="#F1B624" class="text-10 gradient-orgnge"><strong>วันที่ เวลา</strong></td>
                                                            <td align="center" bgcolor="#F1B624" class="text-10 gradient-orgnge"><strong>รายการ</strong></td>
                                                            <td height="39" align="center" bgcolor="#F1B624" class="text-10 gradient-orgnge"><strong>ประเภท</strong></td>
                                                            <td align="center" bgcolor="#F1B624" class="text-10 gradient-orgnge"><strong>ได้เสีย</strong></td>
                                                            <td align="center" bgcolor="#F1B624" class="text-10 gradient-orgnge"><strong>ส่วนลด</strong></td>
                                                            <td align="center" bgcolor="#F1B624" class="text-10 gradient-orgnge"><strong>สุทธิ</strong></td>
                                                        </tr>
                                                        <tr class="bg-gray1">
                                                            <td width="19%" height="22" align="left" class="LR5"><b>ยอดยกมา สุทธิ</b></td>
                                                            <td width="16%" align="center">ยอดตั้งต้น</td>
                                                            <td width="15%" height="22" align="center"><b>ยกมา</b> <img src="../_MemberInfo/Resources/Images/icon.png" width="26" height="26" style="vertical-align: middle"></td>
                                                            <td width="19%" height="22" align="center">
                                                                <font color="red">-1,017.25</font>
                                                            </td>
                                                            <td width="16%" height="22" align="center">1,017.25</td>
                                                            <td width="15%" align="center" bgcolor="#F1B824" class="text-11"><b>0.00</b></td>
                                                        </tr>
                                                        <tr class="bg-gray2">
                                                            <td width="19%" height="22" align="left" class="LR5"><b>
                                                                    <font color="blue"><label onclick="WinlossClickDetail(1,'301','2021-03-16','tbl_input_bet_tmp');" style="cursor:pointer">16/03/2021 วันอังคาร</label></font>
                                                                </b></td>
                                                            <td width="16%" align="center">รายการได้เสีย</td>
                                                            <td width="15%" height="22" align="center"><b>หวยรัฐบาล</b> <img src="../_MemberInfo/Resources/Images/icon.png" width="26" height="26" style="vertical-align: middle"></td>
                                                            <td width="19%" height="22" align="center">
                                                                <font color="red">-850.00</font>
                                                            </td>
                                                            <td width="16%" height="22" align="center">0.00</td>
                                                            <td width="15%" align="center" bgcolor="#F1B824" class="text-11"><b>
                                                                    <font color="red">-850.00</font>
                                                                </b></td>
                                                        </tr>
                                                        <tr class="bg-gray1">
                                                            <td width="19%" height="22" align="left" class="LR5"><b>01/04/2021 วันพฤหัสบดี</b></td>
                                                            <td width="16%" align="center"><b>ตัดยอดบัญชี</b></td>
                                                            <td width="15%" height="22" align="center"><b><b>เคลียร์</b></b> <img src="../_MemberInfo/Resources/Images/icon.png" width="26" height="26" style="vertical-align: middle"></td>
                                                            <td width="19%" height="22" align="center">850.00</td>
                                                            <td width="16%" height="22" align="center">0.00</td>
                                                            <td width="15%" align="center" bgcolor="#F1B824" class="text-11"><b>0.00</b></td>
                                                        </tr>
                                                        <tr class="bg-gray2">
                                                            <td width="19%" height="22" align="left" class="LR5"><b>
                                                                    <font color="blue"><label onclick="WinlossClickDetail(1,'302','2021-04-01','tbl_input_bet_tmp');" style="cursor:pointer">01/04/2021 วันพฤหัสบดี</label></font>
                                                                </b></td>
                                                            <td width="16%" align="center">รายการได้เสีย</td>
                                                            <td width="15%" height="22" align="center"><b>หวยรัฐบาล</b> <img src="../_MemberInfo/Resources/Images/icon.png" width="26" height="26" style="vertical-align: middle"></td>
                                                            <td width="19%" height="22" align="center">3,200.00</td>
                                                            <td width="16%" height="22" align="center">0.00</td>
                                                            <td width="15%" align="center" bgcolor="#F1B824" class="text-11"><b>3,200.00</b></td>
                                                        </tr>
                                                        <tr class="bg-gray1">
                                                            <td width="19%" height="22" align="left" class="LR5"><b>15/04/2021 วันพฤหัสบดี</b></td>
                                                            <td width="16%" align="center"><b>ตัดยอดบัญชี</b></td>
                                                            <td width="15%" height="22" align="center"><b><b>เคลียร์</b></b> <img src="../_MemberInfo/Resources/Images/icon.png" width="26" height="26" style="vertical-align: middle"></td>
                                                            <td width="19%" height="22" align="center">
                                                                <font color="red">-3,200.00</font>
                                                            </td>
                                                            <td width="16%" height="22" align="center">0.00</td>
                                                            <td width="15%" align="center" bgcolor="#F1B824" class="text-11"><b>0.00</b></td>
                                                        </tr>
                                                        <tr class="bg-gray2">
                                                            <td width="19%" height="22" align="left" class="LR5"><b>
                                                                    <font color="blue"><label onclick="WinlossClickDetail(1,'304','2021-05-02','tbl_input_bet_tmp');" style="cursor:pointer">02/05/2021 วันอาทิตย์</label></font>
                                                                </b></td>
                                                            <td width="16%" align="center">รายการได้เสีย</td>
                                                            <td width="15%" height="22" align="center"><b>หวยรัฐบาล</b> <img src="../_MemberInfo/Resources/Images/icon.png" width="26" height="26" style="vertical-align: middle"></td>
                                                            <td width="19%" height="22" align="center">
                                                                <font color="red">-70.00</font>
                                                            </td>
                                                            <td width="16%" height="22" align="center">0.00</td>
                                                            <td width="15%" align="center" bgcolor="#F1B824" class="text-11"><b>
                                                                    <font color="red">-70.00</font>
                                                                </b></td>
                                                        </tr>
                                                        <tr class="bg-gray1">
                                                            <td width="19%" height="22" align="left" class="LR5"><b>05/05/2021 วันพุธ</b></td>
                                                            <td width="16%" align="center"><b>ตัดยอดบัญชี</b></td>
                                                            <td width="15%" height="22" align="center"><b><b>เคลียร์</b></b> <img src="../_MemberInfo/Resources/Images/icon.png" width="26" height="26" style="vertical-align: middle"></td>
                                                            <td width="19%" height="22" align="center">70.00</td>
                                                            <td width="16%" height="22" align="center">0.00</td>
                                                            <td width="15%" align="center" bgcolor="#F1B824" class="text-11"><b>0.00</b></td>
                                                        </tr>
                                                        <tr class="bg-gray2">
                                                            <td width="19%" height="22" align="left" class="LR5"><b>
                                                                    <font color="blue"><label onclick="WinlossClickDetail(1,'305','2021-05-16','tbl_input_bet');" style="cursor:pointer">16/05/2021 วันอาทิตย์</label></font>
                                                                </b></td>
                                                            <td width="16%" align="center">รายการได้เสีย</td>
                                                            <td width="15%" height="22" align="center"><b>หวยรัฐบาล</b> <img src="../_MemberInfo/Resources/Images/icon.png" width="26" height="26" style="vertical-align: middle"></td>
                                                            <td width="19%" height="22" align="center">
                                                                <font color="red">-540.00</font>
                                                            </td>
                                                            <td width="16%" height="22" align="center">0.00</td>
                                                            <td width="15%" align="center" bgcolor="#F1B824" class="text-11"><b>
                                                                    <font color="red">-540.00</font>
                                                                </b></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>



                        <tr>
                            <td align="left" valign="top">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>




<?php $this->endSection(); ?>