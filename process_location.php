<?php
require_once 'config/connexion.php';
require_once 'fonction/fonctions.php';

if(isset($_POST['submit']))
{
    if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['adresse']) && isset($_POST['tarif']) && isset($_POST['n_jours']) && isset($_POST['date']) && isset($_POST['prix_total']) && isset($_POST['message']))
    {
        if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['adresse']) && !empty($_POST['tarif']) && !empty($_POST['n_jours']) && !empty($_POST['date'])  && !empty($_POST['message']))
        {            
            $nom = htmlspecialchars($_POST['nom']);
            $email = htmlspecialchars($_POST['email']);               
            $phone = htmlspecialchars($_POST['phone']);
            $adresse = htmlspecialchars($_POST['adresse']);     
            $tarif = htmlspecialchars($_POST['tarif']);               
            $n_jours = htmlspecialchars($_POST['n_jours']);
            $date = htmlspecialchars($_POST['date']);
            $prix_total = htmlspecialchars($_POST['prix_total']);
            $message = htmlspecialchars($_POST['message']);       

            ajouterLocation($nom, $email, $phone, $adresse, $tarif, $n_jours, $date, $prix_total, $message);

        }   else{
            echo "veillez remplire tous les champs";
          }
          }
      }

$response = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);               
    $phone = htmlspecialchars($_POST['phone']);
    $adresse = htmlspecialchars($_POST['adresse']);     
    $tarif = htmlspecialchars($_POST['tarif']);               
    $n_jours = htmlspecialchars($_POST['n_jours']);
    $date = htmlspecialchars($_POST['date']);
    $prix_total = htmlspecialchars($_POST['prix_total']);
    $message = htmlspecialchars($_POST['message']);

    // Adresse e-mail du propriétaire du site
    $to = "levis.etudiantscientifique@gmail.com";

    // Sujet de l'e-mail
    $subject = "Nouvelle commande sur votre site";

    // Contenu de l'e-mail
    $message = "Vous avez reçu une nouvelle commande de la part de $nom :\n\n";
    $message .= "Adresse e-mail : $email\n";
    $message .= "Numéro de téléphone : $phone\n";
    $message .= "Adresse : $adresse\n";
    $message .= "Le Tarif : $tarif\n";
    $message .= "Nombre de jours de Location : $n_jours\n";
    $message .= "La date de Location : $date\n";
    $message .= "Prix total : $prix_total FCFA\n";
    $message .= "Message de l'utilisateur :\n$message";

    // En-têtes de l'e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoi de l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        $response["success"] = true;
        $response["message"] = "Votre commande de location a été soumise avec succès. Le propriétaire sera contacté.";
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
