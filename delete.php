<?php
	include('koneksi.php');
	$nomor = @$_GET['nomor'];
	$sql = mysqli_query($koneksi, "DELETE FROM t_pasien WHERE nomor='$nomor'");
	header('location:t.php');
?>