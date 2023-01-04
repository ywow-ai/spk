<?php require 'koneksi.php'; ?>

<div class="col-12 col-md-6 order-md-1 order-last">
    <h3>Tambah Data Kriteria</h3>
</div>

<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="card">
        	<div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="post" action="tambah.php">
                        <div class="form-body">
                            <div class="row">

                                <div class="col-md-4">
                                    <label for="kode_kriteria">Kode Kriteria</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select class="form-select" id="kode_kriteria" name="kode_kriteria" required>
                                        <option value="">Pilih</option>
                                    <?php
                                    $sql_tampil_kode_kriteria = mysqli_query($koneksi, "SELECT * FROM tb_bobot");
                                    while ($fectDataKodeKriteria = mysqli_fetch_assoc($sql_tampil_kode_kriteria)) {
                                    ?>
                                        <option value="<?php echo $fectDataKodeKriteria['kode_kriteria']; ?>"><?php echo $fectDataKodeKriteria['kode_kriteria']; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="kriteria">Kriteria</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select class="form-select" id="kriteria" name="kriteria" required>
                                        <option value="">Pilih</option>
                                        <?php
                                        $sql_tampil_kriteria = mysqli_query($koneksi, "SELECT * FROM tb_bobot");
                                        while ($fectDataKriteria = mysqli_fetch_assoc($sql_tampil_kriteria)) {
                                        ?>
                                        <option value="<?php echo $fectDataKriteria['kriteria']; ?>"><?php echo $fectDataKriteria['kriteria']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label>Sub Kriteria</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="sub_kriteria" class="form-control" name="sub_kriteria" placeholder="Sub Kriteria" required>
                                </div>

                                <div class="col-md-4">
                                    <label>Keterangan</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="keterangan" class="form-control" name="keterangan" placeholder="Keterangan" required>
                                </div>

                                <div class="col-md-4">
                                    <label>Bobot</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="bobot" class="form-control" name="bobot" placeholder="Bobot" required>
                                </div>

                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" name="tambah_kriteria" class="btn btn-primary me-1 mb-1">Tambah</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>