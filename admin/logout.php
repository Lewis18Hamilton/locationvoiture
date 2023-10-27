<?php session_start();
require '../config/connexion.php';
require '../fonction/fonctions.php';
if(isset($_POST['email']) && isset($_POST['mdp']))
{
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);

    $recup = $db->prepare('SELECT * FROM inscription WHERE email = ?');
    $recup->execute(array($email));
    $data = $recup->fetch();
    $row = $recup->rowCount();
    if($row == 1)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $mdp = hash('sha256', $mdp);
            if($data['mdp'] === $mdp)           
            {            
                $_SESSION['id'] = $data['id'];
                $_SESSION['nom'] = $data['nom'];
                $_SESSION['numero'] = $data['numero'];              
                $_SESSION['prenom'] = $data['prenom'];
                 $_SESSION['is_admin'] = $data['is_admin'];
                if($data['is_admin'] == 1) {
                    // Utilisateur est un administrateur, rediriger vers la page admin
                    header('Location: accueil.php?id='.$_SESSION['id']);
                } else {
                    // Utilisateur n'est pas un administrateur, rediriger vers la page d'accueil
                    header('Location: ../index.php?id='.$_SESSION['id']);
                }
                exit();
   
            }else header('Location: logout.php?login_err=password');
        }else header('Location: logout.php?login_err=email');
    }else header('Location: logout.php?login_err=already');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Maquincaillerie - Connexion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <?php include_once("head1.php") ?>
</head>

<body style="background-color: beige;">
     

      <!-- Navbar Start -->
      <?php include_once("navbar.php")?>
    <!-- Navbar End -->

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="../index.php">Accueil</a>
                    <span class="breadcrumb-item active">Inscription</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="container col-12 col-md-10 col-lg-6">
               
                <div class="bg-light p-30 mb-5">
                 <h2 class="text-center underline mb-4 text-dark"> CONNEXION</h2>
                 <?php
 if(isset($_GET['login_err']))
                                  {
                                    $err = htmlspecialchars($_GET['login_err']);

                                    switch($err)
                                    {
                                        case 'admin':
                                            ?>
                                            <div class="alert alert-danger">
                                                <strong>Erreur</strong> Vous n'être pas un administrateurs
                                            </div>
                                            <?php
                                            break;
                                        
                                        case 'password':
                                            ?>
                                            <div class="alert alert-danger">
                                                <strong>Erreur</strong> Identifiant ou mot de passe incorrect
                                            </div>
                                            <?php
                                            break;
                                        case 'email':
                                            ?>
                                            <div class="alert alert-danger">
                                                <strong>Erreur</strong> Identifiant ou mot de passe incorrect
                                            </div>
                                            <?php
                                            break;
                                        case 'already':
                                            ?>
                                            <div class="alert alert-danger">
                                                <strong>Erreur</strong> Identifiant ou mot de passe incorrect
                                            <?php
                                            break;
                                    }
                                  }

                            ?>
                             <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row d-flex justify-content-center">
                        
                        <div class="col-12 form-group">
                            <label>Identifiant</label>
                            <input name="email" class="form-control" type="text" placeholder="Email">
                        </div>
                        <div class="col-12 form-group password-container">
                            <label>Mot de passe</label>
                            <input name="mdp" id="password" class="form-control" type="password" placeholder="Mot de passe">
                            <span id="eye" class="eye-icon" onclick="togglePasswordVisibility()">                            
                             <i class="fas fa-eye"></i>
                            </span>
                        </div>

                        <div class="col-12 ">
                           <button name="submit" class="btn btn-block btn-primary font-weight-bold py-2">CONNEXION</button> 
                        </div>
                                                                                               
                        
                    </div>
                </div>
               </form>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
        <script>
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var eyeIcon = document.getElementById("eye");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
        passwordInput.type = "password";
        eyeIcon.innerHTML = '<i class="fas fa-eye"></i>';
    }
}
</script>

<style>
    .password-container {
        position: relative;
        display: inline-block;
    }

    .password-container .eye-icon {
        position: absolute;
        right: 24px;
        top: 75%;
        transform: translateY(-50%);
        cursor: pointer;
    }
</style>
    
</body>

</html>