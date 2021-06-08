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
<script>
    (function($) {
        // ========================
        var data = localStorage.getItem("maxmin");
        if (data) {
            let val = (JSON.parse(data));
            let diff = (((new Date().getTime()) - (val.localTime * 1000)) / 1000 / 60); //นาที
            if (diff > 30) {
                localStorage.removeItem("maxmin");
                getminmax();
            }
        } else {
                getminmax();
        }


        getsumbet();
        // ====================

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

    function getminmax() {
        $.ajax({
                method: "POST",
                url: "<?= base_url('bet-huay-thai/api/getmaxminbet') ?>",
                dataType: "json",
                data: {}
            })
            .done(function(msg) {
                let v = JSON.stringify(msg[0]);
                localStorage.setItem("maxmin", v);
                return msg;
            });
    }

    function getsumbet() {
        $.ajax({
                method: "POST",
                url: "<?= base_url('bet-huay-thai/myapi/getsumbet') ?>",
                dataType: "json",
                data: {}
            })
            .done(function(msg) {
                $('#navtoround').html(msg.round);
                $('#navtotalbet').html(msg.sumbet);
                $('#navtoclear').html(msg.sumclear);
                $('#navtotcom').html(msg.sumcom);
                setrate()
            });
    }
    function setrate() { 
        // =======================
        var detail = JSON.parse(localStorage.getItem("maxmin")).detail;
        var txt = `
                                <tr>
                                    <td class="text-bold-500">3ตัวบน</td>
                                    <td> ` + detail.t_3upper.minPerBet + ` | ` + detail.t_3upper.maxPerBet + `</td>
                                    <td>` + detail.t_3upper.payRate + `</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">3ตัวล่าง</td>
                                    <td> ` + detail.t_3under.minPerBet + ` | ` + detail.t_3under.maxPerBet + `</td>
                                    <td>` + detail.t_3under.payRate + `</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">3ตัวโต๊ด</td>
                                    <td> ` + detail.t_3toad.minPerBet + ` | ` + detail.t_3toad.maxPerBet + `</td>
                                    <td>` + detail.t_3toad.payRate + `</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">2ตัวบน</td>
                                    <td> ` + detail.t_2upper.minPerBet + ` | ` + detail.t_2upper.maxPerBet + `</td>
                                    <td>` + detail.t_2upper.payRate + `</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">2ตัวล่าง</td>
                                    <td> ` + detail.t_2under.minPerBet + ` | ` + detail.t_2under.maxPerBet + `</td>
                                    <td>` + detail.t_2under.payRate + `</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">2ตัวโต๊ด</td>
                                    <td> ` + detail.t_2toad.minPerBet + ` | ` + detail.t_2toad.maxPerBet + `</td>
                                    <td>` + detail.t_2toad.payRate + `</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">ลอยบน</td>
                                    <td> ` + detail.t_floatUpper.minPerBet + ` | ` + detail.t_floatUpper.maxPerBet + `</td>
                                    <td>` + detail.t_floatUpper.payRate + `</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">ลอยล่าง</td>
                                    <td> ` + detail.t_floatUnder.minPerBet + ` | ` + detail.t_floatUnder.maxPerBet + `</td>
                                    <td>` + detail.t_floatUnder.payRate + `</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">4ตัวโต๊ด</td>
                                    <td> ` + detail.t_4toad.minPerBet + ` | ` + detail.t_4toad.maxPerBet + `</td>
                                    <td>` + detail.t_4toad.payRate + `</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">5ตัวโต๊ด</td>
                                    <td> ` + detail.t_5toad.minPerBet + ` | ` + detail.t_5toad.maxPerBet + `</td>
                                    <td>` + detail.t_5toad.payRate + `</td>
                                </tr>
                    `;
        $('#bodyshowminmax').html(txt);

        // ===================
     }
</script>

</html>