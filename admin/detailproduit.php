<?php
if (empty($_GET['id']) && !is_numeric($_GET['id'])) {
  header('Location: produits.php');
}
$id = $_GET['id'];
 require_once '../fonction/fonctions.php';
 $Produits = getProduits($id);
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
        <h3><i class="fa fa-angle-right"></i> Details du Produits</h3>
        
        <!-- ON COMMENCE ICI -->
        <div class="container mb">
                <a href="produits.php" class="btn btn-info">Retour</a>
            </div>
        <h2 class="text-center"style="text-decoration:underline; color:black;">Images du produits</h2>
        <?php
 foreach ($Produits as $Produit):
  ?> 
        <div class="row mt">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
              <div class="project">
                <div class="photo-wrapper">
                  <div class="photo">
                    <a class="fancybox" href="../images/<?= $Produit->image1; ?>"><img class="img-responsive" style="height:350px" src="../images/<?= $Produit->image1; ?>" alt=""></a>
                  </div>
                  <div class="overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- col-lg-4 -->  

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
              <div class="project">
                <div class="photo-wrapper">
                  <div class="photo">
                    <a class="fancybox" href="../images1/<?= $Produit->image2; ?>"><img class="img-responsive" style="height:350px" src="../images1/<?= $Produit->image2; ?>" alt=""></a>
                  </div>
                  <div class="overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- col-lg-4 -->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
              <div class="project">
                <div class="photo-wrapper">
                  <div class="photo">
                    <a class="fancybox" href="../images2/<?= $Produit->image3; ?>"><img class="img-responsive" style="height:350px" src="../images2/<?= $Produit->image3; ?>" alt=""></a>
                  </div>
                  <div class="overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- col-lg-4 -->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
              <div class="project">
                <div class="photo-wrapper">
                  <div class="photo">
                    <a class="fancybox" href="../images3/<?= $Produit->image4; ?>"><img class="img-responsive" style="height:350px" src="../images3/<?= $Produit->image4; ?>" alt=""></a>
                  </div>
                  <div class="overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- col-lg-4 -->
        </div>

        <?php
  endforeach;
  ?>

        <div id="container ">


            <h2 class="text-center"style="text-decoration:underline; color:black;">Informations sur le produit</h2>
            <?php
 foreach ($Produits as $Produit):
  ?> 
            <div class="row">
                <div class="col-12  col-md-3  text-center">

                <h3 style="color:red; font-weight:600;"> Nom:</h3>


                </div>

                <div class="col-12  col-md-8">

            <h3 style="color:black; font-weight: 700; font-family:sans-serif;"><?= $Produit->nom_produit; ?></h3>
            

                </div>

            </div>
            <div class="row">
                <div class="col-12  col-md-3 text-center ">
                <h3 style="color:red; font-weight:600;">Prix:</h3>

                        
                </div>

                <div class="col-12  col-md-8">
                <h3 style="color:black; font-weight: 700; font-family:sans-serif;"><?= $Produit->prix; ?>FCFA</h3>
                </div>

            </div>
            <div class="row">
                <div class="col-12  col-md-3  text-center">

               <h3 style="color:red; font-weight:600;"> Description:</h3>

                </div>

                <div class="col-12  col-md-8">
                  
                <h4 style="color:black; font-weight: 700; font-family:sans-serif;"><?= $Produit->desc_produit; ?></h4>
                </div>

            </div>
            <div class="row">
                <div class="col-12  col-md-3  text-center">

               <h3 style="color:red; font-weight:600;"> Quantité:</h3>

                </div>

                <div class="col-12  col-md-8">
                  
                <h3 style="color:black; font-weight:700;"> <?= $Produit->quantite; ?> </h3>
                </div>

            </div>

            <div class="row">
    
                      <div class="col-12 text-center">
                          <a href="produitmodif.php?id=<?= $Produit->id ?>"class="btn btn-warning">Modifier</a>
                      </div>
    
                    
                    </div>
    

        </div>
        <?php
  endforeach;
  ?>
        
        
        <!-- /row -->
        


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
