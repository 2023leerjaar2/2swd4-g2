<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Vega Nacho's</title>
    <style>
        /* Je bestaande stijlen hier */

        /* Nieuwe stijlen voor toegevoegde secties */
        .tips-section,
        .nutrition-section,
        .party-section {
            max-width: 800px;
            margin: 20px auto;
        }

        .tips-section h2,
        .nutrition-section h2,
        .party-section h2 {
            color: #333;
            border-bottom: 2px solid #ff6747;
            padding-bottom: 10px;
        }

        .tips-section p,
        .nutrition-section p,
        .party-section p {
            color: #666;
            line-height: 1.5;
        }

        .tips-section ul,
        .nutrition-section ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .party-section ul {
            list-style-type: circle;
            margin-left: 20px;
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
        <a href="kookboek.php">Kookboek</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>

    <main>
        <img src="img/card_1.jpg" alt="Card 1 Background">
        <article>
            <h2>Vega Nacho's op de BBQ</h2>
            <p>Author: BBQ Chef | Date: November 19, 2023</p>
            <p>Probeer dit heerlijke recept voor Vega Nacho's op de BBQ voor een smakelijke en vegetarische lekkernij.</p>
            <h3>Ingrediënten:</h3>
            <ul>
                <li>1 zak tortillachips</li>
                <li>200 gram geraspte cheddar kaas</li>
                <li>1 blik zwarte bonen, uitgelekt en afgespoeld</li>
                <li>1 rijpe avocado, in blokjes gesneden</li>
                <li>1 tomaat, in blokjes gesneden</li>
                <li>Zure room en salsa voor het serveren</li>
            </ul>
            <h3>Bereiding:</h3>
            <ol>
                <li>Verwarm de barbecue voor op middelhoog vuur.</li>
                <li>Leg een laag tortillachips op een vuurvaste schaal of aluminium bakje.</li>
                <li>Strooi de geraspte cheddar gelijkmatig over de chips.</li>
                <li>Voeg de zwarte bonen, avocado en tomaat toe aan de chips en kaas.</li>
                <li>Plaats de schaal op de barbecue en sluit het deksel. Laat het geheel ongeveer 5 minuten staan, of totdat de kaas gesmolten is.</li>
                <li>Haal de schaal van de barbecue en serveer de Vega Nacho's met zure room en salsa.</li>
                <li>Geniet van deze heerlijke vegetarische BBQ-lekkernij!</li>
            </ol>
        </article>

        <!-- Tips & Trucs Sectie -->
        <div class="tips-section">
            <h2>Tips & Trucs</h2>
            <p>Maak je Vega Nacho's nog smakelijker met deze handige tips:</p>
            <ul>
                <li>Optimale BBQ-temperatuur is essentieel voor een perfect resultaat.</li>
                <li>Experimenteer met verschillende kaassoorten voor unieke smaakcombinaties.</li>
                <li>Gebruik accessoires zoals een BBQ-deksel voor het optimale smeltproces.</li>
            </ul>
        </div>

        <!-- Voedingsinformatie Sectie -->
        <div class="nutrition-section">
            <h2>Voedingsinformatie</h2>
            <p>Ontdek de voedingswaarde van deze heerlijke Vega Nacho's:</p>
            <ul>
                <li><strong>Portiegrootte:</strong> 1 portie</li>
                <li><strong>Calorieën:</strong> 350 kcal</li>
                <li><strong>Eiwitten:</strong> 12 g</li>
                <li><strong>Vetten:</strong> 18 g</li>
                <li><strong>Koolhydraten:</strong> 35 g</li>
            </ul>
        </div>

        <!-- Geschikt voor Evenementen of Feestjes Sectie -->
        <div class="party-section">
            <h2>Geschikt voor Evenementen of Feestjes</h2>
            <p>Maak indruk op je gasten met deze Vega Nacho's op je volgende evenement of feest:</p>
            <ul>
                <li>Portioneerbaar en gemakkelijk te delen.</li>
                <li>Combineer met heerlijke dipsauzen voor extra feestvreugde.</li>
                <li>Presenteer op een feestelijke manier voor visuele aantrekkingskracht.</li>
                <li>Je kunt delen van tevoren bereiden voor stressvrije gastvrijheid.</li>
            </ul>
        </div>

    </main>

    <footer>
        &copy; 2023 BBQ Blog. All rights reserved.
    </footer>
</body>

</html>
