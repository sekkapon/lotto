<?php $this->extend('template/tem_frontend/content'); ?>
<?php $this->section('content'); ?>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>รายการแทง
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
                                            <td align="center"><img src="../_MemberInfo/Resources/Images/h-betlist.png" width="186" height="40" alt="" style="margin-top:-8px;"></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top">
                                <table width="98%" border="0" cellspacing="0" cellpadding="0" class="bg-gradient-yellow text-10">

                                    <tbody>
                                        <tr>
                                            <td height="25" align="center" class="LR10">
                                                <table width="35%" border="0" cellspacing="0" cellpadding="0" class="LRBT10">
                                                    <tbody>
                                                        <tr>
                                                            <td height="50" align="center" class="text-10 bg-gradient-gray text-orange"><b>หวยรัฐบาล งวดประจำวันที่ &nbsp;01-06-2021</b>&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>



                                        <tr>
                                            <td height="25" class="LR10"><b>เลือกรายการ</b>&nbsp;
                                                <select name="slShowType" id="slShowType" onchange="SubmitForm();">
                                                    <option value="0" selected="">แสดงตามรายการแทง</option>
                                                    <option value="1">แสดงตามหมายเลข</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25" class="LR10"><b>เลือก</b>&nbsp;
                                                <select name="slLottoType" id="slLottoType" onchange="SubmitForm();">
                                                    <option value="">ทุกประเภท</option>
                                                    <option value="1">3 ตัวบน</option>
                                                    <option value="2">3 ตัวล่าง</option>
                                                    <option value="3">3 ตัวโต๊ด</option>
                                                    <option value="4">2 ตัวบน</option>
                                                    <option value="5">2 ตัวล่าง</option>
                                                    <option value="6">2 ตัวโต๊ด</option>
                                                    <option value="7">1 ตัวบน</option>
                                                    <option value="8">1 ตัวล่าง</option>
                                                    <option value="9">ปักหลักร้อย</option>
                                                    <option value="10">ปักหลักสิบ</option>
                                                    <option value="11">ปักหลักหน่วย</option>
                                                    <option value="12">4 ตัวบน</option>
                                                    <option value="13">4 ตัวโต๊ด</option>
                                                    <option value="14">5 ตัวโต๊ด</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">
                                                <table width="98%" border="0" cellspacing="1" cellpadding="0" class="text-10">
                                                    <tbody>
                                                        <tr align="left" bgcolor="#fff">
                                                            <td height="39" align="center" bgcolor="#F1B624" class="text-10 gradient-orgnge"><strong> ลำดับ</strong></td>
                                                            <td align="center" bgcolor="#F1B624" class="text-10 gradient-orgnge"><strong>วันที่ เวลา</strong></td>
                                                            <td align="center" bgcolor="#F1B624" class="text-10 gradient-orgnge"><strong>RefNo.</strong></td>
                                                            <td height="39" align="center" bgcolor="#F1B624" class="text-10 gradient-orgnge"><strong>ประเภท</strong></td>
                                                            <td align="center" bgcolor="#F1B624" class="text-10 gradient-orgnge"><strong>หมายเลข</strong></td>
                                                            <td align="center" bgcolor="#F1B624" class="text-10 gradient-orgnge"><strong>ยอดพนัน</strong></td>
                                                            <td align="center" bgcolor="#F1B624" class="text-10 gradient-orgnge"><strong>คอมมิชชั่น</strong></td>
                                                            <td align="center" bgcolor="#F1B624" class="text-10 gradient-orgnge"><strong>สถานะ</strong></td>
                                                        </tr>
                                                        <tr height="30px" bgcolor="#D8D8D8" style="color:#0033CC;font-weight:bold">
                                                            <td colspan="4" align="left">&nbsp;</td>
                                                            <td align="center"><span id="total_number">(0)</span>&nbsp;</td>
                                                            <td align="right"><span id="total_amt">0.00</span>&nbsp;</td>
                                                            <td align="right"><span id="total_comm">0.00</span>&nbsp;</td>
                                                            <td align="center"><span id="total_sum">0.00</span></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <script language="javascript">
                                                    $('#total_number').html('(0)');
                                                    $('#total_amt').html('0.00');
                                                    $('#total_comm').html('0.00');
                                                    $('#total_sum').html('0.00');
                                                </script>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">&nbsp;</td>
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