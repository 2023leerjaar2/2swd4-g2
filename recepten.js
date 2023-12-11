
        function filterCards(category) {
            // Verberg alle kaarten
            let cards = document.querySelectorAll('.card');
            cards.forEach(function (card) {
                card.style.display = 'none';
            });

            // Toon kaarten van de geselecteerde categorie of toon alle kaarten als 'alle' is geselecteerd
            if (category === 'all') {
                cards.forEach(function (card) {
                    card.style.display = 'flex';
                });
            } else {
                let selectedCards = document.querySelectorAll('.card[data-category="' + category + '"]');
                selectedCards.forEach(function (card) {
                    card.style.display = 'flex';
                });
            }

            // Markeer de geselecteerde filterknop als actief
             buletttons = document.querySelectorAll('.filter-button');
            buttons.forEach(function (button) {
                button.classList.remove('active');
            });

            let activeButton = document.querySelector('.filter-button[data-category="' + category + '"]');
            activeButton.classList.add('active');
            
        }

        // Voeg deze code toe aan je bestaande JavaScript-bestand

function searchCards() {
    let searchTerm = document.getElementById('searchBox').value.toLowerCase();
    let cards = document.querySelectorAll('.card');

    cards.forEach(function (card) {
        let cardText = card.textContent.toLowerCase();

        if (cardText.includes(searchTerm)) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
}

// Voeg deze code toe aan je bestaande JavaScript-bestand

function filterCards(category) {
    let cards = document.querySelectorAll('.card');

    cards.forEach(function (card) {
        card.style.display = 'none';
    });

    if (category === 'all') {
        cards.forEach(function (card) {
            card.style.display = 'flex';
        });
    } else {
        let selectedCards = document.querySelectorAll('.card[data-category="' + category + '"]');
        selectedCards.forEach(function (card) {
            card.style.display = 'flex';
        });
    }

    buletttons = document.querySelectorAll('.filter-button');
    buttons.forEach(function (button) {
        button.classList.remove('active');
    });

    let activeButton = document.querySelector('.filter-button[data-category="' + category + '"]');
    activeButton.classList.add('active');
}


function toggleAllCards(checkbox) {
    let cards = document.querySelectorAll('.card');

    cards.forEach(function (card) {
        if (checkbox.checked) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });

    // Als "Alles weergeven" is aangevinkt, schakel de andere checkboxes uit
    if (checkbox.checked) {
        document.getElementById('lunchCheckbox').checked = false;
        document.getElementById('hoofdgerechtCheckbox').checked = false;
        document.getElementById('pizzaCheckbox').checked = false;
        document.getElementById('nagerechtCheckbox').checked = false;
    }
}

