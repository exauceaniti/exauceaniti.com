<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - Mon CV</title>
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/navigation.php'; ?>
    
    <main class="main-content">
        <section class="about-section">
            <div class="container">
                <h1>À propos de moi</h1>
                
                <div class="about-content">
                    <div class="about-image">
                        <img src="images/photo.png" alt="Exaucé Aniti">
                    </div>
                    
                    <div class="about-text">
                        <h2>Qui suis-je ?</h2>
                        <p>Je suis Exaucé Aniti Mungufeni, un développeur web engagé dans la création
                            d'expériences numériques exceptionnelles performantes et durables. Avec une solide base en développement front-end
                            et back-end, je m'efforce de créer des solutions web qui allient esthétique et fonctionnalité.
                        </p>
                        
                        <h2>Ma philosophie</h2>
                        <p>Je crois en l'apprentissage continu et à l'adaptation aux nouvelles technologies.
                            Pour moi, chaque projet est une opportunité d'apprendre, de grandir et de dépasser
                            les attentes.
                        </p>
                        
                        <h2>Mes objectifs</h2>
                        <p>Mon objectif est de continuer à développer mes compétences techniques tout en contribuant à des projets innovants qui ont un impact positif.</p>
                        
                        <div class="personal-info">
                            <div class="info-item">
                                <strong>Nom :</strong> Exaucé Aniti Mungufeni
                            </div>
                            <div class="info-item">
                                <strong>Email :</strong> exauceaniti@gmail.com
                            </div>
                            <div class="info-item">
                                <strong>Téléphone :</strong> +243 820 853 461
                            </div>
                            <div class="info-item">
                                <strong>Localisation :</strong> RDC, Butembo, Kalemire.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer intégré directement -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Exaucé Aniti</h3>
                    <p>Développeur web passionné par la création d'expériences numériques exceptionnelles.</p>
                </div>
                
                <div class="footer-section">
                    <h4>Liens rapides</h4>
                    <ul>
                        <li><a href="../index.php">Accueil</a></li>
                        <li><a href="about.php">À propos</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Contactez-moi</h4>
                    <ul>
                        <li><i class="fas fa-envelope"></i> exauceaniti@gmail.com</li>
                        <li><i class="fas fa-phone"></i> +243 820 853 461</li>
                        <li><i class="fas fa-map-marker-alt"></i> Butembo, RDC</li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Suivez-moi</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 Exaucé Aniti. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="scripts/main.js"></script>
</body>
</html>