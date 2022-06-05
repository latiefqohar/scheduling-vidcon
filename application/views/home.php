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
    <link rel="stylesheet" href="https://www.bootstrapdash.com/demo/victory/template/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
</head>

<body>

        <!-- partial:partials/_navbar.html -->

            <div class="navbar-menu-wrapper d-flex align-items-center"><br><br>
            <?php if($this->session->userdata('is_login')==true) {?>
                <a href="<?= base_url("jadwal"); ?>" class="btn btn-outline-primary float-right" style="margin-left: 10px;">Data Jadwal</a>
                 <a href="<?= base_url("login/logout"); ?>" class="btn btn-outline-success float-right" style="position: absolute;right: 10px;">Logout</a>
            <?php }else{ ?>
                <a href="<?= base_url("Login"); ?>" class="btn btn-outline-success float-right" style="position: absolute;right: 10px;">Login Admin</a>
            <?php } ?>
            </div>
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-6 col-lg-6 grid-margin ">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="mdi mdi-rocket icon-lg text-warning"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Petugas</p>
                                        <h6><?= $total_petugas; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 grid-margin ">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="mdi mdi-chart-line-stacked icon-lg text-danger"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Jadwal</p>
                                        <h6><?= $total_jadwal; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="row grid-margin">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Jadwal</h6>
                                
                                <div class="table-responsive">
                                <table class="table table-bordered" id="order-listing">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Nama Petugas</th>
                                    <th>Jadwal Mulai</th>
                                    <th>Jadwal Selesai</th>
                                    <th>Tempat</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $JadwalPetugasId = 1;
                                foreach ($jadwalpetugas as $row) {
                                ?>
                                    <tr>
                                        <td  widtd="5%"><?php echo $JadwalPetugasId++; ?></td>
                                        <td><?php echo $row->PetugasNama; ?></td>
                                        <td><?php echo $row->JadwalTanggalMulai; ?></td>
                                        <td><?php echo $row->JadwalTanggalSelesai; ?></td>
                                        <td><?php echo $row->Jadwaltempat; ?></td>
                                        <td><?php echo $row->AccountDetail; ?></td>
                                        
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </nav>
        <!-- partial -->
        <!-- container-scroller -->

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

</html>