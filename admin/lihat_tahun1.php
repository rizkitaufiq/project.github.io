
<?php
	include '../system/koneksi.php';

	$id    = $_POST['id'];

	$sql = "SELECT nama_user, EXTRACT(MONTH FROM waktu) AS bulan, COUNT(id_log) AS jumlah FROM log JOIN user ON log.id_user=user.id JOIN koleksita ON log.id_koleksi=koleksita.id_koleksiTA WHERE EXTRACT(YEAR FROM waktu) = " . $id . " GROUP BY nama_user, EXTRACT(MONTH FROM waktu)";
 	$result = $con->query($sql);
 	if (mysqli_num_rows($result) > 0) {
 		$no=1;
	 	foreach ($result as $lihat){ ?>
<tr>
	 		<td><?php echo $lihat['nama_user'];?></td>
	 		<td><?php echo ($lihat['bulan'] == 1 ? $lihat['jumlah'] : "-") ?></td>
	 		<td><?php echo ($lihat['bulan'] == 2 ? $lihat['jumlah'] : "-") ?></td>
	 		<td><?php echo ($lihat['bulan'] == 3 ? $lihat['jumlah'] : "-") ?></td>
	 		<td><?php echo ($lihat['bulan'] == 4 ? $lihat['jumlah'] : "-") ?></td>
	 		<td><?php echo ($lihat['bulan'] == 5 ? $lihat['jumlah'] : "-") ?></td>
	 		<td><?php echo ($lihat['bulan'] == 6 ? $lihat['jumlah'] : "-") ?></td>
	 		<td><?php echo ($lihat['bulan'] == 7 ? $lihat['jumlah'] : "-") ?></td>
	 		<td><?php echo ($lihat['bulan'] == 8 ? $lihat['jumlah'] : "-") ?></td>
	 		<td><?php echo ($lihat['bulan'] == 9 ? $lihat['jumlah'] : "-") ?></td>
	 		<td><?php echo ($lihat['bulan'] == 10 ? $lihat['jumlah'] : "-") ?></td>
	 		<td><?php echo ($lihat['bulan'] == 11 ? $lihat['jumlah'] : "-") ?></td>
	 		<td><?php echo ($lihat['bulan'] == 12 ? $lihat['jumlah'] : "-") ?></td>
	 	</tr>	
	 	<?php $no++; }
	} else { ?>
		<tr><td colspan="13">Tidak ada data</td></tr>
<?php } 
?>
