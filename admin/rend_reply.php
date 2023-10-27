<?php
header('Content-Type: application/json'); // Set content type to JSON

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the recipient's email address and the reply message
    $recipient_email = $_POST['recipient_email'];
    $reply_message = $_POST['reply_message'];

    // Set up email parameters
    $to = $recipient_email;
    $subject = "Re: Votre message";
    $headers = "From: mainfons@maquincailleriemobile.com"; // Replace with your email address
    $message = "Vous avez reçu une réponse à votre message :\n\n$reply_message";

    // Send the reply email
    $sent = mail($to, $subject, $message, $headers);

    if ($sent) {
        $response = array("success" => true, "message" => "Réponse envoyée avec succès!");
    } else {
        $response = array("success" => false, "message" => "Échec de l'envoi de la réponse.");
    }

    echo json_encode($response);
} else {
    // Handle cases where the form was not submitted via POST
    $response = array("success" => false, "message" => "Erreur de soumission du formulaire.");
    echo json_encode($response);
}
?>
