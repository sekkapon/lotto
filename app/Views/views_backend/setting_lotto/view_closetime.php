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
                <h3>Setting Time Bet</h3>
                <p class="text-subtitle text-muted">ตั้งค่าเวลปิด-เปิดการแทง</p>
            </div>
        </div>
    </div>
    <div class="row match-height">
        <div class="col-md-3 col-10">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-body">
                            <div class="row">
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
                                    <button type="button" class="btn btn-success me-1 mb-1">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    $(":button").click(function() {
        arrData = {
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
</script>
<?php $this->endSection(); ?>