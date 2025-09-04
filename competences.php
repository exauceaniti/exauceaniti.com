<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compétences - Mon CV</title>
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* ============================= */
        /* STYLES GÉNÉRAUX ET RÉINITIALISATION */
        /* ============================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #ccd6f6;
            background-color: #0a192f;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* ============================= */
        /* EN-TÊTE ET NAVIGATION */
        /* ============================= */
        .header {
            background-color: rgba(10, 25, 47, 0.9);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: #64ffda;
            text-decoration: none;
        }

        .nav-list {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link {
            color: #ccd6f6;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #64ffda;
            transition: width 0.3s ease;
        }

        .nav-link:hover {
            color: #64ffda;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* ============================= */
        /* CONTENU PRINCIPAL - COMPÉTENCES */
        /* ============================= */
        .main-content {
            flex: 1;
            padding: 4rem 0;
        }

        .skills-section {
            padding: 4rem 0;
        }

        .skills-section h1 {
            text-align: center;
            margin-bottom: 3rem;
            color: #ccd6f6;
            font-size: 2.5rem;
            position: relative;
            padding-bottom: 1rem;
        }

        .skills-section h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: #64ffda;
        }

        .skills-categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .category {
            background: rgba(23, 42, 69, 0.5);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(100, 255, 218, 0.1);
        }

        .category:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .category h2 {
            color: #ccd6f6;
            margin-bottom: 1.5rem;
            padding-bottom: 0.8rem;
            border-bottom: 2px solid #64ffda;
            font-size: 1.5rem;
        }

        .skill {
            margin-bottom: 1.5rem;
        }

        .skill:last-child {
            margin-bottom: 0;
        }

        .skill-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }

        .skill-info span:first-child {
            font-weight: bold;
            color: #ccd6f6;
        }

        .skill-info span:last-child {
            color: #8892b0;
        }

        .skill-bar {
            height: 8px;
            background: rgba(136, 146, 176, 0.2);
            border-radius: 4px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background: linear-gradient(90deg, #64ffda 0%, rgba(100, 255, 218, 0.7) 100%);
            border-radius: 4px;
            width: 0;
            transition: width 1s ease-in-out;
        }

        /* Animation au survol */
        .skill-bar:hover .skill-progress {
            transform: scaleY(1.2);
            transform-origin: center;
        }

        /* ============================= */
        /* PIED DE PAGE SPÉCIFIQUE AUX PROJETS */
        /* ============================= */
        .footer-projects {
            background-color: #0a192f;
            color: #ccd6f6;
            padding: 4rem 0 2rem;
            margin-top: auto;
            position: relative;
            overflow: hidden;
        }

        .footer-projects::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                radial-gradient(circle at 20% 30%, rgba(37, 99, 235, 0.05) 0%, transparent 40%),
                radial-gradient(circle at 80% 70%, rgba(6, 182, 212, 0.05) 0%, transparent 40%);
            pointer-events: none;
        }

        .footer-projects-contact {
            text-align: center;
            padding: 3rem 0;
            margin-bottom: 2rem;
            border-bottom: 1px solid rgba(100, 255, 218, 0.1);
        }

        .footer-projects-contact h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #ccd6f6;
            font-weight: 600;
        }

        .footer-projects-contact p {
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto 2rem;
            line-height: 1.6;
            color: #8892b0;
        }

        .btn-projects-contact {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            color: #64ffda;
            padding: 1rem 2rem;
            border: 1px solid #64ffda;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-projects-contact::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(100, 255, 218, 0.1);
            transition: all 0.4s ease;
            z-index: -1;
        }

        .btn-projects-contact:hover {
            color: #0a192f;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(100, 255, 218, 0.2);
        }

        .btn-projects-contact:hover::before {
            left: 0;
            background: #64ffda;
        }

        .btn-projects-contact i {
            margin-right: 0.8rem;
            font-size: 1.2rem;
        }

        .footer-projects-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 2.5rem;
            margin-bottom: 3rem;
        }

        .footer-projects-about h3 {
            font-size: 1.5rem;
            margin-bottom: 1.2rem;
            color: #ccd6f6;
            position: relative;
            padding-bottom: 0.8rem;
        }

        .footer-projects-about h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: #64ffda;
        }

        .footer-projects-about p {
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 1.5rem;
            color: #8892b0;
        }

        .btn-projects {
            display: inline-flex;
            align-items: center;
            background: transparent;
            color: #64ffda;
            padding: 0.8rem 1.5rem;
            border: 1px solid #64ffda;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-projects::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(100, 255, 218, 0.1);
            transition: all 0.4s ease;
            z-index: -1;
        }

        .btn-projects:hover {
            color: #0a192f;
            transform: translateY(-2px);
        }

        .btn-projects:hover::before {
            left: 0;
            background: #64ffda;
        }

        .footer-projects-section h3 {
            font-size: 1.3rem;
            margin-bottom: 1.2rem;
            color: #ccd6f6;
            position: relative;
            padding-bottom: 0.8rem;
        }

        .footer-projects-section h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: #64ffda;
        }

        .footer-projects-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-projects-section ul li {
            margin-bottom: 0.8rem;
        }

        .footer-projects-section ul li a {
            color: #8892b0;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footer-projects-section ul li a:hover {
            color: #64ffda;
            transform: translateX(5px);
        }

        .footer-projects-contact-info h3 {
            font-size: 1.3rem;
            margin-bottom: 1.2rem;
            color: #ccd6f6;
            position: relative;
            padding-bottom: 0.8rem;
        }

        .footer-projects-contact-info h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: #64ffda;
        }

        .projects-contact-info {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .projects-contact-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .projects-contact-item i {
            color: #64ffda;
            width: 20px;
            text-align: center;
        }

        .projects-contact-item span {
            color: #8892b0;
        }

        .projects-social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .projects-social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(100, 255, 218, 0.1);
            border-radius: 50%;
            color: #64ffda;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }

        .projects-social-links a:hover {
            background-color: rgba(100, 255, 218, 0.2);
            transform: translateY(-3px);
            border-color: #64ffda;
        }

        .footer-projects-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(100, 255, 218, 0.1);
        }

        .footer-projects-bottom-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .footer-projects-bottom p {
            color: #8892b0;
            margin: 0;
        }

        .projects-legal-links {
            display: flex;
            gap: 1.5rem;
        }

        .projects-legal-links a {
            color: #8892b0;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .projects-legal-links a:hover {
            color: #64ffda;
        }

        /* ============================= */
        /* RESPONSIVE DESIGN */
        /* ============================= */
        @media (max-width: 968px) {
            .footer-projects-content {
                grid-template-columns: 1fr 1fr;
                gap: 2rem;
            }
            
            .footer-projects-about {
                grid-column: 1 / -1;
            }
            
            .skills-categories {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }
            
            .nav-list {
                flex-wrap: wrap;
                justify-content: center;
                gap: 1rem;
            }
            
            .footer-projects-contact h2 {
                font-size: 2rem;
            }
            
            .footer-projects-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .footer-projects-bottom-content {
                flex-direction: column;
                text-align: center;
            }
            
            .projects-legal-links {
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .projects-social-links {
                justify-content: center;
            }
            
            .skills-section h1 {
                font-size: 2rem;
            }
            
            .category {
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .skills-section h1 {
                font-size: 1.8rem;
                margin-bottom: 2rem;
            }
            
            .category {
                padding: 1.2rem;
            }
            
            .skill-info {
                flex-direction: column;
                gap: 0.3rem;
            }
            
            .footer-projects-contact h2 {
                font-size: 1.8rem;
            }
        }

        /* ============================= */
        /* ANIMATIONS */
        /* ============================= */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .footer-projects-section {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s forwards;
        }

        .footer-projects-section:nth-child(1) { animation-delay: 0.1s; }
        .footer-projects-section:nth-child(2) { animation-delay: 0.2s; }
        .footer-projects-section:nth-child(3) { animation-delay: 0.3s; }
        .footer-projects-section:nth-child(4) { animation-delay: 0.4s; }

        /* Animation pour les barres de compétences */
        @keyframes fillBar {
            from { width: 0; }
            to { width: attr(data-width); }
        }
    </style>
</head>
<body>
    <!-- En-tête simplifié pour l'exemple -->
    <header class="header">
        <div class="container header-content">
            <a href="index.php" class="logo">Exaucé Aniti</a>
            <nav>
                <ul class="nav-list">
                    <li><a href="index.php" class="nav-link">Accueil</a></li>
                    <li><a href="about.php" class="nav-link">À propos</a></li>
                    <li><a href="formations.php" class="nav-link">Formations</a></li>
                    <li><a href="competences.php" class="nav-link active">Compétences</a></li>
                    <li><a href="project.php" class="nav-link">Projets</a></li>
                    <li><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main class="main-content">
        <section class="skills-section">
            <div class="container">
                <h1>Mes Compétences</h1>
                
                <div class="skills-categories">
                    <div class="category">
                        <h2>Développement Front-end</h2>
                        <div class="skill">
                            <div class="skill-info">
                                <span>HTML5/CSS3</span>
                                <span>75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="75%" style="width: 75%;"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <div class="skill-info">
                                <span>JavaScript</span>
                                <span>30%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="30%" style="width: 30%;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="category">
                        <h2>Développement Back-end</h2>
                        <div class="skill">
                            <div class="skill-info">
                                <span>PHP</span>
                                <span>60%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="68%" style="width: 68%;"></div>
                            </div>
                        </div>
                        
                        <div class="skill">
                            <div class="skill-info">
                                <span>Java</span>
                                <span>50%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="50%" style="width: 50%;"></div>
                            </div>
                        </div>

                        <div class="skill">
                            <div class="skill-info">
                                <span>MySQL</span>
                                <span>65%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="65%" style="width: 65%;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="category">
                        <h2>Outils & Technologies</h2>
                        <div class="skill">
                            <div class="skill-info">
                                <span>Git</span>
                                <span>75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="60%" style="width: 60%;"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <div class="skill-info">
                                <span>Github</span>
                                <span>75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="60%" style="width: 60%;"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <div class="skill-info">
                                <span>VSCode</span>
                                <span>90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="90%" style="width: 90%;"></div>
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
                <h2>Avez vous un trucs a nous signaler !</h2>
                <p>Discutons Maintenant et faisons la mise au point de ce que vous voulez</p>
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

    <script>
        // Script pour animer les barres de compétences au défilement
        document.addEventListener('DOMContentLoaded', function() {
            const skillBars = document.querySelectorAll('.skill-progress');
            
            // Observer les éléments pour l'animation au défilement
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const width = entry.target.getAttribute('data-width');
                        entry.target.style.width = width;
                    }
                });
            }, { threshold: 0.5 });
            
            skillBars.forEach(bar => {
                observer.observe(bar);
            });
        });
    </script>
</body>
</html>