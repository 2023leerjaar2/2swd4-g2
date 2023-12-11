<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamado BBQ Recepten</title>
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

        header {
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

        .review-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #030303;
            padding: 1em;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-left: 39vw;
            /* duwt de navigatie naar rechts, zodat deze in het midden is */
        }

        .nav a {
            color: #fff;
            text-decoration: none;
            padding: 0 1em;
            transition: color 0.3s;
        }

        .nav a:hover {
            color: #ffcc00;
        }

        .review-link {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .review-link a {
            text-decoration: none;
            color: #D0D3D4;
            font-weight: bold;
            margin-right: 10px;
        }

        .review-link a:hover {
            color: #ff6347;
        }

        .review-link .review-ster {
            margin-left: 5px;
            color: #ff6347;
            font-size: 20px;
        }

        main {
            flex: 1;
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        p.intro-text {
            font-size: 1.2em;
            line-height: 1.5;
            color: #333;
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            margin-bottom: 20px;
            width: 100%; /* Maak kaarten volledige breedte op kleine schermen */
            box-sizing: border-box;
            cursor: pointer;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .card a {
            display: block;
            height: 100%;
            text-decoration: none;
            color: inherit;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card:hover {
            transform: scale(1.1);
        }

        .card-content {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            flex: 1;
        }

        .card-content h2 {
            margin: 0;
            font-size: 1.2em;
        }

        .card-content p {
            margin-top: 10px;
            font-size: 0.8em;
            color: #666;
            flex-grow: 1;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        button {
            display: inline-block;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 4px;
            margin-top: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #333;
        }

        /* Voeg hier je bestaande stijlen toe */
        @media screen and (min-width: 768px) {
            /* Voeg hier je stijlen toe voor schermen groter dan 768px breedte */
            .card {
                width: calc(50% - 20px);
            }
        }

        @media screen and (min-width: 1024px) {
            /* Voeg hier je stijlen toe voor schermen groter dan 1024px breedte */
            .card {
                width: calc(33.33% - 20px);
            }
        }
    </style>
</head>

<body>
    <header>
        <img src="img/logo.png" alt="Kamado BBQ Recepten Logo">
    </header>

    <div class="review-container">
        <div class="nav">
            <a href="home.php">Home</a>
            <a href="recepten.php">Recepten</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="review-link">
            <a href="review.php">Contacteer ons</a>
        </div>
    </div>

    <main>
        <p class="intro-text">Kamado BBQ recepten - Op zoek naar inspiratie? Hier vind je meer dan 100 originele kamado recepten! Elke week voegen we kamado recepten toe! Van simpel & snel tot urenlang slow cooken! Vlees, vega, vis en schaaldieren. Ontbijt, lunch of diner of een lekker snackje. Met onze kamado recepten word je vanzelf een pitmaster! Dus ga lekker aan de slag met één van onze creaties en kom regelmatig effe terug.</p>

        <!-- Card 1 -->
        <div class="card">
            <img src="img/card_1.jpg" alt="Card 1 Background">
            <div class="card-content">
                <h2>Vega Nacho's op de BBQ</h2>
                <p>Geniet van deze heerlijke vegetarische nacho's op de barbecue. Een perfecte combinatie van smaken en texturen.</p>
                <a href="card1.php"><button>Meer lezen</button></a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <img src="img/card_2.jpg" alt="Card 2 Background">
            <div class="card-content">
                <h2>Steak tartaar van Bavette</h2>
                <p>Ontdek de smaak van malse steak tartaar gemaakt van Bavette. Een klassiek gerecht met een verrassende twist.</p>
                <a href="card2.php"><button>Meer lezen</button></a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card">
            <img src="img/card3.jpg" alt="Card 3 Background">
            <div class="card-content">
                <h2>Pizza truffel</h2>
                <p>Proef de rijke smaak van truffel in deze heerlijke vegetarische pizza. Een feest voor de truffelliefhebbers.</p>
                <a href="pizza_truffel.php"><button>Meer lezen</button></a>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="card">
            <img src="img/card4.jpg" alt="Card 4 Background">
            <div class="card-content">
                <h2>Gevulde ananas Met kip Teriyaki</h2>
                <p>Combineer zoet en hartig met deze gevulde ananas met sappige kip Teriyaki. Een exotisch gerecht vol smaak.</p>
                <a href="gevulde_ananas.php"><button>Meer lezen</button></a>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="card">
            <img src="img/card5.jpg" alt="Card 5 Background">
            <div class="card-content">
                <h2>Mexicaanse nacho's Burger</h2>
                <p>Proef de smaakexplosie van een Mexicaanse nacho's burger. Een feest van smaken in elke hap.</p>
                <br>
                <a href="mexicaanse_nach_burg.php"><button>Meer lezen</button></a>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="card">
            <img src="img/card6.jpg" alt="Card 6 Background">
            <div class="card-content">
                <h2>Garnalen van de BBQ in een Pittige saus</h2>
                <p>Voeg wat pit toe aan je barbecue met deze garnalen in een pittige saus. Een heerlijke combinatie van zeevruchten en kruiden.</p>
                <a href="card6.php"><button>Meer lezen</button></a>
            </div>
        </div>

    </main>

    <footer>
        &copy; 2023 Kamado BBQ Recepten. Alle rechten voorbehouden.
    </footer>
</body>

</html>
