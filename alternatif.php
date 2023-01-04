<?php

require 'koneksi.php';

$sql = mysqli_query($koneksi, "SELECT * FROM tb_alternatif");

?>

<div class="col-12 col-md-6 order-md-1 order-last">
    <h3>Data Alternatif</h3>
    <div class="card-body">
	    <div class="button">
	    	<a class="btn btn-primary rounded-pill" onclick="openDataFile('tambah_alternatif.php');">Tambah Alternatif</a>
	    </div>
    </div>
</div>
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
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
                            	while ($fetchData = mysqli_fetch_assoc($sql)) {
                            	?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $fetchData['kode_alternatif']; ?></td>
                                    <td><?php echo $fetchData['k1']; ?></td>
                                    <td><?php echo $fetchData['k2']; ?></td>
                                    <td><?php echo $fetchData['k3']; ?></td>
                                    <td><?php echo $fetchData['k4']; ?></td>
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
