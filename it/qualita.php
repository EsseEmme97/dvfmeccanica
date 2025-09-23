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
	<section class="page-header parallaxie" style="background-image: url('<?= $pathindex ?>assets/images/immagini/qualita/qualita-header.webp');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque"><span>Qualità</span></h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= $pathindex ?>">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Qualità</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</section>
	<!-- Page Header End -->

	<!-- Our Process Section Start -->
	<section class="our-process bg-light-gray">
		<div class="container">
			<div class="row section-row align-items-center">
				<div class="col-lg-6">
					<!-- Section Title Start -->
					<div class="section-title">
						<span class="wow fadeInUp label text-black">Come lo facciamo</span>
						<h2 class="text-anime-style-2" data-cursor="-opaque">Streamlined processes <span>for optimal efficiency</span></h2>
					</div>
					<!-- Section Title End -->
				</div>

				<div class="col-lg-6">
					<!-- Section Title Content Start -->
					<div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
						<p>Lavoriamo con la massima serietà e dedizione: i componenti meccanici che produciamo vogliono essere sinonimo di qualità.</p>
					</div>
					<!-- Section Title Content End -->
				</div>
			</div>

			<div class="row align-items-center">
				<div class="col-lg-6">
					<!-- Our Process Image Start -->
					<div class="our-process-image">
						<figure class="image-anime reveal">
							<img src="<?= $pathindex ?>assets/images/immagini/qualita/qualita-img.jpg" alt="immagine lavoro svolto">
						</figure>
					</div>
					<!-- Our Process Image End -->
				</div>

				<div class="col-lg-6">
					<!-- Process Step Box Start -->
					<div class="process-steps-box">
						<!-- Process Step Item Start -->
						<div class="process-step-item wow fadeInUp">
							<div class="process-step-no">
								<span>01</span>
							</div>
							<div class="process-step-content">
								<span class="title">Qualità certificata ISO 9001</span>
								<p>La qualità del nostro lavoro è certificata secondo gli standard internazionali ISO 9001</p>
							</div>
						</div>
						<!-- Process Step Item End -->

						<!-- Process Step Item Start -->
						<div class="process-step-item active wow fadeInUp" data-wow-delay="0.25s">
							<div class="process-step-no">
								<span>02</span>
							</div>
							<div class="process-step-content">
								<span class="title">Pannelli fotovoltaici</span>
								<p>Riduciamo il nostro impatto ambientale grazie al nuovo impianto fotovoltaico, che ci rende green</p>
							</div>
						</div>
						<!-- Process Step Item End -->

						<!-- Process Step Item Start -->
						<div class="process-step-item wow fadeInUp" data-wow-delay="0.5s">
							<div class="process-step-no">
								<span>03</span>
							</div>
							<div class="process-step-content">
								<span class="title">Sistemi di aspirazione centralizzati</span>
								<p>Disponiamo di due sistemi d’aspirazione centralizzati, per garantire la massima qualità dell’aria</p>
							</div>
						</div>
						<!-- Process Step Item End -->
					</div>
					<!-- Process Step Box End -->
				</div>
			</div>
		</div>
	</section>
	<!-- Our Process Section End -->

	<section class="our-work mb-4">
		<div class="container">
			<div class="row section-row align-items-center">
				<div class="col-lg-6">
					<!-- Section Title Start -->
					<div class="section-title">
						<span class="wow fadeInUp label text-black">our work</span>
						<h2 class="text-anime-style-3" data-cursor="-opaque">Our successful project <span>initiatives</span></h2>
					</div>
					<!-- Section Title End -->
				</div>

				<div class="col-lg-6">
					<!-- Section Title Content Start -->
					<div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
						<p>Our successful project initiatives showcase our commitment to excellence and innovation across various industries.</p>
					</div>
					<!-- Section Title Content End -->
				</div>
			</div>
			<!-- Project Query Box Start -->
			<div class="project-query-box">
				<!-- Project Query Item Start -->
				<div class="project-query-item">
					<!-- Project Query Content Start -->
					<div class="project-query-content">
						<span class="text-anime-style-2 h2 fw-bold">The problem</span>
						<p class="wow fadeInUp" data-wow-delay="0.2s">The project addresses inconsistencies in product quality, inefficiencies in production processes.</p>
					</div>
					<!-- Project Query Content End -->

					<!-- Project Query Image Start -->
					<div class="project-query-img">
						<figure class="image-anime reveal">
							<img src="<?= $pathindex ?>assets/images/immagini/qualita/qualita-iso9001.webp" alt="immagine lavoro svolto">
						</figure>
					</div>
					<!-- Project Query Image End -->
				</div>
				<!-- Project Query Item End -->

				<!-- Project Query Item Start -->
				<div class="project-query-item">
					<!-- Project Query Content Start -->
					<div class="project-query-content">
						<span class="text-anime-style-2 h2 fw-bold">The solution</span>
						<p class="wow fadeInUp" data-wow-delay="0.2s">The project implements Total Quality Management solutions to improve product quality.</p>
					</div>
					<!-- Project Query Content End -->

					<!-- Project Query Image Start -->
					<div class="project-query-img">
						<figure class="image-anime reveal">
							<img src="<?= $pathindex ?>assets/images/immagini/qualita/qualita-fotovoltaico.webp" alt="immagine fotovoltaico">
						</figure>
					</div>
					<!-- Project Query Image End -->
				</div>
				<!-- Project Query Item End -->
				<!-- Project Query Item Start -->
				<div class="project-query-item">
					<!-- Project Query Content Start -->
					<div class="project-query-content">
						<span class="text-anime-style-2 h2 fw-bold">The problem</span>
						<p class="wow fadeInUp" data-wow-delay="0.2s">The project addresses inconsistencies in product quality, inefficiencies in production processes.</p>
					</div>
					<!-- Project Query Content End -->

					<!-- Project Query Image Start -->
					<div class="project-query-img">
						<figure class="image-anime reveal">
							<img src="<?= $pathindex ?>assets/images/immagini/qualita/qualita-aspirazione.webp" alt="immagine aspirazione">
						</figure>
					</div>
					<!-- Project Query Image End -->
				</div>
				<!-- Project Query Item End -->
			</div>
			<!-- Project Query Box End -->
		</div>
	</section>

	<!-- Start CTA -->
	<section class="bg-accent text-white py-3 py-lg-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-center text-lg-start">
					<span class="h2">Hai un progetto da sviluppare? <br>Contattaci adesso</span>
				</div>
				<div class="col-lg-6 d-flex justify-content-center justify-content-lg-start mt-5 mt-lg-0">
					<a class="h2 scale-animation font-bold" href="tel:+390445641300">+390445641300</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end cta -->
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