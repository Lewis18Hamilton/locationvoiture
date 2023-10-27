<?php
session_start();
// if(!$_SESSION['nom']) 
// {header('Location: logout.php');}; 
require_once '../config/connexion.php';
 require_once '../fonction/fonctions.php';
       $Infos = afficherInfos();
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

        <div class="row mt mb">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i>Information</h3>
            <br>
            <?php
 foreach ($Infos as $Info):
  ?> 
            <div class="container mb">
                <a href="informationform.php?id=<?= $Info->id; ?>" class="btn btn-info">Modifier</a>
            </div>
 
            <div class="col-lg-4 col-md-4 ">
              <div class="dmbox">
              <div class="service-icon">
                  <a class="" href="informationform.php?id=<?= $Info->id; ?>"><i class="dm-icon fa fa-envelope fa-3x"></i></a>
                </div>
                <h4><?= $Info->email; ?></h4>         
              </div>
            </div>
            <div class="col-lg-4 col-md-4 ">
              <div class="dmbox">
              <div class="service-icon">
                  <a class="" href="informationform.php?id=<?= $Info->id; ?>"><i class="dm-icon fa fa-phone fa-3x"></i></a>
                </div>
                <h4>+225 <?= $Info->numero; ?></h4>         
              </div>
            </div>
            <div class="col-lg-4 col-md-4 ">
              <div class="dmbox">
              <div class="service-icon">
                  <a class="" href="informationform.php?id=<?= $Info->id; ?>"><i class="dm-icon fa fa-map fa-3x"></i></a>
                </div>
                <h4><?= $Info->localisation; ?></h4>         
              </div>
            </div>
            <?php
  endforeach;
  ?>
          </div>
         
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
