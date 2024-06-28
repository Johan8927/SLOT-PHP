<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
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
} elseif ($page == 'ExempleBoucle.php'){
    include 'ExempleBoucle.php';    
}

    else {

    // Page par défaut si la valeur de 'page' n'est pas reconnue
    include 'home.php';
}

include 'footer.php';
?>