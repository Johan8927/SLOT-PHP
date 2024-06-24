<?php include 'header.php'; ?>

<section>
    <h1>Contactez-moi</h1>
    <p>Si vous souhaitez me contacter, veuillez remplir le formulaire ci-dessous :</p>
    <form action="submit_contact.php" method="post">
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
