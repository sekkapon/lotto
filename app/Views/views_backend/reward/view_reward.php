<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>

<style>
    input.reward {
        height: 5rem;
        font-size: 2rem;
        letter-spacing: 2rem;
        text-align: center;
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
                <h3>Reward</h3>
                <p class="text-subtitle text-muted">ผลรางวัล</p>
            </div>
        </div>
    </div>

    <div class="row match-height">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-6">
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
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group has-icon-left">
                                        <label>รางวัลที่1</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control reward" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="reward1st" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group has-icon-left">
                                        <label>เลขท้าย 3 ตัว รางวัลที่1</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control reward" maxlength="3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="reward3under1st" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group has-icon-left">
                                        <label>เลขท้าย 3 ตัว รางวัลที่2</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control reward" maxlength="3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="reward3under2nd" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group has-icon-left">
                                        <label>เลขท้าย 2 ตัว </label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control reward" maxlength="2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="reward2under" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="btn btn-success me-1 mb-1">Submit</button>
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
            'date': $('#round').val(),
            'reward1st': $('#reward1st').val(),
            'reward3under1st': $('#reward3under1st').val(),
            'reward3under2nd': $('#reward3under2nd').val(),
            'reward2under': $('#reward2under').val()    
        }
        console.log(arrData);
        $.ajax({
            url: '<?= base_url('Backend/Reward/insertReward'); ?>',
            method: 'POST',
            dataType: 'json',
            data: {
                arrData
            },
        }).done(function(res) {
            // if (res.code == 1) {
            //     swal({
            //         icon: 'success',
            //         text: 'ตั้งเวลาสำเร็จ',
            //         timer: 1500,
            //         buttons: false,
            //     }).then(value => {
            //         window.location.href = '<?= base_url('backend/set-huay/close-time'); ?>'
            //     });
            // } else {
            //     swal({
            //         icon: 'error',
            //         text: res.msg,
            //         timer: 1500,
            //         buttons: false,
            //     });
            // }
        });
    });
</script>
<?php $this->endSection(); ?>