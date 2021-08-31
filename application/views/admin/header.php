<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>|Z| <?= $title; ?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/icons/Z.png');?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets1/css/bootstrap.min.css');?>">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets1/css/font-awesome.min.css');?>">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets1/css/adminpro-custon-icon.css');?>">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets1/css/meanmenu.min.css');?>">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets1/css/jquery.mCustomScrollbar.min.css');?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets1/css/animate.css');?>">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets1/css/jvectormap/jquery-jvectormap-2.0.3.css');?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets1/css/data-table/bootstrap-table.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets1/css/data-table/bootstrap-editable.css');?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets1/css/normalize.css');?>">
    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets1/css/summernote.css');?>">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets1/css/c3.min.css');?>">
     <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets1/css/form.css')?>">
     <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets1/css/form/all-type-forms.css');?>">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets1/css/style.css');?>">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets1/css/responsive.css');?>">
    <!-- modernizr JS
		============================================ -->
    <script src="<?= base_url('assets1/js/vendor/modernizr-2.8.3.min.js');?>"></script>
</head>
<body class="darklayout">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="<?= base_url('assets/images/icons/Z.png');?>" alt="" style="width: 100px;">
                    </a>
                    <h3>Z-Gamer</h3>
                    <p>Crew</p>
                    <strong>|Z|</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa big-icon fa-user-md"></i> 
                                <span class="mini-dn">User</span> 
                                <span class="indicator-right-menu mini-dn">
                                    <i class="fa indicator-mn fa-angle-left"></i>
                                </span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="<?= base_url('Profile/dataUser');?>" class="dropdown-item">
                                    <i class="fa big-icon fa-table"></i>
                                    <span class="mini-dn" style="margin-left: 6px;">Data</span>
                                </a>
                                <a href="<?= base_url('Report/UserReport');?>" class="dropdown-item">
                                    <i class="fa big-icon fa-files-o"></i>
                                    <span class="mini-dn" style="margin-left: 6px;">Report</span>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa big-icon fa-edit"></i> 
                                <span class="mini-dn">News</span> 
                                <span class="indicator-right-menu mini-dn">
                                    <i class="fa indicator-mn fa-angle-left"></i>
                                </span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="<?= base_url('Game/newsData');?>" class="dropdown-item">
                                    <i class="fa big-icon fa-table"></i>
                                    <span class="mini-dn" style="margin-left: 6px;">Data</span>
                                </a>
                                <a href="<?= base_url('Report/NewsReport')?>" class="dropdown-item">
                                    <i class="fa big-icon fa-files-o"></i>
                                    <span class="mini-dn" style="margin-left: 6px;">Report</span>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa big-icon fa-edit"></i> 
                                <span class="mini-dn">Tournament</span> 
                                <span class="indicator-right-menu mini-dn">
                                    <i class="fa indicator-mn fa-angle-left"></i>
                                </span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="<?= base_url('Tournament/tourData');?>" class="dropdown-item">
                                    <i class="fa big-icon fa-table"></i>
                                    <span class="mini-dn" style="margin-left: 6px;">Data</span>
                                </a>
                                <a href="<?= base_url('Report/TourReport');?>" class="dropdown-item">
                                    <i class="fa big-icon fa-files-o"></i>
                                    <span class="mini-dn" style="margin-left: 6px;">Report</span>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa big-icon fa-edit"></i> 
                                <span class="mini-dn">Merchandise</span> 
                                <span class="indicator-right-menu mini-dn">
                                    <i class="fa indicator-mn fa-angle-left"></i>
                                </span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="<?= base_url('Shop/merchData')?>" class="dropdown-item">
                                    <i class="fa big-icon fa-table"></i>
                                    <span class="mini-dn" style="margin-left: 6px;">Data</span>
                                </a>
                                <a href="<?= base_url('Report/MerchReport')?>" class="dropdown-item">
                                    <i class="fa big-icon fa-files-o"></i>
                                    <span class="mini-dn" style="margin-left: 6px;">Report</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a href="<?= base_url('Admin');?>" style="color: white; margin-left: 10px;"><i class="fa big-icon fa-home"></i></a>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="<?= base_url('assets/images/icons/Zlogo.png');?>" alt="" style="width: 200px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info" style="margin-right: 20px;">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item">
                                             <span class="notes-img" style="width: 30px;">
                                                <img src="<?= base_url('assets/images/Profile/'.$img);?>" alt="">
                                            </span>
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="admin-name" style="margin-top: 5px; margin-right: 5px;"><?= $name; ?></span>
                                                <span class="fa indicator-mn fa-angle-down" style="margin-top: 5px;"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <!-- <li><a href="#"></span>My Profile</a></li> -->
                                                <li><a href="<?= base_url('Auth/logout');?>"></span>Log Out</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->