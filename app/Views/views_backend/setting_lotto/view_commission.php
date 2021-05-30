<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>

<style>
    span.settingHover:hover {
        text-decoration: underline;
        color: rgba(35, 28, 99, .8);
    }

    span.settingHover {
        color: #7c8db5;
    }

    button.reset-btn:hover {
        background-color: red;
        color: white;
    }
</style>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Setting Rebate</h3>
                <p class="text-subtitle text-muted">ตั้งค่าส่วนลด</p>
            </div>
        </div>
    </div>



    <div class="row" id="divSettingLotto">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Table Rebate</h4>
                    <small>ตารางตั้งค่าส่วนลด</small>
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

                            </thead>
                            <tbody align="center">
                                <form id="F_update">
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>
                                            <input type="checkbox" class="form-check-input form-check-secondary" id="chAll" style="margin-top: 5px;">

                                        </th>
                                        <th><input class="form-control" oninput="(this.value >100) ? this.value=100:this.value;" name="U_3upper" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_3under" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_3toad" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_2upper" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_2under" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_2toad" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_floatUpper" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_floatUnder" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_4toad" style="height:30px; width:63px; text-align: right;"></th>
                                        <th><input class="form-control" name="U_5toad" style="height:30px; width:63px; text-align: right;"></th>
                                    </tr>
                                </form>
                                <?php $i = 0;
                                foreach ($datacommision as $k => $val) {
                                    $i++; ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $val['username']; ?></td>
                                        <td><input class="form-check-input form-check-secondary chId" type="checkbox" value="<?= $val['user_id']; ?>"></td>
                                        <td id="v_3upper_<?= $val['user_id']; ?>"><?= $val['detail']['3upper']['percent']; ?></td>
                                        <td id="v_3under_<?= $val['user_id']; ?>"><?= $val['detail']['3under']['percent']; ?></td>
                                        <td id="v_3toad_<?= $val['user_id']; ?>"><?= $val['detail']['3toad']['percent']; ?></td>
                                        <td id="v_2upper_<?= $val['user_id']; ?>"><?= $val['detail']['2upper']['percent']; ?></td>
                                        <td id="v_2under_<?= $val['user_id']; ?>"><?= $val['detail']['2under']['percent']; ?></td>
                                        <td id="v_2toad_<?= $val['user_id']; ?>"><?= $val['detail']['2toad']['percent']; ?></td>
                                        <td id="v_floatUpper_<?= $val['user_id']; ?>"><?= $val['detail']['floatUpper']['percent']; ?></td>
                                        <td id="v_floatUnder_<?= $val['user_id']; ?>"><?= $val['detail']['floatUnder']['percent']; ?></td>
                                        <td id="v_4toad_<?= $val['user_id']; ?>"><?= $val['detail']['4toad']['percent']; ?></td>
                                        <td id="v_5toad_<?= $val['user_id']; ?>"><?= $val['detail']['5toad']['percent']; ?></td>

                                    </tr>
                                <?php } ?>

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

            $.ajax({
                    method: "POST",
                    url: "api/updatedata",
                    data: {
                        dataArry: dataArry,
                        type: 'percent'
                    },
                    dataType: 'json'
                })
                .done(function(msg) {

                    $.each(msg, function(k, v) {
                        let vl = $('#v_' + v.typeLotto + '_' + v.id);
                        if (v.status) {

                            $(vl).html(v.new);
                        } else {}

                    });

                });
        });

        $('.chId').prop('checked', false);
        $('#F_update').trigger("reset");
    }
</script>

<?php $this->endSection(); ?>