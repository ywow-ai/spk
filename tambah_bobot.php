<div class="col-12 col-md-6 order-md-1 order-last">
    <h3>Tambah Data Bobot</h3>
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
                                    <input type="text" id="kode_kriteria" class="form-control" name="kode_kriteria" placeholder="Kode Kriteria" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="kriteria">Kriteria</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="kriteria" class="form-control" name="kriteria" placeholder="Kriteria" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="bobot">Bobot</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="bobot" class="form-control" name="bobot" placeholder="Bobot" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="keterangan">Keterangan</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select class="form-select" id="keterangan" name="keterangan" required>
                                        <option value="">Pilih</option>
                                        <option value="BENEFIT">BENEFIT</option>
                                        <option value="COST">COST</option>
                                    </select>
                                </div>

                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" name="tambah_bobot" class="btn btn-primary me-1 mb-1">Tambah</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>