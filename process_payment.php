<?php
// Paramètres de connexion à la base de données
$servername = "localhost"; // Remplacez par l'adresse de votre serveur de base de données
$username = "root"; // Remplacez par votre nom d'utilisateur de base de données
$password = ""; // Remplacez par votre mot de passe de base de données
$dbname = "PaiementVoitureDB"; // Remplacez par le nom de votre base de données

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données '$dbname'";
}

// Fermer la connexion (optionnel ici car on ne fait qu'une vérification)
$conn->close();
?>
