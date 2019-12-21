<!DOCTYPE html>
<html lang="en">

<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Astro Admin Panel Dashboard</title>
    <meta name="description" content="Shop Admin Panel Dashboard">
    <meta name="author" content="Engr Rostom Ali">
    <meta name="keyword" content="Shop Admin Panel Dashboard">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->

    <link id="bootstrap-style" href="<?php echo base_url() ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="<?php echo base_url() ?>assets/admin/css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->



    <!-- start: Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/admin/img/favicon.jpg">
    <!-- end: Favicon -->




</head>

<body>

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
    </div>

    <!-- start: Header -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="<?php echo base_url('admin/admin') ?>"><span>Astro Admin Panel</span></a>

                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav pull-right">

                        <li class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user"></i> <?php echo $this->session->userdata('user_name'); ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                <li><a href="<?php echo base_url('auth/logout') ?>"><i class="halflings-icon off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- end: User Dropdown -->
                    </ul>
                </div>
                <!-- end: Header Menu -->

            </div>
        </div>
    </div>
    <!-- start: Header -->

    <div class="container-fluid-full">
        <div class="row-fluid">

            <!-- start: Main Menu -->
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li><a href="<?php echo base_url('admin/admin') ?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                        <li><a href="<?php echo base_url('admin/data_barang') ?>"><i class="icon-tasks"></i><span class="hidden-tablet"> Data Barang</span></a></li>
                        <li><a href="<?php echo base_url('admin/invoice') ?>"><i class="icon-envelope"></i><span class="hidden-tablet"> Invoices</span></a></li>

                    </ul>
                </div>
            </div>
            <!-- end: Main Menu -->


            <!-- start: Content -->
            <div id="content" class="span10">


                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="<?php echo base_url('dashboard') ?>">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li><a href="<?php echo base_url('manage/product') ?>">Manage Invoice</a></li>
                </ul>


                <div class="row-fluid sortable">
                    <div class="box span12">
                        <div class="box-header" data-original-title>
                            <h2><i class="halflings-icon user"></i><span class="break"></span>Manage Invoice</h2>
                            <div class="box-icon">
                                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                            </div>
                        </div>

                        <style type="text/css">
                            #result {
                                color: red;
                                padding: 5px
                            }

                            #result p {
                                color: red
                            }
                        </style>
                        <div id="result">
                            <p><?php echo $this->session->flashdata('message'); ?></p>
                        </div>
                        <!-- tabel -->
                        <div class="container-fluid">
                            <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice: <?= $invoice->id ?></div>
                            </h4>

                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <th>ID BARANG</th>
                                    <th>NAMA PRODUK</th>
                                    <th>JUMLAH PESANAN</th>
                                    <th>HARGA SATUAN</th>
                                    <th>SUB-TOTAL</th>
                                </tr>

                                <?php
                                $total = 0;
                                foreach($pesanan as $psn) :
                                    $subtotal = $psn->jumlah * $psn->harga;
                                    $total += $subtotal;
                                ?>

                                    <tr>
                                        <td><?= $psn->id_brg; ?></td>
                                        <td><?= $psn->nama_brg; ?></td>
                                        <td><?= $psn->jumlah; ?></td>
                                        <td><?= number_format($psn->harga,0,',','.'); ?></td>
                                        <td><?= number_format($subtotal,0,',','.'); ?></td>
                                    </tr>

                                <?php endforeach; ?>

                                <tr>
                                    <td align="right" colspan="4">Total Harga</td>
                                    <td align="right">Rp. <?= number_format($total,0,',','.') ?></td>
                                </tr>
                            </table>
                            <a href="<?= base_url('admin/invoice'); ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
                        </div>
                        
                        <br>

                        <!-- end tabel -->
                    </div>
                    <!--/span-->



                </div>
                <!--/row-->



            </div>
            <!--/.fluid-container-->

            <!-- end: Content -->

        </div>
        <!--/#content.span10-->
    </div>
    <!--/fluid-row-->

    <footer>

        <p><br>
            <span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>

        </p>

    </footer>

    <!-- start: JavaScript-->


    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery-ui-1.10.0.custom.min.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery.ui.touch-punch.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/modernizr.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery.cookie.js"></script>

    <script src='<?php echo base_url() ?>assets/admin/js/fullcalendar.min.js'></script>

    <script src='<?php echo base_url() ?>assets/admin/js/jquery.dataTables.min.js'></script>

    <script src="<?php echo base_url() ?>assets/admin/js/excanvas.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/jquery.flot.resize.min.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery.chosen.min.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery.uniform.min.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery.cleditor.min.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery.noty.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery.elfinder.min.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery.raty.min.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery.iphone.toggle.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery.uploadify-3.1.min.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery.gritter.min.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery.imagesloaded.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery.masonry.min.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery.knob.modified.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery.sparkline.min.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/counter.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/retina.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/custom.js"></script>

    <!-- Bootstrap core JavaScript-->

    <script src="<?= base_url(); ?>/assets/js/sweetalert2.all.min.js"></script>

    <script src="<?= base_url(); ?>/assets/js/script.js"></script>




    <!-- end: JavaScript-->

</body>

</html>