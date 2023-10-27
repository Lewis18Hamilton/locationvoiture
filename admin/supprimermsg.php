<?php
require_once '../config/connexion.php';
require_once '../fonction/fonctions.php';

      if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $recup = $db->prepare("SELECT * FROM contact
          WHERE id = ?");
        try {
        $recup->execute(array($id));
        } catch (Exception $e) {
           die("Erreur lors de la suppression :".$e->getMessage());
        }
        if ($recup->rowCount() > 0)  {
            supprimerMessages($id);
            header('Location: message.php');
        }else{
            echo "aucun articles n'a ete trouvé...";
        }   
    
    }else {
        echo "aucun identifiant n'a pas été recupere";
       }

?>