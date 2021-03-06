<!-- re-Code by Jo -->
<!DOCTYPE html>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <title>Dashboard | Vave Global</title>
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="assets/img/logo.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="assets/css/map.css">
  <script src="https://kit.fontawesome.com/443e00f667.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="assets/css/testi.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'>
  <link rel='stylesheet' href='https://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css'>
  <link rel="stylesheet" href="dist/style.css">


  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <lottie-player src="https://uploads-ssl.webflow.com/5dd3495558fd7f3d1fcb52bc/5e817339d75a9b0904fc1b08_Testig%20Tech%20Colored.json" background="transparent" speed="1" style="width: 100%; height: 100%;" hover="" loop="">

  </lottie-player>
  <!-- footer src -->
  <style>
    .footer {
      position: relative;
      left: 0;
      bottom: 0; width: 100%;
      background-color: #dedee5;
      color: white;
      text-align: center;
    }

    .cashback-center {
      display: flex;
      justify-content: center;
    }

    .container {
      width: 960px;
      margin: 0 auto;
    }

    .swal-wide {
      width: 850px !important;

    }

    .frameatas {
      position: relative;
      width: 100%;
      overflow: hidden;
      padding-top: 56.25%;
      /* 16:9 Aspect Ratio */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .responsive-frameatas {
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      width: 100%;
      height: 100%;
      border: none;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    tspan {
      visibility: hidden;
    }
  </style>
  <!-- end of footer src -->

  <!-- Library Google -->
  <link href="assets/css/theme.css" rel="stylesheet" />
  <link href="assets/css/become-v.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/443e00f667.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="assets/js/mapdata.js"></script>
  <script src="assets/js/countrymap.js"></script>
</head>

<body>
  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container"><a class="navbar-brand" href="#"><img class="img-fluid" src="assets/img/logovave.png" alt="" width="70px" /></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto ms-lg-4 ms-xl-7 border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
            <li class="nav-item"><a class="nav-link fw-bold active" aria-current="page" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link fw-bold" href="about-us/">Tentang Kami</a></li>
            <li class="nav-item"><a class="nav-link fw-bold" href="layanan/">Layanan Kami</a></li>
            <li class="nav-item"><a class="nav-link fw-bold" href="bantuan/">Pusat Bantuan</a></li>
          </ul>
          <form style="text-align: center;"><a class="btn btn-light rounded-pill shadow fw-bold" id="testeSWAL" role="button">
              <li class="fa fa-button"></li><i class="fas fa-trophy"></i> Top Mentor Titanium<svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#79bb86" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
              </svg>
            </a></form>
        </div>
      </div>
    </nav>



    <section class="py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5 col-lg-7 order-md-1">
            <div id="map" style="padding-top: 100px;">



            </div>


          </div>
          <div class="col-md-7 col-lg-5 text-center text-md-start pt-3">
            <h3 id="vave" class="display-2 fw-bold">VAVE <br class="d-block d-lg-none d-xl-block" />#BERBAGI<br />#CASHBACK</h3>
            <a class="btn btn-lg btn-info rounded-pill" href="about-us/" role="button">Pelajari lebih lanjut</a>
          </div>
        </div>
      </div>
    </section>



    <section>
      <div class="container py-5" id="whyus">
        <div class="row flex-center mb-5">
          <div class="col-auto text-center my-6">
            <h1 class="fw-bold">Kenapa harus kami ?</h1>
            Bersama, Kita Membangun Bisnis Berbagi Ekonomi
          </div>
        </div>
        <div class="row no-gutters" id="whyus">
          <div class="col-sm">
            <div class="row flex-center mb-6">
              <div class="col-sm">
                <div class="card px-5 px-md-3 py-lg-5">
                  <div class="row flex-center">
                    <div class="bg-holder z-index-1 d-none d-lg-block" style="background-image:url(assets/img/illustrations/feature-bg-1.png);background-position:center;background-size:contain;">
                    </div>

                    <div class="bg-holder z-index-1 d-block d-lg-none" style="background-image:url(assets/img/illustrations/feature-bg-1.png);background-position:center;background-size:cover;">
                    </div>

                    <div class="col-md-4 pe-0 pe-md-0 text-center"><img class="img-fluid" src="assets/img/illustrations/inovasi.svg" /></div>
                    <div class="col-md-8 ps-md-3 pe-md-2 text-center text-md-start z-index-2">
                      <div class="card-body px-0">
                        <h4 class="card-title pt-md-5">Inovasi </h4>
                        <p class="mb-0" style="font-size: 1em;"> <br class="d-none d-lg-block">Aplikasi Belanja Dengan Program <br class="d-none d-lg-block">Belanja Yang Lengkap Dari Berbagai<br class="d-none d-lg-block"> Kategori Usaha Secara<br class="d-none d-lg-block"> Online Maupun Offline<br class="d-none d-lg-block">Satu Aplikasi Untuk Semua Transaksi</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm" style="margin-top: 7px;">
                <div class="card px-5 px-md-3 py-lg-5">
                  <div class="row flex-center">
                    <div class="bg-holder z-index-1 d-none d-lg-block" style="background-image:url(assets/img/illustrations/feature-bg-1.png);background-position:center;background-size:contain;">
                    </div>

                    <div class="bg-holder z-index-1 d-block d-lg-none" style="background-image:url(assets/img/illustrations/feature-bg-1.png);background-position:center;background-size:cover;">
                    </div>

                    <div class="col-md-4 pe-0 pe-md-0 text-center"><img class="img-fluid" src="assets/img/illustrations/komunitas.svg" alt="" /></div>
                    <div class="col-md-8 ps-md-3 pe-md-2 text-center text-md-start z-index-2">
                      <div class="card-body px-0">
                        <h4 class="card-title pt-md-5">Komunitas </h4>
                        <p class="mb-0" style="font-size: 1em;"> Aplikasi Belanja Yang Memiliki Sistem <br class="d-none d-lg-block">Membangun Komunitas Belanja <br class="d-none d-lg-block">Antara Member Dan Merchant<br class="d-none d-lg-block">Dengan Konsep Berbagi Ekonomi<br class="d-none d-lg-block"></p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="card px-5 px-md-3 py-lg-5">
                  <div class="row flex-center">
                    <div class="bg-holder z-index-1 d-none d-lg-block" style="background-image:url(assets/img/illustrations/feature-bg-1.png);background-position:center;background-size:contain;">
                    </div>

                    <div class="bg-holder z-index-1 d-block d-lg-none" style="background-image:url(assets/img/illustrations/feature-bg-1.png);background-position:center;background-size:cover;">
                    </div>

                    <div class="col-md-4 pe-0 pe-md-0 text-center"><img class="img-fluid" src="assets/img/illustrations/casback.png" alt="" /></div>
                    <div class="col-md-8 ps-md-3 pe-md-2 text-center text-md-start z-index-2">
                      <div class="card-body px-0">
                        <h4 class="card-title pt-md-5">Cashback </h4>
                        <p class="mb-0" style="font-size: 1em;"> Aplikasi Belanja Yang Memberikan <br class="d-none d-lg-block">Cashback Dari Semua Transaksi <br class="d-none d-lg-block">Antara Member Dan Merchant<br class="d-none d-lg-block">Merubah Pengeluaran <br class="d-none d-lg-block">Menjadi Penghasilan</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

    </section>


    <section class="testimonials mb-12" id="whyus">
      <div class="container" id="whyus">
        <div class="row flex-center" id="whyus">
          <div class="col-auto text-center my-6">
            <h1 class="fw-bold">Testimonial</h1>
          </div>
        </div>
        <div class="row" id="whyus">
          <div class="col-sm-12">
            <div id="customers-testimonials" class="owl-carousel">

              <!--TESTIMONIAL 1 -->
              <div class="item">
                <div class="shadow-effect">
                  <img class="img-circle" src="assets/img/rocky.png" id="imgstyle">
                  <br />
                  <h5 class="flex-center">Rocky Pascadena</h5>

                  <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
                </div>
                <div class="testimonial-name">
                  Influencer
                </div>
              </div>
              <!--END OF TESTIMONIAL 1 -->
              <!--TESTIMONIAL 2 -->
              <div class="item">
                <div class="shadow-effect">
                  <img class="img-circle" src="assets/img/senita.png" id="imgstyle">
                  <br />
                  <h5 class="flex-center">Senita Louise</h5>
                  <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
                </div>
                <div class="testimonial-name">Ibu Rumah Tangga</div>
              </div>
              <!--END OF TESTIMONIAL 2 -->
              <!--TESTIMONIAL 3 -->
              <div class="item">
                <div class="shadow-effect">
                  <img class="img-circle" src="assets/img/suswaji.png" id="imgstyle">
                  <br />
                  <h5 class="flex-center">Suswaji, S.Hut, MAB</h5>
                  <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
                </div>
                <div class="testimonial-name">Pegawai Negeri Sipil</div>
              </div>
              <!--END OF TESTIMONIAL 3 -->
              <!--TESTIMONIAL 4 -->
              <div class="item">
                <div class="shadow-effect">
                  <img class="img-circle" src="assets/img/tiana.png" id="imgstyle">
                  <br>
                  <h5 class="flex-center">Tiana Kyla Ophelia</h5>
                  <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
                </div>
                <div class="testimonial-name">Mahasiswi</div>
              </div>
              <!--END OF TESTIMONIAL 4 -->
              <!--TESTIMONIAL 5 -->
              <div class="item">
                <div class="shadow-effect">
                  <img class="img-circle" src="assets/img/muhammad.png" id="imgstyle">
                  <br />
                  <h5 class="flex-center">Muhammad S.Kom, MBA</h5>
                  <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
                </div>
                <div class="testimonial-name">Ahli IT / Master Affiliate</div>
              </div>
              <!--END OF TESTIMONIAL 5 -->

              <!-- TESTIMONIAL 6 -->
              <div class="item">
                <div class="shadow-effect">
                  <img class="img-circle" src="assets/img/maslina.png" id="imgstyle">
                  <br />
                  <h5 class="flex-center">Maslina Susanti</h5>
                  <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
                </div>
                <div class="testimonial-name">Wiraswasta</div>
              </div>
              <!-- END OF TESTIMONIAL 6 -->
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="py-6 pb-0">
      <div class="container">
        <hr class="text-info opacity-25" />
        <div class="row py-7 justify-content-sm-between text-center text-md-start">
          <div class="row justify-content-lg-around">
            <div class="col-12 col-sm-12 col-lg-3 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img class="img-fluid me-3" src="https://www.vave.co.id/wp-content/uploads/2020/10/cropped-V-icon-192x192.png" alt="" width="50px" /><span class="fw-bold fs-1 text-1000">VAVE GLOBAL</span></a>
              <p class="mt-4">Griya Bakoel Rollas <br />Jl. Taman Bintaro Raya No 8 <br />Jakarta Selatan - Indonesia</p>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 mb-3 order-2 order-sm-1">
              <h6 class="lh-lg fw-bold mb-4">Home</h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="about-us/">Tentang Kami</a></li>
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="layanan/">Layanan Kami</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
              <h6 class="lh-lg fw-bold mb-4"> Help </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="bantuan/">Pusat Bantuan</a></li>

              </ul>

            </div>
            <div class="col-12 col-sm-4 col-lg-3 mb-3 order-1 order-sm-3">
              <h6 class="lh-lg fw-bold mb-4">Unduh </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="https://apps.apple.com/id/app/vave-global/id1453493174"><img class="img-fluid" src="assets/img/icons/banner-appstore.png" width="100" alt="" /></a></li>
                <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="https://play.google.com/store/apps/details?id=id.co.vave.mob"><img class="img-fluid" src="assets/img/icons/banner-playstore.png" width="100" alt="" /></a></li>
              </ul>
              <br />
              <h6 class="lh-lg fw-bold mb-4">Social Media </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="https://www.facebook.com/Vave-Brite-104820194843410/"><img class="img-fluid" src="assets/img/icons/f-icon.png" width="40" alt="" /></a></li>
                <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="https://youtube.com/c/VAVEBRITEOfficial"><img class="img-fluid" src="assets/img/icons/y-icon.png" width="40" alt="" /></a></li>
                <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="https://www.instagram.com/vavebriteofficial?r=nametag"><img class="img-fluid" src="assets/img/icons/i-icon.png" width="40" alt="" /></a></li>
              </ul>
            </div>
          </div>
        </div>

    </section>

    <div class="footer">
      <p style="font-size: 1.75vh; color: black;">© 2021 - Vaveglobal | Adalah Merek Milik PT Vave Global Madani</p>
    </div>







  </main>
  <!-- end of source -->

  <script>
    function TestSweetAlert() {
      Swal.fire({
        html: '<div style="text-align: left; font-weight: bold; font-size: 1.5em;">Top Mentor Titanium</div><br/><div class="frameatas"><iframe class="responsive-frameatas align-center" src="https://mobapp.vave.co.id/contest_februari.php"></iframe></div> <br/> <h1>SYARAT & KETENTUAN:</h1><p> Pemenang No. 1 Sampai 10 (Top 10) Minimum Mentori 5 Orang Titanium / Titanium Star<br/>Grup Member Lama Anda, Yang Upgrade Bulan Ini Ke Titanium / Titanium Star,<br/>Juga Terhitung Dalam Akumulasi Promo Top 10 Mentor<br/>Promo Top 10 Mentor Ini Berakhir Tanggal 28 Februari 2021 Jam 23.59 WIB</p>',
        showCloseButton: true,
        showConfirmButton: false,
        customClass: 'swal-wide',
        focusConfirm: false,
      })
    };

    $('#testeSWAL').on("click", TestSweetAlert);
  </script>
  <script>
    // for animation 

    $(document).ready(function() {
      $('.pp-quote').click(function() {
        $('.pp-quote').removeClass("active");
        $(this).addClass("active");
      });
    });

    $(document).ready(function() {

      // hide-top

      $('.li-quote-1').click(function(e) {
        e.stopPropagation();
        $(".show").addClass('hide-top');
        $(".hide-top").removeClass('show');
        $('.quote-text-1').addClass('show');
        $('.quote-text-1').removeClass('hide-bottom');
      });

      $('.li-quote-2').click(function(e) {
        e.stopPropagation();
        $(".show").addClass('hide-top');
        $(".hide-top").removeClass('show');
        $('.quote-text-2').addClass('show');
        $('.quote-text-2').removeClass('hide-bottom');
      });

      $('.li-quote-3').click(function(e) {
        e.stopPropagation();
        $(".show").addClass('hide-top');
        $(".hide-top").removeClass('show');
        $('.quote-text-3').addClass('show');
        $('.quote-text-3').removeClass('hide-bottom');
      });
      $('.li-quote-4').click(function(e) {
        e.stopPropagation();
        $(".show").addClass('hide-top');
        $(".hide-top").removeClass('show');
        $('.quote-text-4').addClass('show');
        $('.quote-text-4').removeClass('hide-bottom');
      });
      $('.li-quote-5').click(function(e) {
        e.stopPropagation();
        $(".show").addClass('hide-top');
        $(".hide-top").removeClass('show');
        $('.quote-text-5').addClass('show');
        $('.quote-text-5').removeClass('hide-bottom');
      });
      $('.li-quote-6').click(function(e) {
        e.stopPropagation();
        $(".show").addClass('hide-top');
        $(".hide-top").removeClass('show');
        $('.quote-text-6').addClass('show');
        $('.quote-text-6').removeClass('hide-bottom');
      });
      $('.li-quote-7').click(function(e) {
        e.stopPropagation();
        $(".show").addClass('hide-top');
        $(".hide-top").removeClass('show');
        $('.quote-text-7').addClass('show');
        $('.quote-text-7').removeClass('hide-bottom');
      });
      $('.li-quote-8').click(function(e) {
        e.stopPropagation();
        $(".show").addClass('hide-top');
        $(".hide-top").removeClass('show');
        $('.quote-text-8').addClass('show');
        $('.quote-text-8').removeClass('hide-bottom');
      });


    });


    $(document).ready(function() {

      // hide-top

      $('.li-quote-1').click(function(e) {
        e.stopPropagation();
        $(".look").addClass('hide-dp-top');
        $(".hide-dp-top").removeClass('look');
        $('.dp-name-1').addClass('look');
        $('.dp-name-1').removeClass('hide-dp-bottom');
      });

      $('.li-quote-2').click(function(e) {
        e.stopPropagation();
        $(".look").addClass('hide-dp-top');
        $(".hide-dp-top").removeClass('look');
        $('.dp-name-2').addClass('look');
        $('.dp-name-2').removeClass('hide-dp-bottom');
      });

      $('.li-quote-3').click(function(e) {
        e.stopPropagation();
        $(".look").addClass('hide-dp-top');
        $(".hide-dp-top").removeClass('look');
        $('.dp-name-3').addClass('look');
        $('.dp-name-3').removeClass('hide-dp-bottom');
      });
      $('.li-quote-4').click(function(e) {
        e.stopPropagation();
        $(".look").addClass('hide-dp-top');
        $(".hide-dp-top").removeClass('look');
        $('.dp-name-4').addClass('look');
        $('.dp-name-4').removeClass('hide-dp-bottom');
      });

      $('.li-quote-5').click(function(e) {
        e.stopPropagation();
        $(".look").addClass('hide-dp-top');
        $(".hide-dp-top").removeClass('look');
        $('.dp-name-5').addClass('look');
        $('.dp-name-5').removeClass('hide-dp-bottom');
      });

      $('.li-quote-6').click(function(e) {
        e.stopPropagation();
        $(".look").addClass('hide-dp-top');
        $(".hide-dp-top").removeClass('look');
        $('.dp-name-6').addClass('look');
        $('.dp-name-6').removeClass('hide-dp-bottom');
      });
      $('.li-quote-7').click(function(e) {
        e.stopPropagation();
        $(".look").addClass('hide-dp-top');
        $(".hide-dp-top").removeClass('look');
        $('.dp-name-7').addClass('look');
        $('.dp-name-7').removeClass('hide-dp-bottom');
      });
      $('.li-quote-8').click(function(e) {
        e.stopPropagation();
        $(".look").addClass('hide-dp-top');
        $(".hide-dp-top").removeClass('look');
        $('.dp-name-8').addClass('look');
        $('.dp-name-8').removeClass('hide-dp-bottom');
      });


    });
  </script>
  <script>
    $(document).ready(function() {
      var town = "";

      function success(town) {
        var url = "https://cors-anywhere.herokuapp.com/http://api.openweathermap.org/data/2.5/weather?q=" + town + "&appid=63fc3d9a6be2d5f85a3a754d1c9835e8&units=metric";

        $.getJSON(url, function(data) {
          var originData = JSON.stringify(data);
          localStorage.setItem("weatherData", originData);

          $('.info').text(data.name);
          var sunrise = new Date(data.sys.sunrise * 1000);
          var sunset = new Date(data.sys.sunset * 1000);
          sunrise = sunrise.toString();
          sunset = sunset.toString();
          $('.sun_set_t').text("Sun set : " + sunset.slice(16, 24));
          $('.sun_rise_t').text("Sun rise : " + sunrise.slice(16, 24));
          $('.humidity').text("humidity : " + data.main.humidity);
          $('.wind').text("wind : " + data.wind.speed + "km/h");
          $('.temperature').text("Temp : " + data.main.temp + "C°");


        });
      }

      $('.town').hide();
      $('.region').mouseover(function() {
        var town = $(this).attr('data-name');
        success(town);
        $('.town_name h5').text(town);
        $('.town').show(300);


      });
      $('.region').mouseout(function() {

        $('.town').hide();

      });
      $(document).mousemove(function(event) {
        var win_width = $(document).width();
        if (event.pageX < win_width / 2) {
          $('.town').removeClass('right');
          $('.town').addClass('left');
          $('.town').css({
            top: event.pageY - 65,
            left: event.pageX - 202
          });

        } else {
          $('.town').addClass('right');
          $('.town').removeClass('left');
          $('.town').css({
            top: event.pageY - 65,
            left: event.pageX + 100
          });
        }
      });


    })
  </script>
  <script src="vendors/@popperjs/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="assets/js/theme.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,700;1,900&amp;display=swap" rel="stylesheet">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js'></script>
  <script src="assets/js/script.js"></script>
</body>

</html>