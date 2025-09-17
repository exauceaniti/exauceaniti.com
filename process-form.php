<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Gestion du sujet selon le formulaire
    if (isset($_POST['subject'])) {
        // Formulaire principal (avec sujet)
        $subject = htmlspecialchars(trim($_POST['subject']));
        $form_type = "Formulaire principal";
        $redirect_page = "contact.php";
    } else {
        // Formulaire footer (sans sujet)
        $subject = "Message depuis le formulaire footer";
        $form_type = "Formulaire footer";
        $redirect_page = "index.php";
    }

    // Validation basique
    $errors = [];

    if (empty($name)) {
        $errors[] = "Le nom est requis.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Une adresse email valide est requise.";
    }

    if (empty($message)) {
        $errors[] = "Le message est requis.";
    }

    // Si aucune erreur, procéder à l'envoi
    if (empty($errors)) {
        // Configuration de l'email
        $to = "exauceaniti@gmail.com";
        $email_subject = "Nouveau message de contact ($form_type): $subject";
        $email_body = "Vous avez reçu un nouveau message de contact.\n\n" .
            "Type: $form_type\n" .
            "Nom: $name\n" .
            "Email: $email\n" .
            "Sujet: $subject\n" .
            "Message:\n$message";
        $headers = "From: $email\n";
        $headers .= "Reply-To: $email";

        // Envoi de l'email
        if (mail($to, $email_subject, $email_body, $headers)) {
            // Redirection en cas de succès
            header("Location: $redirect_page?status=success");
            exit;
        } else {
            // Redirection en cas d'erreur
            header("Location: $redirect_page?status=error");
            exit;
        }
    } else {
        // Gestion des erreurs
        header("Location: $redirect_page?status=error");
        exit;
    }
} else {
    // Redirection si la page est accédée directement
    header('Location: index.php');
    exit;
}
