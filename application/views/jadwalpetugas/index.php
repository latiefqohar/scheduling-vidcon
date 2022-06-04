<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">JADWAL PETUGAS VIDEO CONFERENCE</h4>
                    <p class="card-description">
                        Note: Jadwal Berubah-ubah.
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="order-listing">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>ID Petugas</th>
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
                                        <td><?php echo $row->JadwalPetugasPetugasId; ?></td>
                                        <td><?php echo $row->PetugasNama; ?></td>
                                        <td><?php echo $row->JadwalTanggalMulai; ?></td>
                                        <td><?php echo $row->JadwalTanggalSelesai; ?></td>
                                        <td><?php echo $row->Jadwaltempat; ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>jadwalpetugas/edit/<?php echo $row->JadwalPetugasId; ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?php echo base_url(); ?>jadwalpetugas/delete/<?php echo $row->JadwalPetugasId; ?>" class="btn btn-danger">Hapus jadwal</a>
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