
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(''); ?>/assets/Eterna/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url(''); ?>/assets/Eterna/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(<?= base_url(''); ?>/assets/Eterna/assets/img/slide/slide-1.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Selamat Datang !! <br>
                <span>Perpustakaan I&B</span></h2>
                <p class="animate__animated animate__fadeInUp">Perpustakaan I&B adalah sebuah REST CLIENT dari pengelolaan data Perpustakaan.</p>
                <a href="<?= base_url('features'); ?>" class="btn-get-started animate__animated animate__fadeInUp">Features</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(<?= base_url(''); ?>/assets/Eterna/assets/img/slide/slide-2.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown">Apa saja Fitur <span>Perpustakaan I&B</span></h2>
                <p class="animate__animated animate__fadeInUp">Melakukan Pengelolaan Perpustakaan mulai dari Buku sampai dengan Transaksi Buku</p>
                <a href="<?= base_url('features'); ?>" class="btn-get-started animate__animated animate__fadeInUp">Features</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h3><a href="">Pengelolaan Data Transaksi</a></h3>
              <p>Melakukan Pengelolaan Jatuh Tempo sebuah Transaksi Peminjaman ssBuku</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h3><a href="">Menggunakan Sistem CRUD sebagai Pengelolaan Data</a></h3>
              <p>Membantu Admin Melakukan Pengelolaan Data Perpustakaan</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h3><a href="">Rest Client</a></h3>
              <p>Mengambil data dari sebuah REST API Perpustakaan I&B</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

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