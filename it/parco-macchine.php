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

    <!-- Page Header Start -->
    <section class="page-header parallaxie" style="background-image: url('<?= $pathindex ?>assets/images/immagini/parco macchine/parco_macchine-header.webp');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Le nostre macchine per la <span>lavorazione dei metalli</span></h1>
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
                        <span class="wow fadeInUp label text-black">PARCO MACCHINE</span>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Tecnologia avanzata controllata</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>Il nostro parco macchine di ultima generazione garantisce precisione, qualità
                            e rapidità in ogni lavorazione metallica.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row project-item-boxes align-items-center">
                        <? $images = array_values(array_filter(scandir("../assets/images/immagini/parco macchine"), function ($el) {
                            return $el != "." && $el != "..";
                        }));
                        $pathDir = $pathindex . "assets/images/immagini/parco macchine/"; ?>
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
                                        <a href="<?= $pathindex . "parco-macchine/" . substr($images[$i], 0, strlen($images[$i]) - 5) ?>"><?= substr($images[$i], 0, strlen($images[$i]) - 5) ?></a>
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
                        <span class="wow fadeInUp label text-black">MACCHINE DI PRECISIONE</span>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Quali metalli lavoriamo</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>DVF Meccanica dispone di <strong>torni, frese e centri di lavoro multiasse DMG
                                Mori, Overmach e Deckel Maho</strong> , tutti collegati a sistemi automatizzati per
                            produzioni efficienti e continue. Il nostro team altamente qualificato ottimizza
                            ogni programma CNC, assicurando componenti affidabili e perfettamente
                            conformi alle specifiche del cliente.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row page-services pt-0">
                <? $texts = ["Alluminio alta qualità", "Acciaio AISI 304", "Acciaio AISI 316", "Acciaio AISI 303", "Ferro e ghisa", "Bronzo e ottone", "Materiali plastici POM", "Materiali plastici POM C"] ?>
                <? foreach ($texts as $text): ?>
                    <div class="col-lg-3 col-md-6">
                        <!-- Service Item Start -->
                        <div class="service-item">
                            <div class="service-body">
                                <span class="fw-bold"><?= $text ?></span>
                            </div>
                        </div>
                        <!-- Service Item End -->
                    </div>
                <? endforeach; ?>
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
                        <span class="wow fadeInUp label text-black">LAVORAZIONI E PROCESSI</span>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Fresatura, tornitura, prototipazione</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>Tutti i nostri macchinari per la lavorazione del metallo permettono di
                            realizzare componenti <a href="<?= $pathindex ?>azienda">conto terzi</a> di qualsiasi complessità. Dalla
                            progettazione alla consegna, garantiamo <a href="<?= $pathindex?>qualita">standard elevati</a> e flessibilità totale.</p>
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
                    <? $texts=["Fresatura multiasse","Tornitura CNC","Elettroerosione a filo","Incisione laser"] ?>
                        <? foreach($texts as $text): ?>
                            <div class="col-md-6 project-item-box manufacturing automation">
                                <!-- Project Item Start -->
                                <div class="project-item wow fadeInUp">
                                    <div class="project-image">
                                        <figure class="image-anime">
                                            <img src="https://placehold.co/600x400" alt="immagine realizzazione">
                                        </figure>
                                    </div>
                                    <div class="project-content">
                                        <a href="<?= $pathindex ?>parco-macchine"><?= $text ?></a>
                                    </div>
                                </div>
                                <!-- Project Item End -->
                            </div>
                        <? endforeach; ?>
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