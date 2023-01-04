<?php

require 'koneksi.php';

if (isset($_POST['tambah_alternatif'])) {
	$kode_alternatif = $_POST['kode_alternatif'];
	$k1 = $_POST['k1'];
	$k2 = $_POST['k2'];
	$k3 = $_POST['k3'];
	$k4 = $_POST['k4'];
	mysqli_query($koneksi, "INSERT INTO tb_alternatif VALUES (null, '$kode_alternatif', '$k1', '$k2', '$k3', '$k4')");
	if (mysqli_affected_rows($koneksi)) {
    	echo "<script>alert('Berhasil');</script>";
    	echo "<script>window.location.href = 'index.php';</script>";
    } else {
    	echo "<script>alert('Gagal');</script>";
    	echo "<script>window.location.href = 'index.php';</script>";
    }
}

if (isset($_POST['tambah_bobot'])) {
	$kode_kriteria = $_POST['kode_kriteria'];
	$kriteria = $_POST['kriteria'];
	$bobot = $_POST['bobot'];
	$keterangan = $_POST['keterangan'];
	mysqli_query($koneksi, "INSERT INTO tb_bobot VALUES (null, '$kode_kriteria', '$kriteria', '$bobot', '$keterangan')");
	if (mysqli_affected_rows($koneksi)) {
    	echo "<script>alert('Berhasil');</script>";
    	echo "<script>window.location.href = 'index.php';</script>";
    } else {
    	echo "<script>alert('Gagal');</script>";
    	echo "<script>window.location.href = 'index.php';</script>";
    }
}

if (isset($_POST['tambah_kriteria'])) {
	$kode_kriteria = $_POST['kode_kriteria'];
	$kriteria = $_POST['kriteria'];
	$sub_kriteria = $_POST['sub_kriteria'];
	$keterangan = $_POST['keterangan'];
	$bobot = $_POST['bobot'];
	mysqli_query($koneksi, "INSERT INTO tb_kriteria VALUES (null, '$kode_kriteria', '$kriteria', '$sub_kriteria', '$keterangan', '$bobot')");
	if (mysqli_affected_rows($koneksi)) {
    	echo "<script>alert('Berhasil');</script>";
    	echo "<script>window.location.href = 'index.php';</script>";
    } else {
    	echo "<script>alert('Gagal');</script>";
    	echo "<script>window.location.href = 'index.php';</script>";
    }
}

?>