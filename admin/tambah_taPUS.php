<?php
	include "../system/koneksi.php";

		$id_tmpkoleksita= $_GET['id_tmpkoleksita'];

		$tambah = mysqli_query($con,"INSERT INTO koleksita(judul,penulis,nim,jurusan,dosbimTA,dosbimTA1,accno,subjek,barcode,laporan)SELECT judul,penulis,nim,jurusan,dosbimTA,dosbimTA1,accno,subjek,barcode,laporan FROM tmp_koleksita WHERE id_tmpkoleksita='$id_tmpkoleksita'");
		if($tambah){
		echo "<script>alert('Berhasil Memasukan Data !');</script>";
        echo "<script>window.location='koleksitaPUS.php';</script>";
		}
        else{
        echo "<script>alert('Gagal Memasukan Data !');</script>";
        echo "<script>window.location='koleksitaPUS.php';</script>";
        }
		$hapus = mysqli_query($con,"DELETE FROM tmp_koleksita WHERE id_tmpkoleksita='$id_tmpkoleksita'");        
?>