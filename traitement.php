<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Récupérer la valeur de la civilité
    $civilite = isset($_GET['civilite']) ? htmlspecialchars($_GET['civilite']) : 'Non spécifiée';

    // Récupérer la valeur de la raison du contact
    if (isset($_GET['raison_contact'])) {
        $raison_contact = htmlspecialchars($_GET['raison_contact']);
    } else {
        $raison_contact = "Aucune raison sélectionnée";
    }

    // Afficher les résultats
    echo "Vous avez sélectionné :<br>";
    echo "Civilité : " . $civilite . "<br>";
    echo "Raison du contact : " . $raison_contact;
}
?>
