<?php
 include '../system/koneksi.php';
?>


 
<!DOCTYPE HTML>
<html>
<head>
<title>Administrator</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/administrator.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="../css/lines.css" rel='stylesheet' type='text/css' />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="../js/jquery.min.js"></script>	

<?php
if($_POST['rowid']){
 	$id = $_POST['rowid'];

 	$sql = "SELECT * FROM koleksiebook WHERE id_koleksiEBOOK = $id";
 	$result = $con->query($sql);
 	foreach ($result as $lihat){ ?>


    <form method="post" action="editEBOOK.php">
        <?php echo "<input type='hidden' name='id' value='".$lihat['id_koleksiEBOOK']."'>"?>
      	<label>Judul</label>
      	<?php echo "<input type='text' name='judul' class='form-control1' required='' value='".$lihat['judul']."'>"?>
	    <br><br>
        <label>Penulis</label>
        <?php echo "<input type='text' name='penulis' class='form-control1' required='' value='".$lihat['penulis']."'>"?>
        <br><br>
        <label>Jurusan</label>
        <?php echo "<select style='margin-left: 5%;' class='btn-primary btn' name='jurusan' value='".$lihat['jurusan']."'>"?>
                        <option value='Teknik Sipil'>Teknik Sipil</option>
                        <option value='Teknik Geologi'>Teknik Geologi</option>
                        <option value='Teknik Elektro'>Teknik Elektro</option>
                        <option value='Teknik Informatika'>Teknik Informatika</option>
                        <option value='Teknik Industri'>Teknik Industri</option>
            </select>
        <br><br>
        <label>Subjek</label>
        <?php echo "<input type='text' name='subjek' class='form-control1' required='' value='".$lihat['subjek']."'>"?>
        <br><br>
        <label>Barcode</label>
        <?php echo "<input type='text' name='barcode' class='form-control1' required='' value='".$lihat['barcode']."'>"?>
        <br><br>
        <label>Accno</label>
        <?php echo "<input type='text' name='accno' class='form-control1' required='' value='".$lihat['accno']."'>"?>
        <br><br>
        <div class="modal-footer">
                <input type="button" class="btn-danger btn" data-dismiss="modal" value="Batal">
                <input type="submit" name="edit" id="insert" value="Edit" class="btn-primary btn"/>
            </div>
    </form>   
 	<?php
 	}
}

