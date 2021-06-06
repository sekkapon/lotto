<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Setting Max/Min perbrt</h3>
                <p class="text-subtitle text-muted">ตั้งค่าสูงสุด/ต่ำสุด ต่อไม้</p>
            </div>
        </div>
    </div>



    <div class="row" id="divSettingLotto">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Table Max/Min perbrt</h4>
                    <small>ตารางตั้งค่าสูงสุด/ต่ำสุด ต่อไม้</small>
                </div>
                <div class="card-content">
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr align="center">
                                    <th>ลำดับ</th>
                                    <th>ชื่อ</th>
                                    <th>เลือกทั้งหมด</th>
                                    <th>3ตัวบน</th>
                                    <th>3ตัวล่าง</th>
                                    <th>3ตัวโต๊ด</th>
                                    <th>2ตัวบน</th>
                                    <th>2ตัวล่าง</th>
                                    <th>2ตัวโต๊ด</th>
                                    <th>ลอยบน</th>
                                    <th>ลอยล่าง</th>
                                    <th>4ตัวโต๊ด</th>
                                    <th>5ตัวโต๊ด</th>
                                </tr>
                                <form id="F_update">
                                    <tr align="center">
                                        <th colspan="2">
                                            <select class="form-select" id="myselect">
                                                <option value="minPerBet">ขั้นต่ำต่อไม้</option>
                                                <option value="maxPerBet">สูงสุดต่อไม้</option>
                                            </select>
                                        </th>
                                        <th>
                                            <input type="checkbox" class="form-check-input form-check-secondary" id="chAll" style="margin-top: 5px;">

                                        </th>
                                        <th><input class="form-control" name="U_3upper" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_3under" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_3toad" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_2upper" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_2under" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_2toad" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_floatUpper" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_floatUnder" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_4toad" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_5toad" style="height:30px; width:63px; text-align: right;"></th>
                                        <th></th>
                                    </tr>
                                </form>
                            </thead>


                            <tbody align="center" id="tbody">



                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" class="reset-btn btn btn-light-secondary me-1 mb-1">Reset</button>
                        <button type="button" class="btn btn-success me-1 mb-1 " onclick="update();">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    window.onload = function() {
        $.ajax({
                method: "POST",
                url: "api/Maxminbet",
                data: {
                    getdata: true
                },
                dataType: 'json'
            })
            .done(function(msg) {
                var i = 0;
                $.each(msg, function(key, val) {
                    i++;
                    $('#tbody').append(`<tr class="tr_maxPerBet hid" hidden>
                                        <td>` + i + `</td>
                                        <td>` + val.username + `</td>
                                        <td><input class="form-check-input form-check-secondary chId" type="checkbox" value="` + val.user_id + `"></td>
                                        <td id="v_3upper_` + val.user_id + `_maxPerBet">` + val.detail.t_3upper.maxPerBet + `</td>
                                        <td id="v_3under_` + val.user_id + `_maxPerBet">` + val.detail.t_3under.maxPerBet + `</td>
                                        <td id="v_3toad_` + val.user_id + `_maxPerBet">` + val.detail.t_3toad.maxPerBet + `</td>
                                        <td id="v_2upper_` + val.user_id + `_maxPerBet">` + val.detail.t_2upper.maxPerBet + `</td>
                                        <td id="v_2under_` + val.user_id + `_maxPerBet">` + val.detail.t_2under.maxPerBet + `</td>
                                        <td id="v_2toad_` + val.user_id + `_maxPerBet">` + val.detail.t_2toad.maxPerBet + `</td>
                                        <td id="v_floatUpper_` + val.user_id + `_maxPerBet">` + val.detail.t_floatUpper.maxPerBet + `</td>
                                        <td id="v_floatUnder_` + val.user_id + `_maxPerBet">` + val.detail.t_floatUnder.maxPerBet + `</td>
                                        <td id="v_4toad_` + val.user_id + `_maxPerBet">` + val.detail.t_4toad.maxPerBet + `</td>
                                        <td id="v_5toad_` + val.user_id + `_maxPerBet">` + val.detail.t_5toad.maxPerBet + `</td>
                                        <td id="showStatus_` + val.user_id + `_maxPerBet"></i></td>
                                    </tr>`);
                });
                var j = 0;
                $.each(msg, function(key, val) {
                    j++;
                    $('#tbody').append(`<tr class="tr_minPerBet hid" >
                                        <td>` + j + `</td>
                                        <td>` + val.username + `</td>
                                        <td><input class="form-check-input form-check-secondary chId" type="checkbox" value="` + val.user_id + `"></td>
                                        <td id="v_3upper_` + val.user_id + `_minPerBet">` + val.detail.t_3upper.minPerBet + `</td>
                                        <td id="v_3under_` + val.user_id + `_minPerBet">` + val.detail.t_3under.minPerBet + `</td>
                                        <td id="v_3toad_` + val.user_id + `_minPerBet">` + val.detail.t_3toad.minPerBet + `</td>
                                        <td id="v_2upper_` + val.user_id + `_minPerBet">` + val.detail.t_2upper.minPerBet + `</td>
                                        <td id="v_2under_` + val.user_id + `_minPerBet">` + val.detail.t_2under.minPerBet + `</td>
                                        <td id="v_2toad_` + val.user_id + `_minPerBet">` + val.detail.t_2toad.minPerBet + `</td>
                                        <td id="v_floatUpper_` + val.user_id + `_minPerBet">` + val.detail.t_floatUpper.minPerBet + `</td>
                                        <td id="v_floatUnder_` + val.user_id + `_minPerBet">` + val.detail.t_floatUnder.minPerBet + `</td>
                                        <td id="v_4toad_` + val.user_id + `_minPerBet">` + val.detail.t_4toad.minPerBet + `</td>
                                        <td id="v_5toad_` + val.user_id + `_minPerBet">` + val.detail.t_5toad.minPerBet + `</td>
                                        <td id="showStatus_` + val.user_id + `_minPerBet"></i></td>
                                    </tr>`);
                });


            });
    }
    $('#myselect').on('change', function(e) {
        $('.hid').attr('hidden', true);
        $('.tr_' + $(this).val()).removeAttr('hidden');
    });
    $('#chAll').on('click', function(e) {
        let ch = $(this)[0].checked;
        if (ch) {
            $('.chId').prop('checked', true);
        } else {
            $('.chId').prop('checked', false);
        }
    });

    $('.chId').on('click', function(e) {
        if ($('.chId').length == $('.chId:checked').length) {
            $('#chAll').prop('checked', true);
        } else {
            $('#chAll').prop('checked', false);
        }
    });

    $(".reset-btn").click(function() {
        swal("ต้องการล้างข้อมูลสมาชิกหรือไม่ ?").then((value) => {
            if (value) {
                $("#F_update").trigger("reset");
            }
        });
    });


    function update() {
        var chId = $('.chId');
        var dataArry = [];
        $.each(chId, function(index, val) {
            let ch = $(val)[0].checked;

            if (ch) {
                let d = [];
                let id = $(val)[0].value;
                let dataF = $('#F_update').serializeFormJSON();

                dataArry.push({
                    'id': id,
                    'dataF': dataF
                });
            }
        }).promise().done(function() {
            var myselect = $('#myselect').val();
            $.ajax({
                    method: "POST",
                    url: "api/updatedata",
                    data: {
                        dataArry: dataArry,
                        type: myselect
                    },
                    dataType: 'json'
                })
                .done(function(msg) {

                    $.each(msg, function(k, v) {
                        let vl = $('#v_' + v.typeLotto + '_' + v.id + '_' + myselect);
                        if (v.status) {
                            $(vl).html(v.new);
                            $(vl).addClass('bggreenY');
                            $('#showStatus_' + v.id + '_' + myselect).html('<i class="bi bi-check-circle-fill ">');
                        } else {
                            $('#showStatus_' + v.id + '_' + myselect).html('<i class="bi bi-x-circle-fill "></i>');
                        }
                    });

                });
        });

        $('.chId').prop('checked', false);
        $('#F_update').trigger("reset");
    }
</script>

<?php $this->endSection(); ?>