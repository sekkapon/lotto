<!DOCTYPE html>
<?php
$this->session = \Config\Services::session();
$this->DB = \Config\Database::connect();
?>


<!-- head -->
<?= $this->include('template/head'); ?>


<style>
    span.headMenu {
        font-weight: normal;
        font-size: 18px;
    }

    span.subMenu {
        font-weight: normal;
        font-size: 15px;
    }

    th {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 500;
        font-size: 15px;
        color: #25396f;
    }

    td {
        font-size: 14px;
    }

    button.reset-btn:hover {
        background-color: red;
        color: white;
    }

    .bggreenY {
        background-color: greenyellow !important;
    }
</style>

<body>
    <div id="app">
        <!-- navbar -->
        <?= $this->include('template/sidebar'); ?>
        <!-- end nav -->
        <div id="main">
            <header class="mb-3">
                <header class='mb-3'>
                    <nav class="navbar navbar-expand navbar-light ">
                        <div class="container-fluid">
                            <a href="#" class="burger-btn d-block">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button> -->
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="padding-top: 10px;">
                                    <div class="user-name text-end me-3">
                                        <i class="bi bi-box-arrow-left" style="cursor:pointer; font-size:2rem;"></i>
                                    </div>
                                </ul>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="user-menu d-flex">
                                            <div class="user-name text-end me-3">
                                                <h6 class="mb-0 text-gray-600"><?= $this->session->session_admin['username'] ?></h6>
                                                <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                            </div>
                                            <div class="user-img d-flex align-items-center">
                                                <div class="avatar avatar-md">
                                                    <?php if ($this->session->session_admin['role'] == 'programmer') { ?>
                                                        <img src="<?= base_url('public/images/faces/2.jpg'); ?>">
                                                    <?php } else if ($this->session->session_admin['role'] == 'admin') { ?>
                                                        <img src="<?= base_url('public/images/faces/1.jpg'); ?>">
                                                    <?php } else { ?>
                                                        <img src="<?= base_url('public/images/faces/5.jpg'); ?>">
                                                    <?php } ?>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>
            </header>

            <?= $this->renderSection('content'); ?>

            <!-- footer -->
            <?= $this->include('template/footer'); ?>
            <!-- end footer -->
        </div>
    </div>

</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="<?= base_url('public/vendors/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
<script src="<?= base_url('public/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- <script src="<?= base_url('public/vendors/apexcharts/apexcharts.js'); ?>"></script> -->
<!-- <script src="<?= base_url('public/js/pages/dashboard.js'); ?>"></script> -->

<script src="<?= base_url('public/js/main.js'); ?>"></script>
<script>
    (function($) {
        $.fn.serializeFormJSON = function() {

            var o = {};
            var a = this.serializeArray();
            $.each(a, function() {
                if (o[this.name]) {
                    if (!o[this.name].push) {
                        o[this.name] = [o[this.name]];
                    }
                    o[this.name].push(this.value || '');
                } else {
                    o[this.name] = this.value || '';
                }
            });
            return o;
        };
    })(jQuery);
</script>

</html>