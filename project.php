<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets - Mon Portfolio</title>
    
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Feuilles de style -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/projects.css">
    <link rel="stylesheet" href="styles/cards.css">
    <!-- <link rel="stylesheet" href="styles/footer.css"> -->
</head>
<body>
    <!-- Inclusion de l'en-tête du site -->
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/navigation.php'; ?>
    
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
    </main>

<!-- FOOTER SPÉCIFIQUE AUX PROJETS -->
<footer class="footer-projects">
    <div class="container">
        <!-- SECTION DE CONTACT AVEC BOUTON -->
        <div class="footer-projects-contact">
            <h2>Prêt à concrétiser votre vision?</h2>
            <p>Discutons de la façon dont nous pouvons collaborer pour transformer vos idées en solutions numériques exceptionnelles.</p>
            <a href="contact.php" class="btn-projects-contact">
                <i class="fas fa-paper-plane"></i>
                Contactez-moi
            </a>
        </div>
        
        <!-- CONTENEUR PRINCIPAL DU FOOTER PROJETS -->
        <div class="footer-projects-content">
            <!-- PREMIÈRE COLONNE : DESCRIPTION -->
            <div class="footer-projects-section footer-projects-about">
                <h3>Exaucé Aniti - Développeur Web</h3>
                <p>Je spécialise dans la création d'expériences web modernes et performantes, en transformant des concepts complexes en interfaces élégantes et fonctionnelles.</p>
                <a href="contact.php" class="btn-projects">Démarrer un projet</a>
            </div>
            
            <!-- DEUXIÈME COLONNE : LIENS DE NAVIGATION RAPIDE -->
            <div class="footer-projects-section">
                <h3>Navigation</h3>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="about.php">À propos</a></li>
                    <li><a href="formations.php">Formations</a></li>
                    <li><a href="competences.php">Compétences</a></li>
                    <li><a href="project.php">Projets</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            
            <!-- TROISIÈME COLONNE : SERVICES OFFERTS -->
            <div class="footer-projects-section">
                <h3>Services</h3>
                <ul>
                    <li><a href="#">Développement Frontend</a></li>
                    <li><a href="#">Développement Backend</a></li>
                    <li><a href="#">Sites E-commerce</a></li>
                    <li><a href="#">Applications Web</a></li>
                    <li><a href="#">Refonte de sites</a></li>
                </ul>
            </div>
            
            <!-- QUATRIÈME COLONNE : COORDONNÉES ET RÉSEAUX SOCIAUX -->
            <div class="footer-projects-section footer-projects-contact-info">
                <h3>Contact</h3>
                <div class="projects-contact-info">
                    <div class="projects-contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>exauceaniti@gmail.com</span>
                    </div>
                    <div class="projects-contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+243 820 853 461</span>
                    </div>
                    <div class="projects-contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>RDC, Butembo, Kalemire</span>
                    </div>
                </div>
                
                <div class="projects-social-links">
                    <a href="https://wa.me/243820853461" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    <a href="mailto:exauce.aniti@example.com" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    <a href="https://www.facebook.com/exauce.aniti" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://github.com/exauceaniti" aria-label="GitHub"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/exauce-aniti" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        
        <!-- BARRE DE BAS DE PAGE : DROITS D'AUTEUR -->
        <div class="footer-projects-bottom">
            <div class="footer-projects-bottom-content">
                <p>&copy; 2025 Exaucé Aniti. Tous droits réservés.</p>
                <div class="projects-legal-links">
                    <a href="#">Politique de confidentialité</a>
                    <a href="#">Conditions d'utilisation</a>
                    <a href="#">Mentions légales</a>
                </div>
            </div>
        </div>
    </div>
</footer>
    <script src="scripts/main.js"></script>
    <script src="scripts/projects.js"></script>
</body>
</html>