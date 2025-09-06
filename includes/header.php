<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header PHP Stylisé - Exaucé Aniti</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <!-- Header PHP -->
    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="index.php">Exaucé Aniti<span>Développeur Web</span></a>
            </div>

            <button class="menu-toggle" aria-label="Menu mobile">
                <span></span>
                <span></span>
                <span></span>
            </button>

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
        </div>
    </header>

    <!-- Overlay pour le menu mobile -->
    <div class="menu-overlay"></div>

    <script>
        // Script pour le menu responsive
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const nav = document.querySelector('.nav');
            const overlay = document.querySelector('.menu-overlay');

            if (menuToggle) {
                menuToggle.addEventListener('click', function() {
                    nav.classList.toggle('active');
                    menuToggle.classList.toggle('active');
                    overlay.classList.toggle('active');
                });
            }

            // Fermer le menu en cliquant sur l'overlay
            overlay.addEventListener('click', function() {
                nav.classList.remove('active');
                menuToggle.classList.remove('active');
                overlay.classList.remove('active');
            });

            // Effet de réduction du header au scroll
            window.addEventListener('scroll', function() {
                const header = document.querySelector('.header');
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Fermer le menu en cliquant sur un lien
            const navLinks = document.querySelectorAll('.nav a');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    nav.classList.remove('active');
                    menuToggle.classList.remove('active');
                    overlay.classList.remove('active');
                });
            });
        });
    </script>

    <script src="scripts/main.js"></script>
</body>

</html>