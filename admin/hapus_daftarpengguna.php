<?php
 include '../system/koneksi.php'

?>

<?php
if($_POST['rowid']){
 	$id = $_POST['rowid'];

 	$sql = "SELECT * FROM user WHERE id = $id";
 	$result = $con->query($sql);
 	foreach ($result as $lihat){ ?>


    <form method="post" action="hapusPENGGUNA.php">
        <?php echo "<input type='hidden' name='id' value='".$lihat['id']."'>"?>
        <table class="table">
 		<tbody>
 			<tr>
 				<td>Nama</td>
 				<td><?php echo $lihat['username'];?></td>
 			</tr>
 			<tr>
 				<td>Nim</td>
 				<td><?php echo $lihat['password'];?></td>
 			</tr>
 			<tr>
 				<td>Jurusan</td>
 				<td><?php echo $lihat['nama_user'];?></td>
 			</tr>
 			<tr>
 				<td>Level</td>
 				<td><?php echo $lihat['level'];?></td>
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



