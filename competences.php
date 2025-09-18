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

        <div class="footer-projects-contact">
            <h2>Avez vous un trucs a nous signaler !</h2>
            <p>Discutons Maintenant et faisons la mise au point de ce que vous voulez</p>
            <a href="contact.php" class="btn-projects-contact">
                <i class="fas fa-paper-plane"></i>
                Contactez-moi
            </a>
        </div>
    </main>

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

    <?php include 'includes/footer.php'; ?>
    <script src="scripts/main.js"></script>
    <script src="scripts/theme.js"></script>
</body>

</html>