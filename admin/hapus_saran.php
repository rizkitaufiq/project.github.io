<?php
 include '../system/koneksi.php'

?>

<?php
if($_POST['rowid']){
 	$id = $_POST['rowid'];

 	$sql = "SELECT * FROM saran JOIN user ON saran.id_user=user.id WHERE id_saran = $id ";
 	$result = $con->query($sql);
 	foreach ($result as $lihat){ ?>


    <form method="post" action="hapusSaran.php">
        <?php echo "<input type='hidden' name='id' value='".$lihat['id_saran']."'>"?>
        <table class="table">
 		<tbody>
 			<tr>
 				<td>Nama</td>
 				<td><?php echo $lihat['username'];?></td>
 			</tr>
 			<tr>
 				<td>Saran</td>
 				<td><?php echo $lihat['saran'];?></td>
 			</tr>
 			<tr>
 				<td>Waktu</td>
 				<td><?php echo $lihat['waktu'];?></td>
 			</tr>
 			<tr>
 				<br>
 				<td>
 					<input type="submit" name="edit" id="delete" value="Hapus" class="btn-danger btn"></td>
 			</tr>
 		</tbody>
 	</table>
    </form>
	<?php
 	}
}



