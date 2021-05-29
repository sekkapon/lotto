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
                <h3>Member</h3>
                <p class="text-subtitle text-muted">ข้อมูลสมาชิก</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Table member</h4>
                    <small>ตารางแสดงข้อมูลสมาชิก</small>
                </div>
                <div class="card-content">
                    <!-- table striped -->
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr align="center">
                                <th>ลำดับ</th>
                                <th>ชื่อสมาชิก</th>
                                <th>ยูสเซอร์เนม</th>
                                <th>เบอร์</th>
                                <th>สถานะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($member as $key => $valueMember) { ?>
                                <tr>
                                    <td>
                                        <span><?= $i; ?> </span>
                                    </td>
                                    <td>
                                        <span><?= $valueMember['firstname']; ?></span>
                                    </td>
                                    <td>
                                        <span><?= $valueMember['username']; ?></span>
                                    </td>
                                    <td>
                                        <span><?= $valueMember['phone']; ?></span>
                                    </td>
                                    <td>
                                        <?php
                                        if ($valueMember['status'] == 1) { ?>
                                            <span class="badge bg-success">Active</span>
                                        <?php } else { ?>
                                            <span class="badge bg-danger">Inactive</span>
                                        <?php }
                                        ?>
                                    </td>
                                </tr>
                            <?php
                                $i++;
                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            let table1 = document.querySelector('#table1');
            let dataTable = new simpleDatatables.DataTable(table1);
        });
    </script>
    <?php $this->endSection(); ?>