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
            <div id="content" class="span10">


                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="<?php echo base_url('dashboard') ?>">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li><a href="<?php echo base_url('manage/product') ?>">Manage Product</a></li>
                </ul>

                <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>
                <?php foreach ($barang as $brg) : ?>
                    <form method="post" action="<?= base_url() . 'admin/data_barang/update' ?>">

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Product Title</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?= $brg->nama_brg; ?>" name="nama_brg" id="nama_brg" type="text" />
                            </div>

                            <div class="for-group">
                                <label>Keterangan</label>
                                <input type="hidden" name="id_brg" class="form-control" value="<?= $brg->id_brg; ?>">
                                <input type="text" name="keterangan_short" class="form-control" value="<?= $brg->keterangan_short; ?>">
                            </div>

                            <div class="for-group">
                                <label>Kategori</label>
                                <input type="text" name="kategori" class="form-control" value="<?= $brg->kategori; ?>">
                            </div>

                            <div class="for-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control" value="<?= $brg->harga; ?>">
                            </div>

                            <div class="for-group">
                                <label>Stok</label>
                                <input type="text" name="stok" class="form-control" value="<?= $brg->stok; ?>">
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>

                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


                    </form>
                <?php endforeach ?>
            </div>
        </div>
        <!--/#content.span10-->
    </div>
    <!--/fluid-row-->

    <div class="modal hide fade" id="myModal">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Settings</h3>
        </div>
        <div class="modal-body">
            <p>Here settings can be configured...</p>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <a href="#" class="btn btn-primary">Save changes</a>
        </div>
    </div>

    <div class="clearfix"></div>

    <footer>

        <p>
            <span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>

        </p>

    </footer>

    <!-- start: JavaScript-->

    <script src="<?php echo base_url() ?>assets/admin/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/jquery-migrate-1.0.0.min.js"></script>

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
    <!-- end: JavaScript-->

</body>

</html>