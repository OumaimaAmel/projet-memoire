<?php
session_start();

// Vérifier si l'utilisateur a soumis le formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

 // Récupérer les données du formulaire
 $username = $_POST['email'];
 $password = $_POST['password'];

 // Vérifier si les informations sont correctes
 if ($email === 'email' && $password === 'motdepasse') {
  
  // Enregistrer l'utilisateur dans la session
  $_SESSION['email'] = $rmail;

  // Rediriger vers la page d'accueil
  header('Location: index.php');
  exit;
 } else {
  // Afficher un message d'erreur
  $error_message = 'Nom d\'utilisateur ou mot de passe incorrect.';
 }
}
?>

