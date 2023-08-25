<?php
	include('../system/koneksi.php');

		$judul		= $_POST['judul'];
		$penulis	= $_POST['penulis'];
		$nim		= $_POST['nim'];
		$jurusan	= $_POST['jurusan'];
		$dosbimKP	= $_POST['dosbimKP'];
		$dosbimKP1	= $_POST['dosbimKP1'];	
		$accno		= $_POST['accno'];
		$barcode	= $_POST['barcode'];
		$subjek		= $_POST['subjek'];

		
 		$id = $_POST['id'];

 

		$edit = mysqli_query($con,"UPDATE tmp_koleksikp set judul='$judul', penulis='$penulis', nim='$nim', jurusan='$jurusan', dosbimKP='$dosbimKP', dosbimKP1='$dosbimKP1',accno='$accno', barcode='$barcode', subjek='$subjek' WHERE id_tmpkoleksikp='$id'");
		if($edit){
		echo "<script>alert('Data Berhasil Diperbaharui !');</script>";
		echo "<script>window.location='KPpus.php';</script>"; 
		}
        else{
        echo "<script>alert('Data Gagal Diperbaharui !');</script>";
		echo "<script>window.location='KPpus.php';</script>";
        }
	
?>
