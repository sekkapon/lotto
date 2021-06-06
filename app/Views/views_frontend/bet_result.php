<?php $this->extend('template/tem_frontend/content'); ?>
<?php $this->section('content'); ?>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>ตรวจผลรางวัล
                <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                </div>
            </div>
        </div>

    </div>
</div>
<div class="card text-center">
    <div class="card-header">

        <div class="col-md-6 col-xl-1">
            <label>เลือกงวด</label>
        </div>
        <div class="col-md-6 col-xl-3">

            <select class="form-control" name="roundlotto" id="roundlotto" onchange="getRewradlist();">

            </select>

        </div>
    </div>
    <div class="card-body">
        <div class="card">

            <ul class="list-group list-group-flush" id="myR">
                <li class="list-group-item">
                    <table>
                        <tr>
                            <td width="130 px" class="pr-1 border-right">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        รางวัลที่ 1
                                    </div>
                                </div>
                            </td>
                            <td class="pl-2">
                                <div class="row" id="reward_1st">
                                    
                                </div>
                            </td>
                        </tr>
                    </table>

                </li>
                <li class="list-group-item">
                    <table>
                        <tr>
                            <td width="130 px" class="pr-1 border-right">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        3 ตัวบน
                                    </div>
                                </div>
                            </td>
                            <td class="pl-2">
                                <div class="row" id="reward_3upper">
                                   
                                </div>
                            </td>
                        </tr>
                    </table>


                </li>
                <li class="list-group-item">

                    <table>
                        <tr>
                            <td width="130 px" class="pr-1 border-right">
                                <div class=" border-right">
                                    <div class="card bg-primary text-white">
                                        <div class="card-body">
                                            3 ตัวล่าง
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="pl-2">
                                <div class="row" id="reward_3under_1st">
                                
                                </div>
                            </td>
                        </tr>
                    </table>

                </li>
                <li class="list-group-item">


                    <table>
                        <tr>
                            <td width="130 px" class="pr-1 border-right">
                                <div class=" border-right">
                                    <div class="card bg-primary text-white">
                                        <div class="card-body">
                                            3 ตัวโต๊ด
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="pl-2">
                                <div class="row" id="reward_3toad">
                                   
                                </div>
                            </td>
                        </tr>
                    </table>





                </li>
                <li class="list-group-item">
                    <table>
                        <tr>
                            <td width="130 px" class="pr-1 border-right">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        2 ตัวบน
                                    </div>
                                </div>
                            </td>
                            <td class="pl-2">
                                <div class="row" id="reward_2under">
                            
                                </div>
                            </td>
                        </tr>
                    </table>
                </li>
                <li class="list-group-item">
                    <table>
                        <tr>
                            <td width="130 px" class="pr-1 border-right">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        3 ล่าง
                                    </div>
                                </div>
                            </td>
                            <td class="pl-2">
                                <div class="row" id="reward_2upper">
                                    
                                </div>
                            </td>
                        </tr>
                    </table>
                </li>
                <li class="list-group-item">

                    <table>
                        <tr>
                            <td width="130 px" class="pr-1 border-right">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        2 ตัวโต๊ด
                                    </div>
                                </div>
                            </td>
                            <td class="pl-2">
                                <div class="row" id="reward_2toad">
                                   
                                </div>
                            </td>
                        </tr>
                    </table>

                </li>
                <li class="list-group-item">
                    <table>
                        <tr>
                            <td width="130 px" class="pr-1 border-right">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        1 ตัวบน
                                    </div>
                                </div>
                            </td>
                            <td class="pl-2">
                                <div class="row" id="reward_float_upper">
                                   
                                </div>
                            </td>
                        </tr>
                    </table>
                </li>
                <li class="list-group-item">
                    <table>
                        <tr>
                            <td width="130 px" class="pr-1 border-right">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        1 ตัวล่าง
                                    </div>
                                </div>
                            </td>
                            <td class="pl-2">
                                <div class="row" id="reward_float_under">
                                   
                                </div>
                            </td>
                        </tr>
                    </table>
                </li>
                <li class="list-group-item">

                    <table>
                        <tr>
                            <td width="130 px" class="pr-1 border-right">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        4 ตัวโต๊ด
                                    </div>
                                </div>
                            </td>
                            <td class="pl-2">
                                <div class="row" id="reward_4toad">
                                   
                                </div>
                            </td>
                        </tr>
                    </table>

                </li>
                <li class="list-group-item">
                    <table>
                        <tr>
                            <td width="130 px" class="pr-1 border-right">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        5 ตัวโต๊ด
                                    </div>
                                </div>
                            </td>
                            <td class="pl-2">
                                <div class="row" id="reward_5toad">
                                   
                                </div>
                            </td>
                        </tr>
                    </table>
                </li>

            </ul>
        </div>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>

