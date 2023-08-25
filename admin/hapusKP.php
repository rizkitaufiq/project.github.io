<?php
	include '../system/koneksi.php';

	$id    = $_POST['id'];

	$hapus = mysqli_query($con,"DELETE FROM koleksikp WHERE id_koleksiKP='$id'");
	if($hapus){
	echo "<script>alert('Berhasil Dihapus !');</script>";
	echo "<script>window.location='koleksiKP.php';</script>"; 
	}
    else{
    echo "<script>alert('Gagal Dihapus !');</script>";
	echo "<script>window.location='koleksiKP.php';</script>";
    }    

?>