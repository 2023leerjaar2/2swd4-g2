<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Quesadilla's</title>
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
        <img src="img/card10.jpg" alt="Card Quesadilla Background">
        <article>
            <h2>Quesadilla's</h2>
            <p>Author: Chef Quesadilla | Date: December 11, 2023</p>
            <p>Geniet van heerlijke Quesadilla's, gevuld met smeltende kaas, sappige stukjes gegrilde kip, verse groenten en een vleugje kruiden. Een perfecte keuze voor een hartige lunch die je smaakpapillen zal verwennen.</p>
            <h3>Ingrediënten:</h3>
            <ul>
                <li>Tortilla wraps</li>
                <li>Geraspte kaas (cheddar, mozzarella, of een mix)</li>
                <li>Gegrilde kipreepjes</li>
                <li>Frisse groenten (bijv. paprika, ui, tomaat)</li>
                <li>Olijfolie</li>
                <li>Kruiden naar smaak (bijv. komijn, paprikapoeder)</li>
                <li>Optioneel: Zure room, guacamole, salsa</li>
            </ul>
            <h3>Bereiding:</h3>
            <ol>
                <li>Verwarm een koekenpan op middelhoog vuur.</li>
                <li>Leg een tortilla in de pan en voeg een laag geraspte kaas toe.</li>
                <li>Voeg gegrilde kipreepjes, gesneden groenten en kruiden toe.</li>
                <li>Plaats een tweede tortilla bovenop en druk voorzichtig aan.</li>
                <li>Bak beide kanten tot de tortilla's goudbruin en de kaas gesmolten is.</li>
                <li>Snijd in driehoekjes en serveer warm met optionele bijgerechten.</li>
            </ol>
        </article>

        <!-- Tips & Trucs Sectie -->
        <div class="tips-section">
            <h2>Tips & Trucs</h2>
            <p>Maak je Quesadilla's nog smaakvoller met deze handige tips:</p>
            <ul>
                <li>Voeg verse kruiden toe voor extra aroma.</li>
                <li>Experimenteer met verschillende kaassoorten voor variatie.</li>
                <li>Serveer met een verfrissende salsa voor een pittige kick.</li>
            </ul>
        </div>

        <!-- Voedingsinformatie Sectie -->
        <div class="nutrition-section">
            <h2>Voedingsinformatie</h2>
            <p>Ontdek de voedingswaarde van deze verrukkelijke Quesadilla's:</p>
            <ul>
                <li><strong>Portiegrootte:</strong> 1 quesadilla</li>
                <li><strong>Calorieën:</strong> 350 kcal</li>
                <li><strong>Eiwitten:</strong> 15 g</li>
                <li><strong>Vetten:</strong> 20 g</li>
                <li><strong>Koolhydraten:</strong> 30 g</li>
            </ul>
        </div>

        <!-- Geschikt voor Evenementen of Feestjes Sectie -->
        <div class="party-section">
            <h2>Geschikt voor Evenementen of Feestjes</h2>
            <p>Imponeer je gasten met deze Quesadilla's op je volgende bijeenkomst:</p>
            <ul>
                <li>Snijd in kleinere stukjes voor gemakkelijk delen.</li>
                <li>Stel een "Quesadilla-bar" op met diverse vullingen.</li>
                <li>Serveer met een assortiment dipsausjes.</li>
                <li>Laat gasten hun eigen Quesadilla's samenstellen.</li>
            </ul>
        </div>

    </main>

    <footer>
        &copy; 2023 BBQ Blog. All rights reserved.
    </footer>
</body>

</html>
