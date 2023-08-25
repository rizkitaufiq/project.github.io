<?php
	include '../system/koneksi.php';

	$id    = $_POST['id'];

	
	$sql = "SELECT nama_user, COUNT(id_log) AS jumlah FROM log JOIN user ON log.id_user=user.id JOIN koleksita ON log.id_koleksi=koleksita.id_koleksiTA WHERE EXTRACT(MONTH FROM waktu) = ".$id." GROUP BY nama_user";
 	$result = $con->query($sql);
 	if (mysqli_num_rows($result) > 0) {
 		$no=1;
	 	foreach ($result as $lihat){ ?>
	 	<tr>
	 		<td><?php echo $no ?></td>
	 		<td><?php echo $lihat['nama_user'];?></td>
	 		<td><?php echo $lihat['jumlah'];?></td>	 		
	 	</tr>
	 	<?php $no++; }
	} else { ?>
		<tr><td colspan="2">Tidak ada data</td></tr>
<?php } ?>