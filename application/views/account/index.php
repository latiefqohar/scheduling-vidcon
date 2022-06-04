<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">DAFTAR ACCOUNT VIDEO CONFERENCE</h4>
                    <p class="card-description">
                        Detail Account Meeting.
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="order-listing">
                            <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>ID Account</th>
                                <th>Nama</th>
                                <th>Detail</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $No = 1;
                            foreach ($account as $row) {
                            ?>
                                <tr>
                                    <td widtd="5%"><?php echo $No++; ?></td>
                                    <td><?php echo $row->AccountId; ?></td>
                                    <td><?php echo $row->AccountNama; ?></td>
                                    <td><?php echo $row->AccountDetail; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>index.php/account/edit/<?php echo $row->AccountId; ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?php echo base_url(); ?>index.php/account/delete/<?php echo $row->AccountId; ?>" class="btn btn-danger">Hapus</a>
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