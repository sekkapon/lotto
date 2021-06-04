<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>

<div class="page-heading" id="settingTime">
    <div class="page-title">
        <div class="row">
            <div class="d-flex justify-content-between">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Report By Type</h3>
                    <p class="text-subtitle text-muted">รายงานยอดได้/เสียตามประเภทหวย</p>
                </div>
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <div class="d-flex justify-content-end">
                        <div class="form-group has-icon-left col-3">
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
            </div>
        </div>
    </div>
    <div class="row" id="divSettingLotto">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr align="center">
                                    <th>ลำดับ</th>
                                    <th>ชื่อสมาชิก</th>
                                    <th>งวด</th>
                                    <th>ยอดแทงรวม</th>
                                    <th>ได้ / เสีย</th>
                                </tr>
                            </thead>
                            <tbody align="center" id="bodyTable">
                                <tr align="center">
                                    <td colspan="5">กรุณาเลือกงวด เพื่อนแสดงรายงาน</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>

</script>
<?php $this->endSection(); ?>