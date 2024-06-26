<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <form action="traitement.php" method="POST">
        <label for="civilite">Civilité:</label>
        <select name="civilite" id="civilite">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
            <option value="Mlle">Mlle</option>
        </select><br><br>

        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom"><br><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br><br>

        <label>Raison du contact:</label><br>
        <input type="radio" name="raison" value="Questions"> Questions<br>
        <input type="radio" name="raison" value="Autre"> Autre<br><br>
        

        <label for="message">Message:</label><br>
        <textarea name="message" id="message"></textarea><br><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
