<?php $this->extend('template/content'); ?>


<?php
$this->session = \Config\Services::session();
$this->section('content'); ?>

<style>
    th.betUser {
        color: red;
    }

    span.spnFooter {
        font-size: 14px;
        color: #25396f;
    }

    span.spnSum {
        color: red;
        text-decoration: underline;
    }
</style>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="d-flex justify-content-between">
                <div class="col-md-6">
                    <h3>Print Cutoff</h3>
                    <p class="text-subtitle text-muted">ปริ้นรายการตัดยอด</p>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0" id="tableCutoff">
                            <thead>
                                <tr align="center" style="background-color:#f2f7ff">
                                    <th colspan="4"> <span id="headShow">รายการการตัดยอดงวดวันที่ <?= date('d-m-Y', strtotime($round)); ?></span> </th>
                                </tr>
                                <tr align="center" style="background-color:#f2f7ff">
                                    <th>ลำดับ</th>
                                    <th>เลข</th>
                                    <th>ประเภทหวย</th>
                                    <th>จำนวน (บาท)</th>
                                </tr>
                            </thead>
                            <tbody id="bodyTable">
                                <?php $i = 1;
                                foreach ($dataCutoff as $keyDataCutoff => $valueDataCutoff) { ?>
                                    <tr align="center">
                                        <td><?= $i; ?>.</td>
                                        <td><?= $valueDataCutoff['number_lotto']; ?></td>
                                        <td>
                                            <?php if ($valueDataCutoff['type_lotto'] == '3upper') {
                                                echo '3 ตัวบน';
                                            } else if ($valueDataCutoff['type_lotto'] == '3under') {
                                                echo '3 ตัวล่าง';
                                            } else if ($valueDataCutoff['type_lotto'] == '3toad') {
                                                echo '3 ตัวโต๊ด';
                                            } else if ($valueDataCutoff['type_lotto'] == '2upper') {
                                                echo '2 ตัวบน';
                                            } else if ($valueDataCutoff['type_lotto'] == '2under') {
                                                echo '2 ตัวล่าง';
                                            } else if ($valueDataCutoff['type_lotto'] == '2toad') {
                                                echo '2 ตัวโต๊ด';
                                            } else if ($valueDataCutoff['type_lotto'] == 'floatUpper') {
                                                echo 'ลอยบน';
                                            } else if ($valueDataCutoff['type_lotto'] == 'floatUnder') {
                                                echo 'ลอยล่าง';
                                            } else if ($valueDataCutoff['type_lotto'] == '4toad') {
                                                echo '4 โต๊ด';
                                            } else {
                                                echo '5 โต๊ด';
                                            } ?>
                                        </td>
                                        <td>
                                            <span><?= number_format($valueDataCutoff['sumBetByType']); ?></span>
                                        </td>
                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                            <tfoot id="footerTable">
                                <?php $sum = 0;
                                foreach ($dataCutoff as $keyDataCutoff => $valueDataCutoff) {
                                    $sum += $valueDataCutoff['sumBetByType'];
                                } ?>
                                <tr align="center" style="background-color:#f2f7ff">
                                    <td colspan="3">
                                        <span class="spnFooter">รวม</span>
                                    </td>
                                    <td>
                                        <span class="spnSum"> <?= number_format($sum); ?> บาท</span>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-secondary print">Print</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $('button[type="button"]').click(function() {
            // var   stylesheet = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css';
            var win = window.open('', 'Print', 'width=1000,height=600');
            win.document.write(`<html>
                <head>
                <title></title>
                
                </head>
                <style>
                    th{
                        font-size:11px; 
                        font-weight: normal; 
                        border: 0.5px solid gray;
                    }

                    td{
                        font-size:10px; 
                        font-weight: normal; 
                        border: 0.5px solid gray;
                    }
                    span{
                        font-size:11px; 
                        font-weight: normal;
                    }
                
                    table {
                        border-collapse: collapse;
                        width: 100%;
                    }
                </style>
                <body>
                <table>
                    <thead>
                        <tr align="center" style="background-color:#f2f7ff;">
                            <th colspan="4">` + $('#headShow').html() + `</th>
                        </tr>
                        <tr align="center" style="background-color:#f2f7ff">
                            <th style="width:10%">ลำดับ</th>
                            <th style="width:30%">เลข</th>
                            <th style="width:30%">ประเภทหวย</th>
                            <th style="width:30%">จำนวน (บาท)</th>
                        </tr>
                    </thead>
                    <tbody>` + $('#bodyTable').html() + `</tbody>
                    <footer>` + $('#footerTable').html() + `</footer>
                </table>
                </body>
                </html>`);
            win.document.close();
            win.print();
            win.close();
            return false;
        });
    });
</script>
<?php $this->endSection(); ?>