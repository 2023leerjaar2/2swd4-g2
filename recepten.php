<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamado BBQ Recipes</title>
    <link rel="stylesheet" href="css/recept.css">
    <script src="recepten.js"></script>
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
    <div class="filter-container">
        <p class="intro-text">Filter op categorie:</p>
        <div class="filter-buttons">
            <!-- Voeg een extra checkbox toe voor nagerechten -->
            <div class="filter-checkboxes">
            <input type="checkbox" class="filter-checkbox" id="allesCheckbox" onchange="toggleAllCards(this)">
            <label for="lunchCheckbox">All</label>

                <input type="checkbox" class="filter-checkbox" id="lunchCheckbox" onchange="filterCards('lunch')">
                <label for="lunchCheckbox">Lunch</label>

                <input type="checkbox" class="filter-checkbox" id="hoofdgerechtCheckbox" onchange="filterCards('hoofdgerecht')">
                <label for="hoofdgerechtCheckbox">Hoofdgerecht</label>

                <input type="checkbox" class="filter-checkbox" id="pizzaCheckbox" onchange="filterCards('pizza')">
                <label for="pizzaCheckbox">Pizza</label>

                <input type="checkbox" class="filter-checkbox" id="nagerechtCheckbox" onchange="filterCards('nagerecht')">
                <label for="nagerechtCheckbox">Nagerecht</label>
            </div>

            <div class="search-container">
                <input type="text" class="search-box" id="searchBox" oninput="searchCards()" placeholder="Zoeken...">
                <button onclick="searchCards()">Zoeken</button>
            </div>
        </div>
    </div>

        
        <!-- Card 1 - Lunch -->
        <div class="card" data-category="lunch">
            <img src="img/card_1.jpg" alt="Card 1 Background">
            <div class="card-content">
                <h2>Vega Nacho's op de BBQ</h2>
                <p>Geniet van deze heerlijke vegetarische nacho's op de barbecue. Een perfecte combinatie van smaken en texturen.</p>
                <div class="button-container">
                    <a href="card1.php"><button>Meer lezen</button></a>
                </div>
            </div>
        </div>

        <!-- Card 2 - Hoofdgerecht -->
        <div class="card" data-category="hoofdgerecht">
            <img src="img/card_2.jpg" alt="Card 2 Background">
            <div class="card-content">
                <h2>Steak tartaar van Bavette</h2>
                <p>Ontdek de smaak van malse steak tartaar gemaakt van Bavette. Een klassiek gerecht met een verrassende twist.</p>
                <div class="button-container">
                    <br>
                    <a href="card2.php"><button>Meer lezen</button></a>
                </div>
            </div>
        </div>

        <div class="advertentie">
        <img src="img/boek.jpg" alt="Advertentie Afbeelding">
        <p>Ontdek onze geweldige producten! Slechts voor een beperkte tijd!</p>
        <a href="https://www.bol.com/nl/nl/p/het-ultieme-mannenkookboek/9200000091013872/?bltgh=rI-bwKAzpt7cAqEc8v1O5A.2_18.21.ProductTitle">Bekijk nu</a>
    </div>

        <!-- Card 3 - Pizza -->
        <div class="card" data-category="pizza">
            <img src="img/card3.jpg" alt="Card 3 Background">
            <div class="card-content">
                <h2>Pizza truffel</h2>
                <p>Proef de rijke smaak van truffel in deze heerlijke vegetarische pizza. Een feest voor de truffelliefhebbers.</p>
                <div class="button-container">
                    <br>
                    <a href="pizza_truffel.php"><button>Meer lezen</button></a>
                </div>
            </div>
        </div>

        <!-- Card 4 - Hoofdgerecht -->
        <div class="card" data-category="hoofdgerecht">
            <img src="img/card4.jpg" alt="Card 4 Background">
            <div class="card-content">
                <h2>Gevulde ananas Met kip Teriyaki</h2>
                <p>Combineer zoet en hartig met deze gevulde ananas met sappige kip Teriyaki. Een exotisch gerecht vol smaak.</p>
                <div class="button-container">
                    <a href="gevulde_ananas.php"><button>Meer lezen</button></a>
                </div>
            </div>
        </div>

        <!-- Card 5 - Lunch -->
        <div class="card" data-category="lunch">
            <img src="img/card5.jpg" alt="Card 5 Background">
            <div class="card-content">
                <h2>Mexicaanse nacho's Burger</h2>
                <br>
                <p>Proef de smaakexplosie van een Mexicaanse nacho's burger. Een feest van smaken in elke hap.</p>
                <a href="mexicaanse_nach_burg.php"><button>Meer lezen</button></a>
            </div>
        </div>

        <!-- Card 6 - Hoofdgerecht -->
        <div class="card" data-category="hoofdgerecht">
            <img src="img/card6.jpg" alt="Card 6 Background">
            <div class="card-content">
                <h2>Garnalen van de BBQ in een Pittige saus</h2>
                <p>Voeg wat pit toe aan je barbecue met deze garnalen in een pittige saus. Een heerlijke combinatie van zeevruchten en kruiden.</p>
                <div class="button-container">
                    <a href="card6.php"><button>Meer lezen</button></a>
                </div>
            </div>
        </div>

        <!-- Card 7 - Pizza -->
       <div class="card" data-category="pizza">
    <img src="img/card7.jpg" alt="Card 7 Background">
    <div class="card-content">
        <h2>Pulled Chicken Pizza</h2>
        <p>Geniet van de heerlijke smaak van Pulled Chicken op deze smaakvolle pizza. De combinatie van malse kip, smeltende kaas en kruidige tomatensaus maakt dit een onweerstaanbaar gerecht.</p>
        <div class="button-container">
            <a href="pizza_pulled_chick.php"><button>Meer lezen</button></a>
        </div>
    </div>
