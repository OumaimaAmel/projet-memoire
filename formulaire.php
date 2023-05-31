<?php
// Include the database connection file
require_once 'connexionindex.php';

// Check if the form is submitted
if (isset($_POST['valide'])) {
    // Get the form data
    $nom = $_POST['Nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $nmbr = $_POST['nmbr'];
    $pass = $_POST['pass'];
    $adr = $_POST['adr'];
    $choix = $_POST['choix'];
    if (empty($nom) || empty($prenom) || empty($email) || empty($nmbr) || empty($pass) || empty($adr) || empty($choix)) {
        echo "Erreur : Veuillez remplir tous les champs du formulaire";
    } else {

    try {
        // Prepare the SQL statement to insert the data
        $stmt = $conn->prepare("INSERT INTO personne (nom , prenom ,adresse , email , numero , password,type_personne) 
                               VALUES (:nom, :prenom, :adr,:email, :nmbr, :pass,  :choix)");

        // Bind the form data to the SQL statement parameters
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nmbr', $nmbr);
        $stmt->bindParam(':pass', $pass);
        $stmt->bindParam(':adr', $adr);
        $stmt->bindParam(':choix', $choix);

        // Execute the SQL statement
        $stmt->execute();

       
        header("Location:index.html");
        exit();
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
}


?>

