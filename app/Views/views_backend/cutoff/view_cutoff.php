<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>
<style>
    p.inTable {
        margin-top: 1rem;

    }

    p.sum {
        margin-top: 1rem;
        color: red;
        text-decoration: underline;

    }

    span.selectCutoff:hover {
        color: blue;
        text-decoration: underline;
        cursor: pointer;
    }

    th.betUser {
        color: red;
        text-decoration: underline;
    }
</style>
<div class="page-heading" id="settingTime">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Cut Off</h3>
                <p class="text-subtitle text-muted">ตัดยอดหวย</p>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" onclick="javascript:$('#divCutoff').attr('hidden',true)">ยอดแทงตามสมาชิก</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">ตัดยอด</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row" id="divSettingLotto">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-content">
                                        <!-- table striped -->
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr align="center">
                                                    <th>ลำดับ</th>
                                                    <th>ชื่อสมาชิก</th>
                                                    <th>ยูสเซอร์เนม</th>
                                                    <th>งวดที่</th>
                                                    <th>ยอดเดิมพันตามประเภท</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (sizeof($dataByUser) == 0) { ?>
                                                    <tr align="center">
                                                        <td colspan="5">ไม่มีข้อมูลการตัดยอด</td>
                                                    </tr>
                                                    <?php } else {
                                                    $i = 1;
                                                    foreach ($dataByUser as $key => $value) { ?>
                                                        <tr align="center">
                                                            <td><?= $i; ?></td>
                                                            <td>
                                                                <span class="selectCutoff" data-user="<?= htmlspecialchars(json_encode($value, JSON_UNESCAPED_UNICODE), ENT_COMPAT); ?>" onclick="pageCutoff(this)"><?= $value['firstname']; ?></span>
                                                            </td>
                                                            <td class="selectCutoff">
                                                                <span><?= $value['username']; ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?= date('d-m-Y', strtotime($value['round'])); ?></span>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="d-flex justify-content-center">
                                                                        <div class="col-md-4 col-2" style="border-right: 1px solid gray;">
                                                                            <?php
                                                                            foreach ($value['lotto'] as $key => $valueLotto) {
                                                                            ?>
                                                                                <p class="inTable">
                                                                                    <?php if ($valueLotto['typeBet'] == '3upper') { ?>
                                                                                        <span> 3 ตัวบน</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == '3under') { ?>
                                                                                        <span> 3 ตัวล่าง</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == '3toad') { ?>
                                                                                        <span> 3 ตัวโต๊ด</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == '2upper') { ?>
                                                                                        <span> 2 ตัวบน</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == '2under') { ?>
                                                                                        <span> 2 ตัวล่าง</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == '2toad') { ?>
                                                                                        <span> 2 ตัวโต๊ด</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == 'floatUnder') { ?>
                                                                                        <span> ลอยล่าง</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == 'floatUpper') { ?>
                                                                                        <span> ลอยบน</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == 'floatUpper') { ?>
                                                                                        <span>4 ตัวโต๊ด</span>
                                                                                    <?php  } else { ?>
                                                                                        <span> 5 ตัวโต๊ด</span>
                                                                                    <?php } ?>
                                                                                </p>
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="col-md-4 col-4 ">
                                                                            <?php $sum = 0;
                                                                            foreach ($value['lotto'] as $key => $valueLotto) {
                                                                                $sum += (int)$valueLotto['SumBetByType'];
                                                                            ?>
                                                                                <p class="inTable">
                                                                                    <span><?= number_format($valueLotto['SumBetByType']);  ?> บาท</span>
                                                                                </p>
                                                                            <?php } ?>
                                                                            <p class="inTable sum"><?= number_format($sum); ?> บาท</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                <?php $i++;
                                                    }
                                                } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row" id="divSettingLotto">
                            <div class="col-md-12 col-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                    <tr align="center">
                                                        <th colspan="20"> <span id="headShow">ตัดยอดสมาชิก</span> </th>
                                                    </tr>
                                                    <tr align="center">
                                                        <th>3ตัวบน</th>
                                                        <th>จำนวน</th>
                                                        <th>3ตัวล่าง</th>
                                                        <th>จำนวน</th>
                                                        <th>3ตัวโต๊ด</th>
                                                        <th>จำนวน</th>
                                                        <th>2ตัวบน</th>
                                                        <th>จำนวน</th>
                                                        <th>2ตัวล่าง</th>
                                                        <th>จำนวน</th>
                                                        <th>2ตัวโต๊ด</th>
                                                        <th>จำนวน</th>
                                                        <th>ลอยบน</th>
                                                        <th>จำนวน</th>
                                                        <th>ลอยล่าง</th>
                                                        <th>จำนวน</th>
                                                        <th>4ตัวโต๊ด</th>
                                                        <th>จำนวน</th>
                                                        <th>5ตัวโต๊ด</th>
                                                        <th>จำนวน</th>
                                                    </tr>
                                                </thead>
                                                <tbody align="center">
                                                    <tr style="background-color:#f2f7ff">
                                                        <th></th>
                                                        <th class="betUser" id="sum3upper">0</th>
                                                        <th></th>
                                                        <th class="betUser" id="sum3under">0</th>
                                                        <th></th>
                                                        <th class="betUser" id="sum3toad">0</th>
                                                        <th></th>
                                                        <th class="betUser" id="sum2upper">0</th>
                                                        <th></th>
                                                        <th class="betUser" id="sum2under">0</th>
                                                        <th></th>
                                                        <th class="betUser" id="sum2toad">0</th>
                                                        <th></th>
                                                        <th class="betUser" id="sumfloatUpper">0</th>
                                                        <th></th>
                                                        <th class="betUser" id="sumfloatUnder">0</th>
                                                        <th></th>
                                                        <th class="betUser" id="sum4toad">0</th>
                                                        <th></th>
                                                        <th class="betUser" id="sum5toad">0</th>
                                                    </tr>
                                                <tbody align="center" id="bodyTable">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="col-12 d-flex justify-content-end">
                                    <a href="#divCutoff">
                                        <button type="button" class="btn btn-outline-secondary" id="btnCutoff">ตัดยอด</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 col-sm--12" id="divCutoff" hidden>
    <div class="card">
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="row" id="divSettingLotto">
                    <form id="formCutoff">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr align="center">
                                                    <th colspan="20"><span style="color:red;"> ** ใส่ยอดที่ต้องการตัดออก หมายเลขใดไม่ต้องการตัดยอดให้ใส่ 0 **</span></th>
                                                </tr>
                                                <tr align="center">
                                                    <th>3ตัวบน</th>
                                                    <th>จำนวน</th>
                                                    <th>3ตัวล่าง</th>
                                                    <th>จำนวน</th>
                                                    <th>3ตัวโต๊ด</th>
                                                    <th>จำนวน</th>
                                                    <th>2ตัวบน</th>
                                                    <th>จำนวน</th>
                                                    <th>2ตัวล่าง</th>
                                                    <th>จำนวน</th>
                                                    <th>2ตัวโต๊ด</th>
                                                    <th>จำนวน</th>
                                                    <th>ลอยบน</th>
                                                    <th>จำนวน</th>
                                                    <th>ลอยล่าง</th>
                                                    <th>จำนวน</th>
                                                    <th>4ตัวโต๊ด</th>
                                                    <th>จำนวน</th>
                                                    <th>5ตัวโต๊ด</th>
                                                    <th>จำนวน</th>
                                                </tr>
                                            </thead>

                                            <tbody align="center" id="bodyTable2">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="subit" class="btn btn-outline-secondary" id="btnCutoff">ยืนยันการตัดยอด</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function pageCutoff(data) {
        arrDataUser = {
            'user_id': $(data).data('user').user_id,
            'firstname': $(data).data('user').firstname,
            'username': $(data).data('user').username
        }
        localStorage.setItem('dataUser', JSON.stringify(arrDataUser));
        $('#home-tab').removeClass("active");
        $('#profile-tab').addClass("active");
        $("#home").removeClass("active");
        $("#home").removeClass("show");
        $("#profile").addClass("active");
        $("#profile").addClass("show");
        $('#headShow').html($(data).data('user').firstname)

        $.ajax({
            url: '<?= base_url('Backend/Cutoff/callDataByUser'); ?>',
            method: 'POST',
            dataType: 'json',
            data: {
                userID: $(data).data('user').user_id
            },
        }).done(function(res) {
            content = '';
            if (res.code == 1) {
                localStorage.setItem('dataCutoff', JSON.stringify(res.data));
                content += '<tr>';
                content += '<th>'
                $.each(res.data.num3upper, function(key, value) {
                    content += '<p>' + value.number_lotto + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.num3upper, function(key, value) {
                    content += '<p style="color:red">' + thousands_separators(value.amount_bet) + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.num3under, function(key, value) {
                    content += '<p>' + value.number_lotto + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.num3under, function(key, value) {
                    content += '<p style="color:red">' + thousands_separators(value.amount_bet) + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.num3toad, function(key, value) {
                    content += '<p>' + value.number_lotto + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.num3toad, function(key, value) {
                    content += '<p style="color:red">' + thousands_separators(value.amount_bet) + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.num2upper, function(key, value) {

                    content += '<p>' + value.number_lotto + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.num2upper, function(key, value) {
                    content += '<p style="color:red">' + thousands_separators(value.amount_bet) + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.num2under, function(key, value) {
                    content += '<p>' + value.number_lotto + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.num2under, function(key, value) {
                    content += '<p style="color:red">' + thousands_separators(value.amount_bet) + '</p>'
                });
                content += '</th>';

                content += '<th>'
                $.each(res.data.num2toad, function(key, value) {
                    content += '<p>' + value.number_lotto + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.num2toad, function(key, value) {
                    content += '<p style="color:red">' + thousands_separators(value.amount_bet) + '</p>'
                });
                content += '</th>';

                content += '<th>'
                $.each(res.data.numfloatUpper, function(key, value) {
                    content += '<p>' + value.number_lotto + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.numfloatUpper, function(key, value) {
                    content += '<p style="color:red">' + thousands_separators(value.amount_bet) + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.numfloatUnder, function(key, value) {
                    content += '<p>' + value.number_lotto + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.numfloatUnder, function(key, value) {
                    content += '<p style="color:red">' + thousands_separators(value.amount_bet) + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.num4toad, function(key, value) {
                    content += '<p>' + value.number_lotto + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.num4toad, function(key, value) {
                    content += '<p style="color:red">' + thousands_separators(value.amount_bet) + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.num5toad, function(key, value) {
                    content += '<p>' + value.number_lotto + '</p>'
                });
                content += '</th>';
                content += '<th>'
                $.each(res.data.num5toad, function(key, value) {
                    content += '<p style="color:red">' + thousands_separators(value.amount_bet) + '</p>'
                });
                content += '</th>';
                content += '</tr>';
                $('#sum3upper').html(0);
                $('#sum3under').html(0);
                $('#sum3toad').html(0);
                $('#sum3upper').html(0);
                $('#sum2upper').html(0);
                $('#sum2under').html(0);
                $('#sum2toad').html(0);
                $('#sumfloatUpper').html(0);
                $('#sumfloatUnder').html(0);
                $('#sum4toad').html(0);
                $('#sum5toad').html(0);
                $.each(res.data.sum, function(key, value) {
                    $('#' + key).html(thousands_separators(value));
                });
                $('#bodyTable').html(content);
            } else {

            }
        });
    }

    $("#btnCutoff").click(function() {
        $('#divCutoff').removeAttr('hidden')
        var dataCutoff = JSON.parse(localStorage.getItem('dataCutoff'));
        var dataUser = JSON.parse(localStorage.getItem('dataUser')).user_id;
        content = '';
        content += '<tr>';
        content += '<th hidden>'
        content += '<input type="text" class="form-control" id="dataUser" value="' + dataUser + '" readonly>'
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.num3upper, function(key, value) {
            content += '<p class="numLottoToCutoff">' + value.number_lotto + '</p>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.num3upper, function(key, value) {
            content += '<input type="text" class="form-control" name="num3upper_' + value.number_lotto + '" value="0" required>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.num3under, function(key, value) {
            content += '<p class="numLottoToCutoff">' + value.number_lotto + '</p>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.num3under, function(key, value) {
            content += '<input type="text" class="form-control" name="num3under_' + value.number_lotto + '" value="0" required>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.num3toad, function(key, value) {
            content += '<p class="numLottoToCutoff">' + value.number_lotto + '</p>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.num3toad, function(key, value) {
            content += '<input type="text" class="form-control" name="num3toad_' + value.number_lotto + '" value="0" required>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.num2upper, function(key, value) {

            content += '<p class="numLottoToCutoff">' + value.number_lotto + '</p>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.num2upper, function(key, value) {
            content += '<input type="text" class="form-control" name="num2upper_' + value.number_lotto + '" value="0" required>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.num2under, function(key, value) {
            content += '<p class="numLottoToCutoff">' + value.number_lotto + '</p>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.num2under, function(key, value) {
            content += '<input type="text" class="form-control" name="num2under_' + value.number_lotto + '" value="0" required>'
        });
        content += '</th>';

        content += '<th>'
        $.each(dataCutoff.num2toad, function(key, value) {
            content += '<p class="numLottoToCutoff">' + value.number_lotto + '</p>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.num2toad, function(key, value) {
            content += '<input type="text" class="form-control" name="num2toad_' + value.number_lotto + '" value="0" required>'
        });
        content += '</th>';

        content += '<th>'
        $.each(dataCutoff.numfloatUpper, function(key, value) {
            content += '<p class="numLottoToCutoff">' + value.number_lotto + '</p>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.numfloatUpper, function(key, value) {
            content += '<input type="text" class="form-control" name="numfloatUpper_' + value.number_lotto + '" value="0" required>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.numfloatUnder, function(key, value) {
            content += '<p class="numLottoToCutoff">' + value.number_lotto + '</p>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.numfloatUnder, function(key, value) {
            content += '<input type="text" class="form-control" name="numfloatUnder_' + value.number_lotto + '" value="0" required>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.num4toad, function(key, value) {
            content += '<p class="numLottoToCutoff">' + value.number_lotto + '</p>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.num4toad, function(key, value) {
            content += '<input type="text" class="form-control" name="num4toad_' + value.number_lotto + '" value="0" required>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.num5toad, function(key, value) {
            content += '<p class="numLottoToCutoff">' + value.number_lotto + '</p>'
        });
        content += '</th>';
        content += '<th>'
        $.each(dataCutoff.num5toad, function(key, value) {
            content += '<input type="text" class="form-control" name="num5toad_' + value.number_lotto + '" value="0" required>'
        });
        content += '</th>';
        content += '</tr>';

        $('#bodyTable2').html(content);
        $('p.numLottoToCutoff').css({
            'margin-top': '2rem',
            'margin-bottom': '2rem'
        });
        $('th').css({
            'width': '5%',
        });
        $('input.form-control').css({
            'width': '100%',
            'text-align': 'center',
            'font-size': '12px',
            'margin-top': '1.7rem',
            'padding': '0.09rem 0.1rem',
            'color': 'red',
            'height': '25px'
        })
        $('input.form-control').keyup(function(num) {
            if (num.which >= 37 && num.which <= 40) return;
            $(this).val(function(index, value) {
                return value
                    .replace(/\D/g, "")
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            });
        });
    });

    $("#formCutoff").submit(function(event) {
        event.preventDefault();
        arrData = {
            'user_id': $('#dataUser').val(),
            'data': {}
        };
        var i = 0;
        $.each($(this).serializeFormJSON(), function(key, value) {
            if (parseInt(value) != 0) {
                var dataArr = key.substring(3).split("_");
                arrValue = {
                    'type_lotto': dataArr[0],
                    'number_lotto': dataArr[1],
                    'amount_cutoff': value
                }
                arrData.data[i] = arrValue;
                i++;
            }
        });
        $.ajax({
            url: '<?= base_url('Backend/Cutoff/cutoffLotto'); ?>',
            method: 'POST',
            dataType: 'json',
            data: {
                arrData: JSON.stringify(arrData)
            },
        }).done(function(res) {
            if (res.code == 1) {
                swal({
                    icon: 'success',
                    text: res.msg,
                    timer: 1500,
                    buttons: false,
                }).then(value => {
                    window.location.href = '<?= base_url('backend/Cutoff'); ?>'
                });
            } else {
                swal({
                    icon: 'error',
                    text: res.msg,
                    timer: 5000,
                    buttons: false,
                });
            }
        });
    });
</script>
<?php $this->endSection(); ?>