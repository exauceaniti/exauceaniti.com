<!--
  PAGE PROJETS - MON PORTFOLIO
  Cette page présente les projets réalisés avec une grille de cartes
  Auteur: Exaucé Aniti
  Date: 2023
-->
<!DOCTYPE html>
<!-- Déclaration du type de document et langue -->
<html lang="fr">
<head>
    <!-- Encodage des caractères pour support étendu -->
    <meta charset="UTF-8">
    <!-- Configuration viewport pour le responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page dans l'onglet du navigateur -->
    <title>Projets - Mon CV</title>
    
    <!-- Feuilles de style principales -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/projects.css">
    <link rel="stylesheet" href="styles/cards.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>
<body>
    <!-- Inclusion de l'en-tête du site (logique commune) -->
    <?php include 'includes/header.php'; ?>
    <!-- Inclusion de la navigation principale -->
    <?php include 'includes/navigation.php'; ?>
    
    <!-- Contenu principal de la page -->
    <main class="main-content">
        <!-- Section dédiée aux projets -->
        <section class="projects-section">
            <!-- Conteneur pour centrage et gestion des largeurs -->
            <div class="container">
                <!-- Titre principal de la section -->
                <h1>Mes Projets</h1>
                
                <!-- Grille contenant tous les projets -->
                <div class="projects-grid">

                    <!-- CARTE DE PROJET 1: Portfolio Personnel -->
                    <div class="project-card">
                        <!-- Conteneur de l'image du projet -->
                        <div class="project-image">
                            <!-- Image représentative du projet -->
                            <img src="images/ImagePortofolio.png" alt="Portfolio personnel">
                        </div>
                        <!-- Contenu textuel du projet -->
                        <div class="project-content">
                            <!-- Titre du projet -->
                            <h3>Portfolio Personnel</h3>
                            <!-- Description concise du projet -->
                            <p>Conception et développement d'un site portfolio responsive pour présenter mes compétences et projets.</p>
                            <!-- Liste des technologies utilisées -->
                            <div class="technologies">
                                <!-- Badges des technologies -->
                                <span>HTML/CSS</span>
                                <span>JavaScript</span>
                                <span>PHP</span>
                            </div>
                            <!-- Liens d'action vers le projet -->
                            <div class="project-links">
                                <!-- Lien vers la démo live du projet -->
                                <a href="#" class="project-link">Voir le projet</a>
                                <!-- Lien vers le code source (GitHub, etc.) -->
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
                    
                    <!-- CARTE DE PROJET 4: Application Météo-->
                    <div class="project-card">
                        <div class="project-image">
                            <img src="images/GestionContact.png" alt="Application météo">
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
    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="scripts/main.js"></script>
</body>
</html>