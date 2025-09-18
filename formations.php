<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formations - Mon CV</title>
    <link rel="stylesheet" href="styles/timelines.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        <div class="signale-section">
            <h2>Avez vous un trucs a nous signaler !</h2>
            <p>Discutons Maintenant et faisons la mise au point de ce que vous voulez</p>
            <a href="contact.php" class="btn-projects-contact">
                <i class="fas fa-phone"></i>
                Nous contacter
            </a>
            <a href="projects.php" class="btn-projects-contact">
                <i class="fas fa-project-diagram"></i>
                Voir nos réalisations
            </a>
        </div>

    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="scripts/main.js"></script>
    <script src="scripts/theme.js"></script>
</body>

</html>