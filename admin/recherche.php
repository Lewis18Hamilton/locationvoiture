<?php
// Assurez-vous de connecter à votre base de données ici
require_once '../config/connexion.php';
if(isset($_GET['re']) && !empty($_GET['re'])){
    $recherche = htmlspecialchars($_GET['re']);
    $recup = $db->query('SELECT produits.*, categories.nom_categorie FROM produits INNER JOIN categories ON produits.id_categorie = categories.id_categorie WHERE produits.nom_produit LIKE "%'.$recherche.'%" OR categories.nom_categorie LIKE "%'.$recherche.'%" ORDER BY produits.id DESC');
    
    if($recup->rowCount() > 0){
        while($produit = $recup->fetch()){
            echo '<a style="color: black;" href="produitmodif.php?id='.$produit['id'].'"><option value="">'.$produit['nom_produit'].' ('.$produit['nom_categorie'].')</option></a>';
        }
    }else{
        echo '<option>Aucun produit trouvé</option>';
    }
}
?>