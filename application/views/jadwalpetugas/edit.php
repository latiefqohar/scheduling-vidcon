<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Formulir Jadwal Petugas</h4>
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
                    <form method="post" class="forms-sample " action="<?php echo base_url(); ?>jadwalpetugas/update">
                        
                        <div class="form-group">
                            <label for="JadwalPetugasPetugasId">Petugas</label>
                            <input type="hidden" name="JadwalPetugasId" value="<?= $jadwal_petugas['JadwalPetugasId']; ?>">
                            <select name="JadwalPetugasPetugasId" class="form-control" required>
                                <option value="">Silahkkan pilih petugas</option>
                                <?php foreach($petugas as $row){ ?>
                                    <option value="<?= $row->PetugasId; ?>"  <?php if($row->PetugasId==$jadwal_petugas['JadwalPetugasPetugasId']){echo "selected";} ?>><?= $row->PetugasNama; ?></option>
                                <?php } ?>
                            </select>
                            
                        </div>

                        <div class="form-group">
                            <label for="JadwalPetugasJadwalId">Jadwal</label>
                            <select name="JadwalPetugasJadwalId" class="form-control" required>
                                <option value="">Silahkkan pilih Jadwal</option>
                                <?php foreach($jadwal as $row){ ?>
                                    <option value="<?= $row->JadwalId; ?>" <?php if($row->JadwalId==$jadwal_petugas['JadwalPetugasJadwalId']){echo "selected";} ?> ><?= $row->JadwalTanggalMulai." Sampai ".$row->JadwalTanggalSelesai." Di ".$row->JadwalTempat; ?></option>
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