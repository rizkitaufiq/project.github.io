<?php
	include '../system/koneksi.php';

	$id    = $_POST['id'];

	$hapus = mysqli_query($con,"DELETE FROM koleksita WHERE id_koleksiTA='$id'");
	if($hapus){
	echo "<script>alert('Berhasil Dihapus !');</script>";
	echo "<script>window.location='koleksiTA.php';</script>"; 
	}
    else{
    echo "<script>alert('Gagal Dihapus !');</script>";
	echo "<script>window.location='koleksiTA.php';</script>";
    }

?>