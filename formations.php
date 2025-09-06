<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formations - Mon CV</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/timelines.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <main class="main-content">
        <section class="formations-section">
            <div class="container">
                <h1>Mon parcours scolaire : primaire, secondaire et universitaire</h1>

                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-date">2010 - 2016</div>
                        <div class="timeline-content">
                            <h3>Etude Primaire</h3>
                            <h4><a class="lien" href="#">Ecole Primaire Mapendo</a></h4>
                            <p>J'ai commencer mes etudes primaires car j'avais un petit age
                                j'ai evoluer dans cette ecole jusqu'a 5eme annee primaire
                                puis je me suis rendu a Durba pour la 6 eme a <strong>EP Mapendo</strong>
                                Ou j'ai obtenue mon certificat de fin t'etude primaire.
                            </p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-date">2016 - 2022</div>
                        <div class="timeline-content">
                            <h3>Etude Secondaires</h3>
                            <h4><a class="lien" href="https://csleshirondelles.com/">COmplexe Scolaire Les hirondelles</a></h4>
                            <p>Formation axée sur les disciplines scientifiques : mathématiques, physique, chimie et biologie.
                                Développement de compétences analytiques, rigueur méthodologique et esprit critique,
                                et aussi l'apprentissage du travaille en equipe.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-date">2022 - Present</div>
                        <div class="timeline-content">
                            <h3>Etude Universitaire</h3>
                            <h4><a class="lien" href="https://uor-rdc.net/">Universite Officiel de Ruwenzori</a></h4>
                            <p>Programme académique axé sur les bases théoriques et pratiques de l’informatique :
                                algorithmique, structures de données, systèmes d’exploitation, réseaux,
                                sécurité informatique et développement logiciel.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-date">2024 ➜ A nos Jours</div>
                        <div class="timeline-content">
                            <h3>Apprentissage Approfondies</h3>
                            <h4><a class="lien" href="https://modernik.net/">Modernik.net</a></h4>
                            <p>Formation pratique orientée projet sur les technologies web actuelles :
                                HTML5, CSS3, Gestion de bases de données avec MySQL, Ainsi que la geration des Projets.</p>
                        </div>
                    </div>
                </div>

                <h2 class="certifications-title">Certifications</h2>

                <div class="certifications">
                    <div class="certification-card">
                        <h3>Certificat de fin d'etude primaire</h3>
                        <h4><a class="lien" href="#">Ecole Primaire Mapendo</a></h4>
                    </div>
                    <div class="certification-card">
                        <h3>Diplome de fin t'etude Secondaire en <strong>Scientifique</strong></h3>
                        <h4><a class="lien" href="https://csleshirondelles.com/">COmplexe Scolaire Les hirondelles</a></h4>
                    </div>
                    <div class="certification-card">
                        <h3>Diplome de Liscence En Genie informatique</h3>
                        <h4><a class="lien" href="https://uor-rdc.net/">Universite Officiel de Ruwenzori</a></h4>
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
    <script src="scripts/main.js"></script>
</body>

</html>