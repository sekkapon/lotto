<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>

<style>
    button.reset-btn:hover {
        background-color: red;
        color: white;
    }

</style>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Setting Payrate</h3>
                <p class="text-subtitle text-muted">ตั้งค่าอัตราจ่าย</p>
            </div>
        </div>
    </div>



    <div class="row" id="divSettingLotto">
        <div class="col-12">
            <div class="card">
<<<<<<< HEAD
                <!-- <div class="card-header">
                    <h4>Setting Lotto</h4>
                    <small>ตั้งค่าหวยให้สมาชิก</small>
                </div> -->
=======
                <div class="card-header">
                    <h4>Table Payrate</h4>
                    <small>ตั้งค่าอัตราจ่าย</small>
                </div>
>>>>>>> origin/farn
                <div class="card-content">
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr align="center">
                                    <th>ลำดับ</th>
                                    <th>ชื่อ</th>
<<<<<<< HEAD
                                    <th><input type="checkbox" id="chAll"></th>
=======
                                    <th>เลือกทั้งหมด</th>
>>>>>>> origin/farn
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
<<<<<<< HEAD
                                    <th></th>
                                </tr>

=======
                                </tr>
>>>>>>> origin/farn
                            </thead>
                            <tbody align="center">
                                <form id="F_update">
                                    <tr>
                                        <th></th>
                                        <th></th>
<<<<<<< HEAD
                                        <th></th>
                                        <th><input class="form-control" name="U_3upper"></th>
                                        <th><input class="form-control" name="U_3under"></th>
                                        <th><input class="form-control" name="U_3toad"></th>
                                        <th><input class="form-control" name="U_2upper"></th>
                                        <th><input class="form-control" name="U_2under"></th>
                                        <th><input class="form-control" name="U_2toad"></th>
                                        <th><input class="form-control" name="U_floatUpper"></th>
                                        <th><input class="form-control" name="U_floatUnder"></th>
                                        <th><input class="form-control" name="U_4toad"></th>
                                        <th><input class="form-control" name="U_5toad"></th>
                                    </tr>
                                </form>

                                </thead>
                            <tbody align="center">
                                <pre>
                                <?php
                                // print_r($datapayrate);
                                // die;
                                ?>
                                </pre>
                                <?php $i = 0;
                                foreach ($datapayrate as $k => $val) {
                                    $i++; ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $val['username']; ?></td>
                                        <td><input class="chId" type="checkbox" value="<?= $val['user_id']; ?>"></td>

                                        <td id="v_3upper_<?= $val['user_id']; ?>"><?= $val['detail']['3upper']['payRate']; ?></td>
                                        <td id="v_3under_<?= $val['user_id']; ?>"><?= $val['detail']['3under']['payRate']; ?></td>
                                        <td id="v_3toad_<?= $val['user_id']; ?>"><?= $val['detail']['3toad']['payRate']; ?></td>
                                        <td id="v_2upper_<?= $val['user_id']; ?>"><?= $val['detail']['2upper']['payRate']; ?></td>
                                        <td id="v_2under_<?= $val['user_id']; ?>"><?= $val['detail']['2under']['payRate']; ?></td>
                                        <td id="v_2toad_<?= $val['user_id']; ?>"><?= $val['detail']['2toad']['payRate']; ?></td>
                                        <td id="v_floatUpper_<?= $val['user_id']; ?>"><?= $val['detail']['floatUpper']['payRate']; ?></td>
                                        <td id="v_floatUnder_<?= $val['user_id']; ?>"><?= $val['detail']['floatUnder']['payRate']; ?></td>
                                        <td id="v_4toad_<?= $val['user_id']; ?>"><?= $val['detail']['4toad']['payRate']; ?></td>
                                        <td id="v_5toad_<?= $val['user_id']; ?>"><?= $val['detail']['5toad']['payRate']; ?></td>
                                        <td id="showStatus_<?= $val['user_id']; ?>"></td>
                                    </tr>
                                <?php } ?>

