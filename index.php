<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV - Accueil</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="styles/cards.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/navigation.php'; ?>
    
    <main class="main-content">
        <section class="hero">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Exaucé Aniti</h1>
                    <h2>Développeur Web</h2>
                    <p>Bienvenue sur mon portfolio</p>
                    <a href="contact.php" class="cta-button">Me contacter</a>
                </div>
                <div class="Mon-image">
                    <img src="images/photo.png" alt="Exaucé Aniti">
                </div>
            </div>
        </section>

        <section class="quick-links">
            <h2>Parcours</h2>
            <div class="cards-container">

                <div class="card">
                    <h3>Formations</h3>
                    <p>Parcours des etudes Primaires, Secondaires, Universitaires et formations continues</p>
                    <a href="formations.php" class="card-link">Voir plus</a>
                </div>
                
                <div class="card">
                    <h3>Compétences</h3>
                    <p>Découvrez ici mes compétences techniques et professionnelles</p>
                    <a href="competences.php" class="card-link">Voir plus</a>
                </div>
                
                <div class="card">
                    <h3>Projets</h3>
                    <p>Réalisations et projets personnels</p>
                    <a href="project.php" class="card-link">Voir plus</a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="scripts/main.js"></script>
</body>
</html>