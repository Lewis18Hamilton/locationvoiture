<?php
session_start();
// Vérifier si la session est active
// if (!isset($_SESSION['id'])) {
//   header('Location: logout.php');
//   exit();
// }

// Vérifier si l'utilisateur est un administrateur
// if ($_SESSION['admin'] != 1) {
//   header('Location: ../index.php');
//   exit();
// }
require_once '../config/connexion.php';
 require_once '../fonction/fonctions.php';
       $Produits = afficherProduits();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <?php require_once ('head.php');?>

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
        <h3><i class="fa fa-angle-right"></i> Basic Table Examples</h3>
        
          
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
              <div class="container mb">
                <a href="produitform.php" class="btn btn-info">Ajouter un Produit</a>
            </div>
                <hr>
              
                <thead>
                  <tr>
                    <th style="width: 15%;"><i class="fa fa-image"></i></th>
                    <th style="width: 20%;">Nom</th>
                    <th class="hidden-phone" style="width: 30%;"><i class="fa fa-question-circle"></i> Descrition</th>
                    <th><i class="fa fa-bookmark"></i> Prix</th>
                    <th></th>
                  </tr>
                </thead>
                <?php
 foreach ($Produits as $Produit):
  ?> 
                <tbody>
                  <tr>
                    <td>
                      <a href="detailproduit.php"><img src="../img/<?= $Produit->images; ?>" width="20%" alt="images" class="img-fluid" > </a>
                    </td>
                    <td>
                      <a href="detailproduit.php"><?= $Produit->nom; ?></a>
                    </td>
                    <td class="hidden-phone"><?= $Produit->descri; ?></td>
                    <td><?= $Produit->prix; ?>FCFA </td>
                    <td>
                      <a href="detailproduit.php?id=<?= $Produit->id ?>" class="btn btn-success btn-xs"><i class="fa fa-info-circle"></i></a>

                      <a href="produitmodif.php?id=<?= $Produit->id ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>

                      <a class="btn btn-danger btn-xs" href="supprimerproduit.php?id=<?= $Produit->id ?>"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                </tbody>
                <?php
  endforeach;
  ?>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
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
