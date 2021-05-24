<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add Member</h3>
                <p class="text-subtitle text-muted">เพิ่มสมาชิก</p>
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
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label>ชื่อสมาชิก</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" id="firstName">
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
                                            <input type="text" class="form-control" id="phone" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
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
                                            <input type="text" class="form-control" id="userName">
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
                                            <input type="password" class="form-control" id="password">
                                            <div class="form-control-icon">
                                                <i class="bi bi-lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <footer>
                                    <br>
                                    <div class="col-12 d-flex justify-content-end">
                                        <span class="text-muted">ตั้งค่าหวย >></span>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <span style="font-weight: 500; color: rgba(35, 28, 99, 1);">ตั้งค่าหวย</span>
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
                                    <td><input type="text" class="form-control" id="3_upper_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="3_upper_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="3_upper_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="3_upper_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="3_upper_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">3ตัวล่าง</td>
                                    <td><input type="text" class="form-control" id="3_under_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="3_under_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="3_under_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="3_under_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="3_under_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">3ตัวโต๊ด</td>
                                    <td><input type="text" class="form-control" id="3_toad_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="3_toad_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="3_toad_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="3_toad_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="3_toad_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">2ตัวบน</td>
                                    <td><input type="text" class="form-control" id="2_upper_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="2_upper_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="2_upper_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="2_upper_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="2_upper_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">2ตัวล่าง</td>
                                    <td><input type="text" class="form-control" id="2_under_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="2_under_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="2_under_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="2_under_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="2_under_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">2ตัวโต๊ด</td>
                                    <td><input type="text" class="form-control" id="2_toad_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="2_toad_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="2_toad_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="2_toad_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="2_toad_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">ลอยบน</td>
                                    <td><input type="text" class="form-control" id="float_upper_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="float_upper_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="float_upper_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="float_upper_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="float_upper_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">ลอยล่าง</td>
                                    <td><input type="text" class="form-control" id="float_under_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="float_under_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="float_under_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="float_under_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="float_under_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">4ตัวโต๊ด</td>
                                    <td><input type="text" class="form-control" id="4_toad_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="4_toad_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="4_toad_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="4_toad_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="4_toad_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">5ตัวโต๊ด</td>
                                    <td><input type="text" class="form-control" id="5_toad_minPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="5_toad_maxPerBet" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="5_toad_maxPerNum" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="5_toad_payRate" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                    <td><input type="text" class="form-control" id="5_toad_percent" oninput="this.value=this.value.replace(/[^0-9]/g,'');" style="height:30px; width:75px; text-align: center;"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>