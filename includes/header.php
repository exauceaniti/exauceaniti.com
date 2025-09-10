<!DOCTYPE html>
<html lang="fr" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exaucé Aniti - Développeur Web</title>

    <!-- Chargement des polices et icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Chargement des feuilles de style -->
    <link rel="stylesheet" href="styles/theme-variables.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
</head>

<body>
    <?php
    // Détermination de la page active pour la navigation
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>

    <!-- Header principal -->
    <header class="header">
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <a href="index.php">
                    Exaucé Aniti<span>Développeur Web</span>
                </a>
            </div>

            <!-- Navigation principale -->
            <nav class="nav">
                <ul>
                    <li><a href="index.php" class="<?= ($current_page == 'index.php') ? 'active' : '' ?>">Accueil</a></li>
                    <li><a href="about.php" class="<?= ($current_page == 'about.php') ? 'active' : '' ?>">À propos</a></li>
                    <li><a href="competences.php" class="<?= ($current_page == 'competences.php') ? 'active' : '' ?>">Compétences</a></li>
                    <li><a href="formations.php" class="<?= ($current_page == 'formations.php') ? 'active' : '' ?>">Formations</a></li>
                    <li><a href="project.php" class="<?= ($current_page == 'project.php') ? 'active' : '' ?>">Projets</a></li>
                    <li><a href="contact.php" class="<?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact</a></li>
                </ul>
            </nav>

            <!-- Contrôles du header (bouton thème à droite) -->
            <div class="header-controls">
                <!-- Bouton de changement de thème -->
                <button class="theme-toggle" aria-label="Changer le thème" title="Changer le thème">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                </button>

                <!-- Bouton menu mobile -->
                <button class="menu-toggle" aria-label="Menu mobile">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Overlay pour le menu mobile -->
    <div class="menu-overlay"></div>