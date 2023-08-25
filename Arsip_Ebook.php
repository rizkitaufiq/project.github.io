<?php
include"system/koneksi.php";
include"pagination2.php";



?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PUSAT INFORMASI ILMIAH FAKULTAS TEKNIK</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="home.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#e-book">E-BOOK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#komentar">KOMENTAR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#profil">PROFIL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#kontak">KONTAK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="e-book">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">E-Book</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
                <div class="search pull-right">
                    <form action="Arsip_Ebook.php" method="GET">
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
                  <th>Jurusan</th>
                  <th>Baca</th>
                </tr>
              </thead>
              <tbody>
<?php
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1; 
                $adjacents = isset($_GET['adjacents']) ? intval($_GET['adjacents']) : 3; 
                    $rpp = 5; 
                    if(isset($_REQUEST['cari']) && $_REQUEST['cari']<>""){
                        $cari = isset($_REQUEST['cari']) ? urldecode($_REQUEST['cari']) : ''; 
                        $lihat = mysqli_query($con, "SELECT * FROM koleksiebook WHERE judul LIKE '%$cari%' OR penulis LIKE '%$cari%' OR jurusan LIKE '%$cari%' ORDER BY judul ASC"); 
                        $reload = $_SERVER['PHP_SELF'] . "?cari=".$cari."&amp;adjacents=".$adjacents; 
                    } else{
                        $lihat = mysqli_query($con, "SELECT * FROM koleksiebook ORDER BY judul ASC"); 
                        $reload = $_SERVER['PHP_SELF']."?adjacents=".$adjacents; 
                    }
                    $tcount = mysqli_num_rows($lihat); 
                    $tpages = isset($tcount) ? ceil($tcount / $rpp) : 1; 
                    $count = 0; 
                    $i = ($page - 1) * $rpp; 
                    $mulai = ($page>1) ? ($page * $rpp) - $rpp: 0;
                    $no = $mulai+0;
                    while (($count<$rpp) && ($i<$tcount)){
                            mysqli_data_seek($lihat, $i);
                            $hasil = mysqli_fetch_array($lihat);
                            $no++;
        echo "<tr>";
                echo "<td scope='row'>".$no."</td>";
                echo "<td>".$hasil['judul']."</td>";
                echo "<td>".$hasil['penulis']."</td>";
                echo "<td>".$hasil['jurusan']."</td>";
                echo "<td><a href='ebook_pdf.php?id_koleksiEBOOK=".$hasil['id_koleksiEBOOK']."' class='fa fa-2x fa-book' ></a></td>"; 
            echo "</tr>";
            $i++;
            $count++;
            }
        ?>
        </tbody>
    </table>
<?php
     echo"<table>";
                        echo "<tr>";
                            echo "<td>";
                                echo "<a class='btn btn-default'>Halaman</a>";
                            echo "</td>";
                            echo "<td style='width: 3%;'>";
                            echo "</td>";
                            echo "<td>";
                                echo paginate_two($reload, $page, $tpages, $adjacents);
                            echo "</td>";
                        echo "</tr>";
                    echo"</table>";
?>
      </div>
    </section>

    <section class="bg-primary" id="komentar">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Berikan Komentar atau Saran !</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Komentar dan Saran anda yang dapat membangun demi Sistem yang lebih baik lagi</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" data-toggle="modal" data-target="#komen">Komen</a>
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="komen">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                 <h2 style="text-align: center;margin-left: 15%">Komentar atau Saran</h2>
                </div>
            <div class="modal-body">
                <form method="post" id="insert_form" action="komen_saran.php">
                    <textarea style="width: 100%;" placeholder="Komentar/Saran" type="text" name="saran" required=""></textarea>
                    <br><br>
                    <div class="modal-footer">
                        <input  type="submit" class="btn-danger btn" data-dismiss="modal" value="Batal">
                        <input  type="submit" id="insert" value="saran" class="btn-primary btn"/>
                    </div>
                </form>
            </div>
            <div class="modal-footer">       
            </div>
            </div>
        </div>
    </div>

    <section class="p-0" id="profil">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="image/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="image/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="image/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="image/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="image/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="image/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="image/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="image/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="image/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="image/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="image/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="image/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Dokumentasi</h2>
      </div>
    </section>

    <section id="kontak">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Kontak Kami</h2>
            <hr class="my-4">
            <p class="mb-5">Jika butuh bantuan, silahkan hubungi kami !</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>081578077385</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">r4m4dan1981@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
<?php
$con -> close();
?>
