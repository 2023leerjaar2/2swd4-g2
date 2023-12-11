<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bedankt - Kamado BBQ Recipes</title>
    <link rel="stylesheet" href="styles.css"> <!-- Voeg de link naar je CSS-bestand toe -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .bedankt-message {
            flex-basis: 100%;
            margin-bottom: 20px;
        }

        .bedankt-message h2,
        .bedankt-message p {
            color: #333;
        }

        header,
        footer {
            background-color: #ff6747;
            color: #333;
            text-align: center;
            padding: 1em 0;
        }

        header img {
            max-width: 100%;
            height: auto;
        }

        header h1 {
            margin: 0;
            font-size: 2em;
        }

        nav {
            background-color: #030303;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0 1em;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #ffcc00;
        }

        footer img {
            max-width: 100%;
            height: auto;
            margin-top: 20px; /* Extra ruimte boven het gifje */
        }

        /* Voeg dit toe aan je bestaande CSS-stijlen */

.main {
    position: relative;
}

.bedankt-message {
    flex-basis: 100%;
    margin-bottom: 20px;
}

.bedankt-message h2,
.bedankt-message p {
    color: #333;
    text-align: center;
}

img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
}

    </style>

    
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
        <div class="bedankt-message">
            <h2>Bedankt voor het versturen van je review!</h2>
            <p>We waarderen je feedback en zullen je recensie zo snel mogelijk bekijken.</p>
        </div>
        <img src="img/gif.gif" alt="Leuk gifje">
    </main>

    <footer>
        &copy; 2023 Kamadoing BBQ Recipes. All rights reserved.

    </footer>
</body>

</html>
