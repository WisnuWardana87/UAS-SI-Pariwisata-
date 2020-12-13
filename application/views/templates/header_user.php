<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Temukus Village Tours</title>

    <!--=== Bootstrap CSS ===-->
    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets2/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="<?= base_url(); ?>assets2/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?= base_url(); ?>assets2/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="<?= base_url(); ?>assets2/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="<?= base_url(); ?>assets2/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="<?= base_url(); ?>assets2/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?= base_url(); ?>assets2/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?= base_url(); ?>assets2/css/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?= base_url(); ?>assets2/css/responsive.css" rel="stylesheet">



    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="<?= base_url(); ?>assets2/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->

        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-9 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="<?= site_url('Frontend/index') ?>">Home</a>
                                </li>
                                <li><a href="">Select Travel</a>
                                    <ul>
                                        <li><a href="<?= site_url('Frontend/get_wisata') ?>">Travel</a>
                                            <a href="<?= site_url('Frontend/get_fotobooth') ?>">Restaurant</a>
                                            <a href="<?= site_url('Frontend/get_gapura') ?>">Home Stay</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="<?= site_url('Frontend/tentang_kami') ?>">About Us</a></li>
                                <li><a href="<?= site_url('Frontend/kontak') ?>">Contact Us</a></li>
                                <li><a>Login</a>
                                    <ul>
                                        <li><a href="<?= site_url('Frontend/login') ?>">Log In</a>
                                            <a href="<?= site_url('Frontend/register') ?>">Register</a>
                                        </li>
                                    </ul>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>