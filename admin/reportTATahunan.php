<?php
include"../system/koneksi.php";

session_start();
if($_SESSION['level'] !="admin" || $_SESSION['status'] !="login"){
    header('location:index.php');
}

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
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="../css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="../js/d3.v3.js"></script>
<script src="../js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sistem Informasi Arsip Perpustakaan</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
                <button style="margin-top: 15%" class="m_2"><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></button>
            </ul>
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="administrator.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book nav_icon"></i>Jenis Koleksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="koleksiKP.php">ArsipKP</a>
                                    <a href="koleksiTA.php">Arsip TA</a>
                                    <a href="koleksiEBOOK.php">E-Book</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       <li>
                            <a href="graphs.html"><i class="fa fa-book nav-icon"></i> Pustakawan<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="koleksikpPUS.php"><i class="fa fa-min nav-icon"></i> Arsip KP</a>
                                        <a href="koleksitaPUS.php"><i class="fa fa-min nav-icon"></i> Arsip TA</a>
                                        <a href="koleksiebookPUS.php"><i class="fa fa-min nav-icon"></i> EBOOK</a>
                                </li>   
                            </ul>
                        </li>
                        <li>
                            <a href="pengguna.php"><i class="fa fa-user nav_icon"></i>Pengguna</a>                
                        </li>
                        
                        <li>
                            <a href="saran.php"><i class="fa fa-comment nav_icon"></i>Saran</a> 
                        </li>    
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

    <div id="page-wrapper">
        <div class="graphs">
            <div class="col_3">
                <div class="container">
    <h2 style="margin-left: 37%">TUGAS AKHIR</h2>
                </div>
                <ul class="nav nav-tabs">
            <li><a href="reportTAHarian.php">Laporan Harian</a></li>
            <li><a href="reportTABulanan.php">Laporan Bulanan</a></li>
            <li class="active"><a href="reportTATahunan.php">Laporan Tahunan</a></li>
        </ul>
            <div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
           <select class="btn-info btn" name="tahun" id="tahun">
                        <option value="-1" selected="selected" disabled="disabled">-- Pilih Tahun --</option>
                        <?php
                            $tahun = date("Y");
                            for ($thn = ($tahun + 5); $thn >= ($tahun - 5); $thn--)
                                echo "<option value='" . $thn . "'>" . $thn . "</option>";
                        ?>
                    </select>
                    <br><br>
                    <table class="table">
                    <thead>
                        <th>Jurusan</th>
                        <th>01</th>
                        <th>02</th>
                        <th>03</th>
                        <th>04</th>
                        <th>05</th>
                        <th>06</th>
                        <th>07</th>
                        <th>08</th>
                        <th>09</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                    </thead>
                    <tbody class="fetched-data">  
                    </tbody>
                </table>
                        
                    
      
      <table>
          <tr>
              <td>
                 <!--  <button class="btn-default btn">Halaman</button> -->
<!--                    <?php
        
            for ($i=1; $i<=$pages; $i++){
        ?>
            <a class="btn-default btn" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php }
        
        ?> -->
            </td>
        </tr>
      </table>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#tahun').on('change', function (e){
                var id = $(this).val();

                $.ajax({
                    url: "lihat_tahun1.php",
                    type: "POST",
                    data: "id=" + id,
                    success: function(data) {
                        $('.fetched-data').html(data);
                    }
                });
            });
        });
    </script>
          
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
<?php
$con -> close();
?>
