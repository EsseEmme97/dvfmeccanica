<?
$lingua = 1;
require_once("../inc/global.php");
require_once("../inc/header.php");
require_once($pathindex . "inc/mysqli.php");
// $database = new DB();
$titleseo = "DVF - azienda";
$descriptionseo = "descrizione";
$image = "assets/images/global/favicon/DVF-favicon.ico";
$widthseo = "400";
$heightseo = "115";
?>
<!DOCTYPE html>
<html lang="it">

<head>
	<? require_once($pathindex . "inc/tagmanager.php") ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<? require_once($pathindex . "inc/htmlcx/meta-ita.php"); ?>
	<link rel="canonical" href="<?= $pageurlseolan ?>">
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= $pathindex ?>assets/images/global/favicon/DVF-favicon.ico">
	<link href="<?= $pathindex ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="<?= $pathindex ?>assets/css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="<?= $pathindex ?>assets/css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="<?= $pathindex ?>assets/css/all.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="<?= $pathindex ?>assets/css/animate.css" rel="stylesheet">
	<!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="<?= $pathindex ?>assets/css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="<?= $pathindex ?>assets/css/mousecursor.css">
	<!-- Main Custom Css -->
	<link href="<?= $pathindex ?>assets/css/custom.css" rel="stylesheet" media="screen">
</head>

