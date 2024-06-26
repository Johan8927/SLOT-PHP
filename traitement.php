<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $civilite = $_POST['civilite'] ?? '';
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $email = $_POST['email'] ?? '';
    $raison = $_POST['raison'] ?? '';
    $message = $_POST['message'] ?? '';

    $errors = [];

    // Vérifier que le champ message a un contenu d’au moins 5 lettres
    if (strlen(trim($message)) < 5) {
        $errors['message'] = "Le message doit contenir au moins 5 lettres.";
    }

    // Vérifier que l’email saisi est dans un format valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "L'email n'est pas dans un format valide.";
    }

    // Vérifier que la raison de contact est parmi la liste définie
    $valid_reasons = ["Questions", "Autre"];
    if (!in_array($raison, $valid_reasons)) {
        $errors['raison'] = "La raison du contact n'est pas valide.";
    }

    // Vérifier que le nom et prénom sont remplis
    if (empty(trim($nom))) {
        $errors['nom'] = "Le nom est requis.";
    }

    if (empty(trim($prenom))) {
        $errors['prenom'] = "Le prénom est requis.";
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = $_POST;
        header("Location: index.php?page=contact");
        exit();
    } else {
        echo "Formulaire soumis avec succès!";
        // Traitez les données ici
    }
}
?>
