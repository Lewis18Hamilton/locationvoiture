<?php
session_start();
// Vérifier si la session est active
// if (!isset($_SESSION['id'])) {
//   header('Location: logout.php');
//   exit();
// }

// Vérifier si l'utilisateur est un administrateur
// if ($_SESSION['is_admin'] != 1) {
//   header('Location: ../index.php');
//   exit();
// } ?>

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
     <!--main content start-->
     <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt mb">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i> Services</h3>
            <br>
            <div class="container mb">
                <a href="serviceform.php" class="btn btn-info">Ajouter un Service</a>
            </div>
            <div class="col-lg-4 col-md-4 ">
              <div class="dmbox">
              <div class="service-icon">
                  <a class="" href="faq.html#"><i class="dm-icon fa fa-random fa-3x"></i></a>
                </div>
                <h4>1. Knowledge-Base</h4>
                

                
                    <div class="row">
    
                      <div class="col-md-6 col-sm-6">
                          <a href="servicedetail.php"class="btn btn-warning">Voir plus</a>
                      </div>
    
                      <div class="col-md-6 col-sm-6">
                          <button class="btn btn-danger">Supprimer</button>
                      </div>
                    </div>
    
                
              </div>
            </div>
           
          </div>
         
        </div>
       
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
