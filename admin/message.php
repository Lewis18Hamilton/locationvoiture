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
// }
require_once '../config/connexion.php';
 require_once '../fonction/fonctions.php';
       $Messages = afficherMessages();
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

        
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Message des utilisateurs</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                   
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Sujet</th>
                    <th>date</th>
                    
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php
            $date = date('d/m/Y');

            ?>
                <?php
 foreach ($Messages as $Message):
  ?> 
                  <tr>
                    
                    <td><?= $Message->nom; ?></td>
                    <td><?= $Message->email; ?></td>
                    <td><?= $Message->sujet; ?></td>
                    <td><?= $Message->date; ?></td>
                    <td>
                      
                      <a href="detailmsg.php?id=<?= $Message->id; ?>" class="btn btn-primary btn-xs"><i class="fa fa-info-circle "></i></a>
                      <a href="supprimermsg.php?id=<?= $Message->id; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                    </td>
                  </tr>
                  <?php
  endforeach;
  ?>
                </tbody>
              </table>
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
