<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>
<style>
    p.inTable {
        margin-top: 1rem;

    }

    span.selectCutoff:hover {
        color: blue;
        text-decoration: underline;
        cursor: pointer;
    }
</style>
<div class="page-heading" id="settingTime">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Cut Off</h3>
                <p class="text-subtitle text-muted">ตัดยอดหวย</p>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">สมาชิก</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">ตัดยอด</a>
                    </li>
                </ul>
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
                                                    <th>งวดที่</th>
                                                    <th>ยอดเดิมพันตามประเภท</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1;
                                                foreach ($dataByUser as $key => $value) { ?>
                                                    <tr align="center">
                                                        <td><?= $i; ?></td>
                                                        <td>
                                                            <span class="selectCutoff" data-user="<?= htmlspecialchars(json_encode($value, JSON_UNESCAPED_UNICODE), ENT_COMPAT); ?>" onclick="pageCutoff(this)"><?= $value['firstname']; ?></span>
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
                                                                    <div class="col-md-3 col-2" style="border-right: 1px solid gray;">
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
                                                                    <div class="col-md-3 col-4 ">
                                                                        <?php $sum = 0;
                                                                        foreach ($value['lotto'] as $key => $valueLotto) {
                                                                            $sum += (int)$valueLotto['SumBetByType'];
                                                                        ?>
                                                                            <p class="inTable">
                                                                                <span><?= number_format($valueLotto['SumBetByType']);  ?> บาท</span>
                                                                            </p>
                                                                        <?php } ?>
                                                                        <p class="inTable" style="color:red"><?= number_format($sum); ?> บาท</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php $i++;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row" id="divSettingLotto">
                            <div class="col-md-12 col-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                    <tr align="center">
                                                        <th colspan="20"> <span id="headShow">ตัดยอดสมาชิก</span> </th>
                                                    </tr>
                                                    <tr align="center">
                                                        <th width="10%">3ตัวบน</th>
                                                        <th>จำนวน</th>
                                                        <th width="6%">3ตัวล่าง</th>
                                                        <th>จำนวน</th>
                                                        <th width="6%">3ตัวโต๊ด</th>
                                                        <th>จำนวน</th>
                                                        <th width="6%">2ตัวบน</th>
                                                        <th>จำนวน</th>
                                                        <th width="6%">2ตัวล่าง</th>
                                                        <th>จำนวน</th>
                                                        <th width="6%">2ตัวโต๊ด</th>
                                                        <th>จำนวน</th>
                                                        <th width="6%">ลอยบน</th>
                                                        <th>จำนวน</th>
                                                        <th>ลอยล่าง</th>
                                                        <th>จำนวน</th>
                                                        <th>4ตัวโต๊ด</th>
                                                        <th>จำนวน</th>
                                                        <th>5ตัวโต๊ด</th>
                                                        <th>จำนวน</th>
                                                    </tr>
                                                </thead>
                                                <tbody align="center">
                                                    <tr style="background-color:#f2f7ff">
                                                        <th></th>
                                                        <th>0</th>
                                                        <th></th>
                                                        <th>0</th>
                                                        <th></th>
                                                        <th>0</th>
                                                        <th></th>
                                                        <th>0</th>
                                                        <th></th>
                                                        <th>0</th>
                                                        <th></th>
                                                        <th>0</th>
                                                        <th></th>
                                                        <th>0</th>
                                                        <th></th>
                                                        <th>0</th>
                                                        <th></th>
                                                        <th>0</th>
                                                        <th></th>
                                                        <th>0</th>
                                                    </tr>
                                                <tbody align="center" id="bodyTable">
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
        function pageCutoff(data) {
            $('#home-tab').removeClass("active");
            $('#profile-tab').addClass("active");
            $("#home").removeClass("active");
            $("#home").removeClass("show");
            $("#profile").addClass("active");
            $("#profile").addClass("show");
            $('#headShow').html($(data).data('user').firstname)
            $.ajax({
                url: '<?= base_url('Backend/Cutoff/callDataByUser'); ?>',
                method: 'POST',
                dataType: 'json',
                data: {
                    userID: $(data).data('user').user_id
                },
            }).done(function(res) {
                if (res.code == 1) {

                } else {

                }
            });
        }
    </script>
    <?php $this->endSection(); ?>