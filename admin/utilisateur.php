<?php session_start();
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

require '../fonction/fonctions.php';
// require '../config/connexion.php';
//  if(!is_admin()){
//     header('Location: ../index.php?login_err=already'); 
//  }else header('Location: accueil.php?login_err=sucess');

 $Users = afficherUsers();
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



        
        
          
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
              <div class="container mb">
              <h3> Utilisateurs</h3>
            </div>
                <hr>
                <thead>
                  <tr>
                    <th>Nom & Prenoms</th>
                    
                    <th><i class=" fa  fa-envelope"></i> Adresse E-mail</th>
                    <th><i class=" fa fa-phone"></i> Numero de telephone</th>
                    <th><i class="fa fa-map-marker"></i> Adresse</th>
                    <th></th>
                  </tr>
                </thead>
                <?php
 foreach ($Users as $User):
  ?>
                <tbody>
                  <tr>
                     
                   
                    <td>
                      <?= $User->nom; ?> <?= $User->prenom; ?>
                    </td>
                    <td class="hidden-phone"><?= $User->email; ?></td>
                    <td><?= $User->numero; ?></td>
                    <td><span class="label label-info label-mini"><?= $User->adresse1; ?></span></td>
                    <td>
                      <a href="detailutilisateur.php" class="btn btn-success btn-xs"><i class="fa fa-info-circle"></i></a>  
                      <a href="utilisateurmodif.php" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>                    
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
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
