<?php
// Détermination de la page active
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header class="header">
    <link rel="stylesheet" href="styles/header.css">
    <div class=" container header-container">
        <!-- LOGO -->
        <a href="index.php" class="logo">Exaucé Aniti</a>

        <!-- Bouton menu mobile -->
        <button class="menu-toggle" id="menuToggle" aria-label="Menu">
            <i class="fas fa-bars"></i>
        </button>

        <?php
        // Inclure le fichier du compteur de vues
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';
        ajouter_une_vue();
        ?>

        <!-- Navigation principale -->
        <nav>
            <ul class="nav-menu" id="navMenu">
                <li><a href="index.php" class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>">Accueil</a></li>
                <li><a href="about.php" class="nav-link <?= ($current_page == 'about.php') ? 'active' : '' ?>">À propos</a></li>
                <li><a href="formations.php" class="nav-link <?= ($current_page == 'formations.php') ? 'active' : '' ?>">Formations</a></li>
                <li><a href="competences.php" class="nav-link <?= ($current_page == 'competences.php') ? 'active' : '' ?>">Compétences</a></li>
                <li><a href="project.php" class="nav-link <?= ($current_page == 'project.php') ? 'active' : '' ?>">Projets</a></li>
                <li><a href="contact.php" class="nav-link <?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact</a></li>
            </ul>
        </nav>

        <!-- Bouton changement de thème -->
        <button class="theme-toggle" id="themeToggle" aria-label="Changer le thème">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
        </button>
    </div>
</header>

<!-- Overlay menu mobile -->
<div class="menu-overlay"></div>