<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>

<div class="page-heading" id="settingTime">
    <div class="page-title">
        <div class="row">
            <div class="d-flex justify-content-between">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Report By Member</h3>
                    <p class="text-subtitle text-muted">รายงานยอดได้/เสียตามสมาชิก</p>
                </div>
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <div class="d-flex justify-content-end">
                        <div class="col-md-3 mb-2">
                            <p style="margin-bottom:0.5rem;">งวดวันที่</p>
                            <fieldset class="form-group">
                                <select class="form-select" id="round">
                                    <option value="0000-00-00">เลือก</option>
                                    <?php foreach ($round as $key => $value) { ?>
                                        <option value="<?= $value['round']; ?>"><?php echo date('d-m-Y', strtotime($value['round'])) ?></option>
                                    <?php } ?>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="divSettingLotto">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr align="center">
                                    <th>ลำดับ</th>
                                    <th>ชื่อสมาชิก</th>
                                    <th>งวดวันที่</th>
                                    <th>ยอดแทงรวม (บาท)</th>
                                    <th>ได้ / เสีย (บาท)</th>
                                </tr>
                            </thead>
                            <tbody align="center" id="bodyTable">
                                <tr align="center">
                                    <td colspan="5">กรุณาเลือกงวด เพื่อนแสดงรายงาน</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#round").change(function() {
        if (this.value == '0000-00-00') {
            $('#bodyTable').html(`
                                <tr align="center">
                                     <td colspan="5">กรุณาเลือกงวด เพื่อนแสดงรายงาน</td>
                                </tr>
                                `);
        } else {
            $.ajax({
                url: '<?= base_url('Backend/Report/reportByMemberByRound'); ?>',
                method: 'POST',
                dataType: 'json',
                data: {
                    round: this.value
                },
            }).done(function(res) {
                if (res.code == 1) {
                    content = '';
                    var i = 1;
                    $.each(res.data, function(key, value) {
                        content += '<tr align="center">';
                        content += '<td>' + i + '</td>';
                        content += '<td>' + value.firstname + '</td>';
                        var redate = value.round.split('-');
                        content += '<td>' + redate[2] + '-' + redate[1] + '-' + redate[0] + '</td>';
                        content += '<td>' + thousands_separators(value.amount_bet) + '</td>';
                        content += '<td>';
                        if (value.amount_bet < value.win) {
                            var result = parseInt(value.win) - parseInt(value.amount_bet);
                            content += '<span style="color:#3ac47d">+' + thousands_separators(result) + '</span>';
                        } else if (value.amount_bet == value.amount_bet.win) {
                            content += '<span>0</span>';
                        } else {
                            var result = parseInt(value.amount_bet) - parseInt(value.win);
                            content += '<span style="color:red">-' + thousands_separators(result) + '</span>';
                        }
                        content += '</td>';
                        content += '</tr>';
                        i++;
                    });
                    $('#bodyTable').html(content);
                } else {
                    swal({
                        icon: 'error',
                        text: res.msg,
                        timer: 5000,
                        buttons: false,
                    });
                }
            });
        }

    });
</script>
<?php $this->endSection(); ?>