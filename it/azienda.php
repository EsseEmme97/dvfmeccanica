<?
$lingua = 1;
require_once("../inc/global.php");
require_once("../inc/header.php");
require_once($pathindex . "inc/mysqli.php");
// $database = new DB();
$titleseo = "Lavorazioni meccaniche conto terzi | DVF Meccanica";
$descriptionseo = "Specializzati in lavorazioni meccaniche conto terzi di
precisione: fresatura e tornitura con tecnologia avanzata, qualità certificata.
Scopri DVF Meccanica!";
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
    <section class="page-header parallaxie" style="background-image: url('<?= $pathindex ?>/assets/images/immagini/azienda/azienda-header.webp');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Lavorazioni meccaniche <span>conto terzi</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= $pathindex ?>">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">azienda</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header End -->

    <!-- About Us Start -->
    <section class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-image">
                        <!-- About Image Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="<?= $pathindex ?>assets/images/immagini/azienda/azienda-intro-1.webp" alt="immagine servizio">
                            </figure>
                        </div>
                        <!-- About Image End -->

                        <!-- About Image Start -->
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="<?= $pathindex ?>assets/images/immagini/azienda/azienda-intro-2.webp" alt="immagine servizio">
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
                            <span class="wow fadeInUp label text-black">Chi Siamo</span>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">L’eccellenza nelle lavorazioni meccaniche conto terzi</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">DVF Meccanica, fondata nel 1989 a Schio (Vicenza), è specializzata in
                                <strong>lavorazioni meccaniche conto terzi</strong> e prototipazione di parti metalliche.
                                Oggi, l’azienda offre <a href="<?= $pathindex ?>">lavorazioni meccaniche di precisione</a> di <a href="<?= $pathindex ?>qualita">alta qualità</a>,
                                grazie a personale altamente qualificato, macchine all’avanguardia e processi
                                controllati. Svariati sono i settori serviti: dall’automotive al <a href="<?= $pathindex ?>motorsport">racing</a>, dal
                                packaging alimentare al farmaceutico, fino alla ricerca scientifica. La
                                pluridecennale esperienza nella meccanica conto terzi permette a DVF
                                Meccanica di gestire sia progetti complessi sia produzioni in serie,
                                garantendo puntualità, qualità e supporto completo ad ogni azienda cliente.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <div class="about-content-body">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <!-- About List Btn Box Start -->
                                    <div class="about-list-btn mb-0">
                                        <!-- About Content Btn Start -->
                                        <div class="about-content-btn wow fadeInUp " data-wow-delay="0.75s">
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

    <!-- Our History Section Start -->
    <section class="our-history pt-0">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="wow fadeInUp label text-black">La nostra storia</span>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">L’eccellenza in costante evoluzione</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>DVF Meccanica apre i battenti a fine anni Ottanta a Schio, con il chiaro
                            obiettivo di fornire al territorio un qualificato punto di riferimento per le
                            lavorazioni meccaniche conto terzi. Da allora, l’azienda cresce
                            costantemente ampliando competenze e settori serviti, con lavorazioni
                            meccaniche conto terzi di qualità.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our History Box Start -->
                    <div class="our-history-box tab-content wow fadeInUp" data-wow-delay="0.25s" id="historybox">
                        <!-- Sidebar Our History Nav start -->
                        <div class="our-history-nav">
                            <ul class="nav nav-tabs" id="historyTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="1920-tab" data-bs-toggle="tab" data-bs-target="#1920" type="button" role="tab" aria-selected="true">1989 – Fondazione azienda</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="1922-tab" data-bs-toggle="tab" data-bs-target="#1922" type="button" role="tab" aria-selected="false">2001 – Prima macchina a 5 assi</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="1925-tab" data-bs-toggle="tab" data-bs-target="#1925" type="button" role="tab" aria-selected="false">2007 – Nuovo stabilimento</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="1930-tab" data-bs-toggle="tab" data-bs-target="#1930" type="button" role="tab" aria-selected="false">2011 – Settore motorsport</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="1940-tab" data-bs-toggle="tab" data-bs-target="#1940" type="button" role="tab" aria-selected="false">Oggi – Competenza avanzata</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Sidebar Our History Nav End -->

                        <!-- Our History Item Start -->
                        <div class="our-history-item tab-pane fade show active" id="1920" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Our History Content Start -->
                                    <div class="our-history-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <span class="text-anime-style-2 h2" data-cursor="-opaque">Fondazione <span>azienda</span></span>
                                            <p>Più di 35 anni fa nasce DVF Meccanica a
                                                Schio, fondata da Denis Dalla Vecchia.</p>
                                        </div>
                                        <!-- Section Title End -->
                                    </div>
                                    <!-- Our History Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Our History Image Start -->
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="<?= $pathindex ?>assets/images/immagini/azienda/timeline-1.webp" alt="immagine azienda">
                                        </figure>
                                    </div>
                                    <!-- Our History Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Our History Item End -->

                        <!-- Our History Item Start -->
                        <div class="our-history-item tab-pane fade" id="1922" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Our History Content Start -->
                                    <div class="our-history-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <span class="text-anime-style-2 h2" data-cursor="-opaque">Prima macchina <span>a 5 assi</span></span>
                                            <p>Acquisto della prima macchina utensile
                                                multiasse.</p>
                                        </div>
                                        <!-- Section Title End -->
                                    </div>
                                    <!-- Our History Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Our History Image Start -->
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="<?= $pathindex ?>assets/images/immagini/azienda/timeline-2.webp" alt="immagine azienda">
                                        </figure>
                                    </div>
                                    <!-- Our History Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Our History Item End -->

                        <!-- Our History Item Start -->
                        <div class="our-history-item tab-pane fade" id="1925" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Our History Content Start -->
                                    <div class="our-history-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <span class="text-anime-style-2 h2" data-cursor="-opaque">Nuovo <span>stabilimento</span></span>
                                            <p>Trasferimento a Santorso per aumentare
                                                capacità produttiva.</p>
                                        </div>
                                        <!-- Section Title End -->
                                    </div>
                                    <!-- Our History Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Our History Image Start -->
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="<?= $pathindex ?>assets/images/immagini/azienda/timeline-3.webp" alt="immagine azienda">
                                        </figure>
                                    </div>
                                    <!-- Our History Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Our History Item End -->

                        <!-- Our History Item Start -->
                        <div class="our-history-item tab-pane fade" id="1930" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Our History Content Start -->
                                    <div class="our-history-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <span class="text-anime-style-2 h2" data-cursor="-opaque">Settore <span>motorsport</span></span>
                                            <p>DVF entra nel settore racing e motorsport.</p>
                                        </div>
                                        <!-- Section Title End -->
                                    </div>
                                    <!-- Our History Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Our History Image Start -->
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="<?= $pathindex ?>assets/images/immagini/azienda/timeline-4.webp" alt="immagine azienda">
                                        </figure>
                                    </div>
                                    <!-- Our History Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Our History Item End -->

                        <!-- Our History Item Start -->
                        <div class="our-history-item tab-pane fade" id="1940" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Our History Content Start -->
                                    <div class="our-history-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <span class="text-anime-style-2 h2" data-cursor="-opaque">Competenza <span>avanzata</span></span>
                                            <p>Specializzazione in lavorazioni complesse e
                                                prototipazione di alta qualità.</p>
                                        </div>
                                        <!-- Section Title End -->
                                    </div>
                                    <!-- Our History Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Our History Image Start -->
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="<?= $pathindex ?>assets/images/immagini/azienda/timeline-5.webp" alt="immagine azienda">
                                        </figure>
                                    </div>
                                    <!-- Our History Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Our History Item End -->
                    </div>
                    <!-- Our History Box End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Our History Section End -->

    <!-- Our Mission Vision Section Start -->
    <section class="our-mission-vision">
        <div class="mission-vision-bg parallaxie" style="background-image: url('<?= $pathindex ?>assets/images/immagini/azienda/azienda-parallax.webp');">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-lg-6">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <span class="wow fadeInUp label">LA NOSTRA MISSIONE</span>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Standard elevati garantiti</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content dark-section wow fadeInUp" data-wow-delay="0.25s">
                            <p>Le nostre <strong>lavorazioni meccaniche conto terzi</strong> assicurano componenti
                                affidabili e durevoli, con: macchine di precisione avanzate, personale
                                qualificato e in costante aggiornamento, controlli rigorosi.</p>
                        </div>
                        <!-- Section Title Content End -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Mission Vision Box Start -->
                    <div class="mission-vision-box tab-content wow fadeInUp bg-white" data-wow-delay="0.25s" id="missionvision">
                        <!-- Sidebar Mission Vision Nav start -->
                        <div class="mission-vision-nav">
                            <ul class="nav nav-tabs" id="mvTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="remodeling-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-selected="true">Macchine d’avanguardia</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="installation-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-selected="false">Qualità</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="value-tab" data-bs-toggle="tab" data-bs-target="#value" type="button" role="tab" aria-selected="false">Produzione</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Sidebar Mission Vision Nav End -->

                        <!-- Mission Vision Item Start -->
                        <div class="mission-vision-item tab-pane fade show active" id="mission" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!-- Mission Vision Content Start -->
                                    <div class="mission-vision-content">
                                        <div class="mission-vision-content-header">
                                            <p>DVF Meccanica utilizza un parco macchine firmato DMG Mori e Overmach,
                                                torni e frese a 3-4 o 5 assi continui e un magazzino automatico Fastems.
                                                Le nostre lavorazioni meccaniche includono:</p>
                                        </div>

                                        <div class="mission-vision-content-list">
                                            <ul>
                                                <li>Fresatura multiasse</li>
                                                <li>Tornitura CNC</li>
                                                <li>Elettroerosione a filo</li>
                                                <li>Incisione laser</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Mission Vision Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Mission Vision Image Start -->
                                    <div class="mission-vision-image">
                                        <figure class="image-anime">
                                            <img src="<?= $pathindex ?>assets/images/immagini/azienda/azienda-amministrazione.webp" alt="immagine missione aziendale">
                                        </figure>
                                    </div>
                                    <!-- Mission Vision Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->

                        <!-- Mission Vision Item Start -->
                        <div class="mission-vision-item tab-pane fade" id="vision" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!-- Mission Vision Content Start -->
                                    <div class="mission-vision-content">
                                        <div class="mission-vision-content-header">
                                            <p>Con le nostre lavorazioni meccaniche di precisione conto terzi, realizziamo
                                                componenti complessi per il tuo business, garantendo standard elevati,
                                                affidabilità e miglioramento continuo. Siamo inoltre attenti alla sostenibilità,
                                                con misure concrete.</p>
                                        </div>

                                        <div class="mission-vision-content-list">
                                            <ul>
                                                <li>ISO 9001</li>
                                                <li>Pannelli solari</li>
                                                <li>Pompe di calore e refrigerazione in produzione</li>
                                                <li>Sistemi di aspirazione centralizzati</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Mission Vision Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Mission Vision Image Start -->
                                    <div class="mission-vision-image">
                                        <figure class="image-anime">
                                            <img src="<?= $pathindex ?>assets/images/immagini/azienda/azienda-acquisti.webp" alt="immagine visione aziendale">
                                        </figure>
                                    </div>
                                    <!-- Mission Vision Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->

                        <!-- Mission Vision Item Start -->
                        <div class="mission-vision-item tab-pane fade" id="value" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!-- Mission Vision Content Start -->
                                    <div class="mission-vision-content">
                                        <div class="mission-vision-content-header">
                                            <p><a href="<?= $pathindex ?>realizzazioni">Realizziamo</a> sia forniture complete sia lavoro conto terzi, gestendo
                                                internamente ogni processo: dal taglio della materia prima, alla
                                                programmazione, tornitura, fresatura, fino ai trattamenti esterni.</p>
                                        </div>

                                        <div class="mission-vision-content-list">
                                            <ul>
                                                <li>Prototipi</li>
                                                <li>Serie medie</li>
                                                <li>Componenti complessi</li>
                                                <li>Semilavorati</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Mission Vision Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Mission Vision Image Start -->
                                    <div class="mission-vision-image">
                                        <figure class="image-anime">
                                            <img src="<?= $pathindex ?>assets/images/immagini/azienda/azienda-produzione.webp" alt="immagine valori aziendali">
                                        </figure>
                                    </div>
                                    <!-- Mission Vision Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->
                    </div>
                    <!-- Mission Vision Box End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Our Mission Vision Section End -->

    <section class="our-work bg-light-gray">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="wow fadeInUp label text-black">LA NOSTRA FILOSOFIA</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Qualità, precisione, aggiornamento costante</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>Operiamo con trasparenza, dedizione e collaborazione, costruendo
                            partnership solide con clienti e fornitori, rispettando standard internazionali e
                            promuovendo la formazione continua in azienda.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>
        </div>
    </section>

    <!-- Our Features Section Start -->
    <section class="our-features">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="wow fadeInUp label text-black">VANTAGGIO COMPETITIVO</span>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Tecnologia, competenza, esperienza</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>La nostra forza è un mix di tecnologia avanzata, competenza tecnica e
                            flessibilità, che ci permette di adattarci a qualsiasi richiesta, anche per pezzi
                            singoli o prototipi.</p>
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
                            <img src="<?= $pathindex ?>assets/images/icon set/azienda/azienda-vantaggio_competitivo-team_qualificato.svg" alt="icona servizio">
                        </div>
                        <div class="features-item-content">
                            <span>Team qualificato</span>
                            <p>Il personale esperto e i continui investimenti in formazione permettono di
                                gestire lavorazioni complesse, prototipi e pezzi singoli con altissima qualità.</p>
                        </div>
                    </div>
                    <!-- Our Features Item End -->

                    <!-- Our Features Item Start -->
                    <div class="our-features-item">
                        <div class="icon-box">
                            <img src="<?= $pathindex ?>assets/images/icon set/azienda/azienda-vantaggio_competitivo-processi_completi.svg" alt="icona servizio">
                        </div>
                        <div class="features-item-content">
                            <span>Processi completi</span>
                            <p>La gestione di forniture complete o conto lavoro, con processi interni ed
                                esterni, viene svolta curando trattamenti, finiture, prototipazione.</p>
                        </div>
                    </div>
                    <!-- Our Features Item End -->

                    <!-- Our Features Item Start -->
                    <div class="our-features-item">
                        <div class="icon-box">
                            <img src="<?= $pathindex ?>assets/images/icon set/azienda/azienda-vantaggio_competitivo-tech_avanzata.svg" alt="icona servizio">
                        </div>
                        <div class="features-item-content">
                            <span>Tecnologia avanzata</span>
                            <p>Macchine multiasse DMG Mori, torni e frese a 5 assi, magazzino automatico
                                Fastems, lavorazione 24/7.</p>
                        </div>
                    </div>
                    <!-- Our Features Item End -->

                    <!-- Our Features Item Start -->
                    <div class="our-features-item features-image-box">
                        <figure class="image-anime">
                            <img src="<?= $pathindex ?>assets/images/immagini/azienda/azienda-focus.webp" alt="immagine lavorazione">
                        </figure>
                    </div>
                    <!-- Our Features Item End -->
                </div>
                <!-- Our Features Boxes End -->
            </div>
        </div>
    </section>
    <!-- Our Features Section End -->

    <!-- What We Do Start -->
    <div id="what-we-do" class="what-we-do">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <!-- What We Do Content Start -->
                    <div class="what-we-do-content">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <span class="wow fadeInUp label">COSA FACCIAMO</span>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Lavorazioni conto terzi di precisione, eccellenza al tuo servizio</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- What We Do List Start -->
                        <div class="what-we-do-list">
                            <div class="what-we-do-list-box-1">
                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="<?= $pathindex ?>assets/images/icon set/azienda/azienda-cosa_facciamo-dettaglio_servizi.svg" alt="icona servizio">
                                    </div>
                                    <div class="what-we-item-content">
                                        <span>Fresatura avanzata</span>
                                        <p>Componenti complessi e dettagliati su misura.</p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="<?= $pathindex ?>assets/images/icon set/azienda/azienda-cosa_facciamo-dettaglio_servizi.svg" alt="icona servizio">
                                    </div>
                                    <div class="what-we-item-content">
                                        <span>Tornitura professionale</span>
                                        <p>Produzione di parti affidabili e durevoli.</p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->
                            </div>

                            <div class="what-we-do-list-box-2">
                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="<?= $pathindex ?>assets/images/icon set/azienda/azienda-cosa_facciamo-dettaglio_servizi.svg" alt="icona servizio">
                                    </div>
                                    <div class="what-we-item-content">
                                        <span>Prototipi rapidi</span>
                                        <p>Sviluppo CAD/CAM e realizzazione su richiesta.</p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="<?= $pathindex ?>assets/images/icon set/azienda/azienda-cosa_facciamo-dettaglio_servizi.svg" alt="icona servizio">
                                    </div>
                                    <div class="what-we-item-content">
                                        <span>Trattamenti superficiali</span>
                                        <p>Finiture e incisioni laser di alta qualità.</p>
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
                            <img src="<?= $pathindex ?>assets/images/immagini/azienda/azienda-dettaglio_settori.webp" alt="immagine prodotto">
                        </figure>
                        <!-- What We Do Image End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do End -->

    <!-- Start CTA -->
    <section class="bg-accent text-white py-3 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-start">
                    <span class="h2">Macchine all'avanguardia <br>per ogni esigenza</span>
                </div>
                <div class="col-lg-6 d-flex mt-lg-0 mt-5 text-center text-lg-start">
                    <a class="h2 scale-animation fw-bold" href="<?= $pathindex ?>parco-macchine">Scopri il nostro parco macchine</a>
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