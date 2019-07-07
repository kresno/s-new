<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Sepengki</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url('public/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <!-- ===== Plugin CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url('public/plugins/components/chartist-js/dist/chartist.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css'); ?>">
    <!-- ===== Plugin CSS ===== -->
    <link href="<?php echo base_url('public/plugins/components/datatables/jquery.dataTables.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- ===== Animation CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/animate.css'); ?>">
    <!-- ===== Custom CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/select2.min.css'); ?>">
    <!-- ===== Color CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/colors/green-dark.css'); ?>" id="theme">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="mini-sidebar">
    <!-- ===== Main-Wrapper ===== -->
    <div id="wrapper">
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <!-- ===== Top-Navigation ===== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="top-left-part">
                    <a class="logo" href="<?php echo base_url('index.php/pd/dashboard'); ?>">
                        <b>
                            <img src="<?php echo base_url('public/plugins/images/logo-icon.png'); ?>" alt="home" />
                        </b>
                        <span>
                            <img src="<?php echo base_url('public/plugins/images/logo-light-text.png'); ?>" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li>
                        <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="icon-arrow-left-circle"></i></a>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                            <i class="icon-settings"></i>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <a class="text-center" href="<?php echo site_url('login/logout'); ?>">
                                    <i class="fa fa-angle-right"></i>
                                    <strong>Logout</strong>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- ===== Top-Navigation-End ===== -->