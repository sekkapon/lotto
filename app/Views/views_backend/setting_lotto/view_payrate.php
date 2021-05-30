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
                <h3>ตั้งค่าอัตราจ่าย</h3>
                <!-- <p class="text-subtitle text-muted">เพิ่มสมาชิก</p> -->
            </div>
        </div>
    </div>



    <div class="row" id="divSettingLotto">
        <div class="col-12">
            <div class="card">
                <!-- <div class="card-header">
                    <h4>Setting Lotto</h4>
                    <small>ตั้งค่าหวยให้สมาชิก</small>
                </div> -->
                <div class="card-content">
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr align="center">
                                    <th>ลำดับ</th>
                                    <th>ชื่อ</th>
                                    <th><input type="checkbox" id="chAll"></th>
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
                                    <th></th>
                                </tr>

                            </thead>
                            <tbody align="center">
                                <form id="F_update">
                                    <tr>
                                        <th></th>
                                        <th></th>
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

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-12 d-flex justify-content-end">
 
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
                        dataArry:dataArry,
                        type:'payRate'
                    },
                    dataType: 'json'
                })
                .done(function(msg) {

                    $.each(msg, function(k, v) {
                                let vl = $('#v_'+v.typeLotto+'_'+v.id);
                        if (v.status) {
                            
                            $(vl).html(v.new);
                            $('#showStatus_' + v.id).html('/');
                        } else {
                            $('#showStatus_' + v.id).html('X');
                        }
                        
                    });

                });
        });

        $('.chId').attr('checked', false);
        $('#F_update').trigger("reset");
    }
</script>

<?php $this->endSection(); ?>