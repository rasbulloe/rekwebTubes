<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <link href="<?php echo base_url() ?>assets/front/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/front/css/main.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome/css/all.min.css">




    <link href="<?= base_url(); ?>/assets/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/nouislider.css">
    <!-- Theme color -->
    <!-- <link id="switcher" href="<?= base_url(); ?>/assets/css/theme-color/default-theme.css" rel="stylesheet"> -->

    <link id="switcher" href="<?= base_url(); ?>/assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="<?= base_url(); ?>/assets/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">



    <title> <?= $judul ?> </title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container" ml-5>
            <a class="navbar-brand font-weight-bold" href="<?= base_url('User'); ?>"><img src="<?= base_url(); ?>/assets/img/logo.png" height="90px" weight="90px" alt="">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('User'); ?>">Home <span class="sr-only">(current)</span></a>



                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categori
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url('kategori_user/kursi') ?>"> <i class="fas fa-couch"></i> Kursi</a>
                            <a class="dropdown-item" href="<?= base_url('kategori_user/meja_makan') ?>"><i class="fas fa-utensils"></i> Meja Makan</a>
                            <a class="dropdown-item" href="<?= base_url('kategori_user/lemari_penyimpanan') ?>"> <i class="fas fa-archive"></i> Lemari Penyimpanan</a>
                            <a class="dropdown-item" href="<?= base_url('kategori_user/tempat_tidur') ?>"> <i class="fas fa-bed"></i> Tempat Tidur</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Contact'); ?>">Contact</a>

                    </li>
                </ul>


                <div class="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <?php
                            $keranjang = '<i class="fas fa-cart-plus text-dark"></i> ' . $this->cart->total_items() . 'items'
                            ?>

                            <?php echo  anchor('user/detail_keranjang', $keranjang)  ?>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
        <!-- Nav Item - User Information -->
        <div class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?= $user['name']; ?> </span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('user/account') ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </div>
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url(); ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>

    </nav>