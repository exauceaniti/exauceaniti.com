<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Validation basique
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Le nom est requis.";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Une adresse email valide est requise.";
    }
    
    if (empty($subject)) {
        $errors[] = "Le sujet est requis.";
    }
    
    if (empty($message)) {
        $errors[] = "Le message est requis.";
    }
    
    // Si aucune erreur, procéder à l'envoi
    if (empty($errors)) {
        // Configuration de l'email
        $to = "exauceaniti@gmail.com";
        $email_subject = "Nouveau message de contact: $subject";
        $email_body = "Vous avez reçu un nouveau message de contact.\n\n".
                      "Nom: $name\n".
                      "Email: $email\n".
                      "Sujet: $subject\n".
                      "Message:\n$message";
        $headers = "From: $email\n";
        $headers .= "Reply-To: $email";
        
        // Envoi de l'email
        if (mail($to, $email_subject, $email_body, $headers)) {
            // Redirection en cas de succès
            header('Location: contact.php?status=success');
            exit;
        } else {
            // Redirection en cas d'erreur
            header('Location: contact.php?status=error');
            exit;
        }
    } else {
        // Gestion des erreurs (vous pourriez sauvegarder les erreurs en session et les afficher)
        header('Location: contact.php?status=error');
        exit;
    }
} else {
    // Redirection si la page est accédée directement
    header('Location: contact.php');
    exit;
}
?>