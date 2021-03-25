<!-- re-Code by Jo -->
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Layanan | Vave Global</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/logo.png">

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
    <style>
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
</style>
    <!-- end of footer src -->

    <!-- Library Google -->
    <link href="../assets/css/theme.css" rel="stylesheet" />
    <link href="../assets/css/program.css" rel="stylesheet" />
    <link href="../assets/css/flip-jo.css" rel="stylesheet" />
    <link href="../assets/css/merchant.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/443e00f667.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
              <li class="nav-item"><a class="nav-link fw-bold active" aria-current="page" href="../layanan">Layanan Kami</a></li>
              <li class="nav-item"><a class="nav-link fw-bold" href="../bantuan">Pusat Bantuan</a></li>
            </ul>
            <form style="text-align: center;"><a class="btn btn-light rounded-pill shadow fw-bold" id="testeSWAL" role="button"> <li class="fa fa-button"></li><i class="fas fa-trophy"></i> Top Mentor Titanium
              <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#79bb86" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
              </svg></a></form>
          </div>
        </div>
      </nav>


      
      
      <div class="demo">
        <div class="container">
        <div class="row flex-center mb-5">
            <div class="col-auto text-center my-4">
              <h1 class="mb-4 fw-bold">Member</h1>
              <p>Pilih Keanggotaan Komunitas Belanja Anda Dan Dapatkan Cashback Berbaginya</p>
            </div>
          </div>  

            <div class="row">
                <div class="col-sm">
                    <div class="pricingTable" style="border-radius: 15px;">
                        <div class="pricingTable-header">
                            <h3 class="heading">Silver</h3>
                            <div class="price-value">
                            Gratis
                            </div>
                            <p></p>
                        </div>
                        <ul class="pricing-content" style="height: 285px;">
                            <li>Tidak Dapat Mereferensikan Member Dan Merchant</li>
                            <li>Cashback Pribadi</li>
                            <li>Cashback Global Share Nasional</li>
                            <li>Dapat Upgrade</li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="pricingTable" style="border-radius: 15px;">
                        <div class="pricingTable-header">
                            <h3 class="heading">Gold</h3>
                            <div class="price-value">
                            27.500
                            </div>
                            /2
                        </div>
                        <ul class="pricing-content">
                            <li>Dapat Mereferensikan Member Dan Merchant</li>
                            <li>Cashback Pribadi</li>
                            <li>Cashback Global Share Nasional</li>
                            <li>Dapat Upgrade</li>
                            <li>Fee Referensi Merchant 2%</li>
                            <li>Level 5</li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="pricingTable" style="border-radius: 15px;">
                        <div class="pricingTable-header">
                            <h3 class="heading">Platinum</h3>
                            <div class="price-value">
                            110.000
                            </div>
                            /730 Hari
                        </div>
                        <ul class="pricing-content">
                            <li>Dapat Mereferensikan Member Dan Merchant</li>
                            <li>Cashback Pribadi</li>
                            <li>Cashback Global Share Nasional</li>
                            <li>Dapat Upgrade</li>
                            <li>Fee Referensi Merchant 4%</li>
                            <li>Level 10</li>
                        </ul>
                    </div>
                </div>


                <div class="col-sm">
                    <div class="pricingTable" style="border-radius: 15px;">
                        <div class="pricingTable-header">
                            <h3 class="heading">Titanium</h3>
                            <div class="price-value">
                            275.000
                            </div>
                            /730 Hari
                        </div>
                        <ul class="pricing-content">
                            <li>Dapat Mereferensikan Member Dan Merchant</li>
                            <li>Cashback Pribadi</li>
                            <li>Cashback Global Share Nasional</li>
                            <li>Dapat Upgrade</li>
                            <li>Fee Referensi Merchant 6%</li>
                            <li>Level 25</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

      
    <section class="py-6" style="background: -webkit-linear-gradient(65deg, #18e09b, #0dc8dd 80%); border-radius: 15px;">
        <div class="container">
          <div class="row">
          <div class="row flex-center">
            <div class="col-auto text-center">
              <h1 class="fw-bold" style="color: #fff">Merchant</h1>
              <p style="color: #fff;"> Para Pemilik Usaha Produk Atau Jasa Dari Berbagai Kategori Dapat Memasang Iklan Bersama Kami </p>
            </div>
          </div>  
          <div class="store-container">
