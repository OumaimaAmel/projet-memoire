<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupération des données du formulaire
  $nomProduit = $_POST['nom'];
  $adresseLivraison = $_POST['adresse'];
  $quantite = $_POST['quantité'];
  $description = $_POST['description'];

  // Validation des entrées de l'utilisateur
  if (empty($nomProduit) || empty($adresseLivraison) || empty($quantite) || empty($description)) {
    echo 'Veuillez remplir tous les champs';
    return;
  }

  if (!is_numeric($quantite) || $quantite <= 0) {
    echo 'Veuillez saisir une quantité valide';
    return;
  }

  // Envoyer les données du formulaire à un système de gestion de dons
  // code ici

  // Afficher un message de confirmation à l'utilisateur
  echo 'Don envoyé avec succès !';

 
}
?>
