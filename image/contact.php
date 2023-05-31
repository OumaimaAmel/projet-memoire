
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Échapper les caractères spéciaux pour éviter les injections de code malveillant
  $nom = htmlspecialchars($nom);
  $email = htmlspecialchars($email);
  $message = htmlspecialchars($message);

  // Envoi du mail
  $to = 'votre_adresse_email@example.com';
  $sujet = 'Nouveau message de ' . $nom;
  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";
  $headers .= "CC: " . $email . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

  if (mail($to, $sujet, $message, $headers)) {
    echo 'Votre message a bien été envoyé.';
  } else {
    echo 'Une erreur est survenue. Veuillez réessayer plus tard.';
  }
}