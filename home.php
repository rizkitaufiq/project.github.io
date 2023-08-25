<?php
include"system/koneksi.php";



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
              <a class="nav-link js-scroll-trigger" href="#tentang">TENTANG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#menu">MENU</a>
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

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>SISTEM INFORMASI ARSIP PERPUSTAKAAN</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Memudahkan anda mencari Koleksi Laporan Kerja Praktek, Tugas Akhir dan E-Book yang sudah dalam bentuk digital atau di arsipkan</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#tentang">Lihat Lebih Lanjut</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="tentang">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Apa Itu Pusat Informasi Ilmiah ?</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Sebagai sumber dan pusat layanan informasi, pusat informasi ilmiah teknik merupakan sumber pembelajaran dan sumber aktivitas intelektual yang sangat penting bagi segenap sivitas akademika dalam mendukung tercapainya program Tridarma Perguruan tinggi.</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#menu">Cek Jenis Koleksi!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Pilih Jenis Koleksi</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center" style="margin-left: 12%"><a href="Arsip_Kp.php">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-book text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Kerja Praktek</h3>
              <p class="text-muted mb-0">Anda bisa melihat/membaca Laporan Kerja Praktek Mahasiswa Fakultas Teknik yang sudah diarsipkan/digitalkan</p>
            </div></a>
          </div>
          <div class="col-lg-3 col-md-6 text-center"><a href="Arsip_Ta.php">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-book text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Tugas Akhir</h3>
              <p class="text-muted mb-0">Anda bisa melihat/membaca Laporan Tugas Akhir Mahasiswa Fakultas Teknik yang sudah diarsipkan/digitalkan</p>
            </div></a>
          </div>
          <div class="col-lg-3 col-md-6 text-center"><a href="Arsip_Ebook.php">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-book text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">E-Book</h3>
              <p class="text-muted mb-0">Anda bisa melihat/membaca E-Book Fakultas Teknik yang sudah diarsipkan/digitalkan</p>
            </div>
          </div></a>
        </div>
      </div>
    </section>

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
