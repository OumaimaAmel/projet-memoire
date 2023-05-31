<?php
// Code PHP pour récupérer les commandes depuis la base de données

// Connexion à la base de données (exemple utilisant MySQLi)
$host = "localhost";
$username = 'root';
$password = '';
$dbname = 'sharityy';

$conn = new mysqli($host, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $commande_id = $_POST["commande_id"];
    
    // Vérifier quelle action a été sélectionnée (accepter ou refuser)
   
}
if (isset($_POST["accepter"])) {
    // Code pour accepter la commande
    $commande_id = $_POST["commande_id"];
    
        // Code pour accepter la commande dans la base de données
        $sql = "UPDATE commande SET etat = 'Acceptée' WHERE id_commande = $commande_id";
        if ($conn->query($sql) === TRUE) {
            echo "La commande a été acceptée avec succès.";
        } else {
            echo "Erreur lors de l'acceptation de la commande : " . $conn->error;
        }   
    
    // Redirection vers la page de confirmation avec le statut de la commande
    header("Location: confirmation_commande.php?statut=acceptee");
    exit();
} elseif (isset($_POST["refuser"])) {
    // Code pour refuser la commande
    $commande_id = $_POST["commande_id"];
    
    // Code pour refuser la commande dans la base de données
    $sql = "UPDATE commande SET etat = 'Refusée' WHERE id_commande = $commande_id";
    if ($conn->query($sql) === TRUE) {
        echo "La commande a été refusée avec succès.";
    } else {
        echo "Erreur lors du refus de la commande : " . $conn->error;
    }
    }
    
    // Redirection vers la page de confirmation avec le statut de la commande
    header("Location: confirmation_commande.php?statut=refusee");
    exit();




// Requête SQL pour récupérer les commandes
$sql = "SELECT * FROM commande";
$result = $conn->query($sql);

// Vérifier s'il y a des résultats
if ($result->num_rows > 0) {
    // Afficher les commandes dans la section de la page d'administration
    echo "<section>";
    echo "<h2>Liste des commandes</h2>";
    echo "<ul>";

    while ($row = $result->fetch_assoc()) {
        echo "<li>";
        echo "<span>Nom du produit: " . $row["nom_produit"] . "</span>";
        echo "<span>Quantité: " . $row["quantite"] . "</span>";
        echo "<form action=\"traitement_commande.php\" method=\"post\">";
        echo "<input type=\"hidden\" name=\"commande_id\" value=\"" . $row["id_commande"] . "\">";
        echo "<input type=\"submit\" name=\"accepter\" value=\"Accepter\">";
        echo "<input type=\"submit\" name=\"refuser\" value=\"Refuser\">";
        echo "</form>";
        echo "</li>";
    }

    echo "</ul>";
    echo "</section>";
} else {
    echo "Aucune commande trouvée.";
}


?>