</div>

<!-- Card 8 - Lunch -->
<div class="card" data-category="lunch">
    <img src="img/card8.jpg" alt="Card 8 Background">
    <div class="card-content">
        <h2>Amerikaanse pannenkoeken met bosvruchten</h2>
        <p>Begin je dag met heerlijke, luchtige Amerikaanse pannenkoeken, overgoten met een mix van sappige bosvruchten. Een perfect ontbijt voor een zoete start van de dag.</p>
        <div class="button-container">
            <a href="pannenkoek.php"><button>Meer lezen</button></a>
        </div>
    </div>
</div>

<!-- Card 9 - Hoofdgerecht -->
<div class="card" data-category="nagerecht">
    <img src="img/card9.jpg" alt="Card 9 Background">
    <div class="card-content">
        <h2>Hemelse Brownies Met Pecannoten</h2>
        <p>Proef de frisheid van zalmfilet overgoten met een heerlijke citroen-dille saus. Een lichte en smaakvolle hoofdmaaltijd.</p>
        <div class="button-container">
            <br>
            <a href="brownies.php"><button>Meer lezen</button></a>
        </div>
    </div>
</div>

<div class="card" data-category="pizza">
            <img src="img/deep.jpeg" alt="Card 3 Background">
            <div class="card-content">
                <h2>Deep Pan Pizza</h2>
                <p>Ontdek de weelde van romige mozzarella, aardse champignons en subtiele truffelsmaak, allemaal samengebracht op een verrukkelijk knapperige deep pan korst. Een traktatie voor de fijnproevers onder ons.</p>
                <div class="button-container">
                    <br>
                    <a href="deep.php"><button>Meer lezen</button></a>
                </div>
            </div>
        </div>

        <div class="card" data-category="lunch">
    <img src="img/card10.jpg" alt="Card 8 Background">
    <div class="card-content">
        <h2>Quesadilla’s</h2>
        <p>Geniet van heerlijke Quesadilla's, gevuld met smeltende kaas, sappige stukjes gegrilde kip, verse groenten en een vleugje kruiden. Een perfecte keuze voor een hartige lunch die je smaakpapillen zal verwennen.</p>
        <div class="button-container">
            <a href="quesedilla.php"><button>Meer lezen</button></a>
        </div>
    </div>
</div>




    </main>

    <footer>
        &copy; 2023 Kamadoing BBQ Recipes. All rights reserved.
    </footer>
</body>

</html>