<script>
    $(document).ready(function() {
        setTimeout(() => {
            getround();
        }, 100);

    });

    function getround(){
    $.ajax({
                method: "POST",
                url: "<?= base_url('bet-huay-thai/api/getround/0') ?>",
                dataType: "json",
                data: {status: ""}
            })
            .done(function(msg) {
                console.log(msg);
                var txt =``;
                $.each(msg, function(k, val) {
                    txt +=`<option value="`+val.round+`">`+val.round+`</option>`;
                });
                $('#roundlotto').html(txt);
                getRewradlist();
                
            });
 }


    function getRewradlist() {
        $.ajax({
                method: "POST",
                url: "<?= base_url('bet-huay-thai/api/getRewradlist') ?>",
                dataType: "json",
                data: {
                    roundlotto: $('#roundlotto').val()
                }
            })
            .done(function(msg) {
                var reward_1st = ``;
                var reward_3upper = ``;
                var reward_3under_1st = ``;
                var reward_3toad = ``;
                var reward_2upper = ``;
                var reward_2under = ``;
                var reward_2toad = ``;
                var reward_float_upper = ``;
                var reward_float_under = ``;
                var reward_4toad = ``;
                var reward_5toad = ``;
                $.each(JSON.parse(msg.reward_1st), function(k, val) {
                    reward_1st += ` <div class="col-sm">
                                        <div class="card">
                                            <div class="card-body">
                                                ` + val + `
                                            </div>
                                        </div>
                                    </div>`;
                });
                $('#reward_1st').html(reward_1st);
                $.each(JSON.parse(msg.reward_3upper), function(k, val) {
                    reward_3upper += ` <div class="col-sm">
                                        <div class="card">
                                            <div class="card-body">
                                                ` + val + `
                                            </div>
                                        </div>
                                    </div>`;
                });
                $('#reward_3upper').html(reward_3upper);
                $.each(JSON.parse(msg.reward_3under_1st), function(k, val) {
                    reward_3under_1st += ` <div class="col-sm">
                                        <div class="card">
                                            <div class="card-body">
                                                ` + val + `
                                            </div>
                                        </div>
                                    </div>`;
                });
                $.each(JSON.parse(msg.reward_3under_2nd), function(k, val) {
                    reward_3under_1st += ` <div class="col-sm">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    ` + val + `
                                                                </div>
                                                            </div>
                                                        </div>`;
                });
                $.each(JSON.parse(msg.reward_3under_3th), function(k, val) {
                    reward_3under_1st += ` <div class="col-sm">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        ` + val + `
                                                                    </div>
                                                                </div>
                                                            </div>`;
                });
                $.each(JSON.parse(msg.reward_3under_4th), function(k, val) {
                    reward_3under_1st += ` <div class="col-sm">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        ` + val + `
                                                                    </div>
                                                                </div>
                                                            </div>`;
                });
                $('#reward_3under_1st').html(reward_3under_1st);

                $.each(JSON.parse(msg.reward_3toad), function(k, val) {
                    reward_3toad += ` <div class="col-sm">
                                        <div class="card">
                                            <div class="card-body">
                                                ` + val + `
                                            </div>
                                        </div>
                                    </div>`;
                });
                $('#reward_3toad').html(reward_3toad);
                $.each(JSON.parse(msg.reward_2upper), function(k, val) {
                    reward_2upper += ` <div class="col-sm">
                                        <div class="card">
                                            <div class="card-body">
                                                ` + val + `
                                            </div>
                                        </div>
                                    </div>`;
                });
                $('#reward_2upper').html(reward_2upper);
                $.each(JSON.parse(msg.reward_2under), function(k, val) {
                    reward_2under += ` <div class="col-sm">
                                        <div class="card">
                                            <div class="card-body">
                                                ` + val + `
                                            </div>
                                        </div>
                                    </div>`;
                });
                $('#reward_2under').html(reward_2under);
                
                $.each(JSON.parse(msg.reward_2toad), function(k, val) {
                    reward_2toad += ` <div class="col-sm">
                                        <div class="card">
                                            <div class="card-body">
                                                ` + val + `
                                            </div>
                                        </div>
                                    </div>`;
                });
                $('#reward_2toad').html(reward_2toad);
                $.each(JSON.parse(msg.reward_float_upper), function(k, val) {
                    reward_float_upper += ` <div class="col-sm">
                                        <div class="card">
                                            <div class="card-body">
                                                ` + val + `
                                            </div>
                                        </div>
                                    </div>`;
                });
                $('#reward_float_upper').html(reward_float_upper);
                $.each(JSON.parse(msg.reward_float_under), function(k, val) {
                    reward_float_under += ` <div class="col-sm">
                                        <div class="card">
                                            <div class="card-body">
                                                ` + val + `
                                            </div>
                                        </div>
                                    </div>`;
                });
                $('#reward_float_under').html(reward_float_under);
                $.each(JSON.parse(msg.reward_1st), function(k, val) {
                    reward_4toad += ` <div class="col-sm">
                                        <div class="card">
                                            <div class="card-body">
                                                ` + val.slice(2) + `
                                            </div>
                                        </div>
                                    </div>`;
                });
                $('#reward_4toad').html(reward_4toad);
                $.each(JSON.parse(msg.reward_1st), function(k, val) {
                    reward_5toad += ` <div class="col-sm">
                                        <div class="card">
                                            <div class="card-body">
                                                ` + val.slice(1) + `
                                            </div>
                                        </div>
                                    </div>`;
                });
                $('#reward_5toad').html(reward_5toad);

            });
    }
</script>



<?php $this->endSection(); ?>