<body>
	<? require_once($pathindex . "inc/tagmanager_no.php") ?>

	<!-- ==================== Start Navbar ==================== -->

	<? require_once($pathindex . "inc/htmlcx/menu-ita.php") ?>

	<!-- ==================== End Navbar ==================== -->

	<!-- Page Header Start -->
	<section class="page-header parallaxie">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Lavora con <span>Noi</span></h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= $pathindex ?>">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Lavora con noi</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</section>
	<!-- Page Header End -->

	<!-- page job opportunities -->
	<section class="page-services">
		<div class="container">
			<div class="row section-row align-items-center">
				<div class="col-lg-6">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">our history</h3>
						<h2 class="text-anime-style-2" data-cursor="-opaque">Foundation of excellences <span>in industry</span></h2>
					</div>
					<!-- Section Title End -->
				</div>
				<div class="col-lg-6">
					<!-- Section Title Content Start -->
					<div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
						<p>Built on a legacy of quality and innovation, we have established a strong foundation in the industrial sector, consistently delivering reliable solutions that drive progress and set industry standards.</p>
					</div>
					<!-- Section Title Content End -->
				</div>
			</div>
			<div class="row">
				<? for($i=1; $i<=4; $i++): ?>
				<div class="col-lg-3 col-md-6">
					<!-- Service Item Start -->
					<div class="service-item">
						<div class="icon-box text-center">
							<svg viewBox="0 0 1024 1024" width="64px" heigth="64px" fill="#000000" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
								<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
								<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
								<g id="SVGRepo_iconCarrier">
									<path d="M276 1004.8c-34.4-8-158.4-57.6-168.8-126.4-7.2-44.8 10.4-88.8 48.8-120.8 28.8-24 100.8-69.6 130.4-84.8 11.2-5.6 27.2-12 41.6-18.4 40.8-17.6 56.8-25.6 60.8-32.8 4.8-11.2 4.8-19.2 0.8-40.8v-1.6l-1.6-1.6C371.2 560 330.4 510.4 320 480c-10.4-30.4-21.6-92-22.4-120v-6.4H214.4c1.6-12.8 7.2-40 16-55.2 12.8-22.4 32.8-41.6 36-43.2l3.2-1.6V248c0-18.4 10.4-82.4 56.8-128.8 56-56 134.4-96 185.6-96h3.2c51.2 0 129.6 40.8 185.6 96 46.4 46.4 56.8 110.4 56.8 128.8v4l3.2 1.6c3.2 1.6 23.2 20.8 36 43.2 8.8 15.2 13.6 42.4 16 55.2H728.8v6.4c0 28-12 89.6-22.4 120-10.4 30.4-51.2 80-68 97.6l-1.6 1.6v1.6c-4 21.6-4.8 29.6 0.8 40.8 3.2 8 19.2 15.2 60.8 32.8 14.4 6.4 29.6 12.8 41.6 18.4 30.4 15.2 101.6 60.8 130.4 84.8 38.4 32 56 76 48.8 120.8-11.2 68.8-134.4 118.4-168.8 126.4-25.6-8.8-163.2-20.8-212-20.8h-14.4c-3.2 0-6.4 0.8-11.2 0.8-4 0-8-0.8-11.2-0.8h-14.4c-48 1.6-185.6 13.6-211.2 22.4z m467.2-39.2l2.4-0.8c12-2.4 120.8-27.2 136-104.8 8-44-43.2-82.4-68-100-16.8-12.8-31.2-21.6-49.6-31.2l-8-4-41.6 234.4 6.4 0.8c10.4 1.6 17.6 3.2 20 4l2.4 1.6zM262.4 728.8c-21.6 11.2-35.2 20.8-49.6 31.2-24.8 18.4-76 56.8-68 100 15.2 77.6 123.2 102.4 136 104.8l2.4 0.8 1.6-1.6c2.4-0.8 10.4-2.4 20-4l6.4-0.8-41.6-234.4-7.2 4z m265.6 216c45.6 0.8 87.2 3.2 119.2 6.4l6.4 0.8 36.8-257.6-8-4c-6.4-3.2-13.6-5.6-20.8-8.8-27.2-11.2-55.2-22.4-66.4-61.6-1.6-7.2-2.4-14.4-1.6-22.4 0.8-9.6 4-17.6 7.2-28 0.8-4 2.4-7.2 4-12 18.4-16 44.8-54.4 58.4-80.8l8.8-18.4c6.4-16.8 12-56 15.2-85.6l0.8-7.2H338.4l0.8 7.2c4.8 43.2 10.4 72 15.2 85.6l8.8 18.4c14.4 27.2 40.8 65.6 59.2 81.6 1.6 4 2.4 8 4 11.2 3.2 9.6 6.4 18.4 7.2 28 0.8 8 0.8 15.2-1.6 22.4-11.2 39.2-39.2 50.4-66.4 61.6-7.2 3.2-14.4 5.6-20.8 8.8l-8 4 36.8 257.6 6.4-0.8c32.8-3.2 73.6-5.6 119.2-6.4H528zM308.8 261.6c-6.4 3.2-16 8.8-26.4 26.4-5.6 8.8-6.4 16-7.2 20.8l-0.8 7.2H751.2l-0.8-7.2c0-4.8-1.6-11.2-6.4-20.8-10.4-17.6-20.8-23.2-26.4-26.4 0-23.2 0.8-69.6-41.6-112-55.2-56-116.8-88.8-162.4-88.8-60.8 0-122.4 48.8-162.4 88.8-42.4 42.4-42.4 89.6-42.4 112z" fill=""></path>
								</g>
							</svg>
						</div>

						<div class="service-body text-center">
							<h3>Posizione lavorativa <?= $i ?></h3>
						</div>

						<div class="text-center">
							<div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
								<a href="<?= $pathindex . "lavora-con-noi/impiegato-". $i ?>" class="btn-default"><span>Scopri di più</span></a>
							</div>
						</div>
					</div>
					<!-- Service Item End -->
				</div>
				<? endfor ?>
			</div>
		</div>
	</section>
	<!-- end page job opportunities -->

	<!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Contact Information Start -->
                    <div class="contact-information">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Contattaci</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Rimaniamo in <span>contatto</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Reach out for any inquiries, support, or to discuss how we can meet your industrial needs.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Info Box Start -->
                        <div class="contact-info-box">
                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="<?= $pathindex ?>assets/images/global/recapiti/Icon fa-solid-phone.svg" alt="icona telefono">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Telefono</h3>
                                    <p>+1.809.120.670</p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->

                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="<?= $pathindex ?>assets/images/global/recapiti/Icon material-round-mail.svg" alt="icona email">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Email</h3>
                                    <p>info@domain.com</p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->

                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <i class="fa-solid fa-location-dot text-white fa-xl"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h3>Our Address</h3>
                                    <p>37 San Juan Lane Graaf Florisstraat 22A,3021 CH</p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->
                        </div>
                    </div>
                    <!-- Contact Information End -->
                </div>

                <div class="col-lg-7">
                    <!-- Page Contact Form Start -->
                    <div class="contact-us-form">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Contattaci</h2>
                        </div>

                        <div class="contact-form">
                            <!-- Contact Form Start -->
                            <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.5s">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter first name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter last name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" name ="email" class="form-control" id="email" placeholder="Enter your e-mail" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone no." required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="4" placeholder="Write Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default"><span>submit message</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- Contact Form End -->
                        </div>
                    </div>
                    <!-- Page Contact Form End -->
                </div> 
            </div>
        </div>
    </div>
    <!--  Page Contact Us End -->

	<!-- ==================== Start Footer ==================== -->
	<? require_once($pathindex . "inc/htmlcx/footer-ita.php") ?>
	<!-- ==================== End Footer ==================== -->
	<!-- Jquery Library File -->
	<script src="<?= $pathindex ?>assets/js/jquery-3.7.1.min.js"></script>
	<!-- Bootstrap js file -->
	<script src="<?= $pathindex ?>assets/js/bootstrap.min.js"></script>
	<!-- Validator js file -->
	<script src="<?= $pathindex ?>assets/js/validator.min.js"></script>
	<!-- SlickNav js file -->
	<script src="<?= $pathindex ?>assets/js/jquery.slicknav.js"></script>
	<!-- Swiper js file -->
	<script src="<?= $pathindex ?>assets/js/swiper-bundle.min.js"></script>
	<!-- Counter js file -->
	<script src="<?= $pathindex ?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?= $pathindex ?>assets/js/jquery.counterup.min.js"></script>
	<!-- Isotop js file -->
	<script src="<?= $pathindex ?>assets/js/isotope.min.js"></script>
	<!-- Magnific js file -->
	<script src="<?= $pathindex ?>assets/js/jquery.magnific-popup.min.js"></script>
	<!-- SmoothScroll -->
	<script src="<?= $pathindex ?>assets/js/SmoothScroll.js"></script>
	<!-- Parallax js -->
	<script src="<?= $pathindex ?>assets/js/parallaxie.js"></script>
	<!-- MagicCursor js file -->
	<script src="<?= $pathindex ?>assets/js/gsap.min.js"></script>
	<script src="<?= $pathindex ?>assets/js/magiccursor.js"></script>
	<!-- Text Effect js file -->
	<script src="<?= $pathindex ?>assets/js/SplitText.js"></script>
	<script src="<?= $pathindex ?>assets/js/ScrollTrigger.min.js"></script>
	<!-- YTPlayer js File -->
	<script src="<?= $pathindex ?>assets/js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Wow js file -->
	<script src="<?= $pathindex ?>assets/js/wow.min.js"></script>
	<!-- Main Custom js file -->
	<script src="<?= $pathindex ?>assets/js/function.js"></script>
</body>

</html>