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
        <h3><i class="fa fa-angle-right"></i>Service detail</h3>
        
        <!-- ON COMMENCE ICI -->


        <div class="container-fluid col-11 justify-content-center "style="border:2px solid gray;">

        <h2 class="gras">Buildings</h2>

            <div class="col-12   mt-4 d-flex justify-content-center">
                <img src="img/500.png" alt="" class="img-fluid">
            </div>

            <div class="col-12 p-2 mt-3 ">
                <p class="text-dark" style="font-size: 18px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laborum unde porro, similique minus laboriosam voluptate nesciunt molestiae exercitationem magni culpa nobis corporis perspiciatis provident sint? Quo doloremque similique at, laudantium aliquam in consequuntur eum illo accusamus! Ullam corporis cum autem quia, inventore amet, nostrum architecto maiores, quis provident praesentium.</p>
        <div class="row">
    
    <div class="col-md-2 col-sm-2 "style="padding:20px;">
        <a href="modifservice.php"class="btn btn-warning">Modifier</a>
    </div>

    <div class="col-md-2 col-sm-2"style="padding:20px;">
        <button class="btn btn-danger">Supprimer</button>
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
