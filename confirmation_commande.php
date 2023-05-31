<?php
// Récupérer le statut de la commande depuis les paramètres d'URL
$statut = $_GET["statut"];

// Message en fonction du statut de la commande
if ($statut === "acceptee") {
    $message = "Votre commande a été acceptée avec succès.";
} elseif ($statut === "refusee") {
    $message = "Malheureusement, votre commande a été refusée.";
} else {
    $message = "Une erreur s'est produite lors du traitement de votre commande.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Confirmation de la commande</title>
</head>
<body>
    <h2>Confirmation de la commande</h2>
    <p><?php echo $message; ?></p>
</body>
</html>