<?php
include"system/koneksi.php";
session_start();
if($_SESSION['level'] =="anggota" OR $_SESSION['level'] =="non anggota" || $_SESSION['status'] !="login"){
    
    	$id_user		 = $_SESSION['id'];
    	$id_koleksiKP    = $_GET['id_koleksiKP'];
    	date_default_timezone_set('Asia/Jakarta');
    	$dt              = new DateTime();
    	$dt2             = $dt->format('Y-m-d H:i:s');
    	$tambah          = mysqli_query($con,"INSERT INTO log(id_user, id_koleksi, waktu) VALUES ('$id_user','$id_koleksiKP', '$dt2' )");
    }else{
     
    	header('location:index.php');  	                  
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Baca</title>
</head>
<body>
<?php
$id_koleksiKP = $_GET['id_koleksiKP'];
$q_pdf = mysqli_query($con, "SELECT * FROM koleksikp WHERE id_koleksiKP='$id_koleksiKP'");
$pdf = mysqli_fetch_array($q_pdf);

echo "<iframe src='image/koleksi/".$pdf['laporan']."' width='1400px' height='1000px' readonly=''></iframe>";
?>	
</body>
</html>