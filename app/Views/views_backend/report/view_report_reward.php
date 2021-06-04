<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>

<style>
    input.reward {
        height: 5rem;
        font-size: 2rem;
        letter-spacing: 2rem;
        text-align: center;
    }

    .card-footer {
        border-top: 0px;
    }
</style>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Report Reward</h3>
                <p class="text-subtitle text-muted">ผลรางวัลย้อนหลัง</p>
            </div>
        </div>
    </div>

    <div class="row match-height">
        <div class="col-lg-10 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-body">
                            <iframe src="https://www.lottery.co.th/10lotto" width="100%" height="320" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>