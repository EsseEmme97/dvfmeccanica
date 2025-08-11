<?
$lingua = 1;
require_once("inc/global.php");
require_once("inc/header.php");
require_once("inc/mysqli.php");
// $database = new DB();
$titleseo = "DVF";
$descriptionseo = "descrizione";
$image = "assets/images/global/favicon/DVF-favicon.ico";
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
    <? require_once("inc/tagmanager_no.php") ?>

    <!-- ==================== Start Navbar ==================== -->

    <? require_once("inc/htmlcx/menu-ita.php") ?>

    <!-- ==================== End Navbar ==================== -->

    <div class="hero parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">Dvf vi dà il benvenuto</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque">Excellence innovating <span>industry for today</span></h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">At the heart of our operations is a commitment to delivering superior products through cutting-edge technology and innovative processes. </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="<?= $pathindex ?>azienda" class="btn-default"><span>Scopri di più</span></a>
                        </div>
                        <!-- Hero Button End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Us Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-image">
                        <!-- About Image Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="https://placehold.co/332x232" alt="immagine servizio">
                            </figure>
                        </div>
                        <!-- About Image End -->

                        <!-- About Image Start -->
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="https://placehold.co/396x464" alt="immagine servizio">
                            </figure>
                        </div>
                        <!-- About Image End -->

                        <!-- Company Experience Start -->
                        <div class="company-experience">
                            <div class="company-experience-counter">
                                <h2><span class="counter">35</span>+</h2>
                            </div>
                            <div class="company-experience-content">
                                <p>Anni di esperienza</p>
                            </div>
                        </div>
                        <!-- Company Experience End -->
                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">su di noi</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Building quality through <span>industrial innovation</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Nata alla fine degli anni ’80 per le lavorazioni meccaniche nel settore del packaging, oggi DVF è specializzata in lavorazioni meccaniche di precisione e prototipazione.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.35s"> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <!-- Section Title End -->

                        <div class="about-content-body">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <!-- About List Btn Box Start -->
                                    <div class="about-list-btn">
                                        <!-- About Content Btn Start -->
                                        <div class="about-content-btn wow fadeInUp" data-wow-delay="0.75s">
                                            <a href="<?= $pathindex ?>azienda" class="btn-default"><span>Scopri di più</span></a>
                                        </div>
                                        <!-- About Content Btn End -->
                                    </div>
                                    <!-- About List Btn Box End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Our Service List Start -->
    <div class="our-services-list mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Services List Box Start -->
                    <div class="services-list-box">
                        <!-- Service Item Start -->
                        <div class="service-item">
                            <div class="icon-box">
                                <img src="<?= $pathindex ?>assets/images/icon set/settori/settori-formatura.svg" alt="immagine servizio">
                            </div>

                            <div class="service-body">
                                <h3>custom manufacturing solution</h3>
                            </div>

                            <div class="service-footer">
                                <a href="service-single.html" class="service-btn">
                                    <img src="<?= $pathindex ?>assets/images/global/recapiti/arrow-white.svg" alt="immagine freccia">
                                </a>
                            </div>
                        </div>
                        <!-- Service Item End -->

                        <!-- Service Item Start -->
                        <div class="service-item">
                            <div class="icon-box">
                                <img src="<?= $pathindex ?>assets/images/icon set/settori/settori-motorsport.svg" alt="immagine servizio">
                            </div>

                            <div class="service-body">
                                <h3>industrial automation and robotics</h3>
                            </div>

                            <div class="service-footer">
                                <a href="service-single.html" class="service-btn">
                                    <img src="<?= $pathindex ?>assets/images/global/recapiti/arrow-white.svg" alt="immagine freccia">
                                </a>
                            </div>
                        </div>
                        <!-- Service Item End -->

                        <!-- Service Item Start -->
                        <div class="service-item">
                            <div class="icon-box">
                                <img src="<?= $pathindex ?>assets/images/icon set/settori/settori-panificazione.svg" alt="immagine servizio">
                            </div>

                            <div class="service-body">
                                <h3>product design and prototyping</h3>
                            </div>

                            <div class="service-footer">
                                <a href="service-single.html" class="service-btn">
                                    <img src="<?= $pathindex ?>assets/images/global/recapiti/arrow-white.svg" alt="immagine freccia">
                                </a>
                            </div>
                        </div>
                        <!-- Service Item End -->

                        <!-- Service Item Start -->
                        <div class="service-item">
                            <div class="icon-box">
                                <img src="<?= $pathindex ?>assets/images/icon set/settori/settori-ricerca.svg" alt="immagine servizio">
                            </div>

                            <div class="service-body">
                                <h3>equipment maintenance support</h3>
                            </div>

                            <div class="service-footer">
                                <a href="service-single.html" class="service-btn">
                                    <img src="<?= $pathindex ?>assets/images/global/recapiti/arrow-white.svg" alt="immagine freccia">
                                </a>
                            </div>
                        </div>
                        <!-- Service Item End -->
                    </div>
                    <!-- Services List Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Service List End -->

    <!-- What We Do Start -->
    <div class="what-we-do">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <!-- What We Do Content Start -->
                    <div class="what-we-do-content">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">what we do</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Innovative factory and industry <span>solutions today</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- What We Do List Start -->
                        <div class="what-we-do-list">
                            <div class="what-we-do-list-box-1">
                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="<?= $pathindex ?>assets/images/icon set/parco macchine/focus-macchinari.svg" alt="icona ingranaggio">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>automation solutions</h3>
                                        <p>Streamlining processes through cutting-edge technology.</p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="<?= $pathindex ?>assets/images/icon set/parco macchine/focus-macchinari.svg" alt="icona ingranaggio">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>quality control</h3>
                                        <p>Ensuring product excellence through rigorous testing.</p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->
                            </div>

                            <div class="what-we-do-list-box-2">
                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="<?= $pathindex ?>assets/images/icon set/parco macchine/focus-macchinari.svg" alt="icona ingranaggio">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>process engineering</h3>
                                        <p>Ensuring product excellence through rigorous testing.</p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="<?= $pathindex ?>assets/images/icon set/parco macchine/focus-macchinari.svg" alt="icona ingranaggio">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>product development</h3>
                                        <p>Streamlining processes through cutting-edge technology.</p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->
                            </div>
                        </div>
                        <!-- What We Do List Start -->
                    </div>
                    <!-- What We Do Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- What We Do Image Start -->
                    <div class="what-we-do-image">
                        <figure class="image-anime">
                            <img src="https://placehold.co/946x1020" alt="immagine prodotto">
                        </figure>
                        <!-- What We Do Image End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do End -->

    <!-- Start CTA -->
    <section class="bg-accent text-white p-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <span class="h2">Ti abbiamo convinto? <br>Richiedi un preventivo</span>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <a class="h2" href="mailto:">info@dvfmeccanica.com</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cta -->

    <!-- Our Work Section Start -->
    <div class="our-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Cosa facciamo</h3>
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
                                            <img src="https://placehold.co/600x400" alt="immagine realizzazione">
                                        </figure>
                                    </div>
                                    <div class="project-content">
                                        <h3><a href="project-single.html">Realizzazione nr.<?= $i ?></a></h3>
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
    </div>
    <!-- Our Work Section End -->

    <!-- Our Process Section Start -->
    <div class="our-process">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Come lo facciamo</h3>
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
                            <img src="https://placehold.co/594x550" alt="immagine lavoro svolto">
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
                                <h2>01</h2>
                            </div>
                            <div class="process-step-content">
                                <h3>Qualità certificata ISO 9001</h3>
                                <p>La qualità del nostro lavoro è certificata secondo gli standard internazionali ISO 9001</p>
                            </div>
                        </div>
                        <!-- Process Step Item End -->

                        <!-- Process Step Item Start -->
                        <div class="process-step-item active wow fadeInUp" data-wow-delay="0.25s">
                            <div class="process-step-no">
                                <h2>02</h2>
                            </div>
                            <div class="process-step-content">
                                <h3>Pannelli fotovoltaici</h3>
                                <p>Riduciamo il nostro impatto ambientale grazie al nuovo impianto fotovoltaico, che ci rende green</p>
                            </div>
                        </div>
                        <!-- Process Step Item End -->

                        <!-- Process Step Item Start -->
                        <div class="process-step-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="process-step-no">
                                <h2>03</h2>
                            </div>
                            <div class="process-step-content">
                                <h3>Sistemi di aspirazione centralizzati</h3>
                                <p>Disponiamo di due sistemi d’aspirazione centralizzati, per garantire la massima qualità dell’aria</p>
                            </div>
                        </div>
                        <!-- Process Step Item End -->
                    </div>
                    <!-- Process Step Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Process Section End -->
    <!-- Start CTA -->
    <section class="bg-accent text-white p-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <span class="h2">Hai un progetto da sviluppare? <br>Contattaci adesso</span>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <a class="h2" href="tel:+390445641300">+390445641300</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cta -->                        


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