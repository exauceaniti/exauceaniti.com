<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compétences - exauceaniti</title>

    <link rel="stylesheet" href="styles/skills.css">
    <!-- Font Awesome pour les icônes -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- En-tête simplifié pour l'exemple -->
    <?php include 'includes/header.php'; ?>

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
            }, {
                threshold: 0.5
            });

            skillBars.forEach(bar => {
                observer.observe(bar);
            });
        });
    </script>

    <script src="scripts/main.js"></script>
    <script src="scripts/theme.js"></script>
</body>

</html>