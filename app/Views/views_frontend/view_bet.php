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
    <div class="col-md-6 col-xl-5">
        <div class="card mb-3 card ">
            <div class="card-header">
                <div class="btn-actions-pane-center">
                    <div class="nav ">
                        <a data-toggle="tab" href="#tab-eg2-0" class="btn-pill btn-wide btn btn-outline-alternate btn-sm show active">แทงปกติ</a>
                        <!-- <a data-toggle="tab" href="#tab-eg2-1" class="btn-pill btn-wide mr-1 ml-1 btn btn-outline-alternate btn-sm show">แทงปักหลัก</a> -->
                        <!-- <a data-toggle="tab" href="#tab-eg2-2" class="btn-pill btn-wide btn btn-outline-alternate btn-sm show">แทงชุด</a> -->
                    </div>

                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <!-- แทงปกติ -->

                    <div class="tab-pane show active" id="tab-eg2-0" role="tabpanel">
                        <form id="formbet">
                            <p>
                            <table class="mb-0 table table-striped">
                                <tbody>

                                    <tr id="row_show_reward" style="">
                                        <td align="center" class="text-10"><b><label id="caption_reward">อัตราจ่าย</label></b></td>
                                        <td class="text-10" align="center"><span id="reward_show1" class="reward-white"></span></td>
                                        <td class="text-10" align="center"><span id="reward_show2" class="reward-white"></span></td>
                                        <td class="text-10" align="center"><span id="reward_show3" class="reward-white"></span></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="bg-gradient-gray LR10 text-8"><strong>หมายเลข</strong> </td>
                                        <td class="bg-gradient-gray LR10 text-9" align="center"><input class="form-control" type="button" name="btnCopy1" value="คัดลอก" onclick="copyBetAmount(1);" title="กด Click เพื่อ copy จำนวนเงิน จากแถวแรก"><label id="lb_1"></label></td>
                                        <td class="bg-gradient-gray LR10 text-9" align="center"><input class="form-control" type="button" name="btnCopy1" value="คัดลอก" onclick="copyBetAmount(1);" title="กด Click เพื่อ copy จำนวนเงิน จากแถวแรก"><label id="lb_2"></label></td>
                                        <td class="bg-gradient-gray LR10 text-9" align="center"><input class="form-control" type="button" name="btnCopy1" value="คัดลอก" onclick="copyBetAmount(1);" title="กด Click เพื่อ copy จำนวนเงิน จากแถวแรก"><label id="lb_3"></label></td>
                                    </tr>

                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                        <tr>
                                            <td class="border-white bg-info " align="center">
                                                <input class="form-control betnum" type="text" name="bet_number[<?= $i; ?>]" id="bet_number_<?= $i; ?>" onkeyup="checkdis($(this).val(),this);" onblur="checkdis(this,$(this).val(),this);" maxlength="5" autocomplete="off">
                                            </td>
                                            <td class="border-white td1" align="center">
                                                <input class="form-control" name="bet_amt[1][<?= $i; ?>]" id="bet_amt1_<?= $i; ?>" onblur="checkmaxmin(this,1)" onfocus="checknum(this,1)" onclick="checknum(this,1)" type="text" autocomplete="off">
                                            </td>
                                            <td class="border-white td2" align="center">
                                                <input class="form-control" name="bet_amt[2][<?= $i; ?>]" id="bet_amt2_<?= $i; ?>" onblur="checkmaxmin(this,2)" onfocus="checknum(this,1)" onclick="checknum(this,2)" type="text" autocomplete="off">
                                            </td>
                                            <td class="border-white td3" align="center">
                                                <input class="form-control" name="bet_amt[3][<?= $i; ?>]" id="bet_amt3_<?= $i; ?>" onblur="checkmaxmin(this,3)" onfocus="checknum(this,1)" onclick="checknum(this,3)" type="text" autocomplete="off">
                                            </td>
                                        </tr>
                                    <?php  } ?>

                                </tbody>
                            </table>
                            </p>
                            <div class="d-block text-center card-footer">
                                <button class="btn-wide btn btn-success" type="submit">ตกลง</button>
                            </div>
                        </form>
                    </div>


                    <!-- แทงปักหลัก -->
                    <!-- <div class="tab-pane show" id="tab-eg2-1" role="tabpanel">
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
                                <td colspan="4" class="bg-gradient-gray LR10 text-11" align="center"><input name="btnSubmit2" id="btnSubmit2" type="button" value="  แทง  " onclick="ProcessBet('InputBet2');" class="button-red2 text-8 text-white" style="visibility:readonly">
                                    <input name="btnReset2" id="btnReset2" type="reset" value="ยกเลิก" onclick="ResetBet();" class="button-red2 text-8 text-white" style="visibility:readonly">
                                </td>

                            </tr>
                        </tbody>
                    </table>
                    </p>
                    <div class="d-block text-center card-footer">
                        <a href="javascript:void(0);" class="btn-wide btn btn-success">Saveแทงปักหลัก</a>
                    </div>
                </div> -->

                </div>
            </div>


        </div>
    </div>
    <div class="col-md-6 col-xl-7">
        <div class="main-card mb-3 card">
            <div class="card-header">
                &nbsp;&nbsp;<b>ยอดเล่น&nbsp;<font size="+1"><span id="total_amt"><?= $sumbet; ?></span></font>&nbsp;บาท</b>
            </div>
            <div class="card-body overflow-auto" height="100px">
                <table class="mb-0 table table-striped" id="dbtable">
                    <thead>
                        <tr>
                            <td align="center"></td>
                            <td >ลำดับ </td>
                            <td align="center">วันที่-เวลา(ป/ด/ว ช:น)</td>
                            <td align="center">ประเภท</td>
                            <td align="center">หมายเลข</td>
                            <td align="center">จำนวน</td>
                           
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 0;;
                        foreach (json_decode($mybet) as $key => $value) {
                            $i++; ?>
                            <tr>
                                <td align="center"> <i class="fa fa-window-close" aria-hidden="true"></i></td>
                                <td align="center"><?= $i; ?></td>
                                <td align="center"><?= date('Y/m/d H:i', $value->create_time); ?></td>
                                <td align="center"><?php
                                                    switch ($value->type_lotto) {
                                                        case '3upper':
                                                            echo "3ตัวบน";
                                                            break;
                                                        case '3under':
                                                            echo "3ตัวล่าง";
                                                            break;
                                                        case '3toad':
                                                            echo "3ตัวโต๊ด";
                                                            break;
                                                        case '2upper':
                                                            echo "2ตัวบน";
                                                            break;
                                                        case '2under':
                                                            echo "2ตัวล่าง";
                                                            break;
                                                        case '2toad':
                                                            echo "2ตัวโต๊ด";
                                                            break;
                                                        case 'floatUpper':
                                                            echo "ลอยบน";
                                                            break;
                                                        case 'floatUnder':
                                                            echo "ลอยล่าง";
                                                            break;
                                                        case '4toad':
                                                            echo "4ตัวโต๊ด";
                                                            break;
                                                        case '5toad':
                                                            echo "5ตัวโต๊ด";
                                                            break;
                                                        default:
                                                            break;
                                                    }

                                                    ?></td>
                                <td align="center"><?= $value->number_lotto ?></td>
                                <td align="center"><?= $value->amount_bet; ?></td>
                         
                            </tr>
                        <?php  } ?>

                    </tbody>
                </table>
            </div>
            <div class="card-footer">Footer</div>
        </div>



    </div>
    <!-- <div class="col-md-6 col-xl-2">
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
</div> -->

