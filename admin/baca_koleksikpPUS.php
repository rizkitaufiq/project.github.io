<?php
 include '../system/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>baca file</title>
</head>
<body>
<?php

 if($_POST['rowid']){
 	$id = $_POST['rowid'];

 	$sql = "SELECT * FROM tmp_koleksikp WHERE id_koleksiKP = $id";
 	$result = $con->query($sql);
 	foreach ($result as $lihat){ ?>
 echo "<iframe src='image/koleksi/".$pdf['laporan']."' width='1400px' height='1000px' readonly=''></iframe>";	
<?php
 }
 }
?>

</body>
</html>




