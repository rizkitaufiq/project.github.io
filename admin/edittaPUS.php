<?php
	include('../system/koneksi.php');

		$judul		= $_POST['judul'];
		$penulis	= $_POST['penulis'];
		$nim		= $_POST['nim'];
		$jurusan	= $_POST['jurusan'];
		$dosbimTA	= $_POST['dosbimTA'];
		$dosbimTA1	= $_POST['dosbimTA1'];	
		$accno		= $_POST['accno'];
		$barcode	= $_POST['barcode'];
		$subjek		= $_POST['subjek'];

		
 		$id = $_POST['id'];

 

		$edit = mysqli_query($con,"UPDATE tmp_koleksita set judul='$judul', penulis='$penulis', nim='$nim', jurusan='$jurusan', dosbimTA='$dosbimTA',dosbimTA1='$dosbimTA1',accno='$accno', barcode='$barcode', subjek='$subjek' WHERE id_tmpkoleksita='$id'");
		if($edit){
		echo "<script>alert('Data Berhasil Diperbaharui !');</script>";
		echo "<script>window.location='TApus.php';</script>"; 
		}
        else{
        echo "<script>alert('Data Gagal Diperbaharui !');</script>";
		echo "<script>window.location='TApus.php';</script>";
        }
	
?>
