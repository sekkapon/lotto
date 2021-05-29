<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>

<style>
    i.bi-search:hover {
        color: black;
        cursor: pointer;
    }

    i.bi-trash:hover {
        color: red;
        cursor: pointer;
    }
</style>
<div class="page-heading" id="settingTime">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Manage Member</h3>
                <p class="text-subtitle text-muted">จัดการสมาชิก</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <a class="float-lg-end" href="<?= base_url('backend/user/viewEditUser'); ?>">
                    << ADMIN</a>
                        <!-- <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar
                        </li>
                    </ol>
                </nav> -->
            </div>
        </div>
    </div>
    <div class="row" id="divSettingLotto">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Table Member</h4>
                    <small>แก้ไขข้อมูลสมาชิก</small>
                </div>
                <div class="card-content">
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr align="center">
                                    <th>ลำดับ</th>
                                    <th>ชื่อสมาชิก</th>
                                    <th>ยูสเซอร์เนม</th>
                                    <th>เบอร์</th>
                                    <th>สถานะ</th>
                                    <th>เรียกดู | ลบ</th>
                                </tr>
                            </thead>
                            <tbody align="center" id="bodyTable">
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
                                        <td>
                                            <a href="#edit" data-user="<?= htmlspecialchars(json_encode($valueMember, JSON_UNESCAPED_UNICODE), ENT_COMPAT); ?>" onclick="callEdit(this)"><i class="bi bi-search" style="font-size: 1.2rem;"></i></a>&nbsp;
                                            <i class="bi bi-trash" style="font-size: 1.2rem;"></i>
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
    </div>
</div>


<div class="col-md-6 col-12" id="edit" hidden>
    <div class="card">
        <div class="card-content">
            <form id="editDataUser">
                <div class="card-header">
                    <h4>Edit Member</h4>
                    <small>แก้ไขข้อมูลสมาชิก</small>
                </div>
                <div class="card-body">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <input type="text" class="form-control" id="user_id" readonly hidden>
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
                                    <label>สถานะ</label>
                                    <div class="position-relative">
                                        <div class="input-group mb-3">
                                            <select class="form-select" id="status">
                                                <option value="0">ระงับการใช้งาน</option>
                                                <option value="1">เปิดการใช้งาน</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <footer>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="button" class="reset-btn btn btn-light-secondary me-1 mb-1">Reset</button>
                                    <button type="submit" class="btn btn-success me-1 mb-1">Save</button>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function callEdit(data) {
        $('#edit').removeAttr('hidden');
        $('#firstName').val($(data).data('user').firstname);
        $('#user_id').val($(data).data('user').user_id)
        $('#phone').val($(data).data('user').phone);
        $('#userName').val($(data).data('user').username);
        $('#status').val($(data).data('user').status);
    }
    $("#editDataUser").submit(function(event) {
        event.preventDefault();
        arrData = {
            'user_id': $('#user_id').val(),
            'firstname': $('#firstName').val(),
            'phone': $('#phone').val(),
            'username': $('#userName').val(),
            'status': $('#status').val(),
        };

        $.ajax({
            url: '<?= base_url('Backend/User/updateUser'); ?>',
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
                    window.location.href = '<?= base_url('backend/user/viewEditUser'); ?>'
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