<?php
require_once 'config/connexion.php';
require_once 'fonction/fonctions.php';

if(isset($_POST['submit']))
{
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['adresse']) && isset($_POST['marque']) && isset($_POST['price']) && isset($_POST['message']))
    {
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['adresse']) && !empty($_POST['message']))
        {            
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);               
            $phone = htmlspecialchars($_POST['phone']);
            $adresse = htmlspecialchars($_POST['adresse']);     
            $marque = htmlspecialchars($_POST['marque']);               
            $price = htmlspecialchars($_POST['price']);
            $message = htmlspecialchars($_POST['message']);       

            ajouterCommande($name, $email, $phone, $adresse, $marque, $price, $message);

        }   else{
            echo "veillez remplire tous les champs";
          }
          }
      }

$response = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $adresse = $_POST["adresse"];
    $marque = $_POST["marque"];
    $price = $_POST["price"];
    $message = $_POST["message"];

    // Adresse e-mail du propriétaire du site
    $to = "levis.etudiantscientifique@gmail.com";

    // Sujet de l'e-mail
    $subject = "Nouvelle commande sur votre site";

    // Contenu de l'e-mail
    $message = "Vous avez reçu une nouvelle commande de la part de $name :\n\n";
    $message .= "Adresse e-mail : $email\n";
    $message .= "Numéro de téléphone : $phone\n";
    $message .= "Adresse : $adresse\n";
    $message .= "Marque de la voiture : $marque\n";
    $message .= "Prix de la voiture : $price FCFA\n";
    $message .= "Message de l'utilisateur :\n$message";

    // En-têtes de l'e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoi de l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        $response["success"] = true;
        $response["message"] = "Votre commande a été soumise avec succès. Le propriétaire sera contacté.";
    } else {
        $response["success"] = false;
        $response["message"] = "Une erreur s'est produite lors de l'envoi de la commande.";
    }
} else {
    $response["success"] = false;
    $response["message"] = "Accès non autorisé.";
}

echo json_encode($response);
?>
