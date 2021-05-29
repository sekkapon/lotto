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
<div class="page-heading" id="settingTime">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Member</h3>
                <p class="text-subtitle text-muted">ข้อมูลสมาชิก</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Table member</h4>
                    <small>ตารางแสดงข้อมูลสมาชิก</small>
                </div>
                <div class="card-content"></div>
                <!-- table striped -->
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr align="center">
                                <th>ลำดับ</th>
                                <th>ชื่อสมาชิก</th>
                                <th>ยูสเซอร์เนม</th>
                                <th>เบอร์</th>
                                <th>สถานะ</th>
                            </tr>
                        </thead>
                        <tbody align="center">
                            <?php $i = 1;
                            foreach ($member as $key => $valueMember) { ?>
                                <tr>
                                    <td>
                                        <span><?= $i; ?> </span>
                                    </td>
                                    <td>
                                        <span><?= $valueMember['firstname']; ?></span>
                                    </td>
                                    <td>
                                        <span><?= $valueMember['username']; ?></span>
                                    </td>
                                    <td>
                                        <span><?= $valueMember['phone']; ?></span>
                                    </td>
                                    <td>
                                        <?php
                                        if ($valueMember['status'] == 1) { ?>
                                            <span class="badge bg-success">Active</span>
                                        <?php } else { ?>
                                            <span class="badge bg-danger">Inactive</span>
                                        <?php }
                                        ?>
                                    </td>
                                </tr>
                            <?php
                                $i++;
                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="card-body">
    <table class="table table-striped" id="table1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>City</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Graiden</td>
                <td>vehicula.aliquet@semconsequat.co.uk</td>
                <td>076 4820 8838</td>
                <td>Offenburg</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Dale</td>
                <td>fringilla.euismod.enim@quam.ca</td>
                <td>0500 527693</td>
                <td>New Quay</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Nathaniel</td>
                <td>mi.Duis@diam.edu</td>
                <td>(012165) 76278</td>
                <td>Grumo Appula</td>
                <td>
                    <span class="badge bg-danger">Inactive</span>
                </td>
            </tr>
            <tr>
                <td>Darius</td>
                <td>velit@nec.com</td>
                <td>0309 690 7871</td>
                <td>Ways</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Oleg</td>
                <td>rhoncus.id@Aliquamauctorvelit.net</td>
                <td>0500 441046</td>
                <td>Rossignol</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Kermit</td>
                <td>diam.Sed.diam@anteVivamusnon.org</td>
                <td>(01653) 27844</td>
                <td>Patna</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Jermaine</td>
                <td>sodales@nuncsit.org</td>
                <td>0800 528324</td>
                <td>Mold</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Ferdinand</td>
                <td>gravida.molestie@tinciduntadipiscing.org</td>
                <td>(016977) 4107</td>
                <td>Marlborough</td>
                <td>
                    <span class="badge bg-danger">Inactive</span>
                </td>
            </tr>
            <tr>
                <td>Kuame</td>
                <td>Quisque.purus@mauris.org</td>
                <td>(0151) 561 8896</td>
                <td>Tresigallo</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Deacon</td>
                <td>Duis.a.mi@sociisnatoquepenatibus.com</td>
                <td>07740 599321</td>
                <td>Karapınar</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Channing</td>
                <td>tempor.bibendum.Donec@ornarelectusante.ca</td>
                <td>0845 46 49</td>
                <td>Warrnambool</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Aladdin</td>
                <td>sem.ut@pellentesqueafacilisis.ca</td>
                <td>0800 1111</td>
                <td>Bothey</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Cruz</td>
                <td>non@quisturpisvitae.ca</td>
                <td>07624 944915</td>
                <td>Shikarpur</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Keegan</td>
                <td>molestie.dapibus@condimentumDonecat.edu</td>
                <td>0800 200103</td>
                <td>Assen</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Ray</td>
                <td>placerat.eget@sagittislobortis.edu</td>
                <td>(0112) 896 6829</td>
                <td>Hofors</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Maxwell</td>
                <td>diam@dapibus.org</td>
                <td>0334 836 4028</td>
                <td>Thane</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Carter</td>
                <td>urna.justo.faucibus@orci.com</td>
                <td>07079 826350</td>
                <td>Biez</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Stone</td>
                <td>velit.Aliquam.nisl@sitametrisus.com</td>
                <td>0800 1111</td>
                <td>Olivar</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Berk</td>
                <td>fringilla.porttitor.vulputate@taciti.edu</td>
                <td>(0101) 043 2822</td>
                <td>Sanquhar</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Philip</td>
                <td>turpis@euenimEtiam.org</td>
                <td>0500 571108</td>
                <td>Okara</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Kibo</td>
                <td>feugiat@urnajustofaucibus.co.uk</td>
                <td>07624 682306</td>
                <td>La Cisterna</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Bruno</td>
                <td>elit.Etiam.laoreet@luctuslobortisClass.edu</td>
                <td>07624 869434</td>
                <td>Rocca d"Arce</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Leonard</td>
                <td>blandit.enim.consequat@mollislectuspede.net</td>
                <td>0800 1111</td>
                <td>Lobbes</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Hamilton</td>
                <td>mauris@diam.org</td>
                <td>0800 256 8788</td>
                <td>Sanzeno</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Harding</td>
                <td>Lorem.ipsum.dolor@etnetuset.com</td>
                <td>0800 1111</td>
                <td>Obaix</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
            <tr>
                <td>Emmanuel</td>
                <td>eget.lacus.Mauris@feugiatSednec.org</td>
                <td>(016977) 8208</td>
                <td>Saint-Remy-Geest</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
<?php $this->endSection(); ?>