<div class="border-animation">
	<svg xmlns="http://www.w3.org/2000/svg" id="store" viewBox="130 0 1230 930">
		<defs>
	    	<filter id="f1">
	      		<feGaussianBlur in="SourceGraphic" stdDeviation="0,4" />
	    	</filter>
 			<circle id="sky-circle" fill="none" class="stroke" cx="198.7" cy="314" r="5.5"/>
			<path id="cloud" fill="#FFF" class="stroke" d="M503.6 39.1c-2.9 0.2-5.8 0.7-8.5 1.4 -14.7-24.5-42.3-40-72.8-37.8 -31.2 2.2-56.9 22.4-67.6 49.7 -2.5-0.4-5-0.5-7.6-0.3 -18.5 1.3-32.5 17.4-31.2 35.9s17.4 32.5 35.9 31.2c2.3-0.2 4.6-0.6 6.8-1.2 14.1 26.5 42.9 43.6 74.8 41.3 23.1-1.6 43.2-13.1 56.4-30.1 6.3 2.5 13.2 3.6 20.4 3.1 25.7-1.8 45.1-24.1 43.3-49.9C551.6 56.7 529.3 37.3 503.6 39.1z"/>
			<path id="cloud2" fill="#FFF" class="stroke" transform="scale(.8)" d="M503.6 39.1c-2.9 0.2-5.8 0.7-8.5 1.4 -14.7-24.5-42.3-40-72.8-37.8 -31.2 2.2-56.9 22.4-67.6 49.7 -2.5-0.4-5-0.5-7.6-0.3 -18.5 1.3-32.5 17.4-31.2 35.9s17.4 32.5 35.9 31.2c2.3-0.2 4.6-0.6 6.8-1.2 14.1 26.5 42.9 43.6 74.8 41.3 23.1-1.6 43.2-13.1 56.4-30.1 6.3 2.5 13.2 3.6 20.4 3.1 25.7-1.8 45.1-24.1 43.3-49.9C551.6 56.7 529.3 37.3 503.6 39.1z"/>
			<g id="tree">
				<rect x="1114.2" y="721.5" fill="#FFF" class="stroke" width="22" height="127"/>
				<g opacity="0.4">
					<path fill="#0170BB" d="M1085.2 552.4c-29.4 14.7-49.5 45-49.5 80.1 0 49.4 40.1 89.5 89.5 89.5 49.4 0 89.5-40.1 89.5-89.5 0-35.2-20.3-65.6-49.8-80.2"/>
					<path fill="#0170BB" d="M1164.9 552.3c10-10.1 16.1-24 16.1-39.3 0-30.9-25.1-56-56-56s-56 25.1-56 56c0 15.4 6.2 29.3 16.2 39.4"/>
					<path fill="#0170BB" d="M1153.9 561c4-2.4 7.7-5.4 11-8.7"/>
					<path fill="#0170BB" d="M1104.3 545.5c-6.7 1.6-13.1 3.9-19.1 7"/>
				</g>
				<path fill="none" class="stroke round-end" d="M1085.2 552.4c-29.4 14.7-49.5 45-49.5 80.1 0 49.4 40.1 89.5 89.5 89.5 49.4 0 89.5-40.1 89.5-89.5 0-35.2-20.3-65.6-49.8-80.2"/>
				<path fill="none" class="stroke round-end" d="M1164.9 552.3c10-10.1 16.1-24 16.1-39.3 0-30.9-25.1-56-56-56s-56 25.1-56 56c0 15.4 6.2 29.3 16.2 39.4"/>
				<path fill="none" class="stroke round-end" d="M1153.9 561c4-2.4 7.7-5.4 11-8.7"/>
				<path fill="none" class="stroke round-end" d="M1104.3 545.5c-6.7 1.6-13.1 3.9-19.1 7"/>
			</g>
			<g id="cat">
				<circle fill="#0170BB" cx="1115" cy="625" r="25"></circle>
				<path fill="#FFF" stroke="#0170BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1097.1 612.3c0 0-4.5-9.3-0.3-17.7 0 0 4.5 5.6 9.3 7"/>
				<path fill="#FFF" stroke="#0170BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1140.6 612.3c0 0 4.5-9.3 0.3-17.7 0 0-4.5 5.6-9.3 7"/>
				<circle fill="#FFF" stroke="#0170BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="1118.6" cy="621.7" r="23.1"/>
				<path fill="#ED4F43" d="M1122.4 625c0 5.3-1.4 6.3-3.8 6.3 -2.4 0-3.8-1-3.8-6.3"/>
				<path fill="#FFF" stroke="#0170BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1132.8 621.2c0 3.9-3.2 7-7 7s-7-3.2-7-7h-0.2c0 3.9-3.2 7-7 7s-7-3.2-7-7"/>
				<path fill="#FFF" stroke="#0170BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1104.7 613c0 0 0-3.1 2.8-3.8 2.9-0.8 4.2 1.7 4.2 1.7"/>
				<path fill="#FFF" stroke="#0170BB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1132.6 613c0 0 0-3.1-2.8-3.8 -2.9-0.8-4.2 1.7-4.2 1.7"/>
				<path fill="#0170BB" d="M1118.6 622c0 0-2.9-0.8-2.9-1.9v0c0-1 0.8-1.9 1.9-1.9h2.2c1 0 1.9 0.8 1.9 1.9v0C1121.6 621.2 1118.6 622 1118.6 622z"/>
			</g>
			<g id="parachute">
		        <path fill="#a5c7e4" d="M429.4 2.5c-36.7 0-66.3 32.4-66.3 72.4 -9.3-6.7-19.4-5.9-30.1 0C333 74.9 355 2.5 429.4 2.5"/>
		        <path fill="#a5c7e4" d="M429.6 2.5c36.7 0 66.3 32.4 66.3 72.4 9.3-6.7 19.4-5.9 30.1 0C526 74.9 504 2.5 429.6 2.5"/>
		        <path fill="#a5c7e4" d="M429.6 2.5c15.3 0 27.6 36.5 27.7 76 -9.3-3.9-18.5-5.9-27.7-6h-0.2c-9.2 0-18.4 2.1-27.7 6 0.1-39.5 12.4-76 27.7-76"/>
			    <path fill="none" class="stroke" d="M401.8 78.5c0 0-13.4-14.6-38.9-3.6"/>
			    <path fill="none" class="stroke" d="M429.4 2.5c-36.7 0-66.3 32.4-66.3 72.4 -9.3-6.7-19.4-5.9-30.1 0C333 74.9 355 2.5 429.4 2.5"/>
			    <path fill="none" class="stroke" d="M429.6 2.5c36.7 0 66.3 32.4 66.3 72.4 9.3-6.7 19.4-5.9 30.1 0C526 74.9 504 2.5 429.6 2.5"/>
			    <path fill="none" class="stroke" d="M429.6 2.5c15.3 0 27.6 36.5 27.7 76 -9.3-3.9-18.5-5.9-27.7-6h-0.2c-9.2 0-18.4 2.1-27.7 6 0.1-39.5 12.4-76 27.7-76"/>
			    <path fill="none" class="stroke" d="M362.9 75l66.6 104 66-104.1c-25.5-10.9-38.9 3.6-38.9 3.6L429.5 179 401.3 78"/>
			    <polyline fill="none" class="stroke" points="333.3 75 429.5 179 526.3 75 "/>
			</g>
	  		<g id="box">
			  <rect x="356" y="47" fill="#FFF" class="stroke" width="106.2" height="86"/>
			  <polygon fill="#FFF" class="stroke" points=" 462.2 47 356 47 403.2 31 500.1 31 "/>
			  <polygon fill="#FFF" class="stroke" points=" 500.1 117 462.2 133 462.2 47 500.1 31 "/>
			  <polygon opacity="0.4" fill="#0170BB" points="394.1 47 394.5 81.5 408.5 70.5 422.5 81.5 422.5 47 463.3 31 431.7 31 "/>
			  <polygon fill="none" class="stroke" points=" 394.1 47 394.5 81.5 408.5 70.5 422.5 81.5 422.5 47 463.3 31 431.7 31 "/>
			</g>
			<path id="tshirt" fill="#FFF" class="stroke" d="M442 717h35.7c1.7 0 3-1.5 3-3.4v-59.2c0-2.6 2.2-4.4 4.3-3.6l10.4 3.8c3.8 2.2 4.5 0.7 7.1-4.7l7.3-14.5c1.6-2.8 0.7-4.6-1.9-6.9C486 611.1 464.7 608 464.7 608c-1.5 0-2.7 1.2-3 2.9 -0.7 4.8-6.7 14.6-17.4 14.6s-16.7-9.8-17.4-14.6c-0.2-1.7-1.5-2.9-3-2.9 0 0-21.3 3-43.2 20.5 -2.6 2.4-3.5 4.1-1.9 6.9l7.3 14.5c2.7 5.4 3.3 6.8 7.1 4.7l10.4-3.8c2.1-0.8 4.3 1 4.3 3.6v59.2c0 1.9 1.3 3.4 3 3.4h35.7H442z"/>
			<g id="cap">
				<path fill="#FFF" class="stroke" d="M495.9 829.4c-0.4 33-19.4 8.5-50 8.5 -31.4 0-50.4 24.5-50-8.5 0.3-27.9 0.6-62.5 50-62.5C495.5 766.9 496.2 801.5 495.9 829.4z"/>
				<path fill="none" class="stroke" d="M396.4 824.4c0 0 18.9-8 49.5-8s49.5 8 49.5 8"/>
				<ellipse fill="#0170BB" cx="445.9" cy="763.4" rx="8.5" ry="3"/>
				<path fill="none" class="stroke" d="M406.4 819.4c0-20.7-4.8-52 39.5-52.5 44.7-0.5 39.5 31.8 39.5 52.5"/>
				<line fill="none" class="stroke" x1="445.9" y1="766.4" x2="445.9" y2="816.4"/>
				<circle fill="#0170BB" cx="429.4" cy="777.4" r="2"/>
				<circle fill="#0170BB" cx="462.4" cy="777.4" r="2"/>
			</g>
			<g id="ball">
				<circle fill="#FFF" class="stroke" cx="446" cy="803.8" r="47.3"/>
				<line fill="none" class="stroke" x1="446" y1="756.8" x2="446" y2="850.8"/>
				<line fill="none" class="stroke" x1="493" y1="804.3" x2="399" y2="804.3"/>
				<path fill="none" class="stroke" d="M484.2 834c-9.1-6.3-22.8-16.4-38.2-16.4s-29.1 10-38.2 16.4"/>
				<path fill="none" class="stroke" d="M407.8 774.6c9.1 6.3 22.8 16.4 38.2 16.4s29.1-10 38.2-16.4"/>
			</g>
			  <g id="grass">
			    <path fill="#a5c7e4" d="M1226.5 857.5c4.7-20.9-7-33.3-20.4-41.3 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.9 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.6 2.8-5.7 3.6 -7.2 2.9-9.8 11.8-10.5 21 -3.7-12.9-11.1-24.1-11.1-24.1 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.9 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -11 8-17.9 19.2-20.2 31.2 -2.6-13.7-11-26.3-24.4-34.3 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.8 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -8.1 5.9-14 13.6-17.5 22 -4-10-11.4-19-21.7-25.2 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.9 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -11 8-17.9 19.2-20.2 31.2 -2.6-13.7-11-26.3-24.4-34.3 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.9 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -8.5 6.2-14.5 14.2-17.9 23 -3.9-10.4-11.4-19.8-22.1-26.2 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.8 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -11 8-17.9 19.2-20.2 31.2 -2.6-13.7-11-26.3-24.4-34.3 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.9 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -8.1 5.9-14 13.6-17.5 22 -4-10-11.4-19-21.7-25.2 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.9 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -11 8-17.9 19.2-20.2 31.2 -2.6-13.7-11-26.3-24.4-34.3 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.9 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -27.2 20.2-8.8 45.6-8.8 45.6"/>
			    <path fill="none" class="stroke round-end" d="M1226.5 857.5c4.7-20.9-7-33.3-20.4-41.3 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.9 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.6 2.8-5.7 3.6 -7.2 2.9-9.8 11.8-10.5 21 -3.7-12.9-11.1-24.1-11.1-24.1 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.9 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -11 8-17.9 19.2-20.2 31.2 -2.6-13.7-11-26.3-24.4-34.3 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.8 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -8.1 5.9-14 13.6-17.5 22 -4-10-11.4-19-21.7-25.2 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.9 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -11 8-17.9 19.2-20.2 31.2 -2.6-13.7-11-26.3-24.4-34.3 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.9 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -8.5 6.2-14.5 14.2-17.9 23 -3.9-10.4-11.4-19.8-22.1-26.2 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.8 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -11 8-17.9 19.2-20.2 31.2 -2.6-13.7-11-26.3-24.4-34.3 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.9 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -8.1 5.9-14 13.6-17.5 22 -4-10-11.4-19-21.7-25.2 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.9 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -11 8-17.9 19.2-20.2 31.2 -2.6-13.7-11-26.3-24.4-34.3 -2-1.2-4-2.2-6.1-3.1 4.6 8.1 4.6 18.2-1 26.5 -1.3 1.9-2.7 3.5-4.4 5 -1.9-5.6-4.8-11.1-8.9-16 -5.7-6.9-12.9-12.1-20.9-15.4 6.6 10.9 4 24.9-6.5 33 -10.1-7.4-13.4-20.4-8.2-31.3 -7.6 4-14.3 9.8-19.3 17.2 -3.2 4.8-5.5 9.8-6.9 15 -2-1.4-3.8-3.1-5.4-5 -6.4-7.8-7.4-17.8-3.6-26.3 -2 1.1-3.9 2.3-5.7 3.6 -27.2 20.2-8.8 45.6-8.8 45.6"/>
			  </g>
			  <g id="plane">
			    <path fill="#FFF" class="stroke" d="M966.1 203.5c0 0 70.8 0.9 70.8 10.7 0 20.6-23.3 41.3-88.7 43 -34 0.9-98.5 3.6-120-1.8 -30.5-7.6-109.1-44-112-52.8 -13.4-41.2-18.8-49.3 2.7-49.3 12 0 18.6 0 26 0 14.3 0 12.5 2.7 27.8 42.1 0 0 50.2 8.1 66.3-1.8s24.6-23.3 57.6-23.4l21 0.1C938.5 171.3 949.5 176.3 966.1 203.5z"/>
			    <path fill="#a5c7e4" d="M896.5 182.4v18c0 1.1-0.9 2-2 2h-39.6c-1.8 0-2.7-2.1-1.5-3.4 5.7-6 19.6-17.9 41-18.6C895.5 180.3 896.5 181.2 896.5 182.4z"/>
			    <path fill="#a5c7e4" d="M906.5 182.4v18c0 1.1 0.9 2 2 2h39.6c1.8 0 2.4-1.9 1.5-3.4 -6.1-9.6-12.1-18.6-41-18.6C907.4 180.4 906.5 181.2 906.5 182.4z"/>
			    <path fill="none" class="stroke" d="M896.5 182.4v18c0 1.1-0.9 2-2 2h-39.6c-1.8 0-2.7-2.1-1.5-3.4 5.7-6 19.6-17.9 41-18.6C895.5 180.3 896.5 181.2 896.5 182.4z"/>
			    <path fill="none" class="stroke" d="M906.5 182.4v18c0 1.1 0.9 2 2 2h39.6c1.8 0 2.4-1.9 1.5-3.4 -6.1-9.6-12.1-18.6-41-18.6C907.4 180.4 906.5 181.2 906.5 182.4z"/>
			    <path fill="#a5c7e4" d="M745.3 193.7h-58.2c-3.7 0-6.7-3-6.7-6.7v0c0-3.7 3-6.7 6.7-6.7h58.2c3.7 0 6.7 3 6.7 6.7v0C752 190.6 749 193.7 745.3 193.7z"/>
			    <g id="helix">
				    <path fill="#0170BB" d="M1037.8 233.5h-1.8c-4.2 0-3.1-12.1-3.1-12.1s-1.1-12.1 3.1-12.1l0 0c5.2 0 9.4 4.2 9.4 9.4v7.2C1045.4 230.1 1041.9 233.5 1037.8 233.5z"/>
				    <path fill="#a5c7e4" d="M1037.2 214.4L1037.2 214.4c-4.6 0-8.3-34-8.3-34 0-4.6 3.8-8.3 8.3-8.3h0c4.6 0 8.3 3.8 8.3 8.3C1045.6 180.3 1041.8 214.4 1037.2 214.4z"/>
				    <path fill="#a5c7e4" d="M1037.2 228.5L1037.2 228.5c4.6 0 8.3 34 8.3 34 0 4.6-3.8 8.3-8.3 8.3h0c-4.6 0-8.3-3.8-8.3-8.3C1028.9 262.5 1032.7 228.5 1037.2 228.5z"/>
				    <path fill="none" class="stroke" d="M1037.2 214.4L1037.2 214.4c-4.6 0-8.3-34-8.3-34 0-4.6 3.8-8.3 8.3-8.3h0c4.6 0 8.3 3.8 8.3 8.3C1045.6 180.3 1041.8 214.4 1037.2 214.4z"/>
				    <path fill="none" class="stroke" d="M1037.2 228.5L1037.2 228.5c4.6 0 8.3 34 8.3 34 0 4.6-3.8 8.3-8.3 8.3h0c-4.6 0-8.3-3.8-8.3-8.3C1028.9 262.5 1032.7 228.5 1037.2 228.5z"/>
				</g>
		        <use class="helix" xlink:href="#helix" filter="url(#f1)"></use>
			    <line fill="none" class="stroke" x1="728" y1="213.3" x2="520" y2="213.2"/>
			    <polyline fill="none" class="stroke" points="520 182.8 558.5 214.2 520 243.7 "/>
			    <path fill="#FFF" class="stroke" d="M506.9 253.6H21.2c-6.6 0-12-5.4-12-12v-56.7c0-6.6 5.4-12 12-12h485.8c6.6 0 12 5.4 12 12v56.7C518.9 248.2 513.5 253.6 506.9 253.6z"/>
			    <text transform="matrix(1.0027 0 0 1 44.8218 224.8768)" font-family='Fredoka One' font-size="30" fill="#0170BB">Gabung Menjadi Merchant Sekarang</text>
			    <path fill="#a5c7e4" d="M850.5 216.5h79.7l-4.5 10.7c0 0-2.7 7.2-9.9 7.2h-72.6c0 0-6.3-0.9-1.8-7.2L850.5 216.5z"/>
			    <path fill="none" class="stroke" d="M745.3 193.7h-58.2c-3.7 0-6.7-3-6.7-6.7v0c0-3.7 3-6.7 6.7-6.7h58.2c3.7 0 6.7 3 6.7 6.7v0C752 190.6 749 193.7 745.3 193.7z"/>
			    <path fill="none" class="stroke" d="M850.5 216.5h79.7l-4.5 10.7c0 0-2.7 7.2-9.9 7.2h-72.6c0 0-6.3-0.9-1.8-7.2L850.5 216.5z"/>
			  </g>
	 	</defs>

			<g id="window">
				<path opacity="0.4" fill="#0170BB" d="M683.6 773H368c-8.1 0-14.7-6.6-14.7-14.7V565.2c0-8.1 6.6-14.7 14.7-14.7h315.6c8.1 0 14.7 6.6 14.7 14.7v193.1C698.3 766.4 691.7 773 683.6 773z"/>
				<path fill="none" class="stroke" d="M683.6 773H368c-8.1 0-14.7-6.6-14.7-14.7V565.2c0-8.1 6.6-14.7 14.7-14.7h315.6c8.1 0 14.7 6.6 14.7 14.7v193.1C698.3 766.4 691.7 773 683.6 773z"/>
			</g>
	        <use class="box" xlink:href="#box" x="20" y="30"></use>
	        <use class="parachute" xlink:href="#parachute" x="20" y="-112"></use>
	        <rect fill="white" x="320" y="310" width="665" height="238"></rect>
	        <use class="tshirt" xlink:href="#tshirt"></use>
	        <use class="cap" xlink:href="#cap" y="-150"></use>
	        <use class="ball" xlink:href="#ball" y="-140"></use>
			<use class="sky-circle" xlink:href="#sky-circle" x="-10px" y="5"></use>
	        <use class="sky-circle2" xlink:href="#sky-circle" x="500px" y="-125"></use>
	        <use class="sky-circle3" xlink:href="#sky-circle" x="1000px" y="50"></use>
	        <use class="cloud" xlink:href="#cloud2" x="0" y="10"></use>
	        <use class="plane" xlink:href="#plane" y="-80"></use>
	        			
	        <use class="cloud2" xlink:href="#cloud" x="0" y="130"></use>
	        <use class="trees" xlink:href="#tree" x="40" y="0"></use>
			<circle class="cat-shadow" fill="#0170BB" cx="1160" cy="620" r="23"></circle>
	        <use class="cat" xlink:href="#cat" x="15" y="5"></use>
		  <g id="browser">
		    <path fill="none" class="stroke" d="M972.4 847h-640c-8.2 0-15-6.8-15-15V322.5c0-8.2 6.8-15 15-15h640c8.2 0 15 6.8 15 15V832C987.4 840.3 980.7 847 972.4 847z"/>
		    <circle opacity="0.4" fill="#ED4F43" cx="363.7" cy="349.3" r="12.3"/>
		    <circle fill="none" class="stroke" cx="402.2" cy="349.3" r="12.3"/>
		    <path fill="none" stroke="#0170BB" class="stroke" d="M943.5 361.5H454.1c-5.5 0-9.9-4.5-9.9-9.9V344c0-5.5 4.5-9.9 9.9-9.9h489.4c5.5 0 9.9 4.5 9.9 9.9v7.6C953.4 357.1 949 361.5 943.5 361.5z"/>
		    <circle fill="none" class="stroke" cx="363.7" cy="349.3" r="12.3"/>
		  </g>
		  <g id="toldo">
		      <polyline fill="#FFF" class="stroke round-end" points=" 277.6 468.6 317.7 391.8 987.6 391.8 1026.9 468.6 "/>
		      <path fill="#FFF" class="stroke" d="M392.2 391.8l-31.3 79.5c0 22.7 18.4 41 41 41 22.7 0 41-18.4 41-41"/>
		      <path fill="#FFF" class="stroke" d="M466.6 391.8l-22.3 79.5c0 22.7 18.4 41 41 41s41-18.4 41-41"/>
		      <path id="tol" fill="#FFF" class="stroke" d="M527.6 471.2c0 22.7 18.4 41 41 41 22.7 0 41-18.4 41-41"/>
		      <path fill="#FFF" class="stroke" d="M615.5 391.8l-4.5 79.5c0 22.7 18.4 41 41 41 22.7 0 41-18.4 41-41"/>
		      <path fill="#FFF" class="stroke" d="M689.9 391.8l4.4 79.5c0 22.7 18.4 41 41 41s41-18.4 41-41"/>
		      <path fill="#FFF" class="stroke" d="M859.7 471.2c0 22.7-18.4 41-41 41 -22.7 0-41-18.4-41-41l-13.3-79.5"/>
		      <use class="tol" xlink:href="#tol" x="-250"></use>
		      <use class="tol" xlink:href="#tol" x="334"></use>
		      <use class="tol" xlink:href="#tol" x="417"></use>
		      <line class="stroke round-end" x1="277" y1="470.5" x2="1027" y2="470.5"/>
		      <line class="stroke" x1="541" y1="391.8" x2="526.5" y2="471.2"/>
		      <line class="stroke" x1="838.8" y1="391.8" x2="860.1" y2="471.2"/>
		      <path opacity="0.4" fill="#0170BB" d="M467.3 392.1h73.4l-14 79.5c0 22.7-18.4 41-41 41 -22.7 0-41-18.4-41-41L467.3 392.1z"/>
		      <path opacity="0.4" fill="#0170BB" d="M615.7 392.1H690l3.5 79.5c0 22.7-18.4 41-41 41 -22.7 0-41-18.4-41-41L615.7 392.1z"/>
		      <path opacity="0.4" fill="#0170BB" d="M765.1 392.1h73.4l21.8 79.5c0 22.7-18.4 41-41 41s-41-18.4-41-41L765.1 392.1z"/>
		      <path opacity="0.4" fill="#0170BB" d="M913.6 392.1h73.4l40.2 79.5c0 22.7-18.4 41-41 41 -22.7 0-41-18.4-41-41L913.6 392.1z"/>
		      <path opacity="0.4" fill="#0170BB" d="M317.9 392.1h73.4l-31.4 79.5c0 22.7-18.4 41-41 41 -22.7 0-41-18.4-41-41L317.9 392.1z"/>
		    <line fill="none" class="stroke" x1="944.4" y1="471.6" x2="913.2" y2="392.2"/>
		  </g>
		  <g id="door">
		    <path fill="none" class="stroke" d="M955.8 846V560.5c0-5.5-4.5-10-10-10H738.6c-5.5 0-10 4.5-10 10V846"/>
		    <rect fill="#0170BB" x="730" y="700" width="225" height="15"></rect>
		    <g id="sign">
			    <polyline fill="none" class="stroke" points=" 800.8 672.8 842.5 601 883.6 672.8 "/>
			    <ellipse fill="#FFF" class="stroke" cx="842.2" cy="601" rx="10" ry="10"/>
			    <path fill="#a5c7e4" d="M909.3 740.7H775.1c-5.5 0-10-4.5-10-10v-47.9c0-5.5 4.5-10 10-10h134.2c5.5 0 10 4.5 10 10v47.9C919.3 736.2 914.8 740.7 909.3 740.7z"/>
			    <text transform="matrix(1.0027 0 0 1 789.6294 721.7501)" fill="#FFF" font-family='Fredoka One' font-size="38"> BUKA </text>
			    <path fill="none" class="stroke" d="M909.3 740.7H775.1c-5.5 0-10-4.5-10-10v-47.9c0-5.5 4.5-10 10-10h134.2c5.5 0 10 4.5 10 10v47.9C919.3 736.2 914.8 740.7 909.3 740.7z"/>
			</g>
		  </g>
		    <g id="button">
			    <path opacity="0.4" fill="#0170BB" d="M650.5 725.5H547.8c-4.7 0-8.6-3.9-8.6-8.6v-18.1c0-4.7 3.9-8.6 8.6-8.6h102.7c4.7 0 8.6 3.9 8.6 8.6v18.1C659.2 721.7 655.3 725.5 650.5 725.5z"/>
			    <path fill="none" class="stroke" d="M650.5 725.5H547.8c-4.7 0-8.6-3.9-8.6-8.6v-18.1c0-4.7 3.9-8.6 8.6-8.6h102.7c4.7 0 8.6 3.9 8.6 8.6v18.1C659.2 721.7 655.3 725.5 650.5 725.5z"/>
		 	</g>
		  	<g id="text">
			    <line fill="none" class="stroke round-end" x1="539.2" y1="605.5" x2="652.2" y2="605.5"/>
			    <line fill="none" class="stroke round-end" x1="539.2" y1="630.5" x2="669.2" y2="630.5"/>
			    <line fill="none" class="stroke round-end" x1="539.2" y1="655.5" x2="619.2" y2="655.5"/>
			 </g>
	        <use class="grass" xlink:href="#grass" x="130" y="0"></use>
			<rect class="grass" x="130" y="850" fill="#a5c7e4" width="100%" height="80"></rect>
		</svg>
	</div>
