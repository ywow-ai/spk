<div class="col-12 col-md-6 order-md-1 order-last">
    <h3>Tambah Data Alternatif</h3>
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
                                    <label for="kode_alternatif">Kode Alternatif</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="kode_alternatif" class="form-control" name="kode_alternatif" placeholder="Kode Alternatif" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="k1">K1</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select class="form-select" id="k1" name="k1" required>
                                        <option value="">Pilih</option>
                                        <option value="0">6,5 CM</option>
                                        <option value="0.5">8 CM</option>
                                        <option value="1">15 CM</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="k2">K2</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select class="form-select" id="k2" name="k2" required>
                                        <option value="">Pilih</option>
                                        <option value="1">0 - 1,5 Minggu</option>
                                        <option value="0.5">1,6 - 2 Minggu</option>
                                        <option value="0">2,1 - 3 Minggu</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="k3">K3</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select class="form-select" id="k3" name="k3" required>
                                        <option value="">Pilih</option>
                                        <option value="1">Tahan Penyakit</option>
                                        <option value="0.5">Agak Rentan Penyakit</option>
                                        <option value="0">Rentan Penyakit</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="k4">K4</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select class="form-select" id="k4" name="k4" required>
                                        <option value="">Pilih</option>
                                        <option value="0">0 - 6 Ons</option>
                                        <option value="0.5">7 - 10 Ons</option>
                                        <option value="1">11 - 12 Ons</option>
                                    </select>
                                </div>

                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" name="tambah_alternatif" class="btn btn-primary me-1 mb-1">Tambah</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>