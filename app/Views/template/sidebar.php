<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="<?= base_url('backend/backend/system'); ?>"><img src="<?= base_url('public/images/logo/logo.png'); ?>" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item">
                    <a href="<?= base_url('backend/backend/system'); ?>" class='sidebar-link'>
                        <i class="bi bi-sliders"></i>
                        <span class="headMenu">รายละเอียดระบบ</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?= base_url('backend'); ?>" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span class="headMenu">โปรไฟล์</span>
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
                        <!--      <li class="submenu-item ">
                            <a href="<?= base_url('backend/set-huay/per-bet'); ?>">
                                <span class="subMenu">ตั้งอั้น</span>
                            </a>
                        </li> -->
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
                            <a href="<?= base_url('backend/report/reportReward'); ?>">
                                <span class="subMenu">ผลรางวัลย้อนหลัง</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="<?= base_url('backend/reward'); ?>" class='sidebar-link'>
                        <i class="bi bi-trophy-fill"></i>
                        <span class="headMenu">ผลรางวัล</span>
                    </a>
                </li>
            </ul>

            <div class="px-4">
                <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3 logout'>
                    Log out
                </button>
            </div>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>