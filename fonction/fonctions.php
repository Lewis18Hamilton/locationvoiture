<?php 

// fonction utilisateurs
function afficherUsers()
{
  if(require("../config/connexion.php"))
  {
    $req=$db->prepare("SELECT * FROM inscription ORDER BY id DESC");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data; 
    $req->closeCursor(); 
  }
}

function getUsers($id){
  if(require("../config/connexion.php")){
   $req = $db->prepare("SELECT admins FROM inscription
  --  INNER JOIN inscription ON commande.id_user=inscription.id
    WHERE id=?");
   $req->execute(array($id));
   if($req->rowCount() == 1){
     $data = $req->fetchAll(PDO::FETCH_OBJ);
     return $data;
   }else{
     return false;
   }
   $req->closeCursor();
  }
}

function modifierUsers($admins, $id)
{
  if(require("../config/connexion.php"))
  {
    $req = $db->prepare("UPDATE inscription SET admins=? WHERE id=?");
    $req->execute(array($admins, $id));
    $req->closeCursor();
    }
    }

function supprimerUsers($id)
{
	if(require("../config/connexion.php"))
	{
		$req=$db->prepare("DELETE FROM inscription WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}
// fin

// Fonction pour modifier et afficher les Carousels

function afficherCarousel()
{
  if(require("config/connexion.php"))
  {
    $req=$db->prepare("SELECT * FROM carrousel ORDER BY id DESC");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data; 
    $req->closeCursor(); 
  }
}

function afficherCarousels()
{
  if(require("../config/connexion.php"))
  {
    $req=$db->prepare("SELECT * FROM carrousel ORDER BY id DESC");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data; 
    $req->closeCursor(); 
  }
}

function getCarousel($id){
  if(require("../config/connexion.php")){
   $req = $db->prepare("SELECT * FROM carrousel WHERE id=?");
   $req->execute(array($id));
   if($req->rowCount() == 1){
     $data = $req->fetchAll(PDO::FETCH_OBJ);
     return $data;
   }else{
     return false;
   }
   $req->closeCursor();

  }
}

function modifierCarousel1($image1, $titre1, $texte1, $id)
{
  if(require("../config/connexion.php"))
  {
    $req = $db->prepare("UPDATE carrousel SET image1=?, titre1=?, texte1=? WHERE id=?");
    $req->execute(array($image1, $titre1, $texte1, $id));
    $req->closeCursor();
    }
    }

function modifierCarousel2($image2, $titre2, $texte2, $id)
{
  if(require("../config/connexion.php"))
  {
    $req = $db->prepare("UPDATE carrousel SET image2=?, titre2=?, texte2=? WHERE id=?");
    $req->execute(array($image2, $titre2, $texte2, $id));
    $req->closeCursor();
    }
    }

function modifierCarousel3($image3, $titre3, $texte3, $id)
{
  if(require("../config/connexion.php"))
  {
    $req = $db->prepare("UPDATE carrousel SET image3=?, titre3=?, texte3=? WHERE id=?");
    $req->execute(array($image3, $titre3, $texte3, $id));
    $req->closeCursor();
    }
    }    
// Fin de la fonction Carousels

// Fonction pour ajouter, modifier, supprimer et afficher les Produits
function ajouterProduits($images, $nom, $type_produit, $descri, $prix)
{
  if(require("../config/connexion.php"))
  {
    $req = $db->prepare("INSERT INTO produits (images, nom, type_produit, descri, prix)
     VALUES (?, ?, ?, ?, ?)");
    $req->execute(array($images, $nom, $type_produit, $descri, $prix));
    $req->closeCursor();
    }
    }

function afficherProduits()
{
  if(require("../config/connexion.php"))
  {
    $req=$db->prepare("SELECT * FROM produits
    ORDER BY id DESC");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data; 
    $req->closeCursor(); 
  }
}

function afficherProduit()
{
  if(require("config/connexion.php"))
  {
    $req=$db->prepare("SELECT * FROM produits
     ORDER BY id DESC");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data; 
    $req->closeCursor(); 
  }
}

function afficherVente()
{
  if(require("config/connexion.php"))
  {
    $req=$db->prepare("SELECT * FROM produits WHERE type_produit = 'En vente'
     ORDER BY id DESC");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data; 
    $req->closeCursor(); 
  }
}

function afficherLocation()
{
  if(require("config/connexion.php"))
  {
    $req=$db->prepare("SELECT * FROM produits WHERE type_produit = 'En location'
     ORDER BY id DESC");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data; 
    $req->closeCursor(); 
  }
}

function getProduits($id){
  if(require("../config/connexion.php")){
   $req = $db->prepare("SELECT * FROM produits
    WHERE id=?");
   $req->execute(array($id));
   if($req->rowCount() == 1){
     $data = $req->fetchAll(PDO::FETCH_OBJ);
     return $data;
   }else{
     return false;
   }
   $req->closeCursor();

  }
}

function modifierProduits($nom, $type_produit, $descri, $prix, $id)
{
  if(require("../config/connexion.php"))
  {
    $req = $db->prepare("UPDATE produits SET nom=?, type_produit=?, descri=?, prix=? WHERE id=?");
    $req->execute(array($nom, $type_produit, $descri, $prix, $id));
    $req->closeCursor();
    }
    }

function modifierImages($images, $id)
{
  if(require("../config/connexion.php"))
  {
    $req = $db->prepare("UPDATE produits SET images=? WHERE id=?");
    $req->execute(array($images, $id));
    $req->closeCursor();
    }
    }

    function supprimerProduits($id)
{
	if(require("../config/connexion.php"))
	{
		$req=$db->prepare("DELETE FROM produits WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}
// fin de la fonction Produit

// Fonction commande voiture
function ajouterCommande($name, $email, $phone, $adresse, $marque, $prix, $message)
{
  if(require("config/connexion.php"))
  {
    $req = $db->prepare("INSERT INTO commande (name, email, phone, adresse, marque, prix, message)
     VALUES (?, ?, ?, ?, ?, ?, ?)");
    $req->execute(array($name, $email, $phone, $adresse, $marque, $prix, $message));
    $req->closeCursor();
    }
    }
// fin de la fonction

// Fonction location voiture
function ajouterLocation($nom, $email, $phone, $adresse, $tarif, $n_jours, $date, $prix_total, $message)
{
  if(require("config/connexion.php"))
  {
    $req = $db->prepare("INSERT INTO voiture_louer (nom, email, phone, adresse, tarif, n_jours, date, prix_total, message)
     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $req->execute(array($nom, $email, $phone, $adresse, $tarif, $n_jours, $date, $prix_total, $message));
    $req->closeCursor();
    }
    }
// fin de la fonction


// partenaires
function ajouterPartenaires($images, $nom_partenaire)
{
  if(require("../config/connexion.php"))
  {
    $req = $db->prepare("INSERT INTO partenaires (images, nom_partenaire)
     VALUES (?, ?)");
    $req->execute(array($images, $nom_partenaire));
    $req->closeCursor();
    }
    }
    
    function afficherPartenaires()
{
  if(require("../config/connexion.php"))
  {
    $req=$db->prepare("SELECT * FROM partenaires ORDER BY id DESC");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data; 
    $req->closeCursor(); 
  }
}

function afficherPartenaire()
{
  if(require("config/connexion.php"))
  {
    $req=$db->prepare("SELECT * FROM partenaires ORDER BY id DESC");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data; 
    $req->closeCursor(); 
  }
}

function supprimerPartenaires($id)
{
	if(require("../config/connexion.php"))
	{
		$req=$db->prepare("DELETE FROM partenaires WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}
// fin

// messageries
function ajouterMessage($nom, $email, $sujet, $message)
{
  if(require("config/connexion.php"))
  {
    $req = $db->prepare("INSERT INTO contact (nom, email, sujet, message)
     VALUES (?, ?, ?, ?)");
    $req->execute(array($nom, $email, $sujet, $message));
    $req->closeCursor();
    }
    }

    function afficherMessages()
{
  if(require("../config/connexion.php"))
  {
    $req=$db->prepare("SELECT * FROM contact ORDER BY id DESC");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data; 
    $req->closeCursor(); 
  }
}

function getMessage($id){
  if(require("../config/connexion.php")){
   $req = $db->prepare("SELECT * FROM contact WHERE id=?");
   $req->execute(array($id));
   if($req->rowCount() == 1){
     $data = $req->fetchAll(PDO::FETCH_OBJ);
     return $data;
   }else{
     return false;
   }
   $req->closeCursor();
  }
}

function supprimerMessages($id)
{
	if(require("../config/connexion.php"))
	{
		$req=$db->prepare("DELETE FROM contact WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

// fin

// fonction info_entreprise
function afficherInfo()
{
  if(require("config/connexion.php"))
  {
    $req=$db->prepare("SELECT * FROM info_entreprise ");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data; 
    $req->closeCursor(); 
  }
}

function afficherInfos()
{
  if(require("../config/connexion.php"))
  {
    $req=$db->prepare("SELECT * FROM info_entreprise ");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data; 
    $req->closeCursor(); 
  }
}

function getInfo($id){
  if(require("../config/connexion.php")){
   $req = $db->prepare("SELECT * FROM info_entreprise WHERE id=?");
   $req->execute(array($id));
   if($req->rowCount() == 1){
     $data = $req->fetchAll(PDO::FETCH_OBJ);
     return $data;
   }else{
     return false;
   }
   $req->closeCursor();
  }
}

function modifierInfo($email, $numero, $localisation, $facebook, $twitter, $instagram, $linkdin, $id)
{
  if(require("../config/connexion.php"))
  {
    $req = $db->prepare("UPDATE info_entreprise SET email=?, numero=?, localisation=?, facebook=?, twitter=?, instagram=?, linkdin=? WHERE id=?");
    $req->execute(array($email, $numero, $localisation, $facebook, $twitter, $instagram, $linkdin, $id));
    $req->closeCursor();
    }
    }
// fin

?>