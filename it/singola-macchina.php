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
	<section class="page-header parallaxie" style="background-image: url('<?= $pathindex ?>assets/images/immagini/parco macchine/parco_macchine-header.webp');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Macchina <span>dettaglio</span></h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= $pathindex ?>">home</a></li>
								<li class="breadcrumb-item" aria-current="page">Parco macchine</li>
								<li class="breadcrumb-item active" aria-current="page">macchina1</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</section>
	<!-- Page Header End -->

	<!-- Page Service Single Start -->
	<section class="page-service-single">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<!-- Service Sidebar Start -->
					<div class="service-sidebar">
						<!-- Service Category List Start -->
						<div class="service-catagery-list wow fadeInUp">
							<h3>services category</h3>
							<ul>
								<li><a href="#">personal coaching</a></li>
								<li><a href="#">career development</a></li>
								<li><a href="#">team coaching</a></li>
								<li><a href="#">relationship coaching</a></li>
								<li><a href="#">spiritual coaching</a></li>
							</ul>
						</div>
						<!-- Service Category List End -->

						<!-- Sidebar CTA Box Start -->
						<div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
							<!-- Sidebar Image Start -->
							<div class="sidebar-cta-logo">
								<img src="images/footer-logo.svg" alt="">
							</div>
							<!-- Sidebar Image End -->

							<!-- Sidebar CTA Body Start -->
							<div class="sidebar-cta-Body">
								<!-- Sidebar CTA Content Start -->
								<div class="sidebar-cta-content">
									<h3>Need <span>help!</span></h3>
									<p>Got questions or need assistance with your Industry needs?</p>
								</div>
								<!-- Sidebar CTA Content End -->

								<!-- Sidebar CTA Contact List Start -->
								<div class="sidebar-cta-contact-list">
									<!-- Sidebar CTA Contact Item Start -->
									<div class="sidebar-cta-contact-item">
										<div class="icon-box">
											<img src="images/icon-phone-accent.svg" alt="">
										</div>

										<div class="cta-contact-item-title">
											<h3>+1 840 841 256</h3>
										</div>
									</div>
									<!-- Sidebar CTA Contact Item End -->

									<!-- Sidebar CTA Contact Item Start -->
									<div class="sidebar-cta-contact-item">
										<div class="icon-box">
											<img src="images/icon-mail-accent.svg" alt="">
										</div>

										<div class="cta-contact-item-title">
											<h3>info@domain.com</h3>
										</div>
									</div>
									<!-- Sidebar CTA Contact Item End -->
								</div>
								<!-- Sidebar CTA Contact List End -->
							</div>
							<!-- Sidebar CTA Body End -->
						</div>
						<!-- Sidebar CTA Box End -->
					</div>
					<!-- Service Sidebar End -->
				</div>

				<div class="col-lg-8">
					<!-- Service Single Content Start -->
					<div class="service-single-content">
						<!-- Service Featured Image Start -->
						<div class="service-featured-image">
							<figure class="image-anime reveal">
								<img src="<?= $pathindex ?>assets/images/immagini/parco macchine/01-DMG-MORI-DMC-80-U-DUOBLOCK.webp" alt="immagine macchinario">
							</figure>
						</div>
						<!-- Service Featured Image End -->

						<!-- Service Entry Start -->
						<div class="service-entry">
							<span class="d-block h2 wow fadeInDown">Macchina 1</span>
							<p class="wow fadeInUp">Our business coaching services are designed to help entrepreneurs and professionals unlock their full potential, overcome challenges, and achieve sustainable growth. We provide tailored strategies and expert insights to improve leadership skills, enhance team performance, and streamline business operations. Whether you're launching a startup or scaling an established business, our coaching empowers you to make informed decisions, set clear goals, and drive meaningful results. With a focus on both personal development and business success, we guide you toward building a thriving, purpose-driven enterprise.</p>
							<p class="wow fadeInUp" data-wow-delay="0.2s">Through expert guidance, we focus on refining your vision, enhancing operations, and unlocking new opportunities for growth. With a collaborative approach, we empower you to make confident decisions and build a sustainable, thriving business.</p>
							<span class="d-block h2">Caratteristiche <span class="fw-bold">Tecniche</span></span>
							<ul class="row">
								<li class="col-6"><img src="<?= $pathindex ?>assets/images/global/logo/dettaglio/DVF-dettaglio_rosso.svg" alt="dettaglio logo"> <span class="ms-1">Testo</span></li>
								<li class="col-6"><img src="<?= $pathindex ?>assets/images/global/logo/dettaglio/DVF-dettaglio_rosso.svg" alt="dettaglio logo"> <span class="ms-1">Testo</span></li>
								<li class="col-6"><img src="<?= $pathindex ?>assets/images/global/logo/dettaglio/DVF-dettaglio_rosso.svg" alt="dettaglio logo"> <span class="ms-1">Testo</span></li>
								<li class="col-6"><img src="<?= $pathindex ?>assets/images/global/logo/dettaglio/DVF-dettaglio_rosso.svg" alt="dettaglio logo"> <span class="ms-1">Testo</span></li>
								<li class="col-6"><img src="<?= $pathindex ?>assets/images/global/logo/dettaglio/DVF-dettaglio_rosso.svg" alt="dettaglio logo"> <span class="ms-1">Testo</span></li>
								<li class="col-6"><img src="<?= $pathindex ?>assets/images/global/logo/dettaglio/DVF-dettaglio_rosso.svg" alt="dettaglio logo"> <span class="ms-1">Testo</span></li>
								<li class="col-6"><img src="<?= $pathindex ?>assets/images/global/logo/dettaglio/DVF-dettaglio_rosso.svg" alt="dettaglio logo"> <span class="ms-1">Testo</span></li>
								<li class="col-6"><img src="<?= $pathindex ?>assets/images/global/logo/dettaglio/DVF-dettaglio_rosso.svg" alt="dettaglio logo"> <span class="ms-1">Testo</span></li>
								<li class="col-6"><img src="<?= $pathindex ?>assets/images/global/logo/dettaglio/DVF-dettaglio_rosso.svg" alt="dettaglio logo"> <span class="ms-1">Testo</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- Page Service Single End -->
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