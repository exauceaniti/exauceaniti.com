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
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/navigation.php'; ?>
    
    <main class="main-content">
        <section class="contact-section">
            <h1>Contactez-moi</h1>
            
            <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                <div class="alert success">
                    <p>Votre message a été envoyé avec succès ! Je vous répondrai dès que possible.</p>
                </div>
            <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
                <div class="alert error">
                    <p>Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.</p>
                </div>
            <?php endif; ?>
            
            <form action="process-form.php" method="POST" class="contact-form">
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
                    <input type="text" id="subject" name="subject" placeholder="Objet de votre message..." required>
                </div>
                
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Décrivez votre projet ou posez-moi vos questions..." required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Envoyer le message</button>
            </form>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="scripts/contact.js"></script>
</body>
</html>