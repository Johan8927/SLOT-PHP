<?php
// Inclure les fichiers nécessaires
include 'header.php';

// Déterminer quelle page charger
$page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'home';

if ($page == 'home') {
    include 'home.php';
} elseif ($page == 'hobby') {
    include 'hobby.php';
} elseif ($page == 'contact') {
    include 'contact.php';
} else {
// Page par défaut si la valeur de 'page' n'est pas reconnue
    include 'home.php';
}

include 'footer.php';
?>
