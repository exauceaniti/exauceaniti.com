<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exaucé Aniti - Développeur Full Stack</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="styles/cards.css">
    <link rel="stylesheet" href="styles/footer.css">
    <!-- Police Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
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

    <!-- Overlay pour le menu mobile -->
    <div class="menu-overlay"></div>

    <!-- Hero Section -->
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

    <!-- Compétences Section -->
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

    <!-- Projets Récents -->
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
            </div>
            
            <div class="section-actions">
                <a href="project.php" class="btn btn-outline">Voir tous les projets</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Exaucé Aniti</h3>
                    <p>Développeur fullstack passionné par la création d'expériences web modernes et fonctionnelles.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Navigation</h3>
                    <a href="index.php">Accueil</a>
                    <a href="about.php">À propos</a>
                    <a href="competences.php">Compétences</a>
                    <a href="project.php">Projets</a>
                    <a href="contact.php">Contact</a>
                </div>
                
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Email: exauce.aniti@example.com</p>
                    <p>Téléphone: +243 820 853 461</p>
                    <div class="social-links">
                        <a href="#" aria-label="LinkedIn">LinkedIn</a>
                        <a href="#" aria-label="GitHub">GitHub</a>
                        <a href="#" aria-label="Twitter">Twitter</a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 Exaucé Aniti. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>