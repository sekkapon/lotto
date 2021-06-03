<?php $this->extend('template/content'); ?>


<?php
$this->session = \Config\Services::session();
$this->section('content'); ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>My Profile</h3>
                <p class="text-subtitle text-muted">โปรไฟล์ของฉัน</p>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="col-12 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-lg">
                            <tbody>
                                <tr>
                                    <marquee behavior="scroll" direction="left" scrollamount="10">WELCOME TO SYSTEM</marquee>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <p class="font-bold mb-0">ยูสเซอร์เนม :</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0"><?= $this->session->session_admin['username'] ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <p class="font-bold mb-0">ชื่อ :</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0"><?= $this->session->session_admin['firstname'] ?></p>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <p class="font-bold mb-0">เบอร์โทรศัพท์ :</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0"><?= $this->session->session_admin['phone'] ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <p class="font-bold mb-0">บทบาท :</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0"><?= $this->session->session_admin['role'] ?></p>
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