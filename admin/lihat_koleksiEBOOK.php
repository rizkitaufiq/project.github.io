<?php
 include '../system/koneksi.php';



 if($_POST['rowid']){
 	$id = $_POST['rowid'];

 	$sql = "SELECT * FROM koleksiebook WHERE id_koleksiEBOOK = $id";
 	$result = $con->query($sql);
 	foreach ($result as $lihat){ ?>
 	<table class="table">
 		<tbody>
 			<tr>
 				<td>Judul</td>
 				<td><?php echo $lihat['judul'];?></td>
 			</tr>
 			<tr>
 				<td>Penulis</td>
 				<td><?php echo $lihat['penulis'];?></td>
 			</tr>
 			<tr>
 				<td>Jurusan</td>
 				<td><?php echo $lihat['jurusan'];?></td>
 			</tr>
 			<tr>
 				<td>Subjek</td>
 				<td><?php echo $lihat['subjek'];?></td>
 			</tr>
 			<tr>
 				<td>Barcode</td>
 				<td><?php echo $lihat['barcode'];?></td>
 			</tr>
 			<tr>
 				<td>Acc Nomer</td>
 				<td><?php echo $lihat['accno'];?></td>
 			</tr>
 			<tr>
 				<td>Arsip</td>
 				<td><?php echo "<iframe src='../image/koleksi/".$lihat['laporan']."' width='400px' height='500px' readonly=''></iframe>;"?></td>
 			</tr>
 		</tbody>
 	</table>
<?php
 }
 }




