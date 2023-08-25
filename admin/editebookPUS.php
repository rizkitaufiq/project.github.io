<?php
	include('../system/koneksi.php');

		$judul		= $_POST['judul'];
		$penulis	= $_POST['penulis'];
		$jurusan	= $_POST['jurusan'];
		$accno		= $_POST['accno'];
		$barcode	= $_POST['barcode'];
		$subjek		= $_POST['subjek'];

		
 		$id = $_POST['id'];


		$edit = mysqli_query($con,"UPDATE tmp_koleksiebook set judul='$judul', penulis='$penulis', jurusan='$jurusan', accno='$accno', barcode='$barcode', subjek='$subjek' WHERE id_tmpkoleksiebook='$id'");
		if($edit){
		echo "<script>alert('Data Berhasil Diperbaharui !');</script>";
		echo "<script>window.location='EBOOKpus.php';</script>"; 
		}
        else{
        echo "<script>alert('Data Gagal Diperbaharui !');</script>";
		echo "<script>window.location='EBOOKpus.php';</script>";
        }
	
?>
