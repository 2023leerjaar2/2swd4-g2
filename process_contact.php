<?php
// Database-verbinding configureren (houd deze deel ongewijzigd als het al correct werkt)
$conn = new mysqli("localhost", "root", "", "php6_02");
if ($conn->connect_error) {
    die("Database-verbinding mislukt: " . $conn->connect_error);
}

// Gegevens van het formulier ophalen
$name = $_POST['name'];
$email = $_POST['email'];
$tekst = $_POST['tekst'];

// Query om gegevens in de database op te slaan
$sql = "INSERT INTO recensie (naam, email, tekst) VALUES ('$name', '$email', '$tekst')";

if ($conn->query($sql) === TRUE) {
    // Doorverwijzen naar de bedankpagina als de inzending succesvol is toegevoegd
    header("Location: bedankt.php");
    exit();
} else {
    echo "Fout bij toevoegen van inlevering: " . $conn->error;
}

$conn->close();
?>