</div>
          </div>
        </div>
      </section>

  

      <section>
    <div class="container py-5">
    <div class="row flex-center mb-5">
            <div class="col-auto text-center my-4">
              <h1 class="fw-bold">Program Belanja</h1>
              <button class="btn btn-light rounded-pill shadow fw-bold first">?</button>
            </div>
          </div>  
      <div class="row no-gutters">
      <div class="col-sm">
            <div class="flipper">
              <div class="flipper-card">
                <div class="flipper-back">
                <h4 style="font-weight: bold;">VEVO</h4>
                <p style="bold">Program UMKM Dengan berbagai Kategori Yang Pembayarannya Dengan Scan QR Code</p>
                </div>
                <div class="flipper-front" style="background-image:url(../assets/img/illustrations/vevo.svg);background-position:center;background-size:cover;"></div>
              </div>
            </div>

          </div>

          
          <div class="col-sm">

            <div class="flipper">
              <div class="flipper-card">
                <div class="flipper-back">
                <h4 style="font-weight: bold;">EVOUCHER</h4>
                <p style="bold">Program Belanja Yang Pembayaran Menggunakan Evoucher Merchant Dengan Ribuan Outlet Seluruh Indonesia</p>
                </div>
                <div class="flipper-front" style="background-image:url(../assets/img/illustrations/voucherfix.svg);background-position:center;background-size:cover;"></div>
              </div>
            </div>

          </div>
          
          <div class="col-sm">

            <div class="flipper">
              <div class="flipper-card">
                <div class="flipper-back">
                <h4 style="font-weight: bold;">
                PPOB
                </h4>
                <p>Program Pembayaran Untuk Semua Tagihan Seperti Listrik,Air,Pulsa,Paket Data Dan Lain-lain</p>
                <br/>
                </div>
                <div class="flipper-front"  style="background-image:url(../assets/img/illustrations/ppob.svg);background-position:center;background-size:cover;"></div>
              </div>
            </div>
          </div>
        </div>

  </div>
