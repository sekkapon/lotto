<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>

<style>
    i.bi-search:hover {
        color: gray;
        cursor: pointer;
    }
</style>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Setting Time Bet</h3>
                <p class="text-subtitle text-muted">ตั้งค่าเวล ปิด-เปิด การแทง</p>
            </div>
        </div>
    </div>
    <div class="row match-height" id="settingTime">
        <div class="col-md-3 col-10">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group has-icon-left">
                                        <label>งวดวันที่</label>
                                        <div class="position-relative">
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar"></i>
                                            </div>
                                            <input type="date" class="form-control" id="round" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label>ปิด</label>
                                        <div class="position-relative">
                                            <input type="time" class="form-control" id="closeTime">
                                            <div class="form-control-icon">
                                                <i class="bi bi-alarm"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label>เปิด</label>
                                        <div class="position-relative">
                                            <input type="time" class="form-control" id="openTime">
                                            <div class="form-control-icon">
                                                <i class="bi bi-alarm"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end" style="padding-top:15px">
                                    <button type="button" class="btn btn-success me-1 mb-1" id="btnEdit" hidden>Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="divSettingLotto">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Table Time Bet</h4>
                    <small>ตารางข้อมูลเวลา ปิด-เปิด การแทง</small>
                </div>
                <div class="card-content">
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr align="center">
                                    <th>ลำดับ</th>
                                    <th>งวดวันที่</th>
                                    <th>เวลาปิด</th>
                                    <th>เวลาเปิด</th>
                                    <th>เรียกดู</th>
                                </tr>
                            </thead>
                            <tbody align="center" id="bodyTable">
                                <?php $i = 1;
                                foreach ($dataUser as $key => $valueMember) { ?>
                                    <?php if ($valueMember['status'] == 1) { ?>
                                        <tr style="background-color:#04AA6D; color:white">
                                        <?php } else { ?>
                                        <tr>
                                        <?php } ?>
                                        <td>
                                            <span><?= $i; ?> </span>
                                        </td>
                                        <td>
                                            <span><?= date('d-m-Y', strtotime($valueMember['round'])); ?></span>
                                        </td>
                                        <td>
                                            <span><?= $valueMember['close_time']; ?> น.</span>
                                        </td>
                                        <td>
                                            <span><?= $valueMember['open_time']; ?> น.</span>
                                        </td>
                                        <td>
                                            <?php if ($valueMember['status'] == 1) { ?>
                                                <a href="#settingTime" style="color: white;" data-user="<?= htmlspecialchars(json_encode($valueMember, JSON_UNESCAPED_UNICODE), ENT_COMPAT); ?>" onclick="callEdit(this)"><i class="bi bi-search" style="font-size: 1.2rem;"></i></a>
                                            <?php } else { ?>
                                                <span> - </span>
                                            <?php } ?>
                                        </td>
                                        </tr>
                                    <?php
                                    $i++;
                                } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(":button").click(function() {
        arrData = {
            'round': $('#round').val(),
            'closeTime': $('#closeTime').val(),
            'openTime': $('#openTime').val(),
        }
        console.log(arrData);
        $.ajax({
            url: 'api/updateTime',
            method: 'POST',
            dataType: 'json',
            data: {
                arrData
            },
        }).done(function(res) {
            if (res.code == 1) {
                swal({
                    icon: 'success',
                    text: 'ตั้งเวลาสำเร็จ',
                    timer: 1500,
                    buttons: false,
                }).then(value => {
                    window.location.href = '<?= base_url('backend/set-huay/close-time'); ?>'
                });
            } else if (res.code == 2) {
                swal({
                    icon: 'success',
                    text: res.msg,
                    timer: 1500,
                    buttons: false,
                }).then(value => {
                    window.location.href = '<?= base_url('backend/set-huay/close-time'); ?>'
                });
            } else {
                swal({
                    icon: 'error',
                    text: res.msg,
                    timer: 1500,
                    buttons: false,
                });
            }
        });
    });

    function callEdit(data) {
        $('#round').val($(data).data('user').round);
        $('#closeTime').val($(data).data('user').close_time);
        $('#openTime').val($(data).data('user').open_time);
        $('#btnEdit').removeAttr('hidden')
    }
</script>
<?php $this->endSection(); ?>