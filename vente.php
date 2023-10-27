<?php
require_once 'header.php';
require_once 'navbar.php';
require_once 'fonction/fonctions.php';
$Ventes = afficherVente();
?>

<main id="main">

      <!-- ======= vente Section ======= -->
      <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-tit">
          <p>Les voitures en vente</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php
        foreach($Ventes as $Vente):        
        ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item"><a href="img/<?= $Vente->images; ?>">
              <img src="img/<?= $Vente->images; ?>" class="img-fluid" alt="..." style="height: 50%"></a>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><a href="javascript:void(0);" id="open-order-form<?= $Vente->id; ?>" data-toggle="modal" data-target="#orderModal<?= $Vente->id; ?>">Commander</a></h4>
                  <p class="price"><?= $Vente->prix; ?> FCFA</p>
                </div>
                <h3><?= $Vente->nom; ?></h3>
                <p><?= $Vente->descri; ?>.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <?php endforeach ;?>
        </div>
      </div>
    </section><!-- End vente Section -->

        <!-- Boîte de dialogue modale pour le formulaire de commande -->
        <?php
        foreach($Ventes as $Vente):        
        ?>
<div class="modal fade" id="orderModal<?= $Vente->id; ?>" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title section-title" id="orderModalLabel">Commander une <span>voiture</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Contenu de votre formulaire -->
        <section id="book-a-table" class="book-a-table">
          <div class="container">
            <form action="process_commande.php" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-lg-6 col-md-6 form-group">
            <label>Nom et Prenom <span class="text-danger">*</span></label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Nom et Prenom" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
            <label>Adresse Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
            <label>Numero <span class="text-danger">*</span></label>
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Numéro de téléphone Ex:+225 0105070304" pattern="^(\+\d{1,4}\s)?\d{10}$">
              <div class="validate"></div>
            </div>
            
            <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
            <label>Adresse <span class="text-danger">*</span></label>
              <input type="text" name="adresse" class="form-control" id="date" placeholder="Adresse" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
            <label>Marque de la voiture </label>
            <p name="marque" class="mt-2"><?= $Vente->nom; ?></p>
            <div class="validate"></div>
            </div>
            <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
            <label>Prix de la voiture </label>
            <p name="price" class="mt-2"><?= $Vente->prix; ?> FCFA</p>
            <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Votre Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center"><button type="submit" name="submit">Envoyer</button></div>
            </form>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
<?php endforeach ;?>
<!-- Fin pour le formulaire de commande -->

</main><!-- End #main -->

<script>
document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector(".php-email-form");
    if (form) {
        form.addEventListener("submit", async function(e) {
            e.preventDefault();
            const formData = new FormData(form);
            const response = await fetch("process_commande.php", {
                method: "POST",
                body: formData
            });

            const result = await response.json();
            alert(result.message); // Affiche l'alerte en fonction de la réponse JSON
        });
    }
});
</script>



<?php
require_once 'footer.php';
?>