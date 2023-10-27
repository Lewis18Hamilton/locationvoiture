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
        <h3><i class="fa fa-angle-right"></i>Facture</h3>
        
        <!-- ON COMMENCE ICI -->
<!-- Cart Start -->
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Produits</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                           
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <tr>
                            <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;">Nom du produit</td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">$150</td>
                            
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="img/product-2.jpg" alt="" style="width: 50px;">Nom du produit</td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">$150</td>
                            
                        </tr>
                        <tr style="background-color: rgb(208, 206, 206);color:black;font-weight:600">
                            <td class="align-middle">PRIX TOTAL :</td>
                            <td class="align-middle"></td>
                            <td class="align-middle"></td>
                            <td class="align-middle">$300</td>
                            
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-lg-12">
                <form class="mb-0" action="">
                   
                </form>
                
                <div class="bg-light p-30 mb-5">
                    
                    <div class="container-fluid border-bottom mb-3 pt-4">
                        <div class="row mb-1 d-flex align-items-center " >
                            <div class="col-md-4 text-center ">  
                                <p style="font-size:16px;color:black;font-weight:600;text-decoration:underline">Nom et Prenoms :</p>
                            </div>
                            <div class="col-md-8 text-center">
                                <p style="font-size:16px;" >COULIBALY Doniss</p>
                            </div>
                        </div>

                        <div class="row mb-1 d-flex align-items-center " >
                            <div class="col-md-4 text-center">  
                                <p style="font-size:16px;color:black;font-weight:600;text-decoration:underline">Numéro :</p>
                            </div>
                            <div class="col-md-8 text-center">
                                <p style="font-size:16px;" >00000000000</p>
                            </div>
                        </div>

                        <div class="row mb-1 d-flex align-items-center " >
                            <div class="col-md-4 text-center">  
                                <p style="font-size:16px;color:black;font-weight:600;text-decoration:underline">Email :</p>
                            </div>
                            <div class="col-md-8 text-center">
                                <p style="font-size:16px;" >email@gmail.com</p>
                            </div>
                        </div>
                        <div class="row mb-1 d-flex align-items-center " >
                            <div class="col-md-4 text-center">  
                                <p style="font-size:16px;color:black;font-weight:600;text-decoration:underline">Adresse 1 :</p>
                            </div>
                            <div class="col-md-8 text-center">
                                <p style="font-size:16px;" > Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <div class="row mb-1 d-flex align-items-center " >
                            <div class="col-md-4 text-center">  
                                <p style="font-size:16px;color:black;font-weight:600;text-decoration:underline">Adresse  :</p>
                            </div>
                            <div class="col-md-8 text-center">
                                <p style="font-size:16px;" > Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                        
                    <div class="border-bottom p-3">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 style="font-size:20px; color:black; font-weight:700; font-family: sans-serif;">total simple</h6>
                            <h6 style="font-size:20px; color:black; font-weight:700; font-family: sans-serif;" >$150</h6>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="font-weight-medium"style="font-size:20px; color:black; font-weight:700; font-family: sans-serif;">Frais de livraison</h6>
                            <h6 class="font-weight-medium"style="font-size:20px; color:black; font-weight:700; font-family: sans-serif;">$10</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium"style="font-size:20px; color:black; font-weight:700; font-family: sans-serif;">Moyen de paiement</h6>
                            <h6 class="font-weight-medium"style="font-size:20px; color:black; font-weight:700; font-family: sans-serif;">Paypal</h6>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 style="font-size:20px; color:black; font-weight:700; font-family: sans-serif;">Total</h5>
                            <h5 style="font-size:20px; color:black; font-weight:700; font-family: sans-serif;">$160</h5>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->



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
