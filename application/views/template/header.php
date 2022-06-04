<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Victory Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/jquery-bar-rating/fontawesome-stars.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="<?php echo base_url() ?>assets/index.html"><img src="<?php echo base_url() ?>assets/images/logo.svg" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="<?php echo base_url() ?>assets/index.html"><img src="<?php echo base_url() ?>assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <a href="<?= base_url('login/logout'); ?>" class="btn btn-warning" style="position:absolute;right:10px;">Logout</a>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <div class="row row-offcanvas row-offcanvas-right">
                <!-- partial:partials/_settings-panel.html -->
                <!-- partial -->
                <!-- partial:partials/_sidebar.html -->

                
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    
                    <ul class="nav">
                        <li class="nav-item nav-profile">
                            <div class="nav-link">
                                <div class="profile-image">
                                    <img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image" />
                                    <span class="online-status online"></span>
                                    <!--change class online to offline or busy as needed-->
                                </div>
                                <div class="profile-name">
                                    <p class="name">
                                       <?= $this->session->userdata('nama'); ?>
                                    </p>
                                    <p class="designation">
                                        Super Admin
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('home'); ?>">
                                <i class="icon-rocket menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                                <i class="icon-flag menu-icon"></i>
                                <span class="menu-title">Input Data</span>
                            </a>
                            <div class="collapse" id="form-elements">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>petugas/create">Form Petugas</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>jadwal/create">Form Jadwal</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>account/create">Form Account Meeting</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>jadwalpetugas/create">Form Jadwal Petugas</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Manajemen Data</span>
                            </a>
                            <div class="collapse" id="tables">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>petugas/index">Daftar Petugas</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>account/index">Account Meeting</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>jadwal/index">Daftar Jadwal</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>jadwalpetugas/index">Jadwal Petugas</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                                <i class="icon-bubbles menu-icon"></i>
                                <span class="menu-title">User Admin</span>
                            </a>
                            <div class="collapse" id="auth">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url("user"); ?>"> User </a></li>
                                   
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="../../pages/apps/email.html">
                                <i class="icon-cursor menu-icon"></i>
                                <span class="menu-title">Kontak</span>
                            </a>
                        </li> -->
                        <li class="nav-item nav-doc">
                            <a class="nav-link bg-primary" href="<?= base_url('report/pdf'); ?>">
                                <i class="icon-magnet menu-icon"></i>
                                <span class="menu-title">Report</span>
                            </a>
                        </li>
                    </ul>
                </nav>
              
                <!-- plugins:js -->
                <script src="<?php echo base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
                <!-- endinject -->
                <!-- Plugin js for this page-->
                <script src="<?php echo base_url() ?>assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
                <script src="<?php echo base_url() ?>assets/vendors/chart.js/Chart.min.js"></script>
                <script src="<?php echo base_url() ?>assets/vendors/raphael/raphael.min.js"></script>
                <script src="<?php echo base_url() ?>assets/vendors/morris.js/morris.min.js"></script>
                <script src="<?php echo base_url() ?>assets/vendors/jquery-sparkline/jquery.sparkline.min.js"></script>
                <!-- End plugin js for this page-->
                <!-- inject:js -->
                <script src="<?php echo base_url() ?>assets/js/off-canvas.js"></script>
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script src="<?php echo base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
                <script src="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
                  <!-- Custom js for this page-->
                 <script src="<?php echo base_url() ?>assets/js/data-table.js"></script>
                <!-- <script src="js/hoverable-collapse.js"></script> -->
                <!-- <script src="js/misc.js"></script> -->
                <!-- <script src="js/settings.js"></script> -->
                <!-- <script src="js/todolist.js"></script> -->
                <!-- endinject -->
                <!-- Custom js for this page-->
                <!-- <script src="js/dashboard.js"></script> -->
                <!-- End custom js for this page-->
</body>