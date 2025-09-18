<!DOCTYPE html>
<html lang="fr" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exaucé Aniti - Développeur Web</title>

    <!-- Polices et icônes -->
    <link rel="stylesheet" href="styles/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <!-- Main Content -->
    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">Développeur Web<span class="accent">Créatif & Passionné</span></h1>
                    <p class="hero-description">Je conçois et développe des expériences web modernes, fonctionnelles et esthétiques qui marquent les esprits.</p>
                    <div class="hero-actions">
                        <a href="project.php" class="btn btn-primary">
                            <i class="fas fa-briefcase"></i>
                            Voir mes projets
                        </a>
                        <a href="contact.php" class="btn btn-secondary">
                            <i class="fas fa-envelope"></i>
                            Me contacter
                        </a>
                    </div>
                </div>
                <div class="hero-visual">
                    <img src="images/Profil.png" alt="Exaucé Aniti - Développeur Web" class="hero-image">
                </div>
            </div>
        </section>

        <section class="section skills">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Compétences Techniques</h2>
                    <p class="section-subtitle">
                        Un éventail de technologies maîtrisées pour répondre à vos besoins
                    </p>
                </div>

                <div class="skills-grid">
                    <!-- FRONTEND -->
                    <div class="skill-category">
                        <h3>Frontend</h3>
                        <ul class="skills-list">
                            <li class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">HTML / CSS</span>
                                    <span class="skill-percentage">75%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-width="75%"></div>
                                </div>
                            </li>
                            <li class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">JavaScript</span>
                                    <span class="skill-percentage">30%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-width="30%"></div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- BACKEND -->
                    <div class="skill-category">
                        <h3>Backend</h3>
                        <ul class="skills-list">
                            <li class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">PHP</span>
                                    <span class="skill-percentage">68%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-width="68%"></div>
                                </div>
                            </li>
                            <li class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">Java</span>
                                    <span class="skill-percentage">50%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-width="50%"></div>
                                </div>
                            </li>
                            <li class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">MySQL</span>
                                    <span class="skill-percentage">65%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-width="65%"></div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- OUTILS -->
                    <div class="skill-category">
                        <h3>Outils & Autres</h3>
                        <ul class="skills-list">
                            <li class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">Git</span>
                                    <span class="skill-percentage">60%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-width="60%"></div>
                                </div>
                            </li>
                            <li class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">GitHub</span>
                                    <span class="skill-percentage">60%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-width="60%"></div>
                                </div>
                            </li>
                            <li class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">VS Code</span>
                                    <span class="skill-percentage">90%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-width="90%"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROJETS RÉCENTS -->
        <section class="section projects">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Projets Récents</h2>
                    <p class="section-subtitle">Une sélection de mes réalisations les plus significatives</p>
                </div>

                <div class="projects-grid">
                    <div class="project-card">
                        <div class="project-image">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">Portfolio Personnel</h3>
                            <p class="project-description">Site vitrine pour montrer mes compétences et mon savoir-faire</p>
                            <div class="project-tech">
                                <span>PHP</span>
                                <span>HTML/CSS</span>
                                <span>JavaScript</span>
                            </div>
                            <a href="#" class="project-link">Voir le projet →</a>
                        </div>
                    </div>

                    <div class="project-card">
                        <div class="project-image">
                            <i class="fas fa-address-book"></i>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">Gestion de Contacts</h3>
                            <p class="project-description">Application de gestion de contacts avec interface graphique</p>
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
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">E-commerce MasekaFood</h3>
                            <p class="project-description">Plateforme e-commerce pour la vente de pâtisseries en ligne</p>
                            <div class="project-tech">
                                <span>PHP</span>
                                <span>MySQL</span>
                                <span>HTML</span>
                                <span>SCSS</span>
                                <span>JavaScript</span>
                            </div>
                            <a href="#" class="project-link">Voir le projet →</a>
                        </div>
                    </div>
                </div>

                <div class="section-actions">
                    <a href="project.php" class="btn btn-outline">
                        <i class="fas fa-briefcase"></i>
                        Voir tous les projets
                    </a>
                </div>
            </div>
        </section>
    </main>



    <?php include 'includes/footer.php'; ?>
    <script src="scripts/main.js"></script>
    <script src="scripts/theme.js"></script>
</body>

</html>