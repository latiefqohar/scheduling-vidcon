<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">DAFTAR USER ADMIN</h4>
                    <p class="card-description">
                        Detail User Admin.
                    </p>
                    <a href="<?= base_url('user/create'); ?>" class="btn btn-primary float-right mb-3">Tambah Data</a><br>
                    <div class="table-responsive">
                        
                        <table class="table table-bordered"  id="order-listing">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $No = 1;
                            foreach ($user as $row) {
                            ?>
                                <tr>
                                    <td widtd="5%"><?php echo $No++; ?></td>
                                    <td><?php echo $row->nama; ?></td>
                                    <td><?php echo $row->username; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>user/edit/<?php echo $row->id; ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?php echo base_url(); ?>user/delete/<?php echo $row->id; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                              </body>
                        </table>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>