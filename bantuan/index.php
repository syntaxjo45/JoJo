<!-- re-Code by Jo -->
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Pusat Bantuan | Vave Global</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <meta name="theme-color" content="#ffffff">
    
    <!-- footer src -->
    <style>
    body {
      font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
    }
    .cashback-center{
        display: flex;
        justify-content: center;
    }
    .container{
			width: 960px;
			margin: 0 auto;
		}
		button#back2top{
		    position: fixed;
		    right: 2%;
		    bottom: 2%;
		    opacity: 0;
		    visibility: hidden;
		    
		    /*For better looking button*/
		    font-family: sans-serif;
		    font-size: 5px;
		    line-height: 1.3;
        border-radius: 50%;
		    border: none;
		    outline: none;
		    cursor: pointer;
		    padding: 10px 18px;
		    margin: 0;
		}
    .MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;}
        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#fff; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }
    
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#fff; }
        
        .footer {
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: #dedee5;
      color: white;
      text-align: center;
    } 
    .demo
{
	padding: 50px 0;
}
.heading-title
{
	margin-bottom: 50px;
}

    .pricingTable{
        border: 2px solid #e3e3e3;
        text-align: center;
        position: relative;
        padding-bottom: 40px;
        transform: translateZ(0px);
        border-radius: 15px;
    }

    .pricingTable:before,
    .pricingTable:after{
        content: "";
        position: absolute;
        top: -2px;
        left: -2px;
        bottom: -2px;
        right: -2px;
        z-index: -1;
        transition: all 0.5s ease 0s;
    }

    .pricingTable:before{
        border-right: 2px solid #08c6aa;
        border-left: 2px solid #08c6aa;
        transform: scaleY(0);
        transform-origin: 100% 0 0;
    }

    .pricingTable:after{
        border-bottom: 2px solid #08c6aa;
        border-top: 2px solid #08c6aa;
        transform: scaleX(0);
        transform-origin: 0 100% 0;
    }

    .pricingTable:hover:before{
        transform: scaleY(1);
        border-radius: 15px;
    }

    .pricingTable:hover:after{
        transform: scaleX(1);
        border-radius: 15px;
    }

    .pricingTable .pricingTable-header{
        background: #08c6aa;
        color: #fff;
        margin: -2px -2px 35px;
        padding: 40px 0;
    }

    .pricingTable .heading{
        font-size: 30px;
        font-weight: 600;
        margin: 0 0 5px 0;
        border-radius: 15px;
    }

    .pricingTable .subtitle{
        font-size: 14px;
        display: block;
    }

    .pricingTable .price-value{
        font-size: 72px;
        font-weight: 600;
        margin-top: 10px;
        position: relative;
        display: inline-block;
    }

    .pricingTable .currency{
        font-size: 45px;
        font-weight: normal;
        position: absolute;
        top: 2px;
        left: -30px;
    }

    .pricingTable .month{
        font-size: 20px;
        position: absolute;
        bottom: 17px;
        right: -40px;
    }

    .pricingTable .pricing-content{
        list-style: none;
        padding: 0px;
        margin-bottom: 0px;

    }

    .pricingTable .pricing-content li{
        font-size: 16px;
        color: #7a7e82;
        line-height: 40px;
        border-radius: 15px;
    }

    .pricingTable .read{
        display: inline-block;
        border: 2px solid #7a7e82;
        border-right: none;
        font-size: 14px;
        font-weight: 700;
        color: #7a7e82;
        padding: 9px 30px;
        position: relative;
        text-transform: uppercase;
        transition: all 0.3s ease 0s;
        border-radius: 15px;
    }

    .pricingTable .read:hover{
        border-color: #08c6aa;
        color: #08c6aa;
        border-radius: 15px;
    }

    .pricingTable .read i{
        font-size: 19px;
        margin-top: -10px;
        position: absolute;
        top: 50%;
        right: 15px;
        transition: all 0.3s ease 0s;
        border-radius: 15px;
    }

    .pricingTable .read:hover i{
        right: 5px;
        border-radius: 15px;
    }

    .pricingTable .read:before,
    .pricingTable .read:after{
        content: "";
        display: block;
        height: 30px;
        border-left: 2px solid #7a7e82;
        position: absolute;
        right: -11px;
        transition: all 0.3s ease 0s;
        border-radius: 15px;
    }

    .pricingTable .read:before{
        bottom: -6px;
        transform: rotate(45deg);
        border-radius: 15px;
    }

    .pricingTable .read:after{
        top: -6px;
        transform: rotate(-45deg);
        border-radius: 15px;
    }

    .pricingTable .read:hover:before,
    .pricingTable .read:hover:after{
        border-left-color: #08c6aa;
        border-radius: 15px;
    }

    @media screen and (max-width: 990px){
        .pricingTable{ 
            margin-bottom: 25px; 
        }
    }

    </style>
    <style>
    .no-copy p {
        -webkit-user-select: none;  /* Chrome all / Safari all */
        -moz-user-select: none;     /* Firefox all */
        -ms-user-select: none;      /* IE 10+ */
        user-select: none;          /* Likely future */     

    }
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}