</div>


<script>
$(document).ready(function() {
    $('#dbtable').DataTable( {
        "searching": false,
        paging: false,
        "ordering": false,
        "scrollY":  "800px",
        "scrollCollapse": true,
        dom: 'Bfrtip',
        buttons: [
            { "extend": 'print' , className: 'btn-info', text:'<i class="fas fa-print"> Print</i>' }
        ]
    } );
} );
    function checknum(row, colum) {
        var tr = $(row).parents('tr').children().children('.betnum');
        var num = tr.val();
        var len = num.length;
        checkdis(num, tr);
        switch (len) {
            case 1:
                $('#lb_1').html('1ตัวบน');
                $('#lb_2').html('&nbsp;');
                $('#lb_3').html('1ตัวล่าง');
                break;
            case 2:
                $('#lb_1').html('2ตัวบน');
                $('#lb_2').html('2ตัวโต๊ด');
                $('#lb_3').html('2ตัวล่าง');
                break;
            case 3:
                $('#lb_1').html('3ตัวบน');
                $('#lb_2').html('3ตัวโต๊ด');
                $('#lb_3').html('3ตัวล่าง');
                break;
            case 4:
                $('#lb_1').html('&nbsp;');
                $('#lb_2').html('4ตัวโต๊ด');
                $('#lb_3').html('&nbsp;');
                break;
            case 5:
                $('#lb_1').html('&nbsp;');
                $('#lb_2').html('5ตัวโต๊ด');
                $('#lb_3').html('&nbsp;');
                break;

            default:
                $('#lb_1').html('');
                $('#lb_2').html('');
                $('#lb_3').html('');
                break;
        }
    }

    function checkdis(num, tr) {
        var col1 = $(tr).parents('tr').children('.td1').children('input');
        var col2 = $(tr).parents('tr').children('.td2').children('input');
        var col3 = $(tr).parents('tr').children('.td3').children('input');
        var len = num.length;
        $(col1).removeAttr('readonly');
        $(col2).removeAttr('readonly');
        $(col3).removeAttr('readonly');
        switch (len) {
            case 1:
                $(col2).attr('readonly', true);
                $(col2).val('');
                break;
            case 2:
                break;
            case 3:
                break;
            case 4:
                $(col1).attr('readonly', true);
                $(col1).val('');
                $(col3).attr('readonly', true);
                $(col3).val('');
                break;
            case 5:
                $(col1).attr('readonly', true);
                $(col1).val('');
                $(col3).attr('readonly', true);
                $(col3).val('');
                break;
            default:
                $(col1).removeAttr('readonly');
                $(col2).removeAttr('readonly');
                $(col3).removeAttr('readonly');
                break;
        }
    }

    function checkmaxmin(row, type) {
        var detail = JSON.parse((localStorage.getItem("maxmin"))).detail;
        var num = $(row).parents('tr').children().children('.betnum').val();
        var bet = parseInt($(row).val());
        if (bet != "") {
            var len = num.length;
            switch (len) {
                case 1:
                    if (type == 1) {
                        // t_floatUpper
                        let min = detail.t_floatUpper.minPerBet;
                        let max = detail.t_floatUpper.maxPerBet;
                        if (bet < min || bet > max) {
                            alert('ประเภท 1 ตัวบน \nขั้นต่ำ : ' + min + ' \nสูงสุด : ' + max);
                            $(row).val("");
                            $(row).focus();
                        }
                    }
                    if (type == 3) {
                        // t_floatUnder
                        let min = detail.t_floatUnder.minPerBet;
                        let max = detail.t_floatUnder.maxPerBet;
                        if (bet < min || bet > max) {
                            alert('ประเภท 1 ตัวล่าง \nขั้นต่ำ : ' + min + ' \nสูงสุด : ' + max);
                            $(row).val("");
                            $(row).focus();
                        }
                    }
                    break;
                case 2:
                    if (type == 1) {
                        // t_2upper
                        let min = detail.t_2upper.minPerBet;
                        let max = detail.t_2upper.maxPerBet;
                        if (bet < min || bet > max) {
                            alert('ประเภท 2 ตัวบน \nขั้นต่ำ : ' + min + ' \nสูงสุด : ' + max);
                            $(row).val("");
                            $(row).focus();
                        }
                    }
                    if (type == 2) {
                        // t_2toad
                        let min = detail.t_2toad.minPerBet;
                        let max = detail.t_2toad.maxPerBet;
                        if (bet < min || bet > max) {
                            alert('ประเภท 2 ตัวโต๊ด \nขั้นต่ำ : ' + min + ' \nสูงสุด : ' + max);
                            $(row).val("");
                            $(row).focus();
                        }
                    }
                    if (type == 3) {
                        // t_2under
                        let min = detail.t_2under.minPerBet;
                        let max = detail.t_2under.maxPerBet;
                        if (bet < min || bet > max) {
                            alert('ประเภท 2 ตัวล่าง \nขั้นต่ำ : ' + min + ' \nสูงสุด : ' + max);
                            $(row).val("");
                            $(row).focus();
                        }
                    }
                    break;
                case 3:
                    if (type == 1) {
                        // t_3upper
                        let min = detail.t_3upper.minPerBet;
                        let max = detail.t_3upper.maxPerBet;
                        if (bet < min || bet > max) {
                            alert('ประเภท 3 ตัวบน \nขั้นต่ำ : ' + min + ' \nสูงสุด : ' + max);
                            $(row).val("");
                            $(row).focus();
                        }
                    }
                    if (type == 2) {
                        // t_3toad
                        let min = detail.t_3toad.minPerBet;
                        let max = detail.t_3toad.maxPerBet;
                        if (bet < min || bet > max) {
                            alert('ประเภท 3 ตัวโต๊ด \nขั้นต่ำ : ' + min + ' \nสูงสุด : ' + max);
                            $(row).val("");
                            $(row).focus();
                        }
                    }
                    if (type == 3) {
                        // t_3under
                        let min = detail.t_3under.minPerBet;
                        let max = detail.t_3under.maxPerBet;
                        if (bet < min || bet > max) {
                            alert('ประเภท 3 ตัวล่าง \nขั้นต่ำ : ' + min + ' \nสูงสุด : ' + max);
                            $(row).val("");
                            $(row).focus();
                        }
                    }
                    break;
                case 4:
                    if (type == 2) {
                        // t_4toad
                        let min = detail.t_4toad.minPerBet;
                        let max = detail.t_4toad.maxPerBet;
                        if (bet < min || bet > max) {
                            alert('ประเภท 4 ตัวโต๊ด \nขั้นต่ำ : ' + min + ' \nสูงสุด : ' + max);
                            $(row).val("");
                            $(row).focus();
                        }
                    }
                    break;
                case 5:
                    if (type == 2) {
                        // t_5toad
                        let min = detail.t_5toad.minPerBet;
                        let max = detail.t_5toad.maxPerBet;
                        if (bet < min || bet > max) {
                            alert('ประเภท 5 ตัวโต๊ด \nขั้นต่ำ : ' + min + ' \nสูงสุด : ' + max);
                            $(row).val("");
                            $(row).focus();
                        }
                    }
                    break;
                default:
                    break;
            }


        }

    }
    $("#formbet").submit(function(event) {
        event.preventDefault();

        var data = $(this).serializeFormJSON();
        var newdata = [];
        var mybet = {};
        var mynum = {};
        $.each(data, function(key, value) {
            if ((key.indexOf("bet_number")) != -1) {
                if (value != "") {
                    mynum[key] = value;
                }
            } else {
                if (value != "") {
                    mybet[key] = value;
                }
            }
        });
        $.each(mynum, function(key, value) {
            var newkeynum = key.slice(-3);
            $.each(mybet, function(k, val) {
                let d = {};
                d['num'] = value;
                var newkeybet = k.slice(-3);

                if (newkeynum == newkeybet) {
                    let numtype = k.slice(8, -4);
                    d['bet'] = val;
                    if (value.length == 1) {
                        d['type'] = "t_" + ((numtype == "1") ? "floatUpper" : "floatUnder");
                    } else {
                        d['type'] = "t_" + value.length + ((numtype == "1") ? "upper" : (numtype == "2") ? "toad" : "under");
                    }

                    newdata.push(d);
                }
            });
        });
        if (newdata.length > 0) {
            $.ajax({
                    method: "POST",
                    url: "bet-huay-thai/api/savemybet",
                    dataType: "json",
                    data: {
                        data: newdata,
                    }
                })
                .done(function(msg) {
                    alert(msg.status);
                    location.reload();
                });
        }

    });
</script>





<?php $this->endSection(); ?>