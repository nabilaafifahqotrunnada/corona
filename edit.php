<?php
	include("koneksi.php");
	
	$id = @$_GET['id'];
	
	$umur = @$_POST['umur'];
	$alamat = @$_POST['alamat'];
    $suhu = @$_POST['suhu'];
    $gejala = @$_POST['gejala'];
    $hasil = @$_POST['hasil'];
    $ket = @$_POST['ket'];
	
	$sql = mysqli_query($koneksi,"UPDATE t_pasien SET umur='$umur', alamat='$alamat', suhu='$suhu', gejala='$gejala', hasil='$hasil', ket='$ket' where nomor='$nomor'");
    if($sql){
        echo '<script>alert("Berhasil mengubah data pasien."); document.location="t.php?nomor='.$nomor.'";</script>';
    }else{
        echo '<div class="alert alert-warning">Gagal mengubah data pasien.</div>';
    }
    header('location:t.php');

?>