.cd-dropdown ul {
	position: absolute;
	top: 0px;
	width: 100%;
}

.cd-dropdown > span,
.cd-dropdown ul li {
	box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}

.cd-dropdown ul li {
	position: absolute;
	width: 100%;
	pointer-events: none;
}

.cd-active.cd-dropdown > span {
	color: #e66b20;
}

.cd-active.cd-dropdown ul li {
	pointer-events: auto;
}

.cd-active.cd-dropdown ul li span {
	-webkit-transition: all 0.2s linear 0s;
	-moz-transition: all 0.2s linear 0s;
	-ms-transition: all 0.2s linear 0s;
	-o-transition: all 0.2s linear 0s;
	transition: all 0.2s linear 0s;
}

.cd-active.cd-dropdown ul li span:hover {
	background: #e66b20;
	color: #fff;
}

.swal-wide{
    width:850px !important;
    
}

.frameatas {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 56.25%; /* 16:9 Aspect Ratio */
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

</style>
    
    <!-- end of footer src -->

    <!-- Library Google -->
    <link href="../assets/css/theme.css" rel="stylesheet" />
    <link href="../assets/css/program.css" rel="stylesheet" />
    <link href="../assets/css/bantuan.css" rel="stylesheet" />
    <link href="../assets/css/flip-jo.css" rel="stylesheet" />
    <link href="../assets/css/accordion.css" rel="stylesheet" />
    <link href="../assets/css/popup.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://kit.fontawesome.com/443e00f667.js" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
      $(document).ready(function(){
        $("#myModal").modal('show');
      });
    </script>
  </head>
    

  <body>
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container"><a class="navbar-brand" href="#"><img class="img-fluid" src="../assets/img/logovave.png" alt="" width="70px"/></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ms-lg-4 ms-xl-7 border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
              <li class="nav-item"><a class="nav-link fw-bold" href="../index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link fw-bold" href="../about-us">Tentang Kami</a></li>
              <li class="nav-item"><a class="nav-link fw-bold" href="../layanan">Layanan Kami</a></li>
              <li class="nav-item"><a class="nav-link fw-bold active" aria-current="page" href="../help">Pusat Bantuan</a></li>
            </ul>
            <form style="text-align: center;"><a class="btn btn-light rounded-pill shadow fw-bold first" id="testeSWAL" role="button"> <li class="fa fa-button"></li><i class="fas fa-trophy"></i> Top Mentor Titanium
              <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#79bb86" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
              </svg></a></form>
          </div>
        </div>
      </nav>
  

      <section class="py-6">
        <div class="container">
          <div class="row">
            <div class="col-12">
            <div class="row flex-center mb-5">
            <div class="col-auto text-center my-4">
              <h1 class="mb-4 fw-bold">Pusat Bantuan</h1>
              <p><i class="fas fa-question-circle fa-2x"></i></p>
            </div>
          </div>  
                <div class="row g-0 align-items-center" style="margin: 5%;">
                  <div class="col-sm text-center text-md-center">
                  <img src="../assets/img/adress.png"></img>
                <br/>
                <h3 style="font-type: bold; font-family: Times New Roman;">
                Alamat Kantor
                </h3>
                <p>
                Griya Bakoel Rollas
                Jl. Taman Bintaro Raya no 8
                Jakarta Selatan - Indonesia
                </p>
                </div>
       
                  <div class="col-sm text-center text-md-center">
                  <img src="../assets/img/whatsapp.png"></img>
                  <br/>
                <h3 style="font-type: bold; font-family: Times New Roman;">
                WA Only
                </h3>
                <a href="https://wa.me/621282006797/?text=Halo,Saya Membutuhkan Bantuan Penjelasan Mengenai Member Terima kasih"><p>Member : +62 896 0409 4949</p></a>
                </div>

                <div class="col-sm text-center text-md-center">
                <img src="../assets/img/email.png"></img>
                <br/>
                <h3 style="font-type: bold; font-family: Times New Roman;">
                E-Mail
                </h3>
                <p>member@vave.co.id<br/>merchant@vave.co.id</p>

                </div>


            </div>


          </div>
        </div>

      </section>



      <section class="py-6">
        <div class="container">
          <div class="row">
            <div class="col-12">
            <div class="row flex-center">
            <div class="col-auto text-center my-4">
              <h1 class="mb-4 fw-bold">FAQ</h1>
              <p>Pertanyaan Seputar Member Dan Merchant</p>
            </div>
          </div>  
                <div class="row g-0 align-items-center">
                <div class="align-items-center">
                <center>
                <a class="btn btn-light rounded-pill shadow fw-bold" href="https://vaveglobal.zendesk.com/hc/id" role="button">Lebih detail
                <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#79bb86" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                </svg></a>
                </center>
                </div>
                </div>

            </div>


          </div>
        </div>

      </section>

      <section class="Accordion" >
      <div class="container">
          <div class="row">
            <div class="col-12">
            <div class="row flex-center">
        <ul class="Accordion__tabs">
          <li class="Accordion__tab" onclick="toggleAccordion(this)">
            <div class="Accordion__tab__headline">
              <h5 style="margin-left: 25px;"><b>Apa Syarat Menjadi Member ?</b></h5><span class="icon"></span>
            </div>
            <div class="Accordion__tab__content">
              <div class="wrapper">
                <ul>
                <li style="list-style: none;"><b>1. Minimal berusia 17 tahun atau sudah memiliki KTP</li>
                <li style="list-style: none;">2. Satu Nomor Handphone untuk satu Akun yang dapat di validasi</li>
                <li style="list-style: none;">3. Mengisi formulir pendaftaran online Member baru dengan keterangan yang valid dan benar</li>
                <li style="list-style: none;">4. Memiliki alamat domisili yang jelas.</li>
                <li style="list-style: none;">5. Memiliki Nomor Rekening Bank yang valid dan aktif.</li>
                <li style="list-style: none;">6. Menyertakan Nomor Pokok Wajib Pajak (NPWP).</li>
                <li style="list-style: none;">7. Member yang tidak menginformasikan NPWP pribadi/suaminya akan dikenakan pemotongan Pajak Penghasilan sebesar 120% dari ketentuan perpajakan bila yang bersangkutan memiliki NPWP.</li>
                </ul>
              </div>
            </div>
          </li>
          <li class="Accordion__tab" onclick="toggleAccordion(this)">
            <div class="Accordion__tab__headline">
            <h5 style="margin-left: 25px;"><b>Apa Syarat Menjadi Merchant ?</b></h5><span class="icon"></span>
            </div>
            <div class="Accordion__tab__content">
              <div class="wrapper">
                <ul>
                <li style="list-style: none;"><b>1. Menjadi MEMBER VAVE</li>
                <li style="list-style: none;">2. Mengisi formulir pendaftaran online MERCHANT dengan keterangan yang valid dan benar</li>
                <li style="list-style: none;">3. Memiliki Usaha baik Jasa maupun Barang yang dapat di Perjual belikan yang tidak melanggar hukum</li>
                <li style="list-style: none;">4. Memiliki Nomor Rekening Bank yang valid dan aktif.</li>
                <li style="list-style: none;">5. Menyertakan Nomor Pokok Wajib Pajak (NPWP).</li>
                <li style="list-style: none;">6. Merchant yang tidak menginformasikan NPWP akan dikenakan pemotongan Pajak Penghasilan lebih besar sesuai ketentuan perpajakan bila yang bersangkutan memiliki NPWP.</li>
                </ul>
              </div>
            </div>
          </li>
          <li class="Accordion__tab" onclick="toggleAccordion(this)">
            <div class="Accordion__tab__headline">
            <h5 style="margin-left: 25px;"><b>Apa Keuntungan Menjadi Member?</b></h5><span class="icon"></span>
            </div>
            <div class="Accordion__tab__content">
              <div class="wrapper">
                <p>Mendapatkan Poin Cashback Dari Setiap Pengeluaran Kebutuhan Terus Menurus Sehingga Bisa Menjadi Penghasilan</p>
              </div>
            </div>
          </li>
          <li class="Accordion__tab" onclick="toggleAccordion(this)">
            <div class="Accordion__tab__headline">
            <h5 style="margin-left: 25px;"><b>Apa Keuntungan Menjadi Merchant ?</b></h5><span class="icon"></span>
            </div>
            <div class="Accordion__tab__content">
              <div class="wrapper">
                <p>Mendapat Fasilitas Iklan Gratis, Mendapatkan Brand Awareness, Loyal Costumer Dan Cashback</p>
              </div>
            </div>
          </li>
        </ul>
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
            <div class="col-12 col-sm-12 col-lg-3 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img class="img-fluid me-3" src="../assets/img/logo.png" alt="" width="50px"/><span class="fw-bold fs-1 text-1000">VAVE GLOBAL</span></a>
              <p class="mt-4">Griya Bakoel Rollas <br/>Jl. Taman Bintaro Raya No 8 <br/>Jakarta Selatan - Indonesia</p>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 mb-3 order-2 order-sm-1">
              <h6 class="lh-lg fw-bold mb-4">Home</h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="../about-us">Tentang Kami</a></li>
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="../layanan">Layanan Kami</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
              <h6 class="lh-lg fw-bold mb-4"> Help </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="../bantuan">Pusat Bantuan</a></li>
               
              </ul>
              
            </div>
            <div class="col-12 col-sm-4 col-lg-3 mb-3 order-1 order-sm-3">
              <h6 class="lh-lg fw-bold mb-4">Unduh </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="https://apps.apple.com/id/app/vave-global/id1453493174"><img class="img-fluid" src="../assets/img/icons/banner-appstore.png" width="100" alt="" /></a></li>
                <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="https://play.google.com/store/apps/details?id=id.co.vave.mob"><img class="img-fluid" src="../assets/img/icons/banner-playstore.png" width="100" alt="" /></a></li>
              </ul>
              <br/>
              <h6 class="lh-lg fw-bold mb-4">Social Media </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="https://www.facebook.com/Vave-Brite-104820194843410/"><img class="img-fluid" src="../assets/img/icons/f-icon.png" width="40" alt="" /></a></li>
                <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="https://youtube.com/c/VAVEBRITEOfficial"><img class="img-fluid" src="../assets/img/icons/y-icon.png" width="40" alt="" /></a></li>
                <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="https://www.instagram.com/vavebriteofficial?r=nametag"><img class="img-fluid" src="../assets/img/icons/i-icon.png" width="40" alt="" /></a></li>
              </ul>
            </div>
          </div>
        </div>

      </section>
      
  
      


      
    

    </main>

    
    <div class="footer">
			<p style="font-size: 1.75vh; color: black;">© 2021 - Vaveglobal | Adalah Merek Milik PT Vave Global Madani</p>
		  </div>
    <!-- end of source -->
    <button id="back2top"><img src="../assets/img/arrow-up.png"></img></button>
    <script src="../assets/js/back2top.min.js"></script>
    <script>
    const button = document.querySelector("#back2top");
    BACK2TOP(button, 50);
    </script>	

    <script src="../vendors/@popperjs/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../assets/js/theme.js"></script>
    <script>
    $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

    });
      </script>
      <script>
      $(document).ready(function() {
      $('.flipper').on('click', function () {
        $(this).find('.flipper-card').toggleClass('flipper-is-flipped');
      });

      });

      function TestSweetAlert(){
        Swal.fire({
      html: '<div style="text-align: left; font-weight: bold; font-size: 1.5em;">Top Mentor Titanium</div><br/><div class="frameatas"><iframe class="responsive-frameatas align-center" src="https://mobapp.vave.co.id/contest_februari.php"></iframe></div>',
      showCloseButton: true,
      showConfirmButton: false,
      customClass: 'swal-wide',
      focusConfirm: false,
      })
      };

      $('#testeSWAL').on("click",TestSweetAlert);

      </script>
      <script>
        var elementOld = null;
        var openClass = "Accordion__tab--open";

        function toggleAccordion(element) {
            content = element.querySelector(".Accordion__tab__content");

            if(elementOld != null){
                elementOld.classList.remove(openClass);
                contentOld = elementOld.querySelector(".Accordion__tab__content");
                contentOld.style.maxHeight = "0px";
            }

            if(elementOld !== element){
                element.classList.add(openClass);
                content.style.maxHeight = content.scrollHeight + "px";
                elementOld = element;
            }else{
                elementOld = null;
            }
        }


        $('#yt').fadeIn();

        $(".popup-btn").click(function () {
                    var target = $(this).attr("href");
                    $(target).fadeIn();
        });
        
        $(".popup .close").click(function () {
                    $(".popup").fadeOut();
        });
        

        </script>

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,700;1,900&amp;display=swap" rel="stylesheet">
  </body>
</html>