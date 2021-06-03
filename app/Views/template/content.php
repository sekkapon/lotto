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

        <div id="main" class='layout-navbar'>

            <?= $this->include('template/nav'); ?>

            <div id="main-content">
                <?= $this->renderSection('content'); ?>

                <!-- footer -->
                <?= $this->include('template/footer'); ?>
                <!-- end footer -->
            </div>
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