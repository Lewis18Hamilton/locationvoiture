<?php
       $Infos = afficherInfos();
?>

<?php 
$main ;
?>
<!-- Topbar Start -->
<div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                <?php if(isset($_SESSION['nom']))  {?>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown"><?php if(isset($_SESSION['nom'])) {echo $_SESSION['nom'];} ?></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="../profil.php" class="dropdown-item" type="button">Profil</a>
                            <a href="../souhaits.php" class="dropdown-item" type="button">Ma liste de souhaits</a>
                            <a href="../deconnexion.php" class="dropdown-item" type="button">Deconnexion</a>
                        </div>
                    </div>
                    <?php }else {
                         ?>

                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Mon compte</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="../connexion.php" class="dropdown-item" type="button">Connexion</a>                           
                        </div>
                    </div>
                    <?php }?>
                    
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="../souhaits.php" class="btn px-0 ml-2" style="color:white">
                        <i class="fas fa-heart"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="../panier.php" class="btn px-0 ml-2" style="color:white">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" >
                   <img src="../img/logo.jpeg" alt="" class="img-fluid" style="width:200px">
                </a>
            </div>
            <?php
$recup = $db->query('SELECT produits.*, categories.nom_categorie FROM produits INNER JOIN categories ON produits.id_categorie = categories.id_categorie ORDER BY produits.id DESC');

if(isset($_GET['re']) && !empty($_GET['re'])){
    $recherche = htmlspecialchars($_GET['re']);
    $recup = $db->query('SELECT produits.*, categories.nom_categorie FROM produits INNER JOIN categories ON produits.id_categorie = categories.id_categorie WHERE produits.nom_produit LIKE "%'.$recherche.'%" OR categories.nom_categorie LIKE "%'.$recherche.'%" ORDER BY produits.id DESC');
    ?>
    <div class="col-lg-4 col-6 text-left">
        <section>
            <?php
            if($recup->rowCount() > 0){
                while($produit = $recup->fetch()){
                    ?>
                    <a href="../categories.php?id=<?= $produit['id_categorie']; ?>"><option value=""><?=$produit['nom_produit'].' ('.$produit['nom_categorie'].')'; ?></option></a>
                    <?php                                    
                }
            }else{
                ?>
                <option>Aucun produit trouvé</option>
                <?php
            }
            ?>
        </section>
    </div>
    <?php
}
?>
<div class="col-lg-4 col-6 text-left">
    <form action="" method="GET">
        <div class="input-group">
            <input type="search" name="re" class="form-control" placeholder="Rechercher un produit">
            <div class="input-group-append">
                <i class="fa fa-search"></i><input name="envoyer" type="submit" class="input-group-text bg-transparent text-primary">                                                    
            </div>                
        </div>
    </form>                   
</div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <?php
 foreach ($Infos as $Info):
  ?> 
                <h5 class="m-0">+225 <?= $Info->numero; ?></h5>
                <?php
  endforeach;
  ?>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- NAVBAR -->
    <div class="container-fluid  mb-30" style="background-color:var(--yellow)">
        <div class="row px-xl-5">
             <?php if ($main==1){} else{ ?>
            <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="../#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
  <div class="navbar-nav w-100">

  <?php

  // Requête SQL pour récupérer toutes les catégories
  $categories = $db->query('SELECT * FROM categories')->fetchAll(PDO::FETCH_ASSOC);

  // Boucle à travers les catégories pour créer la liste déroulante
  foreach ($categories as $category) {

    echo '<div class="nav-item dropdown dropright">';
    echo '<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">' . $category['nom_categorie'] . '<i class="fa fa-angle-right float-right mt-1"></i></a>';
    echo '<div class="dropdown-menu position-absolute round-0 border-0 m-0">';

    // Requête SQL pour récupérer toutes les sous-catégories de la catégorie actuelle
    $subcategories = $db->prepare('SELECT * FROM marque WHERE id_categorie = ?');
    $subcategories->execute(array($category['id_categorie']));

    // Boucle à travers les sous-catégories pour créer des éléments de menu imbriqués
    while ($subcategory = $subcategories->fetch(PDO::FETCH_ASSOC)) {
      echo '<a href="../sous_categories.php?id=' .$subcategory['id_marque']. '" class="dropdown-item">' . $subcategory['nom_marque'] . '</a>';
    }

    echo '</div>';
    echo '</div>';
  }

  ?>

  </div>
</nav>
                <?php }; ?>
             
            </div>

            
            <div class=" <?php if ($main==1){ ?> col-lg-12 <?php }else{} ?>  col-lg-9">
                <nav class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0 px-0" style="background-color:var(--yellow)">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <img src="" alt="" class="img-fluid">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="../index.php" class="nav-item nav-link <?php if ($main==1){ ?>
                            active <?php }else; ?> ">Accueil</a>
                            <a href="../shop.php" class="nav-item nav-link <?php if ($main==2){ ?>
                            active <?php }else; ?>">Shop</a>
                            <a href="../special.php" class="nav-item nav-link <?php if ($main==3){ ?>
                            active <?php }else; ?>">Offres spéciales</a>
                            <a href="../apropos.php" class="nav-item nav-link <?php if ($main==4){ ?>
                            active <?php }else; ?>">À propos</a>
                            <a href=" ../assist.php" class="nav-item nav-link underline <?php if ($main==5){ ?>
                            active <?php }else; ?>">Besoin d'un professionnel ?</a>
                            <a href="../contact.php" class="nav-item nav-link <?php if ($main==6){ ?>
                            active <?php }else; ?>">Contact</a>
                        </div>
                        

                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block d-flex ">
                            <a href="../souhaits.php" class="btn px-0">
                                <i class="fas fa-heart text-white"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="../panier.php" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-white"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;"><?php echo $panier->count(); ?></span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- FIN -->
