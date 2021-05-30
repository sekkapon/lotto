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
</style>

<body>
    <div id="app">
        <!-- navbar -->
        <?= $this->include('template/sidebar'); ?>
        <!-- end nav -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
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

</html>