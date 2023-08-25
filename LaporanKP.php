<?php
include 'system/koneksi.php';

// session_start();
// if($_SESSION['level'] !="anggota" || $_SESSION['status'] !="login"){
//     header('location:index.php');
// }
?>
<!DOCTYPE>
<html>
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='//fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/administrator.css">
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
<div class="btm_border">
<div class="h_bg">
<div class="wrap">
	<div class="header">
		<div class="grids_1_of_3">
			<h3 style="font-family: sans-serif;color: #333; font-size: 30px;">SISTEM INFORMASI KEARSIPAN</h1>
			<br>
			<h3 style="font-family: sans-serif;color: #333; font-size: 30px;">PUSAT INFORMASI ILMIAH FAKULTAS TEKNIK</h1>
		</div>
		<!-- <div class="social-icons">
			<ul>
			     <li><a class="facebook" href="#" target="_blank"> </a></li>
			     <li><a class="twitter" href="#" target="_blank"></a></li>
			     <li><a class="googleplus" href="#" target="_blank"></a></li>
			     <li><a class="pinterest" href="#" target="_blank"></a></li>
			     <li><a class="dribbble" href="#" target="_blank"></a></li>
			     <li><a class="vimeo" href="#" target="_blank"></a></li>
		   </ul>
		</div> -->	
		<div class="clear"></div>
	</div>
	<div class='h_btm'>
		<div class='cssmenu'>
			<ul>
			    <li class='active'><a href='home.php'><span>Home</span></a></li>
			    <li><a href='about.html'><span>About</span></a></li>
			    <li><a href='staff.html'><span>Staff</span></a></li>
			    <li class='has-sub'><a href='service.html'><span>Services</span></a></li>
			    <li class='last'><a href='contact.html'><span>Contact</span></a></li>
			 	<div class="clear"></div>
			 </ul>
	</div>
	<div class="search">
    	<form>
    		<input type="text" value="">
    		<input type="submit" value="">
    	</form>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
</div>
<!------ Slider_bg ------------>
<div class="slider_bg">
<div class="wrap">
	<!------ Slider------------>
		  <div class="slider">
	      	<div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider">
	                <img src="image/banner1.jpg" data-thumb="image/1.jpg" alt="" />
	                <img src="image/banner2.jpg" data-thumb="image/2.jpg" alt="" />
	                <img src="image/banner3.jpg" data-thumb="image/3.jpg" alt="" />
	            </div>
	        </div>
	      </div>
		<!------End Slider ------------>
		<div class="grids_1_of_3">
				<h3 style="margin-top: -50px;">DAFTAR LAPORAN KP</h3>
<div class="panel-body1">
   <table class="table">
     <thead>
        <tr>
          <th>NO</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
    </div>
			</div>
</div>
</div>
<!--main-->
<div class="main_bg">
<div class="wrap">
<div class="main">
	<div class="content">
		<h2>what our customer says</h2>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing</h3>
		<p><a href="#"><img src="image/pic1.jpg"></a> Cadipisicing elit,Nam ornare vulputate risus,id volutpat elit porttitor non.In consequat nisi vel lectus dapibus sodales.Nam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales.Nam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales.Nam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales. Pellentesque habitant morbi tristique senectus Nam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales. PellentesqueNam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas Pellentesque habitant morbi tristique senectus et netus et malesuada fames. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Nam ornare vulputate risus,id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales.Nam ornare vulputate risus, id volutpat elit porttitor non.</p>
		<div class="clear"></div>
	</div>
</div>
</div>
<div class="main_btm">
	<div class="wrap">
		 <div class="main">
					<div class="gallery">
						<h3>Our latest projects</h3>
						<ul>
							<li><a class="gallery-img" href="image/gallery1.jpg"><img src="image/gallery1.jpg" alt=""></a><a href="#"></a></li>
							<li><a class="gallery-img" href="image/gallery2.jpg"><img src="image/gallery2.jpg" alt=""></a><a href="#"></a></li>
							<li><a class="gallery-img" href="image/gallery3.jpg"><img src="image/gallery3.jpg" alt=""></a><a href="#"></a></li>
							<li><a class="gallery-img" href="image/gallery4.jpg"><img src="image/gallery4.jpg" alt=""></a><a href="#"></a></li>
							<li><a class="gallery-img" href="image/gallery4.jpg"><img src="image/gallery4.jpg" alt=""></a><a href="#"></a></li>
							<li><a class="gallery-img" href="image/gallery3.jpg"><img src="image/gallery3.jpg" alt=""></a><a href="#"></a></li>
							<li><a class="gallery-img" href="image/gallery5.jpg"><img src="image/gallery5.jpg" alt=""></a><a href="#"></a></li>
							<li><a class="gallery-img" href="image/gallery6.jpg"><img src="image/gallery6.jpg" alt=""></a><a href="#"></a></li>
						</ul>
					</div>
					<script type="text/javascript" src="js/jquery.lightbox.js"></script>
				    <link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
				  	<script type="text/javascript">
				    $(function() {
				        $('.gallery a.gallery-img').lightBox();
				    });
				    </script>
					<div class="terminals">
						<h3>Testimonials</h3>
						<p>sed tempor ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt aliqua. Ut enim ad minim veniam,consectetur adipisicing elit,sed do eiusmod tempor incididunt magna aliqua. </p>
						<p>sed tempor Ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt aliqua. Ut enim ad minim veniam,consectetur adipisicing elit,sed do eiusmod tempor incididunt magna aliqua. </p>
						<span><a href="#">- Lorem ipsum</a> USA.</span>
					</div>
					<div class="clear"> </div>
		</div>
	</div>
</div>
<!--footer-->
<div class="footer-bg">	
<div class="wrap">
<div class="footer">
  <div class="box1">
	<h4 class="btm">What We Do</h4>
	<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. ions from the 1914 below for those  by H. Rackham</p>
	<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those The standard chunk of Lorem Ipsum used since the 1500s is reproduced reproduced</p>
  </div>
   <div class="box1">
	<h4 class="btm">Categories</h4>
	<nav>
		<ul>
			<li><a href="#">The standard chunk of Lorem Ipsum used since </a></li>
			<li><a href="#">Duis a augue ac libero euismod viverra sitth</a></li>
			<li><a href="#">Duis a augue ac libero euismod viverra sit </a></li>
			<li><a href="#">The standard chunk of Lorem Ipsum used since </a></li>
			<li><a href="#">Duis a augue ac libero euismod viverra sit </a></li>
			<li><a href="#">The standard chunk of Lorem Ipsum used since </a></li>
			<li><a href="#">Duis a augue ac libero euismod viverra sit </a></li>
	    </ul>
	</nav>
	</div>
	<div class="box1">
		<h4 class="btm">Get in touch</h4>
		<div class="box1_address">
			<p>500 Lorem Ipsum Dolor Sit,</p>
			<p>22-56-2-9 Sit Amet, Lorem,</p>
			<p>USA</p>
			<p>Phone:(00) 222 666 444</p>
			<p>Fax: (000) 000 00 00 0</p>
			<p>Email: <a href="mailto:info@gmail.com">info[at]mycompany.com</a></p>
				   		<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>

		</div>
	</div>
	<div class="clear"></div>			
</div>
</div>
</div>
<!--footer1-->
<div class="ftr-bg">
	<div class="wrap">
		<div class="footer">
		<div class="copy">
			<p class="w3-link">© 2013 Public-Library. All Rights Reserved | Design by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></p>
		</div>
		<div class="clear"></div>	
	</div>
	</div>
</div>
</body>
</html>