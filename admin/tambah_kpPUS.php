<?php
	include "../system/koneksi.php";

		$id_tmpkoleksikp= $_GET['id_tmpkoleksikp'];

		$tambah = mysqli_query($con,"INSERT INTO koleksikp(judul,penulis,nim,jurusan,dosbimKP,dosbimKP1,accno,subjek,barcode,laporan)SELECT judul,penulis,nim,jurusan,dosbimKP,dosbimKP1,accno,subjek,barcode,laporan FROM tmp_koleksikp WHERE id_tmpkoleksikp='$id_tmpkoleksikp'");
		if($tambah){
		echo "<script>alert('Berhasil Memasukan Data !');</script>";
		echo "<script>window.location='koleksikpPUS.php';</script>";
		}
        else{
        echo "<script>alert('Gagal Memasukan Data !');</script>";
        echo "<script>window.location='koleksikpPUS.php';</script>";
        }        
		$hapus = mysqli_query($con,"DELETE FROM tmp_koleksikp WHERE id_tmpkoleksikp='$id_tmpkoleksikp'");
		        
?>