<?php

require 'koneksi.php';

$sql = mysqli_query($koneksi, "SELECT * FROM tb_bobot");

?>

<div class="col-12 col-md-6 order-md-1 order-last">
    <h3>Data Bobot</h3>
    <div class="card-body">
	    <div class="button">
	    	<a class="btn btn-primary rounded-pill" onclick="openDataFile('tambah_bobot.php');">Tambah Bobot</a>
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
                                    <th>Kode Kriteria</th>
                                    <th>Kriteria</th>
                                    <th>Bobot</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php
                            	while ($fetchData = mysqli_fetch_assoc($sql)) {
                            	?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $fetchData['kode_kriteria']; ?></td>
                                    <td><?php echo $fetchData['kriteria']; ?></td>
                                    <td><?php echo $fetchData['bobot']; ?></td>
                                    <td><?php echo $fetchData['keterangan']; ?></td>
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
