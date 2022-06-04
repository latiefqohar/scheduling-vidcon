<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Formulir Akun Meeting</h4>
                    <p class="card-description">
                        Silahkan isi di bawah ini!
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
                    <form method="post" class="forms-sample " action="<?php echo base_url(); ?>index.php/account/save">
                        <div class="form-group">
                            <label for="AccountId">ID Account</label>
                            <input type="text" class="form-control" id="AccountId" placeholder="ID Account" name="AccountId" readonly>
                        </div>
                        <div class="form-group">
                            <label for="AccountNama">Nama Account</label>
                            <input type="text" class="form-control" id="AccountNama" placeholder="Nama Account" name="AccountNama">
                        </div>
                        <div class="form-group">
                            <label for="AccountDetail">Detail</label>
                            <textarea class="ckeditor" id="ckedtor" name="AccountDetail" required></textarea>
                            
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>