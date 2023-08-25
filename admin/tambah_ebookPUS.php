<?php
	include "../system/koneksi.php";

		$id_tmpkoleksiebook= $_GET['id_tmpkoleksiebook'];

		$tambah = mysqli_query($con,"INSERT INTO koleksiebook(judul,penulis,jurusan,accno,subjek,barcode,laporan)SELECT judul,penulis,jurusan,accno,subjek,barcode,laporan FROM tmp_koleksiebook WHERE id_tmpkoleksiebook='$id_tmpkoleksiebook'");
		if($tambah){
		echo "<script>alert('Berhasil Memasukan Data !');</script>";
        echo "<script>window.location='koleksiebookPUS.php';</script>";
		}
        else{
        echo "<script>alert('Gagal Memasukan Data !');</script>";
        echo "<script>window.location='koleksiebookPUS.php';</script>";
        }
		$hapus = mysqli_query($con,"DELETE FROM tmp_koleksiebook WHERE id_tmpkoleksiebook='$id_tmpkoleksiebook'");        
?>