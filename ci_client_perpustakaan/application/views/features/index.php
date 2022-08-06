
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(''); ?>/assets/Eterna/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/assets/Eterna/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/assets/Eterna/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/assets/Eterna/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/assets/Eterna/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/assets/Eterna/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url(''); ?>/assets/Eterna/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna - v4.8.1
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

    <div class="logo">
        <h1><a href="<?= base_url('home'); ?>">Perpustakaan I&B</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="<?= base_url('Home'); ?>">Home</a></li>
          <li class="dropdown"><a href="#"><span>Fitur Perpustakaan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url('transaction'); ?>">Kelola Transaksi</a></li>
              <li><a href="<?= base_url('borrower'); ?>">Kelola Peminjam</a></li>
              <li><a href="<?= base_url('book'); ?>">Kelola Buku</a></li>
              <li><a href="<?= base_url('booktype'); ?>">Kelola Jenis Buku</a></li>
              <li><a href="<?= base_url('publisher'); ?>">Kelola Penerbit</a></li>
              <li><a href="<?= base_url('rack'); ?>">Kelola Rak</a></li>
              <li><a href="<?= base_url('officer'); ?>">Kelola Petugas</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        <li><a href="<?= base_url('login'); ?>">Logout</a></li>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url('Home'); ?>">Home</a></li>
          <li>Features</li>
        </ol>
        <h2>Features</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="<?= base_url('transaction'); ?>">Transaksi</a></h4>
              <p>Pengelolaan Data Transaksi di Perpustakaan I&B</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="<?= base_url('borrower'); ?>">Peminjam</a></h4>
              <p>Pengelolaan Data Petugas di Perpustakaan I&B</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="<?= base_url('book'); ?>">Buku</a></h4>
              <p>Pengelolaan Data Buku di Perpustakaan I&B</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="<?= base_url('booktype'); ?>">Jenis Buku</a></h4>
              <p>Pengelolaan Data Jenis Buku di Perpustakaan I&B</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="<?= base_url('rack'); ?>">Rak</a></h4>
              <p>Pengelolaan Data Rak Buku di Perpustakaan I&B</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="<?= base_url('publisher'); ?>">Penerbit</a></h4>
              <p>Pengelolaan Data Penerbit Buku di Perpustakaan I&B</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="<?= base_url('officer'); ?>">Petugas</a></h4>
              <p>Pengelolaan Data Petugas di Perpustakaan I&B </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Perpustakaan I&B</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
        Designed by <a href="">Civilian Lab's</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url(''); ?>/assets/Eterna/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url(''); ?>/assets/Eterna/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(''); ?>/assets/Eterna/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url(''); ?>/assets/Eterna/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(''); ?>/assets/Eterna/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url(''); ?>/assets/Eterna/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url(''); ?>/assets/Eterna/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(''); ?>/assets/Eterna/assets/js/main.js"></script>

</body>

</html>