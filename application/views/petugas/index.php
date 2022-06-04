<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">DAFTAR PETUGAS VIDEO CONFERENCE</h4>
                    <p class="card-description">
                        *Petugas = Host/Co-Host/Admin
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="order-listing">
                            <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $PetugasId = 1;
                            foreach ($petugas as $row) {
                            ?>
                                <tr>
                                    <td widtd="5%"><?php echo $row->PetugasId++; ?></td>
                                    <td><?php echo $row->PetugasNama; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>index.php/petugas/edit/<?php echo $row->PetugasId; ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?php echo base_url(); ?>index.php/petugas/delete/<?php echo $row->PetugasId; ?>" class="btn btn-danger">Hapus</a>
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