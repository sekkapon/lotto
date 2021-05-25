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
                                                <input type="text" class="form-control" id="phone" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
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
                                        <th>ส่วนลด</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr>
                                        <td class="text-bold-500">3ตัวบน</td>
                                        <td><input type="text" class="form-control" name="3_upper_minPerBet" id="3_upper_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="3_upper_maxPerBet" id="3_upper_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="3_upper_maxPerNum" id="3_upper_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="3_upper_payRate" id="3_upper_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="3_upper_percent" id="3_upper_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">3ตัวล่าง</td>
                                        <td><input type="text" class="form-control" name="3_under_minPerBet" id="3_under_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="3_under_maxPerBet" id="3_under_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="3_under_maxPerNum" id="3_under_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="3_under_payRate" id="3_under_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="3_under_percent" id="3_under_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">3ตัวโต๊ด</td>
                                        <td><input type="text" class="form-control" name="3_toad_minPerBet" id="3_toad_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="3_toad_maxPerBet" id="3_toad_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="3_toad_maxPerNum" id="3_toad_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="3_toad_payRate" id="3_toad_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="3_toad_percent" id="3_toad_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">2ตัวบน</td>
                                        <td><input type="text" class="form-control" name="2_upper_minPerBet" id="2_upper_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="2_upper_maxPerBet" id="2_upper_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="2_upper_maxPerNum" id="2_upper_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="2_upper_payRate" id="2_upper_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="2_upper_percent" id="2_upper_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">2ตัวล่าง</td>
                                        <td><input type="text" class="form-control" name="2_under_minPerBet" id="2_under_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="2_under_maxPerBet" id="2_under_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="2_under_maxPerNum" id="2_under_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="2_under_payRate" id="2_under_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="2_under_percent" id="2_under_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">2ตัวโต๊ด</td>
                                        <td><input type="text" class="form-control" name="2_toad_minPerBet" id="2_toad_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="2_toad_maxPerBet" id="2_toad_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="2_toad_maxPerNum" id="2_toad_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="2_toad_payRate" id="2_toad_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="2_toad_percent" id="2_toad_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">ลอยบน</td>
                                        <td><input type="text" class="form-control" name="float_upper_minPerBet" id="float_upper_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="float_upper_maxPerBet" id="float_upper_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="float_upper_maxPerNum" id="float_upper_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="float_upper_payRate" id="float_upper_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="float_upper_percent" id="float_upper_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">ลอยล่าง</td>
                                        <td><input type="text" class="form-control" name="float_under_minPerBet" id="float_under_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="float_under_maxPerBet" id="float_under_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="float_under_maxPerNum" id="float_under_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="float_under_payRate" id="float_under_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="float_under_percent" id="float_under_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">4ตัวโต๊ด</td>
                                        <td><input type="text" class="form-control" name="4_toad_minPerBet" id="4_toad_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="4_toad_maxPerBet" id="4_toad_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="4_toad_maxPerNum" id="4_toad_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="4_toad_payRate" id="4_toad_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="4_toad_percent" id="4_toad_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">5ตัวโต๊ด</td>
                                        <td><input type="text" class="form-control" name="5_toad_minPerBet" id="5_toad_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="5_toad_maxPerBet" id="5_toad_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="5_toad_maxPerNum" id="5_toad_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="5_toad_payRate" id="5_toad_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
                                        <td><input type="text" class="form-control" name="5_toad_percent" id="5_toad_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;" required></td>
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
            'firstname': $('#firstname').val(),
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

        });
    });
</script>
<?php $this->endSection(); ?>