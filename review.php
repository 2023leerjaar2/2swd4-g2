<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamado BBQ Recepten - Reviews</title>
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

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
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
            margin-left: 39vw; /* duwt de navigatie naar rechts, zodat deze in het midden is */
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
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .review-form {
            width: 100%;
            max-width: 600px;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .review-form h2 {
            margin-bottom: 20px;
        }

        .review-form label {
            display: block;
            margin-bottom: 8px;
        }

        .review-form input,
        .review-form select,
        .review-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .review-form button {
            background-color: #ff6347;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .review-list {
            width: 100%;
            max-width: 800px;
        }

        .review-item {
            border-bottom: 1px solid #ccc;
            padding: 20px 0;
        }

        .review-item strong {
            font-size: 1.2em;
        }

        .review-item p {
            margin: 10px 0 0;
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
            <a href="review.php">Schrijf een review ★</a>
        </div>
    </div>

    <main>
        <div class="review-form">
            <h2>Schrijf een Review</h2>
            <form id="reviewForm">
                <label for="name">Naam:</label>
                <input type="text" id="name" required>

                <label for="rating">Beoordeling:</label>
                <select id="rating" required>
                    <option value="1">★</option>
                    <option value="2">★★</option>
                    <option value="3">★★★</option>
                    <option value="4">★★★★</option>
                    <option value="5">★★★★★</option>
                </select>

                <label for="reviewText">Review:</label>
                <textarea id="reviewText" required></textarea>

                <button type="button" onclick="submitReview()">Verstuur Review</button>
            </form>
        </div>

        <div class="review-list" id="reviewList">
            <!-- Reviews zullen hier dynamisch worden toegevoegd -->
        </div>
    </main>

    <footer>
        &copy; 2023 Kamado BBQ Recepten. Alle rechten voorbehouden.
    </footer>
    <!-- Your existing script if any -->
</body>

</html>

<script>
    function submitReview() {
        // Verkrijg de waarden van de ingevoerde gegevens
        const name = document.getElementById("name").value;
        const rating = document.getElementById("rating").value;
        const reviewText = document.getElementById("reviewText").value;

        // Creëer een nieuw review-item
        const reviewItem = document.createElement("div");
        reviewItem.classList.add("review-item");

        // Voeg de ingevoerde gegevens toe aan het review-item
        reviewItem.innerHTML = `
            <strong>${name}</strong> heeft een beoordeling van ${generateStars(rating)} gegeven.<br>
            ${reviewText}
        `;

        // Voeg het review-item toe aan de lijst
        const reviewList = document.getElementById("reviewList");
        reviewList.appendChild(reviewItem);

        // Reset het formulier
        document.getElementById("reviewForm").reset();
    }

    function generateStars(count) {
        let stars = '';
        for (let i = 0; i < count; i++) {
            stars += '★';
        }
        return stars;
    }
</script>
