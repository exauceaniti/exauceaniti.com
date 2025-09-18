<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets - Mon Portfolio</title>

    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="styles/projects.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <main class="main-content">
        <section class="projects-section">
            <div class="container">
                <h1>Mes Projets</h1>

                <div class="projects-grid">
                    <!-- CARTE DE PROJET 1: Portfolio Personnel -->
                    <div class="project-card">
                        <div class="project-image">
                            <img src="images/ImagePortofolio.png" alt="Portfolio personnel">
                        </div>
                        <div class="project-content">
                            <h3>Portfolio Personnel</h3>
                            <p>Conception et développement d'un site portfolio responsive pour présenter mes compétences et projets.</p>
                            <div class="technologies">
                                <span>HTML/CSS</span>
                                <span>JavaScript</span>
                                <span>PHP</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="project-link">Voir le projet</a>
                                <a href="#" class="project-link">Code source</a>
                            </div>
                        </div>
                    </div>

                    <!-- CARTE DE PROJET 2: Application de Gestion de Tâches -->
                    <div class="project-card">
                        <div class="project-image">
                            <img src="images/ImageGestionTache.png" alt="Application de gestion de tâches">
                        </div>
                        <div class="project-content">
                            <h3>Application de Gestion de Tâches</h3>
                            <p>Une application web responsive permettant de créer, organiser et suivre l'avancement des tâches quotidiennes.
                                <strong>Application en cours de develloppement</strong>
                            </p>
                            <div class="technologies">
                                <span>HTML/CSS</span>
                                <span>JavaScript</span>
                                <span>PHP</span>
                                <span>MySQL</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="project-link">Voir le projet</a>
                                <a href="#" class="project-link">Code source</a>
                            </div>
                        </div>
                    </div>

                    <!-- CARTE DE PROJET 3: Plateforme E-commerce -->
                    <div class="project-card">
                        <div class="project-image">
                            <img src="images/Maseka-Food.png" alt="Site e-commerce">
                        </div>
                        <div class="project-content">
                            <h3>Plateforme E-commerce Maseka-Food</h3>
                            <p>Développement d'une boutique en ligne complète avec gestion de produits, panier d'achat et système de paiement.
                                <strong>Application En Cours de develloppement</strong>
                            </p>
                            <div class="technologies">
                                <span>PHP</span>
                                <span>MySQL</span>
                                <span>SCSS</span>
                                <span>JavaScript</span>
                                <span>HTML</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="project-link">Voir le projet</a>
                                <a href="#" class="project-link">Code source</a>
                            </div>
                        </div>
                    </div>

                    <!-- CARTE DE PROJET 4: Application Gestion Contact -->
                    <div class="project-card">
                        <div class="project-image">
                            <img src="images/GestionContact.png" alt="Application gestion contact">
                        </div>
                        <div class="project-content">
                            <h3>Application Gestion Contact Project Back2</h3>
                            <p>Application permetant de Gerer les contactes dans une asociations ou n'importe ou avec une interface fluide cote Admin et User.
                                <strong>L'Application est en cours de develloppement</strong>
                            </p>
                            <div class="technologies">
                                <span>Java</span>
                                <span>Swing</span>
                                <span>MySQL</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="project-link">Voir le projet</a>
                                <a href="#" class="project-link">Code source</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="footer-projects-contact">
            <h2>Prêt à concrétiser votre vision?</h2>
            <p>Discutons de la façon dont nous pouvons collaborer pour transformer vos idées en solutions numériques exceptionnelles.</p>
            <a href="contact.php" class="btn-projects-contact">
                <i class="fas fa-paper-plane"></i>
                Contactez-moi
            </a>
        </div>
    </main>

    <script>
        // Animation pour les cartes de projet
        document.addEventListener('DOMContentLoaded', function() {
            const projectCards = document.querySelectorAll('.project-card');

            // Fonction pour vérifier si un élément est dans le viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            // Fonction pour gérer l'animation au scroll
            function checkScroll() {
                projectCards.forEach(card => {
                    if (isInViewport(card)) {
                        card.style.animationPlayState = 'running';
                    }
                });
            }
            // Vérifier au chargement initial
            checkScroll();
            // Vérifier pendant le défilement
            window.addEventListener('scroll', checkScroll);
        });
    </script>

    <?php include 'includes/footer.php'; ?>
    <script src="scripts/main.js"></script>
    <script src="scripts/theme.js"></script>
    <script src="scripts/projects.js"></script>
</body>

</html>