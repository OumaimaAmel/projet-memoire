<?php
// Include the database connection file
require_once 'connexionindex.php';

// Check if the form is submitted
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // Prepare the SQL statement to select the user based on email and password
        $stmt = $conn->prepare("SELECT * FROM personne WHERE email = :email AND password = :password");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        // Check if a user is found with the provided email and password
        if ($stmt->rowCount() > 0) {
            // Fetch the user data from the result
            $user = $stmt->fetch();

            // Get the user's choice (donator or manager)
            $choice = $user['type_personne'];

            // Redirect based on the user's choice
            if ($choice == 'Donateur') {
                header("Location: donateur.html");
                exit();
            } elseif ($choice == 'manager') {
                header("Location: stock.html");
                exit();
            }elseif ($choice == 'Handicape') {
              header("Location: handicap.html");
              exit();
          }
        } else {
            // Invalid credentials
            echo '<script>alert("Nom d\'utilisateur ou mot de passe incorrect")</script>';
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
