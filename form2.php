<?php
// Include the database connection file
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sharityy';

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Retrieve form data
$nom_produit = $_POST['nom_produit'];
$description = $_POST['description'];
$quantite = $_POST['quantite'];

// Perform data validation
if (empty($nom_produit) || empty($description) || empty($quantite)) {
    echo "Erreur : Veuillez remplir tous les champs du formulaire.";
} elseif ($quantite <= 0) {
    echo "Erreur : La quantité doit être supérieure à zéro.";
} else {
    // Insert data into the 'commande' table
    $query = "INSERT INTO commande (nom_produit, description, quantite) VALUES ('$nom_produit', '$description', $quantite)";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Insertion successful
        echo "Commande envoyée avec succès, attendez la réponse par e-mail ou par N°TLF Merci.!";
    } else {
        // Insertion failed
        echo "Une erreur s'est produite lors de l'envoi de la commande.";
    }
}

// Close the database connection
mysqli_close($connection);
?>
