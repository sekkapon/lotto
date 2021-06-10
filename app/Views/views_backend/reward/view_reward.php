<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>

<style>
    input.reward {
        height: 5rem;
        font-size: 2rem;
        letter-spacing: 2rem;
        text-align: center;
    }

    .card-footer {
        border-top: 0px;
    }

    .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite;
        /* Safari */
        animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>


<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="d-flex justify-content-between">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Reward</h3>
                    <p class="text-subtitle text-muted">ผลรางวัล</p>
                </div>
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <div style="padding-left:17rem; padding-top: 1.3rem;">
                        <button class="btn btn-outline-secondary" id="callotto">คำนวณผล</button>
                        <div class="container">
                            <div class="row">
                                <div class="loader" id="loader" hidden></div>
                                <div id="msgsuccess" class="card col-4 bg-light text-danger" hidden>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row match-height">
        <div class="col-lg-10 col-md-6">
            <div class="card">
                <form id="formReward">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
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
                                            <label>เลขหน้า 3 ตัว รางวัลที่1</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control reward" maxlength="3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="reward3under1st" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group has-icon-left">
                                            <label>เลขหน้า 3 ตัว รางวัลที่2</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control reward" maxlength="3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="reward3under2nd" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group has-icon-left">
                                            <label>เลขท้าย 3 ตัว รางวัลที่1</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control reward" maxlength="3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="reward3under3th" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group has-icon-left">
                                            <label>เลขท้าย 3 ตัว รางวัลที่2</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control reward" maxlength="3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="reward3under4th" required>
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
                        <footer>
                            <div class="card-footer">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success me-1 mb-1 submitReward">Submit</button>
                                </div>
                            </div>
                        </footer>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="page-heading" id="tbReward" hidden>
    <div class="row" id="divSettingLotto">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr align="center">
                                    <th>งวดวันที่</th>
                                    <th>รางวัลที่1</th>
                                    <th>เลขท้าย 3 ตัว</th>
                                    <th>เลขท้าย 2 ตัว</th>
                                </tr>
                            </thead>
                            <tbody align="center" id="bodyTable">
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<script>
    $("#formReward").submit(function(e) {
        e.preventDefault();
        arrData = {
            'date': $('#round').val(),
            'reward1st': $('#reward1st').val(),
            'reward3under1st': $('#reward3under1st').val(),
            'reward3under2nd': $('#reward3under2nd').val(),
            'reward3under3th': $('#reward3under3th').val(),
            'reward3under4th': $('#reward3under4th').val(),
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
            console.log(res);
            if (res.code == 1) {
                swal({
                    icon: 'success',
                    text: 'เพิ่มผลรางวัลสำเร็จ',
                    timer: 1500,
                    buttons: false,
                }).then(value => {
                    $("#formReward").trigger("reset");
                    $('#tbReward').removeAttr('hidden');
                    content = '';
                    content += '<tr align="center">';
                    content += '<td>' + res.data.date + '</td>';
                    content += '<td>' + res.data.reward_1st + '</td>';
                    content += '<td>';
                    content += '<div class="d-flex justify-content-around">';
                    content += '<div>' + res.data.reward_3under_1st + '</div>';
                    content += '<div>' + res.data.reward_3under_2nd + '</div>';
                    content += '<div>' + res.data.reward_3under_3th + '</div>';
                    content += '<div>' + res.data.reward_3under_4th + '</div>';
                    content += '</div>';
                    content += '</td>';
                    content += '<td>' + res.data.reward_2upper + '</td>';
                    content += '</tr>';
                    $('#bodyTable').html(content);
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

    $('#callotto').on('click', function() {
        if (confirm('ยืนยันคำนวณผล')) {
            $('#loader').removeAttr('hidden');
            $('#msgsuccess').removeAttr('hidden');
            $('#msgsuccess').html('<div class="card-body">กำลังประมวณผล</div>');
            $.ajax({

                url: '<?= base_url('Backend/Reward/calculateReward'); ?>',
                method: 'POST',
                dataType: 'json',
                data: {},
            }).done(function(res) {

                $('#loader').attr('hidden', true);
                $('#msgsuccess').removeClass("bg-light");
                $('#msgsuccess').addClass("bg-info");
                $('#msgsuccess').html('<div class="card-body">' + res + '</div>');
            });
        }
    });
</script>
<?php $this->endSection(); ?>