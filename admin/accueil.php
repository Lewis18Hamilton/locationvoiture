<?php session_start();
require '../fonction/fonctions.php';
require '../config/connexion.php';

// Vérifier si la session est active
// if (!isset($_SESSION['id'])) {
//   header('Location: logout.php');
//   exit();
// }

// Vérifier si l'utilisateur est un administrateur
// if ($_SESSION['is_admin'] != 1) {
//   header('Location: ../index.php');
//   exit();
// }

 
?>
<?php

       $Produits = afficherCarousels();
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
        
        <!-- ON COMMENCE ICI -->

  <?php
 foreach ($Produits as $Produit):
  ?>   
            <div class="container-fluid ">
          
            <div class="row justify-content-center p-3 g-3 mt"style="border:2px solid gray; padding:20x;">
            <h3 style="padding:20px;">Carousel1</h3>

                        <div class="col-12 col-md-6 col-lg-5 p-3 ">
                            <img src="../img/<?= $Produit->image1; ?>" alt="Image carousel1" width="100%" class="img-fluid">
                        </div>
                        <div class="col-12 col-md-6 col-lg-7 p-3">
                            <h1 class="p-2"><?= $Produit->titre1; ?></h1>
                            <p><?= $Produit->texte1; ?></p>
                        </div>
                        
                        
                      <div class="col-md-12 mt "style="text-align:center; margin-bottom:20px;">
                          <a href="accueilform.php?id=<?= $Produit->id ?>" class="btn btn-warning">Modifier</a>
                      </div>
            </div>
            <div class="row justify-content-center p-3 g-3 mt"style="border:2px solid gray;">
            <h3 style="padding:20px;">CAROUSEL 2</h3>
                        <div class="col-12 col-md-6 col-lg-5 p-3 ">
                            <img src="../img/<?= $Produit->image2; ?>" width="100%" alt="Image carousel1" class="img-fluid">
                        </div>
                        <div class="col-12 col-md-6 col-lg-7 p-3">
                            <h1 class="p-2"> <?= $Produit->titre2; ?> </h1>
                            <p><?= $Produit->texte2; ?></p>
                        </div>
                        
                        
                      <div class="col-md-12 mt "style="text-align:center; margin-bottom:25px;">
                          <a href="accueilform1.php?id=<?= $Produit->id ?>"class="btn btn-warning ">Modifier</a>
                      </div>
            </div>
            <div class="row justify-content-center p-3 g-3 mt" style="border:2px solid gray;">
            <h3 style="padding:20px;">CAROUSEL 3</h3>
                        <div class="col-12 col-md-6 col-lg-5 p-3 ">
                            <img src="../img/<?= $Produit->image3; ?>" width="100%" alt="Image carousel1" class="img-fluid">
                        </div>
                        <div class="col-12 col-md-6 col-lg-7 p-3">
                            <h1 class="p-2"> <?= $Produit->titre3; ?> </h1>
                            <p><?= $Produit->texte3; ?></p>
                        </div>
                        
                        
                      <div class="col-md-12 mt "style="text-align:center; margin-bottom:25px;">
                          <a href="accueilform2.php?id=<?= $Produit->id ?>"class="btn btn-warning ">Modifier</a>
                      </div>
            </div>
            <?php
  endforeach;
  ?> 
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
