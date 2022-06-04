<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Formulir Jadwal</h4>
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
                    <form method="post" class="forms-sample " action="<?php echo base_url(); ?>index.php/jadwal/save">
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
                            <label for="JadwalAccountId">Account</label>
                            <select name="JadwalAccountId" class="form-control" required>
                                <option value="">Silahkkan pilih account meeting</option>
                                <?php foreach($account as $row){ ?>
                                    <option value="<?= $row->AccountId; ?>"><?= $row->AccountNama; ?></option>
                                <?php } ?>
                            </select>
                            
                        </div>


                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>