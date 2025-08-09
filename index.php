<?
$lingua = 1;
require_once("inc/global.php");
require_once("inc/header.php");
require_once("inc/mysqli.php");
// $database = new DB();
$titleseo = "dvf meccanica";
$descriptionseo = "descrizione";
$image = "/assets/img/global/logo.jpg";
$widthseo = "400";
$heightseo = "115";
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <? require_once("inc/tagmanager.php") ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <? require_once("inc/htmlcx/meta-ita.php"); ?>
    <link rel="canonical" href="<?= $pageurlseolan ?>">
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
    <? require_once("inc/tagmanager_no.php") ?>

    <!-- ==================== Start Navbar ==================== -->

    <? require_once("inc/htmlcx/menu-ita.php") ?>
    <h1>Hello world</h1>

    <!-- ==================== End Navbar ==================== -->

    <!-- ==================== Start Footer ==================== -->
    <? require_once("inc/htmlcx/footer-ita.php") ?>
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