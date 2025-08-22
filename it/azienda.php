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
    <section class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Su di <span>Noi</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= $pathindex ?>">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
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
    </section>
    <!-- About Us End -->

    <!-- Our History Section Start -->
    <section class="our-history">
        <div class="container">
            <div class="row section-row align-items-center">
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

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our History Box Start -->
                    <div class="our-history-box tab-content wow fadeInUp" data-wow-delay="0.25s" id="historybox">
                        <!-- Sidebar Our History Nav start -->
                        <div class="our-history-nav">
                            <ul class="nav nav-tabs" id="historyTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="1920-tab" data-bs-toggle="tab" data-bs-target="#1920" type="button" role="tab" aria-selected="true">In 1920 - Planning</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="1922-tab" data-bs-toggle="tab" data-bs-target="#1922" type="button" role="tab" aria-selected="false">In 1922 - Journey Started</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="1925-tab" data-bs-toggle="tab" data-bs-target="#1925" type="button" role="tab" aria-selected="false">In 1925 - Journey Progress</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="1930-tab" data-bs-toggle="tab" data-bs-target="#1930" type="button" role="tab" aria-selected="false">In 1930 - Global Reach</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="1940-tab" data-bs-toggle="tab" data-bs-target="#1940" type="button" role="tab" aria-selected="false">In 1940 - Industry Leadership</button>
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
                                            <span class="text-anime-style-2 h2" data-cursor="-opaque">Company <span>started</span></span>
                                            <p>Welcome to Industry, a leading industry innovator with a rich history of excellence. With a passion for precision and a commitment to quality, we have been empowering industries and driving progress.</p>
                                        </div>
                                        <!-- Section Title End -->
                                    </div>
                                    <!-- Our History Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Our History Image Start -->
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="https://placehold.co/414x396" alt="immagine azienda">
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
                                            <span class="text-anime-style-2 h2" data-cursor="-opaque">Journey <span>started</span></span>
                                            <p>Welcome to Industry, a leading industry innovator with a rich history of excellence. With a passion for precision and a commitment to quality, we have been empowering industries and driving progress.</p>
                                        </div>
                                        <!-- Section Title End -->
                                    </div>
                                    <!-- Our History Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Our History Image Start -->
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="https://placehold.co/414x396" alt="immagine azienda">
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
                                            <span class="text-anime-style-2 h2" data-cursor="-opaque">Journey <span>progress</span></span>
                                            <p>Welcome to Industry, a leading industry innovator with a rich history of excellence. With a passion for precision and a commitment to quality, we have been empowering industries and driving progress.</p>
                                        </div>
                                        <!-- Section Title End -->
                                    </div>
                                    <!-- Our History Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Our History Image Start -->
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="https://placehold.co/414x396" alt="immagine azienda">
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
                                            <span class="text-anime-style-2 h2" data-cursor="-opaque">Global <span>reach</span></span>
                                            <p>Welcome to Industry, a leading industry innovator with a rich history of excellence. With a passion for precision and a commitment to quality, we have been empowering industries and driving progress.</p>
                                        </div>
                                        <!-- Section Title End -->
                                    </div>
                                    <!-- Our History Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Our History Image Start -->
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="https://placehold.co/414x396" alt="immagine azienda">
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
                                            <span class="text-anime-style-2 h2" data-cursor="-opaque">Industry <span>leader</span></span>
                                            <p>Welcome to Industry, a leading industry innovator with a rich history of excellence. With a passion for precision and a commitment to quality, we have been empowering industries and driving progress.</p>
                                        </div>
                                        <!-- Section Title End -->
                                    </div>
                                    <!-- Our History Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Our History Image Start -->
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="https://placehold.co/414x396" alt="immagine azienda">
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
        <div class="mission-vision-bg parallaxie">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-lg-6">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <span class="wow fadeInUp label">our approach</span>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Empowering sustainable <span>growth in industry</span></h2>
                        </div>
                        <!-- Section Title End -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content dark-section wow fadeInUp" data-wow-delay="0.25s">
                            <p>We drive sustainable solutions in factory and industrial settings, focusing on efficiency, innovation, and environmental responsibility to support long-term growth.</p>
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
                    <div class="mission-vision-box tab-content wow fadeInUp" data-wow-delay="0.25s" id="missionvision">
                        <!-- Sidebar Mission Vision Nav start -->
                        <div class="mission-vision-nav">
                            <ul class="nav nav-tabs" id="mvTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="remodeling-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-selected="true">Amministrazione</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="installation-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-selected="false">Acquisti</button>
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
                                            <p>Our mission is to transform the factory and industry sectors through sustainable practices, innovation, and advanced technology, fostering growth that benefits both business and the environment.</p>
                                        </div>

                                        <div class="mission-vision-content-list">
                                            <ul>
                                                <li>Sustainable Manufacturing Practices</li>
                                                <li>Advanced Technology Integration</li>
                                                <li>Community Environmental Responsibility</li>
                                                <li>Innovation-Driven Growth</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Mission Vision Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Mission Vision Image Start -->
                                    <div class="mission-vision-image">
                                        <figure class="image-anime">
                                            <img src="https://placehold.co/556x350" alt="immagine missione aziendale">
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
                                            <p>Our vision is to transform the factory and industry sectors through sustainable practices, innovation, and advanced technology, fostering growth that benefits both business and the environment.</p>
                                        </div>

                                        <div class="mission-vision-content-list">
                                            <ul>
                                                <li>Sustainable Manufacturing Practices</li>
                                                <li>Advanced Technology Integration</li>
                                                <li>Community Environmental Responsibility</li>
                                                <li>Innovation-Driven Growth</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Mission Vision Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Mission Vision Image Start -->
                                    <div class="mission-vision-image">
                                        <figure class="image-anime">
                                            <img src="https://placehold.co/556x350" alt="immagine visione aziendale">
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
                                            <p>Our value is to transform the factory and industry sectors through sustainable practices, innovation, and advanced technology, fostering growth that benefits both business and the environment.</p>
                                        </div>

                                        <div class="mission-vision-content-list">
                                            <ul>
                                                <li>Sustainable Manufacturing Practices</li>
                                                <li>Advanced Technology Integration</li>
                                                <li>Community Environmental Responsibility</li>
                                                <li>Innovation-Driven Growth</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Mission Vision Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Mission Vision Image Start -->
                                    <div class="mission-vision-image">
                                        <figure class="image-anime">
                                            <img src="https://placehold.co/556x350" alt="immagine valori aziendali">
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
                        <span class="wow fadeInUp label text-black">our work</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Our successful project <span>initiatives</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>Our successful project initiatives showcase our commitment to excellence and innovation across various industries.</p>
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
                            <img src="<?= $pathindex ?>assets/images/icon set/settori/settori-panificazione.svg" alt="icona servizio">
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
                            <img src="<?= $pathindex ?>assets/images/icon set/settori/settori-motorsport.svg" alt="icona servizio">
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
                            <img src="<?= $pathindex ?>assets/images/icon set/settori/settori-formatura.svg" alt="icona servizio">
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
                            <img src="https://placehold.co/648x308" alt="immagine lavorazione">
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
    <div class="what-we-do">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <!-- What We Do Content Start -->
                    <div class="what-we-do-content">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <span class="wow fadeInUp label">what we do</span>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Innovative factory and industry <span>solutions today</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- What We Do List Start -->
                        <div class="what-we-do-list">
                            <div class="what-we-do-list-box-1">
                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="<?= $pathindex ?>assets/images/icon set/settori/settori-formatura.svg" alt="icona servizio">
                                    </div>
                                    <div class="what-we-item-content">
                                        <span>automation solutions</span>
                                        <p>Streamlining processes through cutting-edge technology.</p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="<?= $pathindex ?>assets/images/icon set/settori/settori-motorsport.svg" alt="icona servizio">
                                    </div>
                                    <div class="what-we-item-content">
                                        <span>quality control</span>
                                        <p>Ensuring product excellence through rigorous testing.</p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->
                            </div>

                            <div class="what-we-do-list-box-2">
                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="<?= $pathindex ?>assets/images/icon set/settori/settori-panificazione.svg" alt="icona servizio">
                                    </div>
                                    <div class="what-we-item-content">
                                        <span>process engineering</span>
                                        <p>Ensuring product excellence through rigorous testing.</p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="<?= $pathindex ?>assets/images/icon set/settori/settori-ricerca.svg" alt="icona servizio">
                                    </div>
                                    <div class="what-we-item-content">
                                        <span>product development</span>
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
    <section class="bg-accent text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <span class="h2">Macchine all'avanguardia <br>per ogni esigenza</span>
                </div>
                <div class="col-lg-6 d-flex align-items-center mt-lg-0 mt-5 text-center text-lg-start">
                    <a class="h2 scale-animation" href="<?= $pathindex ?>parco-macchine">Scopri il nostro parco macchine</a>
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