<?php

function setActiveLink($pages)
{
    $current_page = basename($_SERVER["SCRIPT_NAME"]);
    if (in_array($current_page, $pages)) {
        echo "attivo";
    }
}

?>

<!-- Preloader Start -->
<div class="preloader">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon"><img src="<?= $pathindex ?>assets/images/global/logo/logo/DVF-logo_neg.svg" alt="logo"></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="<?= $pathindex ?>">
                    <img src="<?= $pathindex ?>assets/images/global/logo/logo/DVF-logo_neg.svg" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="<?= $pathindex ?>">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= $pathindex ?>azienda">Azienda</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= $pathindex ?>qualita">Qualità</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= $pathindex ?>parco-macchine">Parco macchine</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= $pathindex ?>realizzazioni">Realizzazioni</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= $pathindex ?>motorsport">Motorsport</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= $pathindex ?>lavora-con-noi">Lavora con noi</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= $pathindex ?>contatti">Contatti</a></li>
                        </ul>
                    </div>

                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->