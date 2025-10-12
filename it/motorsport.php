<?
$lingua = 1;
require_once("../inc/global.php");
require_once("../inc/header.php");
require_once($pathindex . "inc/mysqli.php");
// $database = new DB();
$titleseo = "Motorsport: Sponsor Team SpeedRS | DVF Meccanica";
$descriptionseo = "DVF Meccanica è sponsor del team SpeedRS in Moto2:
passione, innovazione e risultati sono al fianco di SpeedRS, uniti da sfide e
spirito vincente.";
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
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</section>
	<!-- Page Header End -->

	<section class="py-5">
		<div class="container row mx-auto bg-black radius-40 text-white p-4">
			<div class="row">
				<div class="col-1">
					<span class="quotes">
						"
					</span>
				</div>
				<div class="col-11">
					<blockquote class="text-left mb-0"> Correre veloci verso l'obbiettivo, al fianco di sognatori, pionieri e campioni... Determinazione, dedizione, concentrazione e voglia di vincere ci hanno fatto fare tanta strada in 30 anni di sfide. Accontentarsi? MAI
					</blockquote>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Story Start -->
	<section class="our-story pt-0">
		<div class="container">
			<div class="row section-row">
				<div class="col-lg-6">
					<!-- Section Title Start -->
					<div class="section-title">
						<span class="wow fadeInUp label text-black">IL TEAM</span>
						<h2 class="text-anime-style-2" data-cursor="-opaque">In Moto2 con il team SpeedRS</h2>
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
							<p>È con infinito orgoglio che anche <a href="<?= $pathindex ?>">DVF Meccanica</a> prende parte al successo
								sportivo del Team SpeedRS di Moto2.<strong> L’azienda è sponsor del progetto
									racing del team SpeedRS</strong>, in cui crede fortemente e con il quale condivide
								valori quali determinazione, innovazione e spirito vincente.</p>
						</div>

						<div class="our-story-counters">
							<!-- Our Story Counter Start -->
							<div class="our-story-counter">
								<span><span class="counter">15</span></span>
								<p>Anni di rapporto</p>
							</div>
							<!-- Our Story Counter End -->

							<!-- Our Story Counter Start -->
							<div class="our-story-counter">
								<span><span class="counter">27</span></span>
								<p>Collaboratori</p>
							</div>
							<!-- Our Story Counter End -->

							<!-- Our Story Counter Start -->
							<div class="our-story-counter">
								<span><span class="counter">204</span></span>
								<p>Gare vinte</p>
							</div>
							<!-- Our Story Counter End -->
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
						<span class="wow fadeInUp label text-black">PASSIONE RACING</span>
						<h2 class="text-anime-style-2" data-cursor="-opaque">DVF Meccanica al fianco di SpeedRS</h2>
					</div>
					<!-- Section Title End -->
				</div>

				<div class="col-lg-6">
					<!-- Section Title Content Start -->
					<div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
						<p>Da sempre crediamo nel motorsport come palestra di sfide ed innovazione
							tecnologica: siamo al fianco del <strong>team SpeedRS</strong>, che corre nel mondiale
							Moto2 con moto Boscoscuro.</p>
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
							<span>Uniti nella sfida</span>
							<p>Con SpeedRS condividiamo passione, determinazione e spirito di squadra,
								elementi che ci spingono sempre oltre il traguardo.</p>
						</div>
					</div>
					<!-- Our Features Item End -->

					<!-- Our Features Item Start -->
					<div class="our-features-item">
						<div class="icon-box">
							<img src="<?= $pathindex ?>assets/images/icon set/motorsport/motorsport-creativita.svg" alt="icona creatività">
						</div>
						<div class="features-item-content">
							<span>Supporto costante</span>
							<p>Sosteniamo il team stagione dopo stagione, credendo in un progetto sportivo
								che unisce tecnologia e performance.</p>
						</div>
					</div>
					<!-- Our Features Item End -->

					<!-- Our Features Item Start -->
					<div class="our-features-item">
						<div class="icon-box">
							<img src="<?= $pathindex ?>assets/images/icon set/motorsport/motorsport-magia.svg" alt="icona magia">
						</div>
						<div class="features-item-content">
							<span>Risultati concreti</span>
							<p>Siamo orgogliosi dei successi raggiunti in Moto2, frutto di dedizione,
								tecnologia e di tanto impegno.</p>
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
						<span class="wow fadeInUp label text-black">EMOZIONI IN PISTA</span>
						<h2 class="text-anime-style-2" data-cursor="-opaque">Dove velocità e tecnologia si incontrano</h2>
					</div>
					<!-- Section Title End -->
				</div>

				<div class="col-lg-6">
					<!-- Section Title Content Start -->
					<div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
						<p>Le nostre iniziative con il team SpeedRS raccontano storie di impegno,
							velocità e vittorie condivise in pista.</p>
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
											<img src="<?= $pathindex . "assets/images/immagini/motorsport/motorsport-gallery-" . $i . ".webp" ?>" alt="immagine realizzazione">
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