</section>




      
  <div class="container">
  <div class="row flex-center mb-5">
            <div class="col-auto text-center my-4">
              <h1 class="mb-4 fw-bold">Merchant E-Voucher</h1>
              <p><i class="fas fa-handshake fa-2x"></i></p> 
            </div>
          </div>
	<div class="row">
		<div class="MultiCarousel" data-items="1,3,5,4" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner" style="text-align: center;">
                <div class="item">
                    <div class="pad90">
                        <img src="../assets/img/bakerzin.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                       <img src="../assets/img/bakmigm.jpg" width="200px" style="padding-top: 20px;">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/chatime.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/guess.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/hnm.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/indomaret.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/kimukatsu.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/kintan.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/masterwok.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/nudles.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/onokabe.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/paradise.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/pepper.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/posh.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/ptgilang.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/putumade.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/senza.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/shaburi.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/superdry.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/tokopedia.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/transmart.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/vnc.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/we.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad90">
                    <img src="../assets/img/wz.jpg">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
	</div>
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

      // sweet alert
      document.querySelector(".first").addEventListener('click', function(){
        let timerInterval
        Swal.fire({
          html: '<h5 style="font-size: 0.8em;">Klik Gambar Untuk Info Lebih Lengkap</h5>',
          timer: 5000,
          timerProgressBar: true,
          didOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(() => {
              var content = Swal.getContent()
              if (content) {
                var b = content.querySelector('b')
                if (b) {
                  b.textContent = Swal.getTimerLeft()
                }
              }
            }, 100)
          },
          willClose: () => {
            clearInterval(timerInterval)
          }
        }).then((result) => {
          /* Read more about handling dismissals below */
          if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
          }
        })
      });


      function TestSweetAlert(){
      Swal.fire({
      html: '<div style="text-align: left; font-weight: bold; font-size: 1.5em;">Top Mentor Titanium</div><br/><div class="frameatas"><iframe class="responsive-frameatas align-center" src="https://mobapp.vave.co.id/contest_februari.php"></iframe></div> <br/> <h1>SYARAT & KETENTUAN:</h1><p> Pemenang No. 1 Sampai 10 (Top 10) Minimum Mentori 5 Orang Titanium / Titanium Star<br/>Grup Member Lama Anda, Yang Upgrade Bulan Ini Ke Titanium / Titanium Star,<br/>Juga Terhitung Dalam Akumulasi Promo Top 10 Mentor<br/>Promo Top 10 Mentor Ini Berakhir Tanggal 28 Februari 2021 Jam 23.59 WIB</p>',
      showCloseButton: true,
      showConfirmButton: false,
      customClass: 'swal-wide',
      focusConfirm: false,
      })
      };

      $('#testeSWAL').on("click",TestSweetAlert);

      </script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,700;1,900&amp;display=swap" rel="stylesheet">
  </body>

</html>