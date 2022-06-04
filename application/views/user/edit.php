<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">EDIT DATA ACCOUNT MEETING</h4>
                    <p class="card-description">
                        Silahkan isi perubahan data di bawah ini!
                    </p>
                    <?php
                    if (validation_errors() != false) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php
                    }
                    ?>
                    <form method="post" class="forms-sample " action="<?php echo base_url(); ?>user/update">
                        
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="hidden" name="id" value="<?= $user['id']; ?>">
                            <input type="text" value="<?= $user['nama']; ?>" class="form-control" id="nama" placeholder="Nama Account" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" value="<?= $user['username']; ?>" class="form-control" id="username" placeholder="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password admin" name="password">
                            <small class="text-danger"> *isi password jika hanya ingin mengubah password</small>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>