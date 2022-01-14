<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  include 'assets/db_connect.php';
?>
<!DOCTYPE html>
<html lang="id">

<?php include 'includes/head.php' ?>

<body>

  <!-- ======= Header/Navbar ======= -->
  <?php include 'includes/navbar.php' ?>

  <main id="main">
    <?php
      $id_menu = $_GET['id'];
      $query = mysqli_query($mysqli, "SELECT * FROM tb_rumah where id = $id_menu ") or die (mysqli_error());
      if (mysqli_num_rows($query)==0) {
        echo "Data Tidak Tersedia";
      }
      else{
      $i=1;
      while ($row = mysqli_fetch_array($query)){
        echo '
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">'.$row[nama].'</h1>
              <span class="color-text-a">'.$row[alamat].'</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Beranda</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Detail Perumahan</a>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                <div class="carousel-item-b swiper-slide">
                  <img src="assets/img/slide-1.jpg" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="assets/img/slide-2.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <span style="font-size:30px;" class="bi bi-cash"> '.$row[harga].'.-</span>
                    </div>
                    <div class="card-title-c align-self-center">
                    </div>
                  </div>
                </div>
                <br>
                <div style="margin-left:24px;" class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span style="font-size:25px; color:red;">Booking Sekarang!!</span>
                  </div>
                  <div class="card-title-c align-self-center">
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Detail Tipe Rumah</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Property ID:</strong>
                        <span>'.$row[id].'</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Alamat:</strong>
                        <span>'.$row[alamat].'</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Property Type:</strong>
                        <span>House</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Status:</strong>
                        <span style="color:red;">Sale</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Luas:</strong>
                        <span>'.$row[luas].'
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Kamar Tidur:</strong>
                        <span>'.$row[k_tidur].'</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Wc:</strong>
                        <span>'.$row[k_mandi].'</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Deskripsi</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                    neque, auctor sit amet
                    aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
                    Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt
                    nibh pulvinar quam id dui posuere blandit.
                  </p>
                  <p class="description color-text-a no-margin">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
                    malesuada. Quisque velit nisi,
                    pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                  </p>
                </div>
                <div class="row section-t3">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">keunggulan & Fasilitas</h3>
                    </div>
                  </div>
                </div>
                <div class="amenities-list color-text-a">
                  <ul class="list-a no-margin">
                    <li>'.$row[tambahan].'</li>
                    <li>'.$row[kelebihan].'</li>
                    <li>'.$row[fasilitas].'</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          ';
          }
        }?>
          <div class="col-md-12">
            <div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Marketing</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-lg-2">
                <img src="assets/img/agent-4.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="property-agent">
                  <h4 class="title-agent">Alfaridzi</h4>
                  <p class="color-text-a">
                    Hubungi saya untuk informasi lebih lanjut, & dapatkan cashback tambahan khusus jika melakukan pembelian rumah melalui website ini.
                  </p>

                  <div class="socials-a">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-whatsapp" aria-hidden="true"> Whatsapp</i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-facebook" aria-hidden="true"> Facebook</i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-instagram" aria-hidden="true"> Instagram</i>
                        </a>
                      </li>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <?php include 'includes/footer.php' ?>

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
