<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <hr>
            <div class="card-bodyM">
                <h4 class="card-title"> สวัสดีค่ะ คุณ <?=$this->session->session_member['firstname'];?> </h4>
                <ul class="list-group">
                    <li class="justify-content-between list-group-item"> งวดประจำวันที่ 01-06-2021 </li>
                    <!-- <li class="justify-content-between list-group-item"> เครดิต <font size="+2"><span class="badge badge-info badge-pill">5,000.00</span></font></li> -->
                    <li class="justify-content-between list-group-item"> ยอดพนัน <font size="+2"><span class="badge badge-secondary badge-pill" id="navtotalbet">0.00</span></font>
                    </li>
                    <li class="justify-content-between list-group-item"> ยอดได้-เสีย <font size="+2"><span class="badge badge-danger badge-pill" id="navtotalbalanc">-0.00</span></font>
                    </li>
                    <!-- <li class="justify-content-between list-group-item"> คงเหลือ <font size="+2"><span class="badge badge-success badge-pill">4,460.00</span></font></li> -->
                </ul>
            </div>
            <p>
            <h4 class="card-title"> หวยไทย </h4>
            <div class="card-bodyM">
                <ul class="list-group">
                    <li class="justify-content-between list-group-item">
                        <table class="table table-striped" style="font-size:0.7rem !important;">
                            <thead>
                                <tr>
                                    <th>ประเภท</th>
                                    <th>ขั้นต่ำ | สูงสุด</th>
                                    <th>อัตราจ่าย</th>
                                </tr>
                            </thead>
                            <tbody id="bodyshowminmax">
                             
                            </tbody>
                        </table>

                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
