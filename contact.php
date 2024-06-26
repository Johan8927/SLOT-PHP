
<title>Contact</title>
<section>
    <h1>Contactez-moi</h1>
    <p>Si vous souhaitez me contacter, veuillez remplir le formulaire ci-dessous :</p>
    <form action="contact.php" method="post">
    <form action="traitement.php" method="post">
    <label>Raison du contact :</label><br>
        <input type="radio" id="question" name="raison_contact" value="Question">
        <label for="question">Question</label><br>
        <input type="radio" id="commentaire" name="raison_contact" value="Commentaire">
        <label for="commentaire">Commentaire</label><br>
        <input type="radio" id="autre" name="raison_contact" value="Autre">
        <label for="autre">Autre</label><br>
        <br>
        <label for="civilite">Civilité :</label>
        <select name="civilite" id="civilite">
            <option value="Monsieur">Monsieur</option>
            <option value="Madame">Madame</option>
            <option value="Mademoiselle">Mademoiselle</option>
        </select>
        <br><br>
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br>
        <input type="submit" value="Envoyer">
</form>
</section>
<?php include 'footer.php'; ?>

