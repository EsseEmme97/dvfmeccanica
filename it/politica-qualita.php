<?
$lingua = 1;
require_once("../inc/global.php");
require_once("../inc/header.php");
require_once($pathindex . "inc/mysqli.php");
// $database = new DB();
$titleseo = "Macchine per la lavorazione dei metalli | DVF Meccanica";
$descriptionseo = "Parco macchine di ultima generazione: ogni macchina per
la lavorazione del metallo garantisce precisione e qualità. Scopri tutti i nostri
macchinari!";
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
	<section class="container">
		<h1 class="my-5">Politica per la Qualità </h1>
		<p class="fw-bold">DVF Meccanica è impegnata a garantire eccellenza e innovazione nel settore delle lavorazioni meccaniche di precisione, con particolare attenzione alle esigenze dei clienti, inclusi quelli dei settori motorsport, automazione industriale, automotive, medicale, dove precisione, affidabilità e prestazioni elevatesono fondamentali. </p>
		<p class="fw-bold">Per raggiungere questi obiettivi, ci impegniamo nei seguenti punti: </p>
		<ul>
			<li><strong>Soddisfare le esigenze dei clienti:</strong>fornire prodotti e servizi di alta qualità che soddisfino pienamente i requisiti specifici e le aspettative dei nostri clienti, garantendo affidabilità e puntualità; </li>
			<li><strong>Miglioramento continuo:</strong>ottimizzare costantemente i nostri processi, le tecnologie e le competenze del personale, al fine di incrementare la qualità e l’efficienza delle nostre lavorazioni; </li>
			<li><strong>Conformità ai requisiti:</strong>operare in conformità ai requisiti normativi applicabili, ai regolamenti del settore e agli standard internazionali, tra cui la ISO 9001;</li>
			<li><strong>Innovazione e precisione:</strong>investire in macchinari all’avanguardia e adottare metodologie innovative per garantire lavorazioni meccaniche di precisione, rispondendo alle sfide tecniche più complesse; </li>
			<li><strong>Formazione e coinvolgimento del personale:</strong>promuovere lo sviluppo professionale continuo e il coinvolgimento attivo dei nostri collaboratori, riconoscendo il loro ruolo fondamentale per il successo aziendale; </li>
			<li><strong>Partnership solide:</strong>costruire relazioni di fiducia con i nostri clienti e fornitori, favorendo una collaborazione basata su trasparenza e reciproco vantaggio.  </li>
		</ul>
		<p class="fw-bold">Questa politica è riesaminata periodicamente per garantirne la continua idoneità e viene comunicata a tutti i livelli dell’organizzazione, nonché resa disponibile alle parti interessate rilevanti. </p>
		<p class="fw-bold">La direzione</p>
		<p class="fw-bold">Data:18/10/2024</p>
	</section>
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