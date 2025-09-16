<?php
// Détermination de la page active
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header class="header">
    <link rel="stylesheet" href="styles/header.css">
    <div class="container header-container">
        <!-- LOGO -->
        <a href="index.php" class="logo">Exaucé Aniti</a>

        <!-- BOUTON MENU MOBILE -->
        <button class="menu-toggle" id="menuToggle" aria-label="Menu">
            <i class="fas fa-bars"></i>
        </button>

        <?php
        // Inclure le compteur de vues
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';
        ajouter_une_vue();
        ?>

        <!-- NAVIGATION PRINCIPALE -->
        <nav>
            <ul class="nav-menu" id="navMenu">
                <li><a href="index.php" class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>">Accueil</a></li>
                <li><a href="about.php" class="nav-link <?= ($current_page == 'about.php') ? 'active' : '' ?>">À propos</a></li>
                <li><a href="formations.php" class="nav-link <?= ($current_page == 'formations.php') ? 'active' : '' ?>">Formations</a></li>
                <li><a href="competences.php" class="nav-link <?= ($current_page == 'competences.php') ? 'active' : '' ?>">Compétences</a></li>
                <li><a href="project.php" class="nav-link <?= ($current_page == 'project.php') ? 'active' : '' ?>">Projets</a></li>
                <li><a href="contact.php" class="nav-link <?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact</a></li>

                <!-- BOUTON DE THÈME MOBILE -->
                <li class="theme-mobile-item">
                    <div class="theme-toggle-container">
                        <button class="theme-toggle" id="themeToggleMobile" aria-label="Changer le thème">
                            <i class="fas fa-moon"></i>
                            <i class="fas fa-sun"></i>
                        </button>
                        <span>Changer le thème</span>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- BOUTON DE THÈME DESKTOP -->
        <button class="theme-toggle theme-toggle-desktop" id="themeToggleDesktop" aria-label="Changer le thème">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
        </button>
    </div>
</header>

<!-- OVERLAY MENU MOBILE -->
<div class="menu-overlay"></div>