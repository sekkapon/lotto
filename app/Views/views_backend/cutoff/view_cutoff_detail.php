<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>
<style>
    p.inTable {
        margin-top: 1rem;

    }

    p.sum {
        margin-top: 1rem;
        color: red;
        text-decoration: underline;

    }

    th.betUser {
        color: red;
        text-decoration: underline;
    }
</style>
<div class="page-heading" id="settingTime">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Cut Off By Member</h3>
                <p class="text-subtitle text-muted">รายการตัดยอดตามสมาชิก</p>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row" id="divSettingLotto">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-content">
                                        <!-- table striped -->
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr align="center">
                                                    <th>ลำดับ</th>
                                                    <th>ชื่อสมาชิก</th>
                                                    <th>ยูสเซอร์เนม</th>
                                                    <th>งวดวันที่</th>
                                                    <th>รายการตัดยอด</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tbody>
                                                <?php
                                                if (sizeof($dataByUser) == 0) { ?>
                                                    <tr align="center">
                                                        <td colspan="5">ไม่มีข้อมูลการตัดยอด</td>
                                                    </tr>
                                                    <?php } else {
                                                    $i = 1;
                                                    foreach ($dataByUser as $key => $value) { ?>
                                                        <tr align="center">
                                                            <td><?= $i; ?></td>
                                                            <td>
                                                                <span><?= $value['firstname']; ?></span>
                                                            </td>
                                                            <td class="selectCutoff">
                                                                <span><?= $value['username']; ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?= date('d-m-Y', strtotime($value['round'])); ?></span>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="d-flex justify-content-center">
                                                                        <div class="col-md-4 col-2" style="border-right: 1px solid gray;">
                                                                            <?php
                                                                            foreach ($value['lotto'] as $key => $valueLotto) {
                                                                            ?>
                                                                                <p class="inTable">
                                                                                    <?php if ($valueLotto['typeBet'] == '3upper') { ?>
                                                                                        <span> 3 ตัวบน</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == '3under') { ?>
                                                                                        <span> 3 ตัวล่าง</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == '3toad') { ?>
                                                                                        <span> 3 ตัวโต๊ด</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == '2upper') { ?>
                                                                                        <span> 2 ตัวบน</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == '2under') { ?>
                                                                                        <span> 2 ตัวล่าง</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == '2toad') { ?>
                                                                                        <span> 2 ตัวโต๊ด</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == 'floatUnder') { ?>
                                                                                        <span> ลอยล่าง</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == 'floatUpper') { ?>
                                                                                        <span> ลอยบน</span>
                                                                                    <?php } else if ($valueLotto['typeBet'] == 'floatUpper') { ?>
                                                                                        <span>4 ตัวโต๊ด</span>
                                                                                    <?php  } else { ?>
                                                                                        <span> 5 ตัวโต๊ด</span>
                                                                                    <?php } ?>
                                                                                </p>
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="col-md-4 col-4 ">
                                                                            <?php $sum = 0;
                                                                            foreach ($value['lotto'] as $key => $valueLotto) {
                                                                                $sum += (int)$valueLotto['SumBetByType'];
                                                                            ?>
                                                                                <p class="inTable">
                                                                                    <span><?= number_format($valueLotto['SumBetByType']);  ?> บาท</span>
                                                                                </p>
                                                                            <?php } ?>
                                                                            <p class="inTable sum"><?= number_format($sum); ?> บาท</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                <?php $i++;
                                                    }
                                                } ?>

                                            </tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

</script>
<?php $this->endSection(); ?>