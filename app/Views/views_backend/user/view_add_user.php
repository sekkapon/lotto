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
<div class="page-heading" id="settingTime">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add Member</h3>
                <p class="text-subtitle text-muted">เพิ่มสมาชิก</p>
            </div>
        </div>
    </div>
    <form id="formMember">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label>ชื่อสมาชิก</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" id="firstName" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-filter-left"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label>เบอร์โทร</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" id="phone" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label>ยูสเซอร์เนม</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" id="userName" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label>พาสเวิร์ด</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control" id="password" required>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <footer>
                                        <br>
                                        <div class="col-12 d-flex justify-content-end">
                                            <a href="#divSettingLotto">
                                                <span class="settingHover">Setting Lotto (ตั้งค่าหวยให้สมาชิก) >></span>
                                            </a>
                                        </div>
                                    </footer>
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
                        <h4>Setting Lotto</h4>
                        <small>ตั้งค่าหวยให้สมาชิก</small>
                    </div>
                    <div class="card-content">
                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr align="center">
                                        <th></th>
                                        <th>ต่ำสุดต่อไม้</th>
                                        <th>สูงสุดต่อไม้</th>
                                        <th>ตั้งอั้น</th>
                                        <th>อัตราจ่าย</th>
                                        <th>ส่วนลด(เปอร์เซ็นต์)</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr>
                                        <td class="text-bold-500">3ตัวบน</td>
                                        <td><input type="text" class="form-control chtxt" name="3upper_minPerBet" id="3upper_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="3upper_maxPerBet" id="3upper_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="3upper_maxCostPerNumber" id="3upper_maxCostPerNumber" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="3upper_payRate" id="3upper_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" placeholder="%" name="3upper_percent" id="3upper_percent" oninput="this.value=this.value.replace(/[^0-9]/g,''); (this.value > 100) ? this.value=100:this.value=this.value;" style="height:30px; width:90px; text-align: center;" required> </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">3ตัวล่าง</td>
                                        <td><input type="text" class="form-control chtxt" name="3under_minPerBet" id="3under_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="3under_maxPerBet" id="3under_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="3under_maxCostPerNumber" id="3under_maxCostPerNumber" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="3under_payRate" id="3under_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" placeholder="%" name="3under_percent" id="3under_percent" oninput="this.value=this.value.replace(/[^0-9]/g,''); (this.value > 100) ? this.value=100:this.value=this.value;" style="height:30px; width:90px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">3ตัวโต๊ด</td>
                                        <td><input type="text" class="form-control chtxt" name="3toad_minPerBet" id="3toad_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="3toad_maxPerBet" id="3toad_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="3toad_maxCostPerNumber" id="3toad_maxCostPerNumber" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="3toad_payRate" id="3toad_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" placeholder="%" name="3toad_percent" id="3toad_percent" oninput="this.value=this.value.replace(/[^0-9]/g,''); (this.value > 100) ? this.value=100:this.value=this.value;" style="height:30px; width:90px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">2ตัวบน</td>
                                        <td><input type="text" class="form-control chtxt" name="2upper_minPerBet" id="2upper_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="2upper_maxPerBet" id="2upper_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="2upper_maxCostPerNumber" id="2upper_maxCostPerNumber" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="2upper_payRate" id="2upper_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" placeholder="%" name="2upper_percent" id="2upper_percent" oninput="this.value=this.value.replace(/[^0-9]/g,''); (this.value > 100) ? this.value=100:this.value=this.value;" style="height:30px; width:90px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">2ตัวล่าง</td>
                                        <td><input type="text" class="form-control chtxt" name="2under_minPerBet" id="2under_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="2under_maxPerBet" id="2under_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="2under_maxCostPerNumber" id="2under_maxCostPerNumber" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="2under_payRate" id="2under_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" placeholder="%" name="2under_percent" id="2under_percent" oninput="this.value=this.value.replace(/[^0-9]/g,''); (this.value > 100) ? this.value=100:this.value=this.value;" style="height:30px; width:90px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">2ตัวโต๊ด</td>
                                        <td><input type="text" class="form-control chtxt" name="2toad_minPerBet" id="2toad_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="2toad_maxPerBet" id="2toad_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="2toad_maxCostPerNumber" id="2toad_maxCostPerNumber" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="2toad_payRate" id="2toad_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" placeholder="%" name="2toad_percent" id="2toad_percent" oninput="this.value=this.value.replace(/[^0-9]/g,''); (this.value > 100) ? this.value=100:this.value=this.value;" style="height:30px; width:90px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">ลอยบน</td>
                                        <td><input type="text" class="form-control chtxt" name="floatUpper_minPerBet" id="floatUpper_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="floatUpper_maxPerBet" id="floatUpper_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="floatUpper_maxCostPerNumber" id="floatUpper_maxCostPerNumber" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="floatUpper_payRate" id="floatUpper_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" placeholder="%" name="floatUpper_percent" id="floatUpper_percent" oninput="this.value=this.value.replace(/[^0-9]/g,''); (this.value > 100) ? this.value=100:this.value=this.value;" style="height:30px; width:90px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">ลอยล่าง</td>
                                        <td><input type="text" class="form-control chtxt" name="floatUnder_minPerBet" id="floatUnder_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="floatUnder_maxPerBet" id="floatUnder_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="floatUnder_maxCostPerNumber" id="floatUnder_maxCostPerNumber" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="floatUnder_payRate" id="floatUnder_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" placeholder="%" name="floatUnder_percent" id="floatUnder_percent" oninput="this.value=this.value.replace(/[^0-9]/g,''); (this.value > 100) ? this.value=100:this.value=this.value;" style="height:30px; width:90px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">4ตัวโต๊ด</td>
                                        <td><input type="text" class="form-control chtxt" name="4toad_minPerBet" id="4toad_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="4toad_maxPerBet" id="4toad_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="4toad_maxCostPerNumber" id="4toad_maxCostPerNumber" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="4toad_payRate" id="4toad_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" placeholder="%" name="4toad_percent" id="4toad_percent" oninput="this.value=this.value.replace(/[^0-9]/g,''); (this.value > 100) ? this.value=100:this.value=this.value;" style="height:30px; width:90px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">5ตัวโต๊ด</td>
                                        <td><input type="text" class="form-control chtxt" name="5toad_minPerBet" id="5toad_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="5toad_maxPerBet" id="5toad_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="5toad_maxCostPerNumber" id="5toad_maxCostPerNumber" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" name="5toad_payRate" id="5toad_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:90px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control chtxt" placeholder="%" name="5toad_percent" id="5toad_percent" oninput="this.value=this.value.replace(/[^0-9]/g,''); (this.value > 100) ? this.value=100:this.value=this.value;" style="height:30px; width:90px; text-align: center;" required></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="reset-btn btn btn-light-secondary me-1 mb-1">Reset</button>
                            <button type="submit" class="btn btn-success me-1 mb-1">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    $(function() {
        $('input.chtxt').keyup(function(num) {
            if (num.which >= 37 && num.which <= 40) return;
            $(this).val(function(index, value) {
                return value
                    .replace(/\D/g, "")
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            });
        });
    });

    $(".reset-btn").click(function() {
        swal("ต้องการล้างข้อมูลสมาชิกหรือไม่ ?").then((value) => {
            if (value) {
                $("#formMember").trigger("reset");
            }
        });
    });
    $("#formMember").submit(function(event) {
        event.preventDefault();
        arrData = {
            'firstname': $('#firstName').val(),
            'phone': $('#phone').val(),
            'username': $('#userName').val(),
            'password': $('#password').val(),

            'dataConfig': $(this).serializeArray()
        };
        console.log(arrData);
        $.ajax({
            url: '<?= base_url('Backend/Add_user/addUser'); ?>',
            method: 'POST',
            dataType: 'json',
            data: {
                arrData
            },
        }).done(function(res) {
            if (res.code == 1) {
                swal({
                    icon: 'success',
                    text: 'เพิ่มสมาชิกสำเร็จ',
                    timer: 1500,
                    buttons: false,
                }).then(value => {
                    window.location.href = '<?= base_url('backend/add_user'); ?>'
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