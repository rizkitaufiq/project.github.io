<?php
include "../system/koneksi.php";
session_start();
if(isset($_SESSION['nama_user'])){
    if($_SESSION['level'] == "admin"){
        header("location:administrator.php");

    }else{
        if(isset($_SESSION['nama_user'])){
            if ($_SESSION['level'] == "pustakawan") {
                header("location:administrator.php");
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  
      <link rel="stylesheet" href="../css/login.css">

</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>SELAMAT DATANG DI</h1>
		<h2>ADMINISTRATOR</h2>
		
		<form class="form" method="POST" action="cek.php">
			<input type="text" placeholder="Username" name="username">
			<input type="password" placeholder="Password" name="password">
			<input type="submit" name="login" value="LOGIN">
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="../js/index.js"></script>




</body>

</html>
