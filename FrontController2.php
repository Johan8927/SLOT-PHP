<?php

// vérifie method requete
if ($_SERVER["REQUEST_METHOD"] == "POST") {

//vérifie la présencedes champs
if (filter_has_var(INPUT_POST, 'nom') &&
    filter_has_var(INPUT_POST, 'prénom') &&
    filter_has_var(INPUT_POST, 'email') &&
    filter_has_var(INPUT_POST, 'raison') &&
    filter_has_var(INPUT_POST, 'message')) {

//recup et filtre(protection) données 
$nom = filter_input (INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$prenom = filter_input (INPUT_POST, "raison", FILTER_SANITIZE_STRING);
$email = filter_input (INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
$email = filter_var($_POST ,'email', FILTER_SANITIZE_EMAIL);
$message = filter_input (INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    }
    
//VÉRIF SUPP DE L'Email
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo  "adresse e-mail invalide";
} elseif {
//Traitement
echo "Nom : " . htmlspecialchars($nom) . "<br>";
echo "Prénom : " . htmlspecialchars($prénom) . "<br>";
echo "Email : " . htmlspecialchars($email) . "<br>";
echo "Raison : " . htmlspecialchars($raison) . "<br>";
echo "Message : " . nl2br(htmlspecialchars($message)) . "<br>";
}
elseif {
    echo "Tous les champs sont requis" ;
}
elseif {
    echo "Méthode de reecho "Nom :" . htmlspecialchars($nom) . "<br>";
echo "Prénom :" . htmlspecialchars($Prénom) . "<br>";
echo "raison :" . htmlspecialchars($raison) . "<br>";
echo "message :" . nl2br(htmlspecialchars($message)) . "<br>";
echo "email :" . htmlspecialchars($email) . "<br>";
}
}
}
?>