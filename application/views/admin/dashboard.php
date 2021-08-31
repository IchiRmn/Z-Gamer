        <!-- Breadcome start-->
        <div class="breadcome-area mg-b-30 small-dn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="breadcome-heading">
                                        <h2>Dashboard</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcome End-->
        <!-- Breadcome start-->
        <div class="breadcome-area des-none mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcome-heading">
                                        <h2>Dashboard</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcome End-->
        <!-- income order visit user Start -->
        <div class="income-order-visit-user-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                            <div class="income-title">
                                <div class="main-income-head">
                                    <h2>Users</h2>
                                    <div class="main-income-phara order-cl">
                                        <p>Sum</p>
                                    </div>
                                </div>
                            </div>
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-adminpro-rate">
                                        <h3><span class="counter"><?= $user_sum;?></span></h3>
                                    </div>
                                    <div class="price-graph">
                                        <span id="sparkline1"></span>
                                    </div>
                                </div>
                                <div class="income-range">
                                    <p>Joined</p>
                                    <span class="income-percentange">98% <i class="fa fa-bolt"></i></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                            <div class="income-title">
                                <div class="main-income-head">
                                    <h2>News</h2>
                                    <div class="main-income-phara order-cl">
                                        <p>Sum</p>
                                    </div>
                                </div>
                            </div>
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-adminpro-rate">
                                        <h3><span class="counter"><?= $news_sum?></span></h3>
                                    </div>
                                    <div class="price-graph">
                                        <span id="sparkline6"></span>
                                    </div>
                                </div>
                                <div class="income-range order-cl">
                                    <p>Informantion</p>
                                    <span class="income-percentange">66% <i class="fa fa-level-up"></i></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                            <div class="income-title">
                                <div class="main-income-head">
                                    <h2>Tournament</h2>
                                    <div class="main-income-phara order-cl">
                                        <p>Sum</p>
                                    </div>
                                </div>
                            </div>
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-adminpro-rate">
                                        <h3><span class="counter"><?= $tour_sum; ?></span></h3>
                                    </div>
                                    <div class="price-graph">
                                        <span id="sparkline2"></span>
                                    </div>
                                </div>
                                <div class="income-range visitor-cl">
                                    <p>League</p>
                                    <span class="income-percentange">55% <i class="fa fa-level-up"></i></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                            <div class="income-title">
                                <div class="main-income-head">
                                    <h2>Merchandise</h2>
                                    <div class="main-income-phara order-cl">
                                        <p>Sum</p>
                                    </div>
                                </div>
                            </div>
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-adminpro-rate">
                                        <h3><span class="counter"><?= $merch_sum; ?></span></h3>
                                    </div>
                                    <div class="price-graph">
                                        <span id="sparkline5"></span>
                                    </div>
                                </div>
                                <div class="income-range visitor-cl">
                                    <p>Items</p>
                                    <span class="income-percentange">55% <i class="fa fa-level-up"></i></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feed-mesage-project-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sparkline11-list shadow-reset mg-tb-30">
                            <div class="sparkline11-hd">
                                <div class="main-sparkline11-hd">
                                    <h1>|Z| User</h1>
                                    <div class="sparkline11-outline-icon">
                                        <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar">
                                <?php foreach ($user as $user) { ?>
                                    <div class="daily-feed-list">
                                        <div class="daily-feed-img" >
                                            <a href="#"><img src="<?= base_url('assets/images/Profile/'.$user->image);?>" alt="" style="width: 50px;">
                                            </a>
                                        </div>
                                        <div class="daily-feed-content">
                                            <h4>
                                                <span class="feed-author"><?= $user->name; ?></span> 
                                                <span style="font-style: italic;"><?= $user->email; ?></span>
                                            </h4>
                                            <p class="res-ds-n-t">Join at <?= $user->date_created;?></p>
                                            <span class="feed-ago">1m ago</span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sparkline11-list shadow-reset mg-tb-30">
                            <div class="sparkline11-hd">
                                <div class="main-sparkline11-hd">
                                    <h1>|Z| Orders</h1>
                                    <div class="sparkline11-outline-icon">
                                        <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar">
                                <table id="table1" data-toggle="table" data-page-size="5">
                                    <thead>
                                        <tr>
                                            
                                            <th data-field="id">ID</th>
                                            <th data-field="status" data-editable="true">Username</th>
                                            <th data-field="date" data-editable="true">Quantity</th>
                                            <th data-field="phone" data-editable="true">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($inv as $inv) { ?>
                                            <tr>
                                                <td><?= $inv->id_invoice; ?></td>
                                                <td><?= $inv->username; ?></td>
                                                <td><?= $inv->qty_merch;?></td>
                                                <td>$ <?= $inv->total_merch; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sparkline11-list shadow-reset mg-tb-30">
                            <div class="sparkline11-hd">
                                <div class="main-sparkline11-hd">
                                    <h1>|Z| League</h1>
                                    <div class="sparkline11-outline-icon">
                                        <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar">
                                <table id="table1" data-toggle="table" data-page-size="5">
                                    <thead>
                                        <tr>
                                            
                                            <th data-field="id">ID</th>
                                            <th data-field="status" data-editable="true">Register</th>
                                            <th data-field="date" data-editable="true">Date Regist</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($league as $l) { ?>
                                            <tr>
                                                <td><?= $l->id_regist; ?></td>
                                                <td><?= $l->name; ?></td>
                                                <td><?= $l->date_regist;?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>