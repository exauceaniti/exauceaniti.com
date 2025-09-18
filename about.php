<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - Exaucé Aniti | Développeur Web</title>
    <link rel="stylesheet" href="../styles/about.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <!-- Contenu principal -->
    <main class="main-content">
        <section class="about-section">
            <div class="container">
                <h1>À propos de moi</h1>

                <div class="about-content">
                    <div class="about-image">
                        <img src="images/Profil.png" alt="Exaucé Aniti Mungufeni - Développeur Web">
                    </div>

                    <div class="about-text">
                        <h2>Qui suis-je ?</h2>
                        <p>Je suis Exaucé Aniti Mungufeni, un développeur web passionné et engagé dans la création
                            d'expériences numériques exceptionnelles, performantes et durables. Avec une solide base en développement front-end
                            et back-end, je m'efforce de créer des solutions web qui allient esthétique et fonctionnalité.
                        </p>

                        <h2>Ma philosophie</h2>
                        <p>Je crois en l'apprentissage continu et à l'adaptation aux nouvelles technologies.
                            Pour moi, chaque projet est une opportunité d'apprendre, de grandir et de dépasser
                            les attentes. Mon approche combine créativité, rigueur technique et attention aux détails.
                        </p>

                        <h2>Mes objectifs</h2>
                        <p>Mon objectif est de continuer à développer mes compétences techniques tout en contribuant à des projets innovants qui ont un impact positif. Je souhaite devenir un ingénieur informatique accompli, spécialisé dans le développement d'applications web et mobiles.</p>

                        <div class="personal-info">
                            <div class="info-item">
                                <strong>Nom :</strong> Exaucé Aniti Mungufeni
                            </div>
                            <div class="info-item">
                                <strong>Date de naissance :</strong> 08 octobre 2004
                            </div>
                            <div class="info-item">
                                <strong>Par :</strong>Aniti Bhadriko Simeon et Anzoyo Shalom
                            </div>
                            <div class="info-item">
                                <strong>Nationalité :</strong> Congolaise (RDC)
                            </div>
                            <div class="info-item">
                                <strong>Email :</strong> exauceaniti@gmail.com
                            </div>
                            <div class="info-item">
                                <strong>Téléphone :</strong> +243 820 853 461
                            </div>
                            <div class="info-item">
                                <strong>Localisation :</strong> RDC, Butembo, Kalemire
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section éducation -->
                <div class="education-section">
                    <h2>Parcours académique</h2>

                    <div class="education-item">
                        <h3>Génie Informatique</h3>
                        <div class="date">En cours</div>
                        <p>Actuellement étudiant en Génie Informatique, je me spécialise dans le développement web et mobile. Mon programme d'études inclut la programmation, les bases de données, les architectures logicielles et la conception d'interfaces utilisateur.</p>
                    </div>

                    <div class="education-item">
                        <h3>Autres formations</h3>
                        <p>En plus de mon parcours académique, je me forme continuellement aux nouvelles technologies et langages de programmation à travers des plateformes en ligne et des projets personnels.</p>
                    </div>
                </div>

                <!-- Section objectifs professionnels -->
                <div class="education-section">
                    <h2>Objectifs professionnels</h2>
                    <p>Mon ambition est de devenir un ingénieur informatique spécialisé dans le développement d'applications web et mobiles. Je souhaite participer à des projets innovants qui résolvent des problèmes réels et améliorent la vie des gens grâce à la technologie.</p>
                    <p>À long terme, je vise à créer ma propre entreprise de développement de solutions numériques en République Démocratique du Congo, contribuant ainsi au développement technologique de mon pays.</p>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Script pour le menu responsive
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const nav = document.querySelector('.nav');

            if (menuToggle) {
                menuToggle.addEventListener('click', function() {
                    nav.classList.toggle('active');
                    menuToggle.classList.toggle('active');
                });
            }
        });
    </script>


    <?php include 'includes/footer.php'; ?>
    <script src="scripts/main.js"></script>
    <script src="scripts/theme.js"></script>
</body>

</html>