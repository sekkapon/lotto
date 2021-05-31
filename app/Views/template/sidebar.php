<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <br>
        <div class="card-body py-4 px-5">
            <div class="d-flex align-items-center">
                <div class="avatar avatar-xl">
                    <?php if ($this->session->session_admin['role'] == 'programmer') { ?>
                        <img src="<?= base_url('public/images/faces/2.jpg'); ?>">
                    <?php } else if ($this->session->session_admin['role'] == 'admin') { ?>
                        <img src="<?= base_url('public/images/faces/1.jpg'); ?>">
                    <?php } else { ?>
                        <img src="<?= base_url('public/images/faces/5.jpg'); ?>">
                    <?php } ?>
                </div>
                <div class="ms-3 name">
                    <h5 class="font-bold"><?= $this->session->session_admin['username'] ?></h5>
                    <h6 class="mb-0" style="color: #F53737; text-decoration: underline; cursor:pointer;">LOGOUT</h6>
                </div>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item">
                    <a href="<?= base_url('backend'); ?>" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span class="headMenu">แดชบอร์ด</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span class="headMenu">สมาชิก</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="<?= base_url('backend/add_user'); ?>">
                                <span class="subMenu">เพิ่มสมาชิก</span>
                            </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="<?= base_url('backend/user'); ?>">
                                <span class="subMenu">จัดการสมาชิก</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-gear-fill"></i>
                        <span class="headMenu">ตั้งค่าหวย</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="<?= base_url('backend/set-huay/pay-rate'); ?>">
                                <span class="subMenu">อัตราจ่าย</span>
                            </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="<?= base_url('backend/set-huay/per-bet'); ?>">
                                <span class="subMenu">ตั้งอั้น</span>
                            </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="<?= base_url('backend/set-huay/max-min-bet'); ?>">
                                <span class="subMenu">ต่ำสุด/สูงสุด ต่อไม้</span>
                            </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="<?= base_url('backend/set-huay/commission'); ?>">
                                <span class="subMenu">เปอร์เซ็นต์ส่วนลด</span>
                            </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="<?= base_url('backend/set-huay/close-time'); ?>">
                                <span class="subMenu">เวลาปิดการแทง</span>
                            </a>

                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-fill"></i>
                        <span class="headMenu">รายงาน</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="layout-default.html">
                                <span class="subMenu">ยอดได้/เสีย ตามสมาชิก</span>
                            </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-default.html">
                                <span class="subMenu">ผลรางวัลย้อนหลัง</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-trophy-fill"></i>
                        <span class="headMenu">ผลรางวัล</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>