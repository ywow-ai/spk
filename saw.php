<?php require 'koneksi.php'; ?>

<div class="col-12 col-md-6 order-md-1 order-last">
    <h3>Perhitungan SAW</h3>
</div>
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
            	<div class="card-header">
                    <h4 class="card-title">MATRIKS AWAL</h4>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Kode Alternatif</th>
                                    <th>K1</th>
                                    <th>K2</th>
                                    <th>K3</th>
                                    <th>K4</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php
                            	$sql_alternatif = mysqli_query($koneksi, "SELECT * FROM tb_alternatif");
                            	while ($fDAlternatif = mysqli_fetch_assoc($sql_alternatif)) {
                            	?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $fDAlternatif['kode_alternatif']; ?></td>
                                    <td><?php echo $fDAlternatif['k1']; ?></td>
                                    <td><?php echo $fDAlternatif['k2']; ?></td>
                                    <td><?php echo $fDAlternatif['k3']; ?></td>
                                    <td><?php echo $fDAlternatif['k4']; ?></td>
                                    <td><?php echo $fDAlternatif['k1'] + $fDAlternatif['k2'] + $fDAlternatif['k3'] + $fDAlternatif['k4']; ?></td>
                                </tr>
                         	   	<?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
            	<div class="card-header">
                    <h4 class="card-title">HASIL NORMALISASI R</h4>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Kode Alternatif</th>
                                    <th>K1</th>
                                    <th>K2</th>
                                    <th>K3</th>
                                    <th>K4</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php
                            	$sqlAltMax = mysqli_query($koneksi, "SELECT max(k1) as max1, max(k2) as max2, max(k3) as max3, max(k4) as max4 FROM tb_alternatif");
                            	$max = mysqli_fetch_assoc($sqlAltMax);
                            	$sqlAltMin = mysqli_query($koneksi, "SELECT min(k1) as min1, min(k2) as min2, min(k3) as min3, min(k4) as min4 FROM tb_alternatif");
                            	$min = mysqli_fetch_assoc($sqlAltMin);
								$sql = mysqli_query($koneksi, "SELECT * FROM tb_alternatif");
								$noAlt = 1;
                            	while ($fetchData = mysqli_fetch_assoc($sql)) {
                            	?>
                                <tr>
                                    <td><?php echo $noAlt++; ?></td>
                                    <td><?php echo $fetchData['kode_alternatif']; ?></td>
                                    <td><?php echo round($fetchData['k1'] / $max['max1'], 2); ?></td>
                                    <td><?php echo round($fetchData['k2'] / $max['max2'], 2); ?></td>
                                    <td><?php echo round($fetchData['k3'] / $max['max3'], 2); ?></td>
                                    <td><?php echo round($fetchData['k4'] / $max['max4'], 2); ?></td>
                                </tr>
                         	   	<?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
            	<div class="card-header">
                    <h4 class="card-title">BOBOT KEPENTINGAN KRITERIA</h4>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Kode Kriteria</th>
                                    <th>Kriteria</th>
                                    <th>Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php
                            	$sqlBobot = mysqli_query($koneksi, "SELECT * FROM tb_bobot");
                            	$noBobot = 1;
                            	while ($fDBobot = mysqli_fetch_assoc($sqlBobot)) {
                            	?>
                                <tr>
                                    <td><?php echo $noBobot++; ?></td>
                                    <td><?php echo $fDBobot['kode_kriteria']; ?></td>
                                    <td><?php echo $fDBobot['kriteria']; ?></td>
                                    <td><?php echo $fDBobot['bobot']; ?></td>
                                </tr>
                         	   	<?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
            	<div class="card-header">
                    <h4 class="card-title">NILAI PREFERENSI DAN HASIL</h4>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Kode Alternatif</th>
                                    <th>Nilai Preferensi</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php
                            	$bobot = array(1, 1, 1, 1, 1, 1, 1);
								$sqlPreferensi = mysqli_query($koneksi, "SELECT * FROM tb_alternatif");
								$noPreferensi = 1;
                            	while ($fDPreferensi = mysqli_fetch_assoc($sqlPreferensi)) {
									$point = round($fDPreferensi['k1'] / $max['max1'], 2) * $bobot[0] + round($fDPreferensi['k2'] / $max['max2'], 2) * $bobot[1] + round($fDPreferensi['k3'] / $max['max3'], 2) * $bobot[2] + round($fDPreferensi['k4'] / $max['max4'], 2) * $bobot[3];
                            	?>
                                <tr>
                                    <td><?php echo $noPreferensi++; ?></td>
                                    <td><?php echo $fDPreferensi['kode_alternatif']; ?></td>
                                    <td><?php echo $point; ?></td>
                                </tr>
                         	   	<?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
