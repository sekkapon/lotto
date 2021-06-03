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
              
            <div class="col-md-6 col-xl-1">
                <label>เลือก</label>
                </div>
                <div class="col-md-6 col-xl-3">
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
                var txt = ``;
                var txtfoot = ``;
                var sumbet = 0;
                var sumcom = 0;
                var i =0;
                $.each(msg, function(k, val) {i++;
                    var type =""
                    switch (val.type_lotto) {
                        case "3upper":
                            type = "3ตัวบน";
                            break;
                        case "3under":
                            type = "3ตัวล่าง";
                            break;
                        case "3toad":
                            type = "3ตัวโต๊ด";
                            break;
                        case "2upper":
                            type = "2ตัวบน";
                            break;
                        case "2under":
                            type = "2ตัวล่าง";
                            break;
                         case "floatUnder":
                            type = "2ตัวโต๊ด";
                            break;
                        case "floatUpper":
                            type = "ลอยบน";
                            break;
                        case "floatUnder":
                            type = "ลอยล่าง";
                            break;
                        case "4toad":
                            type = "4ตัวโต๊ด";
                            break;
                        case "5toad":
                            type = "5ตัวโต๊ด";
                            break;                        
                        default:
                            break;
                    }

                 txt += `
                    <tr >
                        <td>`+i+`</td>
                        <td>`+formatDate((val.create_time) *1000)+`</td>
                        <td>`+val.ticket_id+`</td>
                        <td >`+type+`</td>
                        <td>`+val.number_lotto+`</td>
                        <td>`+val.amount_bet+`</td>
                        <td>`+val.commission+`</td>
                        <td>`+val.status+`</td>
                    </tr>
                `;
                sumbet +=parseFloat(val.amount_bet);
                sumcom += parseFloat(val.commission) ;
               
                }); 
                txtfoot += `
                    <tr>
                         <td></td>
                        <td></td>
                        <td></td>
                        <td ></td>
                        <td>รวม</td>
                        <td>`+sumbet+`</td>
                        <td>`+sumcom+`</td>
                        <td></td>
                    </tr>`;
                $('#showlistbet').html(txtfoot+txt);
            });
    }
    function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();
        h = d.getHours ();
        m = d.getMinutes();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    return year+'/'+month+'/'+day+' '+h+':'+m;
}
</script>


<?php $this->endSection(); ?>