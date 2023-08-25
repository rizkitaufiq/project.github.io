<?php
include"../system/koneksi.php";
include"../pagination2.php";


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
                                    <a href="koleksiKP.php">Arsip KP</a>
                                    <a href="koleksiTA.php">Arsip TA</a>
                                    <a href="koleksiEBOOK.php">E-Book</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                      <li>
                            <a href="#"><i class="fa fa-bookmark nav-icon"></i> Pustakawan<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="koleksikpPUS.php"><i class="fa fa-min nav-icon"></i> Arsip KP</a>
                                        <a href="koleksitaPUS.php"><i class="fa fa-min nav-icon"></i> Arsip TA</a>
                                        <a href="koleksiebookPUS.php"><i class="fa fa-min nav-icon"></i> E-Book</a>
                                </li>   
                            </ul>
                        </li>
                        <li>
                            <a href="pengguna.php"><i class="fa fa-user nav_icon"></i>Pengguna</a>                
                        </li>
                        <li>
                              <a href="saran.php"><i class="fa fa-comment nav_icon"></i>Saran</a>
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
     		<h1 style="margin-left: 38%">ARSIP E-BOOK</h1>
     		<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
        <div class="row">
            <div class="col-md-12">
                <div class="search pull-right">
                    <form action="koleksiebookPUS.php" method="GET">
                        <input type="text" value="" name="cari" placeholder="Cari">
                    </form>
                    <?php
                        if(isset($_GET['cari'])){
                            $cari = $_GET['cari'];
                        }
                    ?>
                </div>
            </div>
        </div>
        <br><br>
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>File</th>
            <th style="width: 3%;">Lihat</th>
            <th style="width: 3%">Konfirmasi</th>
            <th style="width: 3%">Hapus</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $halaman = 5;
        $page    = isset($_GET["halaman"])?(int)$_GET["halaman"]:1;
        $mulai   = ($page>1) ? ($page * $halaman) - $halaman : 0;
        $result  = mysqli_query($con,"SELECT * FROM tmp_koleksiebook");
        $total   = mysqli_num_rows($result);
        $pages   = ceil($total/$halaman);
        $query   = mysqli_query($con,"SELECT * FROM tmp_koleksiebook LIMIT $mulai, $halaman");
        $no      = $mulai+0;
        
        	
     		while($hasil  = mysqli_fetch_array($query)){

     			$no++;
     			echo "<tr>";
            echo "<th scope='row'>".$no."</th>";
            echo "<td>".$hasil['judul']."</td>";
            echo "<td>".$hasil['penulis']."</td>";
            echo "<td>".$hasil['laporan']."</td>";
            echo "<td><button name='lihat' data-id='".$hasil['id_tmpkoleksiebook']."' data-toggle='modal' data-target='#lihat' class='btn-succes btn fa fa-eye' ></button></td>";
            echo "<td><a href='tambah_ebookPUS.php?id_tmpkoleksiebook=".$hasil['id_tmpkoleksiebook']."' class='btn-info btn fa fa-arrow-down'></button></td>";
            echo "<td><button name='hapus' data-id='".$hasil['id_tmpkoleksiebook']."' data-toggle='modal' data-target='#hapus' class='btn-danger btn fa fa-trash-o'></button></td>";
            echo "</tr>";
     		}
      ?>
            </tbody>
      </table>
      
      <table>
          <tr>
              <td>
                  <button class="btn-default btn">Halaman</button>
                    <?php
        
            for ($i=1; $i<=$pages; $i++){
        ?>
            <a class="btn-default btn" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php }
        
        ?>
            </td>
        </tr>
      </table>

    <div class="modal fade" id="lihat">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 style="text-align: center;" class="modal-title">Lihat Arsip E-BOOK</h4>
                </div>
            <div class="modal-body">
                <div class="fetched-data"></div>
            </div>
            <div class="modal-footer">
    
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 style="text-align: center;" class="modal-title">Edit Arsip E-BOOK</h4>
                </div>
            <div class="modal-body">
                <div class="fetched-data"></div>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="hapus">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 style="text-align: center;" class="modal-title">Yakin Hapus Data Arsip Ini ?</h4>
                </div>
            <div class="modal-body">
                <div class="fetched-data"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-primary btn" data-dismiss="modal">Batal</button>
            </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#lihat').on('show.bs.modal', function (e){
                var rowid = $(e.relatedTarget).data('id');

                $.ajax({
                    type   : 'POST',
                    url    : 'lihat_EBOOKpus.php',
                    data   : 'rowid= ' + rowid,
                    success: function(data){
                        $('.fetched-data').html(data);
                    }
                });
            });
        });
    </script>


    <script type="text/javascript">
        $(document).ready(function(){
            $('#hapus').on('show.bs.modal', function (e){
                var rowid = $(e.relatedTarget).data('id');

                $.ajax({
                    type   : 'POST',
                    url    : 'hapus_koleksiEBOOKpus.php',
                    data   : 'rowid= ' + rowid,
                    success: function(data){
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
