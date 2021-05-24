<!DOCTYPE html>
<?php
$this->session = \Config\Services::session();
$this->DB = \Config\Database::connect();
?>



<?= $this->include('template/tem_frontend/head'); ?>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

        <?= $this->include('template/tem_frontend/sidebar'); ?>
        <div class="app-main">
        <?= $this->include('template/tem_frontend/navbar'); ?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <?= $this->renderSection('content'); ?>

                </div>
                <?= $this->include('template/tem_frontend/footer'); ?>
            </div>
        </div>

        <script src="<?= base_url('public/frontend/assets/scripts/main.js'); ?>"></script>
</body>

</html>