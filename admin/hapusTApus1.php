<?php
	include '../system/koneksi.php';

	$id    = $_POST['id'];

	$hapus = mysqli_query($con,"DELETE FROM tmp_koleksita WHERE id_tmpkoleksita='$id'");
	if($hapus){
	echo "<script>alert('Berhasil Dihapus !');</script>";
	echo "<script>window.location='koleksitaPUS.php';</script>"; 
	}
    else{
    echo "<script>alert('Gagal Dihapus !');</script>";
	echo "<script>window.location='koleksitaPUS.php';</script>";
    }

?>