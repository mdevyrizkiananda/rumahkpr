<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  include 'assets/db_connect.php';
?>
<!DOCTYPE html>
<html lang="id">

<?php include 'includes/head.php'; ?>

<body>
  <?php include 'includes/navbar.php' ?>

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">
    <div class="swiper-wrapper">
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/mansion.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 style="font-size:40px;" class="intro-title mb-4 ">
                      Perumahan
                      <span class="color-b">Pondok Mansion</span>
                    </h1>
                    <h3 style="color:white;">Jl.Karya Jaya Ujung Namorambe, 20356</h3>
                    <h4 style="color:#ffb142;">HARGA : Rp.175.000.000</h4>
                    <p class="intro-subtitle intro-price">
                      <a href="https://wa.me/6282361802435?text=Hi%20Pak%20Alfaridzi,%20Saya%20customer%20dari%20web%20Rumah%20KPR"><span class="price-a">Booking Sekarang!</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/alam.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 style="font-size:40px;" class="intro-title mb-4 ">
                      Perumahan
                      <span class="color-b">Pondok Alam</span> <br>(KONSEP EROPA)
                    </h1>
                    <h3 style="color:white;">Jl.Tangakahan Batu Desa Sigara Gara Marindal</h3>
                    <h4 style="color:#ffb142;">HARGA : Rp.160.000.000</h4>
                    <p class="intro-subtitle intro-price">
                      <a href="https://wa.me/6282361802435?text=Hi%20Pak%20Alfaridzi,%20Saya%20customer%20dari%20web%20Rumah%20KPR"><span class="price-a">Booking Sekarang!</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/pondok7.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 style="font-size:40px;" class="intro-title mb-4 ">
                      Perumahan
                      <span class="color-b">Pondok 7</span>
                    </h1>
                    <h3 style="color:white;">Jl.Sei Mencirim Dusun III Desa Suka Maju</h3>
                    <h4 style="color:#ffb142;">HARGA : Rp.160.000.000</h4>
                    <p class="intro-subtitle intro-price">
                      <a href="https://wa.me/6282361802435?text=Hi%20Pak%20Alfaridzi,%20Saya%20customer%20dari%20web%20Rumah%20KPR"><span class="price-a">Booking Sekarang!</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <marquee scrollamount="10">
    <h4 style="color:red; margin-top:10px;">INFORMATION : "Yes! we are currently working hard on awesome new web. Stay tuned!" - [Nanda x Farid] ;)</h4>
  </marquee>
  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Our Services</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-info"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Lifestyle</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                  convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-info"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Loans</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Mauris blandit
                  aliquet elit, eget tincidunt
                  nibh pulvinar a.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-card-checklist"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Sell</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                  convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Best Seller</h2>
              </div>
              <div class="title-link">
                <a href="property-grid.php">Lihat Semua
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">
            <?php
              $query = mysqli_query($mysqli, "SELECT * FROM tb_rumah where id < 4 ") or die (mysqli_error());
              if (mysqli_num_rows($query)==0) {
                echo "Data Tidak Tersedia";
              }
              else{
              $i=1;
              while ($row = mysqli_fetch_array($query)){
                echo '
            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/'.$row[foto].'" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a  style="font-size:20px;" href="property-single.php">'.$row[nama].'</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">HARGA | '.$row[harga].'</span>
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
            </div><!-- End carousel item -->
            <!-- Best Seller -->
            ';
            }
          }?>
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Review & Testimoni</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-4">
                    <div class="testimonial-img">
                      <img src="assets/img/testi1.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-8 ">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                        debitis hic ber quibusdam
                        voluptatibus officia expedita corpori.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="assets/img/testi1.jpg" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Anggi - Rumah Pondok Mansion</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-4">
                    <div class="testimonial-img">
                      <img src="assets/img/testi1.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-8">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                        debitis hic ber quibusdam
                        voluptatibus officia expedita corpori.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="assets/img/testi1.jpg" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Pablo & Emma</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Testimonials Section -->

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
