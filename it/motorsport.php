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
	<section class="page-header parallaxie motorsport" style="background-image: url('<?= $pathindex ?>assets/images/immagini/motorsport/motorsport-header.webp');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Motorsport</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= $pathindex ?>">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Motorsport</li>
							</ol>
						</nav>
						<div class="about-content-btn wow fadeInUp mt-5" data-wow-delay="0.75s">
							<a href="<?= $pathindex ?>azienda" class="btn-default"><span>Scopri di più</span></a>
						</div>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</section>
	<!-- Page Header End -->

	<section class="py-5">
		<div class="container d-flex justify-content-center">
			<blockquote class="wow fadeInUp">
				Correre veloci verso l'obbiettivo, al fianco di sognatori, pionieri e campioni... Determinazione, dedizione, concentrazione e voglia di vincere ci hanno fatto fare tanta strada in 30 anni di sfide. Accontentarsi? MAI
			</blockquote>
		</div>
	</section>

	<!-- Our Story Start -->
	<section class="our-story pt-0">
		<div class="container">
			<div class="row section-row">
				<div class="col-lg-6">
					<!-- Section Title Start -->
					<div class="section-title">
						<span class="wow fadeInUp label text-black">our story</span>
						<h2 class="text-anime-style-2" data-cursor="-opaque">Transforming industries <span>with innovative efficient solutions</span></h2>
					</div>
					<!-- Section Title End -->
				</div>

				<div class="col-lg-6">
					<!-- Our Story Header Image Start -->
					<div class="our-story-header-img">
						<figure class="reveal image-anime">
							<img src="<?= $pathindex ?>assets/images/immagini/motorsport/motorsport-intro-1.webp" alt="immagine azienda">
						</figure>

						<figure class="reveal image-anime">
							<img src="<?= $pathindex ?>assets/images/immagini/motorsport/motorsport-intro-2.webp" alt="immagine azienda">
						</figure>
					</div>
					<!-- Our Story Header Image End -->
				</div>
			</div>

			<div class="row align-items-center">
				<div class="col-lg-6">
					<!-- Our Story Image Start -->
					<div class="our-story-img">
						<figure class="reveal image-anime">
							<img src="<?= $pathindex ?>assets/images/immagini/motorsport/motorsport-intro-3.webp" alt="immagine azienda">
						</figure>
					</div>
					<!-- Our Story Image End -->
				</div>

				<div class="col-lg-6">
					<div class="our-story-content">
						<div class="our-story-content-body">
							<p>We specialize in revolutionizing industries by delivering innovative, efficient solutions that enhance productivity and streamline processes. Through advanced technologies, precision engineering, and sustainable practices.</p>
						</div>

						<div class="our-story-counters">
							<!-- Our Story Counter Start -->
							<div class="our-story-counter">
								<span><span class="counter">10</span>k+</span>
								<p>completed project</p>
							</div>
							<!-- Our Story Counter End -->

							<!-- Our Story Counter Start -->
							<div class="our-story-counter">
								<span><span class="counter">15</span>+</span>
								<p>satisfied customer</p>
							</div>
							<!-- Our Story Counter End -->

							<!-- Our Story Counter Start -->
							<div class="our-story-counter">
								<span><span class="counter">10</span>k+</span>
								<p>years of mastery</p>
							</div>
							<!-- Our Story Counter End -->
						</div>
						<div class="our-story-content-btn mt-4">
							<a href="<?= $pathindex ?>azienda" class="btn-default"><span>Guarda il video</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Our Story End -->

	<!-- Start CTA -->
	<section class="bg-accent text-white py-3 py-lg-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<span class="h2 d-block text-center text-lg-start">La nostra esperienza<br>al tuo servizio</span>
				</div>
				<div class="col-lg-6 d-flex mt-5 mt-lg-0 justify-content-center justify-content-lg-start">
					<a class="h2 fw-bold scale-animation" href="mailto:info@dvfmeccanica.com">info@dvfmeccanica.com</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end cta -->

	<!-- Our Features Section Start -->
	<section class="our-features">
		<div class="container">
			<div class="row section-row align-items-center">
				<div class="col-lg-6">
					<!-- Section Title Start -->
					<div class="section-title">
						<span class="wow fadeInUp label text-black">our key feature</span>
						<h2 class="text-anime-style-2" data-cursor="-opaque">Core strengths in <span>industrial innovation</span></h2>
					</div>
					<!-- Section Title End -->
				</div>

				<div class="col-lg-6">
					<!-- Section Title Content Start -->
					<div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
						<p>Our expertise in industrial innovation combines advanced technology, sustainable practices, and a skilled workforce to deliver efficient, future-ready solutions that drive industry progress.</p>
					</div>
					<!-- Section Title Content End -->
				</div>
			</div>

			<div class="row no-gutters">
				<!-- Our Features Boxes Start -->
				<div class="our-features-boxes">
					<!-- Our Features Item Start -->
					<div class="our-features-item">
						<div class="icon-box">
							<img src="<?= $pathindex ?>assets/images/icon set/motorsport/motorsport-puntualita.svg" alt="icona puntualità">
						</div>
						<div class="features-item-content">
							<span>Advanced Technology Integration</span>
							<p>We integrate cutting-edge technologies into every aspect of our operations, enhancing efficiency, precision, and innovation to deliver superior industrial solutions.</p>
						</div>
					</div>
					<!-- Our Features Item End -->

					<!-- Our Features Item Start -->
					<div class="our-features-item">
						<div class="icon-box">
							<img src="<?= $pathindex ?>assets/images/icon set/motorsport/motorsport-creativita.svg" alt="icona creatività">
						</div>
						<div class="features-item-content">
							<span>Uncompromising Quality Standards</span>
							<p>We uphold the highest quality standards across all processes, ensuring consistency, reliability, and excellence in every product and service we deliver.</p>
						</div>
					</div>
					<!-- Our Features Item End -->

					<!-- Our Features Item Start -->
					<div class="our-features-item">
						<div class="icon-box">
							<img src="<?= $pathindex ?>assets/images/icon set/motorsport/motorsport-magia.svg" alt="icona magia">
						</div>
						<div class="features-item-content">
							<span>Continuous Innovation and R&D</span>
							<p>We prioritize ongoing research and development to drive continuous innovation, staying ahead of industry trends and creating advanced solutions that meet evolving market demands.</p>
						</div>
					</div>
					<!-- Our Features Item End -->

					<!-- Our Features Item Start -->
					<div class="our-features-item features-image-box">
						<figure class="image-anime">
							<img src="<?= $pathindex ?>assets/images/immagini/motorsport/motorsport-focus.webp" alt="immagine azienda">
						</figure>
					</div>
					<!-- Our Features Item End -->
				</div>
				<!-- Our Features Boxes End -->
			</div>
		</div>
	</section>
	<!-- Our Features Section End -->

	<!-- Our Work Section Start -->
	<section class="our-work pt-0">
		<div class="container">
			<div class="row section-row align-items-center">
				<div class="col-lg-6">
					<!-- Section Title Start -->
					<div class="section-title">
						<span class="wow fadeInUp label text-black">Cosa facciamo</span>
						<h2 class="text-anime-style-2" data-cursor="-opaque">Our successful project <span>initiatives</span></h2>
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

			<div class="row">
				<div class="col-lg-12">
					<!-- Project Item Boxes start -->
					<div class="row project-item-boxes align-items-center">
						<? for ($i = 1; $i <= 4; $i++): ?>
							<div class="col-md-6 project-item-box manufacturing automation">
								<!-- Project Item Start -->
								<div class="project-item wow fadeInUp">
									<div class="project-image">
										<figure class="image-anime">
											<img src="<?= $pathindex . "assets/images/immagini/motorsport/motorsport-gallery-". $i . ".webp" ?>" alt="immagine realizzazione">
										</figure>
									</div>
								</div>
								<!-- Project Item End -->
							</div>
						<? endfor; ?>
					</div>
					<!-- Project Item Boxes End -->
				</div>
			</div>
		</div>
	</section>
	<!-- Our Work Section End -->
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