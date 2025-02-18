<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rawḍah Madrasah</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Zohir">

    <!-- Favicons -->
    <link rel="icon" href="<?=base_url()?>assets/img/favicon.svg">
    <link rel="apple-touch-icon" href="<?=base_url()?>assets/img/apple-touch-icon.svg">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/fontawesome-free/css/all.min.css">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/smoothness/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- =======================================================
    * Template Name: The Rawdah Madrasah - v1.0
    * Template URL: https://zohirs.com
    * Author: Zohir
    ======================================================== -->
    <style>
        #shadow-host-companion{
            display: none !important;
        }
    </style>
    
    <script>
   toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "showDuration": "300",
    "hideDuration": "2000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};

    </script>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader" class="pre-loader">
        <div id="loading">
            <img class="img-fluid loader" src="assets/img/favicon.svg" alt="logo">
        </div>
    </div>

    <div class="nav-overlay"></div>
    <!-- Page Content -->
    <div id="page" class="page">
        <!-- Header -->

        <header id="header" class="main-header transparent">
            <div class="container-fluid header-wrapper">
                <div class="site-logo">
                    <a href="<?= base_url() ?>">
                        <img class="img-fluid logo-dark" src="assets/img/logo.svg" alt="logo">
                        <img class="img-fluid logo-light" src="assets/img/logo-white.svg" alt="logo">
                    </a>
                </div>
                <nav class="main-nav">
                    <div class="navbar">
                    <ul class="nav-menu">
                            <li class="nav-item ">
                                <a href="<?= base_url('')?>" class="nav-link menu-close">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('teachers')?>" class="nav-link menu-close">Teachers</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('curriculum')?>" class="nav-link menu-close">Curriculum</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('classes')?>" class="nav-link menu-close">Classes & Calendar</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('parents')?>" class="nav-link menu-close">Parents</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('support')?>" class="nav-link menu-close">Support Us</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="<?= base_url('registration')?>" class="nav-link menu-close">Registration</a>
                            </li> -->
                            <li class="nav-item dropdown">
                                <a href="#"  data-bs-toggle="dropdown" class="nav-link  dropdown-toggle">Registration</a>                                
                                <ul class="dropdown-menu">
                                    <li>
                                        <p class="menu-heading">Bradford Mustafa Mount</p>
                                        <ul class="dropdown-sub-menu">
                                            <li><a class="dropdown-item"  href="<?= base_url('mustafa-mount-age7') ?>">New Registrations Age 7</a></li>
                                            <li><a class="dropdown-item"  href="<?= base_url('mustafa-mount-ongoing')?>">Returning students</a></li>
                                        </ul>
                                    </li><li>
                                        <p class="menu-heading">Liverpool Felicity House</p>
                                        <ul class="dropdown-sub-menu">
                                            <li><a class="dropdown-item" href="<?= base_url('felicity-house-age7') ?>">New Registrations Age 7</a></li>
                                            <li><a class="dropdown-item" href="<?= base_url('felicity-house-ongoing') ?>">Returning students</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    FAQs
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= base_url('faq')?>">Mustafa Mount</a></li>
                                    <li><a class="dropdown-item disabled" href="#">Felicity House</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('contact')?>" class="nav-link menu-close">Contact Us</a>
                            </li>
                        </ul>
                        <ul class="nav-btn">
                            <!-- <li class="nav-btn-item no-xsm">
                                <a href="#" class="btn btn-primary btn-nav">
                                    <img class="img-fluid logo-dark" src="assets/img/STAFF.svg" alt="logo">
                                    <img class="img-fluid logo-light" src="assets/img/STAFF-W.svg" alt="logo">
                                </a>
                            </li> -->
                            
                            <li class="nav-btn-item no-xsm"><a href="https://rawdah.cloud/site/login/" target="_blank" class="btn btn-primary btn-nav">Staff</a></li>                            
                            <li class="nav-btn-item d-none"><a href="https://rawdah.cloud/site/userlogin/" target="_blank" class="btn btn-primary btn-nav">Parents/Students</a></li>
                        </ul>
                    </div>
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </nav>

            </div>
            <!-- End header-wrapper -->

        </header>
        <!-- End Header -->