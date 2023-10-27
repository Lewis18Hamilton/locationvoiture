<?php
require_once '../config/connexion.php';
if (empty($_GET['id']) && !is_numeric($_GET['id'])) {
  header('Location: message.php');
}
$id = $_GET['id'];

 require_once '../fonction/fonctions.php';

 $Messages = getMessage($id);
 foreach ($Messages as $Message){
  $nom = $Message->nom;
  $email = $Message->email;
  $sujet = $Message->sujet;
  $message = $Message->message;
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
        
        <!-- ON COMMENCE ICI -->

    
        <div>
            <div style="border:2px solid red;  background-color:white; margin-top:50px; padding-top:20px;">

              <div class="form-group text-center">
                
                <label for="nom"style="color:black; font-family:sans-serif; font-weight:700;font-size:25px;">Nom  :</label>

                <p class="text-dark taile"><?= $nom; ?></p>
              </div>

          <div class="form-group text-center">

            <label for="nom"style="color:black; font-family:sans-serif; font-weight:700;font-size:25px;"> E-mail:</label>

            <p class="text-dark taile"><?= $email; ?></p>
          </div>


          <div class="form-group text-center">

            <label for="nom"style="color:black; font-family:sans-serif; font-weight:700;font-size:25px;"> Sujet :</label>

            <p class="text-dark taile"><?= $sujet; ?></p>
          </div>


        <div class="form-group text-center">

          <label for="nom"style="color:black; font-family:sans-serif; font-weight:700;font-size:25px;"> Message:</label>

          <p class="text-dark taile"><?= $message; ?></p>
        </div>
        <div class="form-group text-center">
        <div class="col-lg-offset-2 col-lg-10">
                     
                        


        <div class="showback">
             
              <!-- Button trigger modal -->
  
                <button class="btn btn-success " data-toggle="modal" data-target="#myModal">
               Repondre
                </button>


               
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Repondre a un Message</h4>
                    </div>
                    <form action="" method="post">
                    <div class="modal-body">
                     <textarea name="" id=""class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                      <button type="button" class="btn btn-primary">Envoyer</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
                      
        </div>
    </div>

           
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
