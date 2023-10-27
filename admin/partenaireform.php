<?php
require '../fonction/fonctions.php';

     if(isset($_POST['submit']))
    {
        if(isset($_FILES['images']) && isset($_POST['nom_partenaire']))
        {
            if(!empty($_FILES['images']) && !empty($_POST['nom_partenaire']))
            {
              $images = $_FILES['images']['name'];
              $image_tmp = $_FILES['images']['tmp_name'];
              $image_ext = strtolower(pathinfo($images, PATHINFO_EXTENSION));
              $images = md5(uniqid()) . '.' . $image_ext;
              move_uploaded_file($image_tmp, '../logo/' . $images);
                $nom_partenaire = htmlspecialchars(strip_tags($_POST['nom_partenaire']));              
                
                ajouterPartenaires($images, $nom_partenaire);
             header("Location: partenaire.php");
              
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
        <h3><i class="fa fa-angle-right"></i> AJOUTER UN PARTENAIRE</h3>
        
        <!-- ON COMMENCE ICI -->
        <div class="row mt">
          <div class="col-lg-12">
          
            <div class="form-panel">
              <div class=" form">
              <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Logo</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="images" minlength="2" type="file" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Nom de Partenaire</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="nom_partenaire" minlength="2" type="text" required />
                    </div>
                  </div>

                  
                  
                  
                  
                  
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" name="submit" type="submit">Valider</button>
                      <a href="partenaire.php" class="btn btn-theme04" type="button">Annuler</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
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
