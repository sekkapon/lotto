<?php $this->extend('template/tem_frontend/content'); ?>
<?php $this->section('content'); ?>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>รายการแทง
                <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">

    <div class="col-md-6 col-xl-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <label>เลือกรายการ</label>
                <select class="form-control" name="slShowType" id="slShowType" onchange="getbetlist();">
                    <option value="0" selected="">แสดงตามรายการแทง</option>
                    <option value="1">แสดงตามหมายเลข</option>
                </select>

                <label>เลือก</label>
                <select class="form-control" name="slLottoType" id="slLottoType" onchange="getbetlist();">
                    <option value="">ทุกประเภท</option>
                    <option value="1">3 ตัวบน</option>
                    <option value="2">3 ตัวล่าง</option>
                    <option value="3">3 ตัวโต๊ด</option>
                    <option value="4">2 ตัวบน</option>
                    <option value="5">2 ตัวล่าง</option>
                    <option value="6">2 ตัวโต๊ด</option>
                    <option value="7">1 ตัวบน</option>
                    <option value="8">1 ตัวล่าง</option>
                    <option value="9">4 ตัวโต๊ด</option>
                    <option value="10">5 ตัวโต๊ด</option>
                </select>

            </div>
            <div class="card-body">
                <h5 class="card-title">
                    <table class="mb-0 table table-striped">
                        <thead>
                            <tr>
                                <th> ลำดับ</th>
                                <th>วันที่ เวลา</th>
                                <th>RefNo.</th>
                                <th>ประเภท</th>
                                <th>หมายเลข</th>
                                <th>ยอดพนัน</th>
                                <th>คอมมิชชั่น</th>
                                <th>สถานะ</th>
                            </tr>
                        </thead>
                        <tbody id="showlistbet">


                        </tbody>
                    </table>
            </div>
            <div class="card-footer"></div>
        </div>



    </div>
</div>

<script>
    $(document).ready(function() {
        setTimeout(() => {
            getbetlist();
        }, 100);

    });

    function getbetlist() {
        $.ajax({
                method: "POST",
                url: "<?= base_url('bet-huay-thai/api/getbetlist') ?>",
                dataType: "json",
                data: {
                    slShowType:$('#slShowType').val(),
                    slLottoType:$('#slLottoType').val(),
                }
            })
            .done(function(msg) {
                console.log(msg);
                $.each(msg, function(k, val) {
                let txt = `
                    <tr>
                        <td><strong> ลำดับ</strong></td>
                        <td><strong>วันที่ เวลา</strong></td>
                        <td><strong>RefNo.</strong></td>
                        <td><strong>ประเภท</strong></td>
                        <td><strong>หมายเลข</strong></td>
                        <td><strong>ยอดพนัน</strong></td>
                        <td><strong>คอมมิชชั่น</strong></td>
                        <td><strong>สถานะ</strong></td>
                    </tr>
                `;
                });
                $('#showlistbet').html(txt);
            });
    }
</script>


<?php $this->endSection(); ?>