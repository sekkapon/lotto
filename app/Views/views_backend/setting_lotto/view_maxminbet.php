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
                                        <th>ลำดับ</th>
                                        <th>ชื่อ</th>
                                        <th>3ตัวบน</th>
                                        <th>3ตัวล่าง</th>
                                        <th>3ตัวโต๊ด</th>
                                        <th>2ตัวบน</th>
                                        <th>2ตัวล่าง</th>
                                        <th>2ตัวโต๊ด</th>
                                        <th>ลอยบน</th>
                                        <th>ลอยล่าง</th>
                                        <th>ปักหน่วย</th>
                                        <th>ปักสิบ</th>
                                        <th>ปักร้อย</th>
                                        <th>4ตัวตรง</th>
                                        <th>4ตัวโต๊ด</th>
                                        <th>5ตัวโต๊ด</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr>
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

</div>

<script>

</script>
<?php $this->endSection(); ?>