=======
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

                                    </tr>
                                </form>
                                <?php $i = 0;
                                foreach ($datapayrate as $k => $val) {
                                    $i++; ?>
                                    <tr id="changColor">
                                        <td><?= $i; ?></td>
                                        <td><?= $val['username']; ?></td>
                                        <td><input class="form-check-input form-check-secondary chId" type="checkbox" value="<?= $val['user_id']; ?>"></td>
                                        <td id="v_3upper_<?= $val['user_id']; ?>"><?= $val['detail']['3upper']['payRate']; ?></td>
                                        <td id="v_3under_<?= $val['user_id']; ?>"><?= $val['detail']['3under']['payRate']; ?></td>
                                        <td id="v_3toad_<?= $val['user_id']; ?>"><?= $val['detail']['3toad']['payRate']; ?></td>
                                        <td id="v_2upper_<?= $val['user_id']; ?>"><?= $val['detail']['2upper']['payRate']; ?></td>
                                        <td id="v_2under_<?= $val['user_id']; ?>"><?= $val['detail']['2under']['payRate']; ?></td>
                                        <td id="v_2toad_<?= $val['user_id']; ?>"><?= $val['detail']['2toad']['payRate']; ?></td>
                                        <td id="v_floatUpper_<?= $val['user_id']; ?>"><?= $val['detail']['floatUpper']['payRate']; ?></td>
                                        <td id="v_floatUnder_<?= $val['user_id']; ?>"><?= $val['detail']['floatUnder']['payRate']; ?></td>
                                        <td id="v_4toad_<?= $val['user_id']; ?>"><?= $val['detail']['4toad']['payRate']; ?></td>
                                        <td id="v_5toad_<?= $val['user_id']; ?>"><?= $val['detail']['5toad']['payRate']; ?></td>

                                    </tr>
                                <?php } ?>
>>>>>>> origin/farn
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-12 d-flex justify-content-end">
<<<<<<< HEAD
 
=======
                        <button type="button" class="reset-btn btn btn-light-secondary me-1 mb-1">Reset</button>
>>>>>>> origin/farn
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
<<<<<<< HEAD
            $('.chId').attr('checked', true);
        } else {
            $('.chId').attr('checked', false);
        }
    });


    function update() {
        var chId = $('.chId');
        var dataArry = [];
        $.each(chId, function(index, val) {
            let ch = $(val)[0].checked;

=======
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
        var notyf = new Notyf();
        var chId = $('.chId');
        var dataArry = [];
        console.log(dataArry);
        $.each(chId, function(index, val) {
            let ch = $(val)[0].checked;
>>>>>>> origin/farn
            if (ch) {
                let d = [];
                let id = $(val)[0].value;
                let dataF = $('#F_update').serializeFormJSON();
<<<<<<< HEAD

                dataArry.push({
                    'id': id,
                    'dataF': dataF
                });
            }
        }).promise().done(function() {

=======

                dataArry.push({
                    'id': id,
                    'dataF': dataF
                });
            }
        }).promise().done(function() {

>>>>>>> origin/farn
            $.ajax({
                    method: "POST",
                    url: "api/updatedata",
                    data: {
<<<<<<< HEAD
                        dataArry:dataArry,
                        type:'payRate'
=======
                        dataArry: dataArry,
                        type: 'payRate'
>>>>>>> origin/farn
                    },
                    dataType: 'json'
                })
                .done(function(msg) {

                    $.each(msg, function(k, v) {
<<<<<<< HEAD
                                let vl = $('#v_'+v.typeLotto+'_'+v.id);
                        if (v.status) {
                            
                            $(vl).html(v.new);
                            $('#showStatus_' + v.id).html('/');
                        } else {
                            $('#showStatus_' + v.id).html('X');
                        }
                        
=======
                        let vl = $('#v_' + v.typeLotto + '_' + v.id);
                        if (v.status) {
                            $(vl).html(v.new);
                            $('#showStatus_' + v.id).html('<i class="fas fa-address-card"></i>');
                        } else {
                            $('#showStatus_' + v.id).html('');
                        }
>>>>>>> origin/farn
                    });

                });
        });
<<<<<<< HEAD

        $('.chId').attr('checked', false);
=======
        $('.chId').prop('checked', false);
>>>>>>> origin/farn
        $('#F_update').trigger("reset");
    }
</script>

<?php $this->endSection(); ?>