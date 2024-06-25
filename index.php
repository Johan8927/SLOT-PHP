<?php

// Inclure les fichiers nécessaires
include 'header.php';

// Déterminer quelle page charger
$page = isset($_GET['page']) ? $_GET['page'] : 'index.php';

if ($page == 'hobby') {
    include 'hobby.php';
} elseif ($page == 'contact') {
    include 'contact.php';
} 
include 'footer.php';
?>
