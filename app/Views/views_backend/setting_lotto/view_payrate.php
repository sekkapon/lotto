<?php $this->extend('template/content'); ?>
<?php $this->section('content'); ?>

<style>
    span.settingHover:hover {
        text-decoration: underline;
        color: rgba(35, 28, 99, .8);
    }

    span.settingHover {
        color: #7c8db5;
    }

    button.reset-btn:hover {
        background-color: red;
        color: white;
    }
</style>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>ตั้งค่าอัตราจ่าย</h3>
                <!-- <p class="text-subtitle text-muted">เพิ่มสมาชิก</p> -->
            </div>
        </div>
    </div>



        <div class="row" id="divSettingLotto">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Setting Lotto</h4>
                        <small>ตั้งค่าหวยให้สมาชิก</small>
                    </div>
                    <div class="card-content">
                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr align="center">
                                        <th>ลำดับ</th>
                                        <th>ชื่อ</th>
                                        <th><input type="checkbox"></th>
                                        <th>3ตัวบน</th>
                                        <th>3ตัวล่าง</th>
                                        <th>3ตัวโต๊ด</th>
                                        <th>2ตัวบน</th>
                                        <th>2ตัวล่าง</th>
                                        <th>2ตัวโต๊ด</th>
                                        <th>ลอยบน</th>
                                        <th>ลอยล่าง</th>
                                        <th>4ตัวโต๊ด</th>
                                        <th>5ตัวโต๊ด</th>
                                    </tr>
                                    <tr>
                                    <th></th>
                                     <th></th>
                                     <th></th>
                                        <th><input class="form-control" ></th>
                                        <th><input class="form-control" ></th>
                                        <th><input class="form-control" ></th>
                                        <th><input class="form-control" ></th>
                                        <th><input class="form-control" ></th>
                                        <th><input class="form-control" ></th>
                                        <th><input class="form-control" ></th>
                                        <th><input class="form-control" ></th>
                                        <th><input class="form-control" ></th>
                                        <th><input class="form-control" ></th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                <pre>
                                <?php 
                                // print_r($datapayrate);
                                // die;
                                ?>

                                </pre>
                                <?php $i=0; foreach ($datapayrate as $k => $val) {$i++; ?>
                                       <tr>
                                            <td><?=$i;?></td>
                                            <td><?=$val['username'];?></td>
                                            <td><input type="checkbox"></td>
                                            <td><?=$val['detail']['3upper']['payRate'];?></td>
                                            <td><?=$val['detail']['3under']['payRate'];?></td>
                                            <td><?=$val['detail']['3toad']['payRate'];?></td>
                                            <td><?=$val['detail']['2upper']['payRate'];?></td>
                                            <td><?=$val['detail']['2under']['payRate'];?></td>
                                            <td><?=$val['detail']['2toad']['payRate'];?></td>
                                            <td><?=$val['detail']['floatUpper']['payRate'];?></td>
                                            <td><?=$val['detail']['floatUnder']['payRate'];?></td>
                                            <td><?=$val['detail']['4toad']['payRate'];?></td>
                                            <td><?=$val['detail']['5toad']['payRate'];?></td>
                                       </tr>
                                <?php }?>
                                
                                    
                           
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="reset-btn btn btn-light-secondary me-1 mb-1">Reset</button>
                            <button type="submit" class="btn btn-success me-1 mb-1">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

<script>

</script>
<?php $this->endSection(); ?>