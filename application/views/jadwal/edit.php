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
                    <form method="post" class="forms-sample " action="<?php echo base_url(); ?>index.php/jadwal/update">
                        <div class="form-group">
                            <label for="JadwalId">ID Jadwal</label>
                            <input type="text" class="form-control" id="JadwalId" placeholder="ID Jadwal" name="JadwalId">
                        </div>
                        <div class="form-group">
                            <label for="JadwalTanggalMulai">Tanggal Mulai</label>
                            <input type="datetime-local" class="form-control" id="JadwalTanggalMulai" placeholder="Tanggal Mulai" name="JadwalTanggalMulai">
                        </div>
                        <div class="form-group">
                            <label for="JadwalTanggalSelesai">Tanggal Selesai</label>
                            <input type="datetime-local" class="form-control" id="JadwalTanggalSelesai" placeholder="TanggalSelesai" name="JadwalTanggalSelesai">
                        </div>
                        <div class="form-group">
                            <label for="JadwalTempat">Tempat</label>
                            <input type="text" class="form-control" id="JadwalTempat" placeholder="Tempat" name="JadwalTempat">
                        </div>
                        <div class="form-group">
                            <label for="JadwalAccountId">ID Account</label>
                            <input type="text" class="form-control" id="JadwalAccountId" placeholder="ID Account" name="JadwalAccountId">
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>