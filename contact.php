<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Mon CV</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/footer.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/navigation.php'; ?>
    
    <main class="main-content">
        <div class="contact-container">
            <div class="section-header">
                <h1>Contactez-moi</h1>
                <p>N'hésitez pas à me contacter pour discuter de projets, opportunités ou simplement pour échanger.</p>
            </div>
            
            <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                <div class="alert success">
                    <i class="fas fa-check-circle"></i>
                    <p>Votre message a été envoyé avec succès ! Je vous répondrai dès que possible.</p>
                </div>
            <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
                <div class="alert error">
                    <i class="fas fa-exclamation-circle"></i>
                    <p>Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.</p>
                </div>
            <?php endif; ?>
            
            <div class="contact-content">
                <div class="info-card">
                    <h2>Informations de contact</h2>
                    
                    <div class="info-item">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="details">
                            <h3>Adresse</h3>
                            <p>RDC, Butembo Station Tak</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="details">
                            <h3>Téléphone</h3>
                            <p>+243 820 853 461</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="details">
                            <h3>Email</h3>
                            <p>exauceaniti@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="details">
                            <h3>Temps de réponse</h3>
                            <p>Moins de 24 heures</p>
                        </div>
                    </div>
                </div>
                
                <div class="form-card">
                    <h2>Envoyez un message</h2>
                    
                    <form action="process-form.php" method="POST" id="contactForm">
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" id="name" name="name" placeholder="Votre nom et prénom" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Adresse email</label>
                            <input type="email" id="email" name="email" placeholder="votre.email@exemple.com" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Sujet</label>
                            <input type="text" id="subject" name="subject" placeholder="Objet de votre message" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Décrivez votre projet ou posez-moi vos questions..." required></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn" id="submitBtn">
                            <i class="fas fa-paper-plane"></i>
                            Envoyer le message
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="social-section">
                <h2>Suivez-moi sur les réseaux</h2>
                <div class="social-links">
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            
            // Animation de soumission
            form.addEventListener('submit', function() {
                submitBtn.classList.add('loading');
                submitBtn.innerHTML = '<i class="fas fa-circle-notch"></i> Envoi en cours...';
            });
            
            // Réinitialiser le bouton si la page est rechargée
            window.addEventListener('pageshow', function(event) {
                if (event.persisted) {
                    submitBtn.classList.remove('loading');
                    submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Envoyer le message';
                }
            });
        });
    </script>
    <script src="scripts/main.js"></script>
</body>
</html>