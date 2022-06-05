<html>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
<script src="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>

<center>
    <h2>Laporan Jadwal</h2>
</center>
<table class="table table-bordered" width="100%" id="order-listing" border="1">
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
</html>