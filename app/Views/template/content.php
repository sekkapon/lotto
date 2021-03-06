<!DOCTYPE html>
<?php
$this->session = \Config\Services::session();
$this->DB = \Config\Database::connect();
?>


<!-- head -->
<?= $this->include('template/head'); ?>


<style>
    span.headMenu {
        font-weight: 500;
        font-size: 15px;
    }

    span.subMenu {
        font-weight: normal;
        font-size: 14px;
    }

    th {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 500;
        font-size: 14px;
        color: #25396f;
    }

    td {
        font-size: 13px;
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

    function thousands_separators(num) {
        var num_parts = num.toString().split(".");
        num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return num_parts.join(".");
    }
</script>

</html>