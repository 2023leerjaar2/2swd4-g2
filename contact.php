<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Kamado BBQ Recipes</title>
    <link rel="stylesheet" href="style.css"> <!-- Voeg de link naar je CSS-bestand toe -->
</head>

<body>
    <header>
        <img src="img/logo.png" alt="Kamado BBQ Recipes Logo">
    </header>

    <nav>
        <a href="home.php">Home</a>
        <a href="recepten.php">Recepten</a>
        <a href="contact.php">Contact</a>
    </nav>

    <main>
        <div class="contact-form">
            <h2>Contacteer ons</h2>
            <form action="process_contact.php" method="POST">
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="tekst">Bericht:</label>
                <textarea id="tekst" name="tekst" rows="6" required></textarea>
                <button type="submit">Versturen</button>
            </form>
        </div>
    </main>

    <footer>
        &copy; 2023 Kamadoing BBQ Recipes. All rights reserved.
    </footer>
</body>

</html>
