<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  include 'assets/db_connect.php';
?>
<!DOCTYPE html>
<html lang="id">

<?php include 'includes/head.php' ?>

<body>
<?php include 'includes/navbar.php' ?>
  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Perumahan KPR</h1>
              <span class="color-text-a">Kami memastikan memberikan bantuan & layanan terbaik</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Beranda</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Perumahan KPR
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <?php
            $query = mysqli_query($mysqli, "SELECT * FROM tb_rumah") or die (mysqli_error());
            if (mysqli_num_rows($query)==0) {
              echo "Data Tidak Tersedia";
            }
            else{
            $i=1;
            while ($row = mysqli_fetch_array($query)){
              echo '
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="assets/img/'.$row[foto].'" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="property-single.php?id='.$row[id].'">'.$row[nama].'</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">Harga | '.$row[harga].'</span>
                    </div>
                    <a href="property-single.php?id='.$row[id].'" class="link-a">Detail Informasi
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Luas</h4>
                      <span>'.$row[luas].'
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Kamar</h4>
                      <span style="margin-left:21px;">'.$row[k_tidur].'</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Wc</h4>
                      <span style="margin-left:10px;">'.$row[k_mandi].'</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Tipe</h4>
                      <span style="margin-left:5px;" >'.$row[tipe].'</span>
                    </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          ';
          }
        }?>
        </div>
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Beranda</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Perumahan KPR</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Hubungi Kami</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright 2021
              <span class="color-a">M Devy Rizki Ananda</span>.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
