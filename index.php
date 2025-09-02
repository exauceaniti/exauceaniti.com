<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exaucé Aniti - Développeur Web</title>
    
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="styles/cards.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Intégration de Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
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
                <li><a href="index.php" class="active">Accueil</a></li>
                <li><a href="about.php">À propos</a></li>
                <li><a href="competences.php">Compétences</a></li>
                <li><a href="formations.php">Formations</a></li>
                <li><a href="project.php">Projets</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="menu-overlay"></div>

<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Développeur Web<span class="accent">Créatif & Passionné</span></h1>
            <p class="hero-description">Je conçois et développe des expériences web modernes, fonctionnelles et esthétiques qui marquent les esprits.</p>
            <div class="hero-actions">
                <a href="project.php" class="btn btn-primary">Voir mes projets</a>
                <a href="contact.php" class="btn btn-secondary">Me contacter</a>
            </div>
        </div>
        <div class="hero-visual">
            <img src="images/photo.png" alt="Exaucé Aniti - Développeur Web" class="hero-image">
        </div>
    </div>
</section>

<section class="section skills">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Compétences Techniques</h2>
            <p class="section-subtitle">Un éventail de technologies maîtrisées pour répondre à vos besoins</p>
        </div>
        
        <div class="skills-grid">
            <div class="skill-category">
                <h3>Frontend</h3>
                <div class="skills-list">
                    <div class="skill-item">
                        <span class="skill-name">HTML/CSS</span>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="75%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">JavaScript</span>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="30%"></div>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="skill-category">
                <h3>Backend</h3>
                <div class="skills-list">
                    <div class="skill-item">
                        <span class="skill-name">PHP</span>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="68%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">MySQL</span>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="65%"></div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="skill-category">
                <h3>Outils & autres</h3>
                <div class="skills-list">
                    <div class="skill-item">
                        <span class="skill-name">Git</span>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="60%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">GitHub</span>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="60%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">VsCode</span>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="90%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section projects">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Projets Récents</h2>
            <p class="section-subtitle">Une sélection de mes réalisations les plus significatives</p>
        </div>
        
        <div class="projects-grid">

                       <div class="project-card">
                <div class="project-image">
                    <div class="placeholder-project"></div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Portfolio Artistique</h3>
                    <p class="project-description">Site vitrine pour un artiste avec galerie et gestion de contenu.</p>
                    <div class="project-tech">
                        <span>HTML/CSS</span>
                        <span>JavaScript</span>
                        <span>PHP</span>
                    </div>
                    <a href="#" class="project-link">Voir le projet →</a>
                </div>
            </div>

            <div class="project-card">
                <div class="project-image">
                    <div class="placeholder-project"></div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Application Gestion Contact Project Back2</h3>
                    <p class="project-description"> Cette Plateforme est encore en cours de develloppement.</p>
                    <div class="project-tech">
                        <span>Java</span>
                        <span>Swing</span>
                        <span>MySQL</span>
                    </div>
                    <a href="#" class="project-link">Voir le projet →</a>
                </div>
            </div>


            <div class="project-card">
                <div class="project-image">
                    <div class="placeholder-project"></div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Project Maseka-Food</h3>
                    <p class="project-description">Application responsive avec fonctionnalités avancées Pour la vente en ligne,
                        des pattisserie pour MasekaFood.</p>
                    <div class="project-tech">
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>SCSS</span>
                        <span>JavaScript</span>
                        <span>HTML</span>
                    </div>
                    <a href="#" class="project-link">Voir le projet →</a>
                </div>
            </div>
        </div>
        
        <div class="section-actions">
            <a href="project.php" class="btn btn-outline">Voir tous les projets</a>
        </div>
    </div>
</section>

<!-- NOUVEAU FOOTER AMÉLIORÉ -->
<footer class="footer">
    <div class="container">
        <!-- CONTENEUR PRINCIPAL DU FOOTER -->
        <div class="footer-content">
            
            <!-- PREMIÈRE COLONNE : DESCRIPTION ET APPEL À L'ACTION -->
            <div class="footer-section footer-about">
                <h3>Prêt à concrétiser votre projet web ?</h3>
                <p>Contactez-mous dès maintenant pour discuter de votre vision et voir comment nous pouvons la transformer en réalité numérique ensemble.</p>
                <a href="contact.php" class="btn btn-footer">Démarrer un projet</a>
            </div>
            
            <!-- DEUXIÈME COLONNE : LIENS DE NAVIGATION RAPIDE -->
            <div class="footer-section">
                <h3>Navigation</h3>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="about.php">À propos</a></li>
                    <li><a href="competences.php">Compétences</a></li>
                    <li><a href="project.php">Projets</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            
            <!-- TROISIÈME COLONNE : SERVICES OFFERTS -->
            <div class="footer-section">
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
            <div class="footer-section footer-contact">
                <h3>Restons en contact</h3>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>exauceaniti@gmail.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+243 820 853 461</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>RDC, Butembo, Kalemire</span>
                    </div>
                </div>
                
                <div class="social-links">
                    <a href="https://wa.me/243820853461" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    <a href="mailto:exauce.aniti@example.com" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    <a href="https://www.facebook.com/exauce.aniti" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://github.com/exauceaniti" aria-label="GitHub"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/exauce-aniti" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
        </div>
        
        <!-- BARRE DE BAS DE PAGE : DROITS D'AUTEUR -->
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <p>&copy; 2023 Exaucé Aniti. Tous droits réservés.</p>
                <div class="legal-links">
                    <a href="#">Politique de confidentialité</a>
                    <a href="#">Conditions d'utilisation</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="scripts/main.js"></script>

</body>
</html>