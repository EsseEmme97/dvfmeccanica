<?
$lingua = 1;
require_once("./inc/global.php");
require_once("./inc/header.php");
require_once($pathindex . "inc/mysqli.php");
// $database = new DB();
$titleseo = "Lavorazioni meccaniche di precisione | DVF Meccanica";
$descriptionseo = "DVF Meccanica offre lavorazioni meccaniche di precisione
a Vicenza: fresatura, tornitura e prototipazione con macchine di precisione e
qualità certificata ISO 9001.";
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

    <!-- Hero Section Start -->
    <div class="hero hero-slider-layout">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="<?= $pathindex ?>assets/images/immagini/home/home-slider-1.webp" alt="immagine principale">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title dark-section">
                                            <span class="wow fadeInUp label">DVF MECCANICA</span>
                                            <h1 class="text-anime-style-2" data-cursor="-opaque">Specialisti in lavorazioni meccaniche <span>di alta precisione</span></h1>
                                            <p class="wow fadeInUp" data-wow-delay="0.25s">Da oltre 35 anni specialisti in fresatura, tornitura e prototipazione ad alta
                                                precisione </p>
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
                </div>
                <!-- Hero Slide End -->

                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="<?= $pathindex ?>assets/images/immagini/home/home-slider-2.webp" alt="immagine principale">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title dark-section">
                                            <span class="wow fadeInUp label">DVF MECCANICA</span>
                                            <h1 class="text-anime-style-2" data-cursor="-opaque">Meccanica di precisione <span>per il tuo business</span></h1>
                                            <p class="wow fadeInUp" data-wow-delay="0.25s">Componenti su misura con qualità garantita, tempi di consegna sempre
                                                affidabili </p>
                                        </div>
                                        <!-- Section Title End -->

                                        <!-- Hero Button Start -->
                                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                            <a href="contact.html" class="btn-default"><span>explore more</span></a>
                                        </div>
                                        <!-- Hero Button End -->
                                    </div>
                                    <!-- Hero Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->
            </div>
            <div class="hero-pagination"></div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Us Start -->
    <section class="about-us pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-image">
                        <!-- About Image Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="<?= $pathindex ?>assets/images/immagini/home/home-intro-1.webp" alt="immagine servizio">
                            </figure>
                        </div>
                        <!-- About Image End -->

                        <!-- About Image Start -->
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="<?= $pathindex ?>assets/images/immagini/home/home-intro-2.webp" alt="immagine servizio">
                            </figure>
                        </div>
                        <!-- About Image End -->

                        <!-- Company Experience Start -->
                        <div class="company-experience">
                            <div class="company-experience-counter">
                                <span class="counter">35</span><span>+</span>
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
                            <span class="wow fadeInUp label text-black">su di noi</span>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Realizziamo componenti metallici di qualità superiore</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Nata alla fine degli anni ’80 per lavorazioni meccaniche a Vicenza rivolte al
                                packaging, oggi <a href="<?= $pathindex ?>azienda">DVF Meccanica</a> è specializzata in <a href="<?= $pathindex ?>realizzazioni">lavorazioni meccaniche</a>
                                di precisione e prototipazione per svariati settori. L’azienda vicentina
                                garantisce soluzioni avanzate per clienti che richiedono affidabilità, puntualità
                                e risultati impeccabili.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.35s"> <a href="<?= $pathindex ?>parco-macchine">parco macchine</a>Con un di ultima generazione,
                                composto da centri di lavoro multiasse DMG Mori e magazzino automatico
                                Fastems, vengono <strong>garantite solo produzioni di altissima qualità, 24 ore
                                    su 24, 7 giorni su 7</strong> . La lunga esperienza nella lavorazione meccanica di
                                precisione permette di spaziare da prototipi unici a produzioni in serie,
                                servendo settori come: automotive, <a href="<?= $pathindex ?>motorsport">racing</a>, packaging alimentare,
                                farmaceutico e ricerca scientifica. Precisione meticolosa, competenza tecnica
                                e <strong>qualità certificata</strong> rendono DVF Meccanica il partner ideale per chi cerca
                                l’eccellenza senza compromessi.</p>
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
    </section>
    <!-- About Us End -->

    <!-- Our Service List Start -->
    <section class="our-services-list mt-3 mb-5">
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
                                <span>Parco macchine <br>avanzato</span>
                            </div>

                            <div class="service-footer">
                                <a href="<?= $pathindex ?>parco-macchine" class="service-btn">
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
                                <span>Eccelenza e qualità certificate</span>
                            </div>

                            <div class="service-footer">
                                <a href="<?= $pathindex ?>parco-macchine" class="service-btn">
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
                                <span>Lavorazioni meccaniche di altissima precisione</span>
                            </div>

                            <div class="service-footer">
                                <a href="<?= $pathindex ?>realizzazioni" class="service-btn">
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
                                <span>Una storia <br>trentennale</span>
                            </div>

                            <div class="service-footer">
                                <a href="<?= $pathindex ?>parco-macchine" class="service-btn">
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
    </section>
    <!-- Our Service List End -->

    <!-- What We Do Start -->
    <section class="what-we-do">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <!-- What We Do Content Start -->
                    <div class="what-we-do-content">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <span class="wow fadeInUp label">cosa facciamo</span>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">L’eccellenza nelle lavorazioni meccaniche</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- What We Do List Start -->
                        <div class="what-we-do-list">
                            <div class="what-we-do-list-box-1">
                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <a href="<?= $pathindex ?>parco-macchine">
                                        <div class="icon-box">
                                            <img src="<?= $pathindex ?>assets/images/icon set/parco macchine/focus-macchinari.svg" alt="icona ingranaggio">
                                        </div>
                                        <div class="what-we-item-content">
                                            <span>Fresatura avanzata</span>
                                            <p>Componenti complessi con lavorazioni a 3, 4 e 5 assi</p>
                                        </div>
                                    </a>
                                </div>
                                <!-- What We Do Item End -->

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <a href="<?= $pathindex ?>parco-macchine">
                                        <div class="icon-box">
                                            <img src="<?= $pathindex ?>assets/images/icon set/parco macchine/focus-macchinari.svg" alt="icona ingranaggio">
                                        </div>
                                        <div class="what-we-item-content">
                                            <span>Tornitura precisa</span>
                                            <p>Produzione di parti meccaniche affidabili e di altissima precisione</p>
                                        </div>
                                    </a>
                                </div>
                                <!-- What We Do Item End -->
                            </div>

                            <div class="what-we-do-list-box-2">
                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <a href="<?= $pathindex ?>parco-macchine">
                                        <div class="icon-box">
                                            <img src="<?= $pathindex ?>assets/images/icon set/parco macchine/focus-macchinari.svg" alt="icona ingranaggio">
                                        </div>
                                        <div class="what-we-item-content">
                                            <span>Prototipi rapidi</span>
                                            <p>Dallo sviluppo CAD/CAM alla realizzazione di prototipi unici</p>
                                        </div>
                                    </a>
                                </div>
                                <!-- What We Do Item End -->

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <a href="<?= $pathindex ?>parco-macchine">
                                        <div class="icon-box">
                                            <img src="<?= $pathindex ?>assets/images/icon set/parco macchine/focus-macchinari.svg" alt="icona ingranaggio">
                                        </div>
                                        <div class="what-we-item-content">
                                            <span>Trattamenti finali</span>
                                            <p>Finiture superficiali e incisioni laser per prodotti completi</p>
                                        </div>
                                    </a>
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
                            <img src="<?= $pathindex ?>assets/images/immagini/home/home-parco_macchine.webp" alt="immagine prodotto">
                        </figure>
                        <!-- What We Do Image End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What We Do End -->

    <!-- Start CTA -->
    <section class="bg-accent text-white py-3 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 text-center text-lg-start">
                    <span class="h2">Ti abbiamo convinto? <br>Richiedi un preventivo</span>
                </div>
                <div class="col-lg-6 col-12 d-flex align-items-start mt-5 mt-lg-0 justify-content-center justify-content-lg-start">
                    <a class="h2 font-bold scale-animation" href="mailto:info@dvfmeccanica.com">info@dvfmeccanica.com</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cta -->

    <!-- Our Work Section Start -->
    <section class="our-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="wow fadeInUp label text-black">Cosa facciamo</span>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">La nostra esperienza nella meccanica di precisione al tuo servizio</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>Lavoriamo con la massima serietà e dedizione: i componenti meccanici che
                            produciamo vogliono essere sinonimo di qualità.</p>
                    </div>
                    <div class="hero-btn wow fadeInUp section-title-content mt-4" data-wow-delay="0.4s">
                        <a href="<?= $pathindex ?>realizzazioni" class="btn-default"><span>Scopri di più</span></a>
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

    <!-- Our Process Section Start -->
    <section class="our-process">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="wow fadeInUp label text-black">Come lo facciamo</span>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Tecnologia e qualità certificata</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>Grazie a macchinari all’avanguardia e a procedure di lavorazione ottimizzate,
                            garantiamo componenti meccanici di precisione di altissima qualità e durata,
                            certificati secondo i più alti standard internazionali.</p>
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
                                <p>La qualità del nostro lavoro è certificata secondo gli standard internazionali
                                    ISO 9001</p>
                            </div>
                        </div>
                        <!-- Process Step Item End -->

                        <!-- Process Step Item Start -->
                        <div class="process-step-item active wow fadeInUp" data-wow-delay="0.25s">
                            <div class="process-step-no">
                                <span>02</span>
                            </div>
                            <div class="process-step-content">
                                <span class="title">Pannelli fotovoltaici</span class="title">
                                <p>Riduciamo il nostro impatto ambientale grazie al nuovo impianto fotovoltaico,
                                    che ci rende green</p>
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
                                <p>Disponiamo di due sistemi d’aspirazione centralizzati, per garantire la
                                    massima qualità dell’aria</p>
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
    <!-- Start CTA -->
    <section class="bg-accent text-white py-3 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-start">
                    <span class="h2">Hai un progetto da sviluppare? <br>Contattaci adesso</span>
                </div>
                <div class="col-lg-6 d-flex align-items-start mt-5 mt-lg-0 justify-content-center justify-content-lg-start">
                    <a class="h2 font-bold scale-animation" href="tel:+390445641300">+390445641300</a>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var heroSwiper = new Swiper('.hero-swiper', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                effect: 'slide',
                speed: 800,
            });
        });
    </script>
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