<?php
	include '../system/koneksi.php';

	$id    = $_POST['id'];

	$hapus = mysqli_query($con,"DELETE FROM tmp_koleksikp WHERE id_tmpkoleksikp='$id'");
	if($hapus){
	echo "<script>alert('Berhasil Dihapus !');</script>";
	echo "<script>window.location='koleksikpPUS.php';</script>"; 
	}
    else{
    echo "<script>alert('Gagal Dihapus !');</script>";
	echo "<script>window.location='koleksikpPUS.php';</script>";
    }

?>