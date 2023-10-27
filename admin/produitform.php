<?php
require_once '../config/connexion.php';
require_once '../fonction/fonctions.php';

if(isset($_POST['submit']))
{
    if(isset($_FILES['images']) && isset($_POST['nom']) && isset($_POST['type_produit']) && isset($_POST['descri']) && isset($_POST['prix']))
    {
        if(!empty($_FILES['images']) && !empty($_POST['nom']) && !empty($_POST['type_produit']) && !empty($_POST['descri']) && !empty($_POST['prix']))
        {
            $images = $_FILES['images']['name'];
            $image_tmp = $_FILES['images']['tmp_name'];
            $image_ext = strtolower(pathinfo($images, PATHINFO_EXTENSION));
            $images = md5(uniqid()) . '.' . $image_ext;
            move_uploaded_file($image_tmp, '../img/' . $images);
            
            $nom = htmlspecialchars($_POST['nom']);
            $type_produit = htmlspecialchars($_POST['type_produit']);               
            $descri = htmlspecialchars($_POST['descri']);
            $prix = htmlspecialchars($_POST['prix']);          

            ajouterProduits($images, $nom, $type_produit, $descri, $prix);

                // Code JavaScript pour afficher un message d'alerte
                echo "<script>";
                echo "alert('Le produit a été ajouté avec succès. Voulez-vous sortir de cette page ?');";
                echo "if(confirm('Voulez-vous sortir de cette page ?')){";
                echo "window.location.href='produits.php';";
                echo "} else {";
                echo "window.location.href='produitform.php';";
                echo "}";
                echo "</script>";                    
    }   else{
      echo "veillez remplire tous les champs";
    }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <?php require_once('head.php');?>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php require_once('header.php');?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
   <?php require_once('sibar.php');?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
      <h3><i class="fa fa-angle-right"></i>AJOUTER UNE VOITURE</h3>
        
        <!-- ON COMMENCE ICI -->
        <div class="row mt">
          <div class="col-lg-12">
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="form-panel">
              <div class=" form">
         
                <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Image</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="images" minlength="2" type="file"/>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Nom de la voiture</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="nom" minlength="2" type="text" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">En vente ou location</label>
                    <div class="col-lg-10">
                     <select name="type_produit" id="type_produit" class="form-control">                      
                      <option value="">Choisisez le type</option>
                      <option value="En vente">En vente</option>                                     
                      <option value="En location">En Location</option>                                     
                     </select>
                    </div>
                  </div>    
                  
                  <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Description</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="ccomment" name="descri" required></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Prix</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="prix" minlength="2" type="number" required />
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" name="submit" type="submit">Ajouter</button>
                      <a href="produits.php" class="btn btn-theme04" type="button">Annuler</a>
                    </div>
                  </div>              
              </div>
            </div>
            </form>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- LA PAGE SE TERMINE ICI -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <?php require_once('footer.php');?>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
