<?php

require 'koneksi.php';
$bobot = array(1, 1, 1, 1, 1, 1, 1);

?>

<div class="col-12 col-md-6 order-md-1 order-last">
    <h3>Sistem Pendukung Keputusan</h3>
</div>
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">

                <div class="card-content">
					<div class="card-body">
						<p>Berdasarkan hasil pengujian Metode Simple Addtive Weghting yang telah diuraikan sebelumnya dengan perhitungan program. Didapatkan hasil rangking perhitungan program dari nilai bobot yang paling tinggi sampai dengan yang paling keci kecil adalah sebagai berikut :</p>
					</div>
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Kode Alternatif</th>
                                    <th>Total Point</th>
								    <th>Nilai Preferensi</th>
								    <th>Ranking</th>
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
									$jumlah = ($fetchData['k1'] + $fetchData['k2'] + $fetchData['k3'] + $fetchData['k4']);
									$point = round($fetchData['k1'] / $max['max1'], 2) * $bobot[0] + round($fetchData['k2'] / $max['max2'], 2) * $bobot[1] + round($fetchData['k3'] / $max['max3'], 2) * $bobot[2] + round($fetchData['k4'] / $max['max4'], 2) * $bobot[3];
									$data[] = array('kode' => $fetchData['kode_alternatif'], 'jumlah' => $jumlah, 'point' => $point, );
                            	}

								foreach ($data as $key => $isi) {
									$kode[$key] = $isi['kode'];
									$jlh[$key] = $isi['jumlah'];
									$poin1[$key] = $isi['point'];
								}

								array_multisort($poin1, SORT_DESC, $jlh, SORT_DESC, $data);
								$no = 1;
								$h = "RANK";
								$juara = 1;
								$hr = 1;

								foreach ($data as $item) {
                            	?>
                                <tr>
                                    <td><?php echo $noAlt++; ?></td>
                                    <td><?php echo $item['kode']; ?></td>
                                    <td><?php echo $item['jumlah']; ?></td>
                                    <td><?php echo $item['point']; ?></td>
                                    <td><?php echo $juara; ?></td>
                                </tr>
                         	   	<?php
	                         	   	if ($no >= 100) {
	                         	   		$no++;
	                         	   	} else {
	                         	   		$juara++;
                         	   		}
                         	   	}
                         	   	?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
