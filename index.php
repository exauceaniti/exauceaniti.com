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
                        <a href="project.php" class="btn btn-primary">Voir mes projets</a>
                        <a href="contact.php" class="btn btn-secondary">Me contacter</a>
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
                    <a href="project.php" class="btn btn-outline">Voir tous les projets</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <!-- SECTION SUPÉRIEURE : PROJET + FORMULAIRE -->
            <div class="footer-top">
                <div class="footer-project">
                    <h2>Parlons de votre projet</h2>
                    <p>Vous avez une idée de projet web ? Discutons-en ensemble pour la concrétiser.</p>
                    <div class="project-info">
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <span>exauceaniti@gmail.com</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <span>+243 820 853 461</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-clock"></i>
                            <span>Réponse sous 24h</span>
                        </div>
                    </div>
                </div>

                <div class="footer-form">
                    <h3>Envoyez un message</h3>
                    <form action="process-form.php" method="POST" id="footer-contact-form">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Votre nom complet" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Votre adresse email" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Décrivez votre projet..." rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer le message</button>
                    </form>
                </div>
            </div>

            <!-- CONTENEUR PRINCIPAL DU FOOTER -->
            <div class="footer-content">
                <!-- PREMIÈRE COLONNE : DESCRIPTION ET APPEL À L'ACTION -->
                <div class="footer-section footer-about">
                    <h3>Exaucé Aniti - Développeur Web</h3>
                    <p>Je crée des expériences web modernes et fonctionnelles qui aident les entreprises à prospérer en ligne.</p>
                    <a href="contact.php" class="btn btn-outline">Démarrer un projet</a>
                </div>

                <!-- DEUXIÈME COLONNE : LIENS DE NAVIGATION RAPIDE -->
                <div class="footer-section">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="about.php">À propos</a></li>
                        <li><a href="formations.php">Formations</a></li>
                        <li><a href="competences.php">Compétences</a></li>
                        <li><a href="project.php">Projects</a></li>
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
                            <span>RDC, Butembo, Kalemire</span>2
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
                    <p>&copy; 2025 Exaucé Aniti. Tous droits réservés.</p>
                    <div class="legal-links">
                        <a href="#">Politique de confidentialité</a>
                        <a href="#">Conditions d'utilisation</a>
                        <a href="#">Mentions légales</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="scripts/main.js"></script>
    <script src="scripts/theme.js"></script>
</body>

</html>