<?php
 include '../system/koneksi.php';



 if($_POST['rowid']){
 	$id = $_POST['rowid'];

 	$sql = "SELECT * FROM user WHERE id = $id";
 	$result = $con->query($sql);
 	foreach ($result as $lihat){ ?>
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
 				<td>Status</td>
 				<td><?php echo $lihat['level'];?></td>
 			</tr>
 		</tbody>
 	</table>
<?php
 }
 }




