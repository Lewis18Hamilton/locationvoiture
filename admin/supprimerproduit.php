<?php
require_once '../config/connexion.php';
require_once '../fonction/fonctions.php';

      if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $recup = $db->prepare("SELECT * FROM produits
        INNER JOIN categories ON produits.id_categorie=categories.id_categorie  WHERE id = ?");
        try {
        $recup->execute(array($id));
        } catch (Exception $e) {
           die("Erreur lors de la suppression :".$e->getMessage());
        }
        if ($recup->rowCount() > 0)  {
            supprimerProduits($id);
            header('Location: produits.php');
        }else{
            echo "aucun articles n'a ete trouvé...";
        }   
    
    }else {
        echo "aucun identifiant n'a pas été recupere";
       }

?>