<?php $this->extend('template/content'); ?>


<?php $this->section('content'); ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>System Details</h3>
                <p class="text-subtitle text-muted">รายละเอียดระบบ</p>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="col-12 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-lg">
                            <thead>
                                <tr>
                                    <th>หัวข้อ</th>
                                    <th>รายละเอียด</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <p class="font-bold mb-0">ระบบสมาชิก</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0"> - เพิ่มสมาชิก</p>
                                        <br>
                                        <p class=" mb-0"> - แก้ไขข้อมูลสมาชิก</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <p class="font-bold mb-0">ระบบหวย</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0"> - วางเดิมพัน</p>
                                        <br>
                                        <p class=" mb-0"> - ระบบตรวจเช็คการวางเดิมพัน</p>
                                        <br>
                                        <p class=" mb-0"> - คำนวณยอดได้/เสีย ตามอัตราจ่ายที่กำหนด</p>
                                        <br>
                                        <p class=" mb-0"> - ระบบเลขปิด</p>
                                        <br>
                                        <p class=" mb-0"> - เพิ่มข้อมูลหวย</p>
                                        <br>
                                        <p class=" mb-0"> - แก้ไขข้อมูลหวย</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <p class="font-bold mb-0">ระบบรายงาน</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0"> - รายงานแสดงรายละเอียดยอดได้/เสียตามสมาชิก</p>
                                        <br>
                                        <p class=" mb-0"> - รายงานผลรางวัลย้อนหลัง</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <p class="font-bold mb-0">ระบบผลรางวัล</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0"> - ระบบเพิ่มผลรางวัลงวดล่าสุด</p>
                                        <br>
                                        <p class=" mb-0"> - เก็บผลรางวัลย้อนหลัง</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->endSection(); ?>