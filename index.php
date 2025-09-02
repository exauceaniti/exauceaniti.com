<!DOCTYPE html>
<html lang="fr">

<!--
     HEAD - EN-TÊTE DU DOCUMENT
     Contient les métadonnées, liens CSS,
     titre et ressources externes
 -->
<head>
    <!-- Encodage des caractères -->
    <!-- Responsive design : adapte la page aux mobiles -->
    <!-- Titre affiché dans l'onglet du navigateur -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exaucé Aniti - Développeur Web</title>
    
    <!--
         LIENS VERS LES FEUILLES DE STYLE
         - main.css : styles globaux
         - header.css : en-tête
         - home.css : page d’accueil
         - cards.css : cartes projets
         - footer.css : pied de page
         - Google Fonts (Inter)
     -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="styles/cards.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<!--FIN DE L'EN-TÊTE-->


<body>
<!--
     HEADER - EN-TÊTE DU SITE
     Contient le logo, la navigation et 
     le menu mobile
 -->
<header class="header">
    <div class="container">
        <!-- LOGO ET TITRE DU SITE -->
        <div class="logo">
            <a href="index.php">Exaucé Aniti<span>Développeur Web</span></a>
        </div>
  

        <!-- BOUTON MENU BURGER POUR MOBILE -->
        <button class="menu-toggle" aria-label="Menu mobile">
            <span></span>
            <span></span>
            <span></span>
        </button>
    

        <!-- NAVIGATION PRINCIPALE -->
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



<!--MENU OVERLAY MOBILE Fond sombre affiché lorsque le menu est ouvert-->
<div class="menu-overlay"></div>


<!--HERO SECTION Présentation avec titre, description,boutons d’action et image-->
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


<!--SECTION COMPÉTENCES Présentation des compétences techniques avec barres de progression-->
<section class="section skills">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Compétences Techniques</h2>
            <p class="section-subtitle">Un éventail de technologies maîtrisées pour répondre à vos besoins</p>
        </div>
        
        <div class="skills-grid">
            <!-- FRONTEND SKILLS -->
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
         
            <!-- BACKEND SKILLS -->
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
    
            <!-- OUTILS & AUTRES -->
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


<!--SECTION PROJETS RÉCENTS Présentation d'une sélection de projets avec technologies utilisées-->
<section class="section projects">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Projets Récents</h2>
            <p class="section-subtitle">Une sélection de mes réalisations les plus significatives</p>
        </div>
        
        <div class="projects-grid">
            <!-- PROJET 1 -->
            <div class="project-card">
                <div class="project-image">
                    <div class="placeholder-project"></div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Application E-commerce</h3>
                    <p class="project-description">Plateforme complète avec gestion de produits, panier et paiement.</p>
                    <div class="project-tech">
                        <span>React</span>
                        <span>Node.js</span>
                        <span>MongoDB</span>
                    </div>
                    <a href="#" class="project-link">Voir le projet →</a>
                </div>
            </div>
            <!-- FIN PROJET 1 -->

            <!-- PROJET 2 -->
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
            <!-- FIN PROJET 2 -->

            <!-- PROJET 3 -->
            <div class="project-card">
                <div class="project-image">
                    <div class="placeholder-project"></div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Application Web Mobile</h3>
                    <p class="project-description">Application responsive avec fonctionnalités avancées et PWA.</p>
                    <div class="project-tech">
                        <span>Vue.js</span>
                        <span>Firebase</span>
                        <span>SCSS</span>
                    </div>
                    <a href="#" class="project-link">Voir le projet →</a>
                </div>
            </div>
            <!-- FIN PROJET 3 -->
        </div>
        
        <!-- BOUTON POUR VOIR TOUS LES PROJETS -->
        <div class="section-actions">
            <a href="project.php" class="btn btn-outline">Voir tous les projets</a>
        </div>
    </div>
</section>


<!--FOOTER Pied de page avec infos, liens et réseaux-->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <!-- SECTION DESCRIPTION -->
            <div class="footer-section">
                <h3>Contactez-nous dès maintenant, sans hésiter</h3>
                <p>Vous avez une idée, un projet ou un besoin web ?
                    Nous sommes la pour transforme vos visions en solutions digitales modernes, rapides et sur mesure.
                    Que ce soit pour un site vitrine, une application web ou une refonte complète,
                    Nous sommes là pour vous accompagner avec expertise et passion.</p>
            </div>
                        <!-- SECTION NAVIGATION -->
            <div class="footer-section">
                <h3>Navigation</h3>
                <a href="index.php">Accueil</a>
                <a href="about.php">À propos</a>
                <a href="competences.php">Compétences</a>
                <a href="project.php">Projets</a>
                <a href="contact.php">Contact</a>
            </div>
            <!-- FIN NAVIGATION -->

            <!-- SECTION CONTACT -->
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Email: exauce.aniti@example.com</p>
                <p>Téléphone: +243 820 853 461</p>
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                <div class="social-links">
                <a href="https://wa.me/243820853461"><i class="fab fa-whatsapp"></i></a>
                <a href="mailto:exauce.aniti@example.com"><i class="fas fa-envelope"></i></a>
                <a href="https://www.facebook.com/exauce.aniti"><i class="fab fa-facebook"></i></a>
                <a href="https://github.com/exauceaniti"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/exauce-aniti"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <!-- FIN CONTACT -->
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2023 Exaucé Aniti. Tous droits réservés.</p>
        </div>
    </div>
</footer>
<script src="scripts/main.js"></script>

</body>
</html>
