<?php
$host = "localhost";
$username = 'root';
$password = '';
$dbname = 'sharityy';
$table = 'don';

$conn = new mysqli($host, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer les valeurs du formulaire
    $nomProduit = $_POST["nom_produit"];
    $quantite = $_POST["quantite"];
    $description = $_POST["description"];
    $choix = $_POST['choix'];
    
    // Vérifier si les champs sont vides
    if (empty($nomProduit) || empty($quantite) || empty($description) || empty($choix)) {
        echo "Erreur : Veuillez remplir tous les champs du formulaire.";
    } else if ($quantite <= 0) {
        echo "Erreur : La quantité doit être supérieure à zéro.";
    } else {
        // Préparer et exécuter la requête SQL pour insérer les données
        $sql = "INSERT INTO $table (nom_produit, quantite, description, choix) VALUES ('$nomProduit', '$quantite', '$description', '$choix')";

        if ($conn->query($sql) === TRUE) {
            echo "Le produit a été envoyé avec succès, attendez la réponse par e-mail. Merci.";
        } else {
            echo "Erreur lors de l'ajout du produit : " . $conn->error;
        }
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
