<?php
require_once '../config/connexion.php';
if (empty($_GET['id']) && !is_numeric($_GET['id'])) {
  header('Location: information.php');
}
$id = $_GET['id'];

 require_once '../fonction/fonctions.php';

 $Infos = getInfo($id);

 if(isset($_POST['submit']))
{
    if(isset($_POST['email']) &&isset($_POST['numero']) &&isset($_POST['localisation']) &&isset($_POST['facebook']) && isset($_POST['twitter']) && isset($_POST['instagram']) && isset($_POST['linkdin']))
    {
            
            $email = htmlspecialchars($_POST['email']);
            $numero = htmlspecialchars(strip_tags($_POST['numero']));               
            $localisation = htmlspecialchars($_POST['localisation']);
            $facebook = htmlspecialchars($_POST['facebook']);          
            $twitter = htmlspecialchars($_POST['twitter']);
            $instagram = htmlspecialchars($_POST['instagram']);
            $linkdin = htmlspecialchars($_POST['linkdin']);

            modifierInfo($email, $numero, $localisation, $facebook, $twitter, $instagram, $linkdin, $id);
          header("Location: information.php");

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
        <h3><i class="fa fa-angle-right"></i> AJOUTER des informations</h3>
        
        <!-- ON COMMENCE ICI -->
        <div class="row mt">
          <div class="col-lg-12">
          <?php
 foreach ($Infos as $Info):
  ?> 
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="">
                  

                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Adress Email:</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="email" value="<?= $Info->email; ?>" minlength="2" type="text" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Numero de telephone:</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="numero" value="<?= $Info->numero; ?>" minlength="2" type="text" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Localisation:</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="localisation" value="<?= $Info->localisation; ?>" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Lien Facebook:</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="facebook" value="<?= $Info->facebook; ?>" minlength="2" type="text" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Lien Twitter:</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="twitter" value="<?= $Info->twitter; ?>" minlength="2" type="text" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Lien Instagram:</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="instagram" value="<?= $Info->instagram; ?>" minlength="2" type="text" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Lien Linkdin:</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="linkdin" value="<?= $Info->linkdin; ?>" minlength="2" type="text" required />
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" name="submit" type="submit">Valider</button>
                      <a href="information.php" class="btn btn-theme04" type="button">Annuler</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <?php
  endforeach;
  ?>
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
