<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>

<style>
    input.inputNum {
        text-align: center;
    }

    .card {
        margin-bottom: 0rem;
    }
</style>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="d-flex justify-content-between">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Setting Close Number</h3>
                    <p class="text-subtitle text-muted">ตั้งค่าเลขปิด</p>
                </div>
            </div>
        </div>
        <div class="row match-height" id="settingNumberClose">
            <div class="col-md-6 col-10">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="d-flex justify-content-between">
                                                    <div class="col-8 col-md-8 order-md-1 order-last">
                                                        <h4 style="font-weight:500; padding-top: 0.4rem;">ประเภทหวย <span id="typeLotto"></span></h4>
                                                    </div>
                                                    <div class="col-2 col-md-3 order-md-1 order-last">
                                                        <div class="col-md-12 col-xl-12">
                                                            <fieldset class="form-group">
                                                                <select class="form-select" id="selectTypeLotto">
                                                                    <option>เลือกประเภท</option>
                                                                    <option value="num3upper">3ตัวบน</option>
                                                                    <option value="num3under">3ตัวล่าง</option>
                                                                    <option value="num3toad">3ตัวโต๊ด</option>
                                                                    <option value="num2upper">2ตัวบน</option>
                                                                    <option value="num2under">2ตัวล่าง</option>
                                                                    <option value="num2toad">2ตัวโต๊ด</option>
                                                                    <option value="numfloatUpper">ลอยบน</option>
                                                                    <option value="numfloatUnder">ลอยล่าง</option>
                                                                    <option value="num4toad">4ตัวโต๊ด</option>
                                                                    <option value="num5toad">5ตัวโต๊ด</option>
                                                                </select>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <form id="formCloseNumber">
                                                <div class="card-body">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control inputNum" maxlength=0 name="number1">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control inputNum" maxlength=0 name="number2">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control inputNum" maxlength=0 name="number3">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control inputNum" maxlength=0 name="number4">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control inputNum" maxlength=0 name="number5">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control inputNum" maxlength=0 name="number6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control inputNum" maxlength=0 name="number7">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control inputNum" maxlength=0 name="number8">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control inputNum" maxlength=0 name="number9">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control inputNum" maxlength=0 name="number10">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control inputNum" maxlength=0 name="number11">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control inputNum" maxlength=0 name="number12">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="button" class="reset-btn btn btn-light-secondary me-1 mb-1">Reset</button>
                                                        <button type="submit" class="btn btn-success me-1 mb-1">Save</button>
                                                    </div>
                                                </div>
                                            </form>
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
        $(function() {
            $('input').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });

        $('#selectTypeLotto').change(function() {
            $('input[type=text]').val('');
            if (this.value == 'num3upper' || this.value == 'num3under' || this.value == 'num3toad') {
                var maxLengthLotto = 3;
            } else if (this.value == 'num2upper' || this.value == 'num2under' || this.value == 'num2toad') {
                var maxLengthLotto = 2;
            } else if (this.value == 'numfloatUpper' || this.valuee == 'numfloatUnder') {
                var maxLengthLotto = 1;
            } else if (this.value == 'num4toad') {
                var maxLengthLotto = 4;
            } else if (this.value == 'num5toad') {
                var maxLengthLotto = 5;
            } else {
                var maxLengthLotto = 0;
            }
            $('input[type=text]').attr('maxlength', maxLengthLotto);
        });

        $(".reset-btn").click(function() {
            swal("ต้องการล้างข้อมูลเลขปิดหรือไม่ ?").then((value) => {
                if (value) {
                    $("#formCloseNumber").trigger("reset");
                }
            });
        });

        $("#formCloseNumber").submit(function(event) {
            event.preventDefault();
            arrData = {
                'type_lotto': $('#selectTypeLotto').val().substring(3),
                'data': {}
            }

            var i = 0;
            $.each($(this).serializeFormJSON(), function(key, value) {
                keyNew = key;
                if (value != 0) {
                    arrData.data[i] = {
                        'number_lotto': value
                    }
                    i++
                }
            });

            $.ajax({
                url: 'api/setCloseNumber',
                method: 'POST',
                dataType: 'json',
                data: {
                    arrData: JSON.stringify(arrData)
                },
            }).done(function(res) {
                if (res.code == 1) {
                    swal({
                        icon: 'success',
                        text: res.msg,
                        timer: 1500,
                        buttons: false,
                    }).then(value => {
                        window.location.href = '<?= base_url('backend/set-huay/close-number'); ?>'
                    });
                } else {
                    swal({
                        icon: 'error',
                        text: res.msg,
                        timer: 5000,
                        buttons: false,
                    });
                }
            });
        });
    </script>
    <?php $this->endSection(); ?>