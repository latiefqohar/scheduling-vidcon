<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">EDIT DATA PETUGAS</h4>
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
                    <form method="post" class="forms-sample" action="<?php echo base_url(); ?>index.php/petugas/update">
                        <div class=" form-group">
                            <label for="PetugasId">ID Petugas</label>
                            <input type="text" class="form-control" id="PetugasId" placeholder="ID" name="PetugasId" readonly>
                        </div>
                        <div class="form-group">
                            <label for="PetugasNama">Nama Petugas</label>
                            <input type="text" class="form-control" id="PetugasNama" placeholder="Nama" name="PetugasNama">
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                <div class="input-group-append">
                                    <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>