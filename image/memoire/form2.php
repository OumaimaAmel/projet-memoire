<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // Récupération des données soumises par le formulaire
   $nomProduit = $_POST['nom_produit'];
   $adresseLivraison = $_POST['adresse_livraison'];
   $quantite = $_POST['quantite'];
   $description = $_POST['description'];

   // Validation des données (vous pouvez ajouter vos propres validations)
   if (empty($nomProduit) || empty($adresseLivraison) || empty($quantite) || empty($description)) {
      echo 'Veuillez remplir tous les champs du formulaire.';
      return;
   }

   if (!is_numeric($quantite) || $quantite <= 0) {
      echo 'Veuillez saisir une quantité valide.';
      return;
   }

   // Traitement supplémentaire des données (par exemple, enregistrement dans une base de données)
   // ...

   // Réponse de succès
   echo 'La commande a été envoyée avec succès!';
}
?>
