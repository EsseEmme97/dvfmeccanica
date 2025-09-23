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
						<h1 class="text-anime-style-2" data-cursor="-opaque">Parco <span>Macchine</span></h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= $pathindex ?>">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Parco macchine</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</section>
	<!-- Page Header End -->
	 <!-- Our Work Section Start -->
    <section class="our-work">
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
                        <? $images= array_values(array_filter(scandir("../assets/images/immagini/parco macchine"), function ($el) { return $el != "." && $el != "..";}));
                           $pathDir= $pathindex . "assets/images/immagini/parco macchine/"; ?>
                        <? for ($i = 0; $i < 14; $i++): ?>
                            <div class="col-md-6 project-item-box manufacturing automation">
                                <!-- Project Item Start -->
                                <div class="project-item wow fadeInUp">
                                    <div class="project-image">
                                        <figure class="image-anime">
                                            <img src="<?= $pathDir . $images[$i] ?>" alt="immagine realizzazione">
                                        </figure>
                                    </div>
                                    <div class="project-content">
                                        <a href="<?= $pathindex ?>/parco-macchine">Macchinario nr.<?= $i +1 ?></a>
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

	 <section class="our-history p-0">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="wow fadeInUp label text-black">our history</span>
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

			<div class="row page-services pt-0">
				<? for($i=0; $i<8; $i++): ?>
                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="service-body">
                            <span class="fw-bold">custom manufacturing solution</span>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
				<? endfor; ?>
            </div>
		</div>
	 </section>

	 <!-- Our Work Section Start -->
    <section class="our-work pt-0">
        <div class="container">
            <div class="row section-row">
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
					<div class="hero-btn wow fadeInUp section-title-content mt-4" data-wow-delay="0.4s">
                        <a href="<?= $pathindex ?>azienda" class="btn-default"><span>Scopri di più</span></a>
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
                                            <img src="https://placehold.co/600x400" alt="immagine realizzazione">
                                        </figure>
                                    </div>
                                    <div class="project-content">
                                        <a href="<?= $pathindex ?>parco-macchine">Realizzazione nr.<?= $i ?></a>
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