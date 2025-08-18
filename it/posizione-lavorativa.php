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

$posizione_lavorativa = $_GET["posizione"];
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
						<h1 class="text-anime-style-2" data-cursor="-opaque">Posizione : <span><?= $posizione_lavorativa ?></span></h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= $pathindex ?>">home</a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="<?= $pathindex ?>lavora-con-noi">Lavora con noi</a></li>
								<li class="breadcrumb-item active" aria-current="page"><?= $posizione_lavorativa ?></li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</section>
	<!-- Page Header End -->

	<!-- Page Team Single Start -->
	<div class="page-team-single">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Team Member Content Start -->
					<div class="team-member-content">
						<!-- Team Member Info Start -->
						<div class="team-member-info">
							<h2 class="text-anime-style-2" data-cursor="-opaque">Personal <span>info</span></h2>
							<p>Hello there, my name is Brooklyn Simmons . I am a Engineer of industry. Collaborative administrate empowered markets via plug-and-play networks. Proactively envisioned multimedia based expertise and cross-media growth strategies seamlessly visualize quality intellectual capital without superior.</p>
							<p>Having worked in various capacities, [Name] possesses extensive experience in both residential and commercial roofing projects. [He/She/They] began [his/her/their] career as a [initial position, e.g., roofing laborer], where [he/she/they] honed essential skills in roof installation and repair. Over the years, [Name] advanced to [current position, e.g., Lead Roofer], where [he/she/they] now oversees a team of skilled professionals, ensuring that each project is completed efficiently and to the highest standards.</p>
						</div>
						<!-- Team Member Info End -->

						<!-- Team Member Skills Feature Start -->
						<div class="team-member-skills-feature">
							<!-- Team Member Feature Start -->
							<div class="team-member-feature">
								<h2 class="text-anime-style-2" data-cursor="-opaque">Brooklyn <span>feature</span></h2>
								<p>Our Factory & Industry team comprises skilled professionals in robotics, engineering.</p>

								<ul>
									<li><i class="fa-solid fa-check fa-lg me-3 text-accent"></i>project manager for industrial systems</li>
									<li><i class="fa-solid fa-check fa-lg me-3 text-accent"></i>sustainability and efficiency consultant</li>
									<li><i class="fa-solid fa-check fa-lg me-3 text-accent"></i>training and development coordinator</li>
									<li><i class="fa-solid fa-check fa-lg me-3 text-accent"></i>maintenance and reliability engineer</li>
								</ul>
							</div>
							<!-- Team Member Feature End -->
						</div>
						<!-- Team Member Skills Feature End -->

						<!-- Page Contact Form Start -->
						<div class="contact-us-form">
							<div class="section-title">
								<h2 class="text-anime-style-2" data-cursor="-opaque">Contact <span>me</span></h2>
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

										<div class="form-group col-md-6 mb-4">
											<input type="email" name="email" class="form-control" id="email" placeholder="Enter your e-mail" required>
											<div class="help-block with-errors"></div>
										</div>

										<div class="form-group col-md-6 mb-4">
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
					<!-- Team Member Content End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Team Single End -->
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