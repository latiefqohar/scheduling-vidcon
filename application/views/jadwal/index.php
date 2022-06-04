<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">DAFTAR JADWAL VIDEO CONFERENCE</h4>
                    <p class="card-description">
                        Note: Jadwal Berubah-ubah.
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="order-listing">
                            <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Tempat</th>
                                <th>ID Account</th>
                                <th>Nama Account</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $JadwalId = 1;
                            foreach ($jadwal as $row) {
                            ?>
                                <tr>
                                    <td widtd="5%"><?php echo  $row->JadwalId++; ?></td>
                                    <td><?php echo $row->JadwalTanggalMulai; ?></td>
                                    <td><?php echo $row->JadwalTanggalSelesai; ?></td>
                                    <td><?php echo $row->JadwalTempat; ?></td>
                                    <td><?php echo $row->JadwalAccountId; ?></td>
                                    <td><?php echo $row->AccountNama; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>index.php/jadwal/edit/<?php echo $row->JadwalId; ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?php echo base_url(); ?>index.php/jadwal/delete/<?php echo $row->JadwalId; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
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