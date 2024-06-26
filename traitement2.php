<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $un = $_POST['nbre1'] ?? 0;
        $deux = $_POST['nbre2'] ?? 0;
        $resultat = intval($un) - intval($deux);

        echo "<p>Nombre 1: " . htmlspecialchars($un) . "</p>";
        echo "<p>Nombre 2: " . htmlspecialchars($deux) . "</p>";
        echo "<p>Résultat: " . htmlspecialchars($resultat) . "</p>";
    }
    ?>