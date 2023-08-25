<?php
	include '../system/koneksi.php';

	$id    = $_POST['id'];

	$hapus = mysqli_query($con,"DELETE FROM saran WHERE id_saran='$id'");
	if($hapus){
	echo "<script>alert('Berhasil Dihapus !');</script>";
	echo "<script>window.location='saran.php';</script>"; 
	}
    else{
    echo "<script>alert('Gagal Dihapus !');</script>";
	echo "<script>window.location='saran.php';</script>";
    }

?>