<?php
require_once 'header.php';
require_once 'navbar.php';
require_once 'fonction/fonctions.php';
$Locations = afficherLocation();
?>

<main id="main">

    <!-- Featured Start -->
    <div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-calendar text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">3 jours de location</h5>
                <p>Prix : 25000 FCFA</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-calendar text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">7 jours de location</h5>
                <p>Prix : 75000 FCFA</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-calendar text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">2 semaines de location</h5>
                <p>Prix : 150000 FCFA</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-calendar text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">1 mois de location</h5>
                <p>Prix : 300000 FCFA</p>
            </div>
        </div>
    </div>
</div>

    <!-- Featured End -->

      <!-- ======= location Section ======= -->
      <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-tit">
          <p>Les voitures en location</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php
        foreach($Locations as $Location):        
        ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item"><a href="img/<?= $Location->images; ?>">
              <img src="img/<?= $Location->images; ?>" class="img-fluid" alt="..." style="height: 50%"></a>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><a href="javascript:void(0);" id="open-order-form" data-toggle="modal" data-target="#orderModal">Louer</a></h4>
                  <h3><?= $Location->nom; ?></h3>
                </div>
                <p><?= $Location->descri; ?></p>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <?php endforeach; ?>          
        </div>

      </div>
    </section><!-- End location Section -->

            <!-- Boîte de dialogue modale pour le formulaire de location -->
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title section-title" id="orderModalLabel">Louer une <span>voiture</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Contenu de votre formulaire -->
        <section id="book-a-table" class="book-a-table">
          <div class="container">
            <form action="process_location.php" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-lg-6 col-md-6 form-group">
            <label>Nom et Prenom <span class="text-danger">*</span></label>
              <input type="text" name="nom" class="form-control" id="name" placeholder="Nom et Prenom" data-rule="minlen:4">
              <div class="validate"></div>
            </div>
            <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
            <label>Adresse Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
            <label>Numero <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Numéro de téléphone Ex:+225 0105070304" pattern="^(\+\d{1,4}\s)?\d{10}$">
              <div class="validate"></div>
            </div>
            <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
            <label>Adresse <span class="text-danger">*</span></label>
              <input type="text" name="adresse" class="form-control" id="" placeholder="Adresse" data-rule="minlen:4">
              <div class="validate"></div>
            </div>
            <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
            <label>Tarifs <span class="text-danger">*</span></label>
            <select name="tarif" class="custom-select">
            <option selected>Selectionner votre tarif</option>
            <option value="s_chauffeur">25000 sans chauffeur</option>
            <option value="chauffeur">30000 avec chauffeur</option>    
            </select>
              <div class="validate"></div>
            </div>
            <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
            <label>Nombre de jours <span class="text-danger">*</span></label>
            <select name="n_jours" class="custom-select">
            <option selected>Selectionner le nombre de jours</option>
            <option value="3_jrs">3 Jours</option>
            <option value="7_jrs">7 Jours</option>    
            </select>
            </div>
            <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
            <label>Date et Heure <span class="text-danger">*</span></label>
              <input type="datetime-local" name="date" class="form-control" id="date" placeholder="Date et Heure" data-rule="minlen:4">
              <div class="validate"></div>
            </div>
            <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
            <label>Prix Total</label>
            <p name="prix_total" class="mt-2">50000</p>
            <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
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

<!-- Fin pour le formulaire de location -->

</main><!-- End #main -->

<script>
document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector(".php-email-form");
    if (form) {
        const tarifSelect = form.querySelector('select[name="tarif"]');
        const joursSelect = form.querySelector('select[name="n_jours"]');
        const priceTotal = form.querySelector('p[name="prix_total"]');

        // Fonction de calcul du prix total
        function calculatePrice() {
            const tarifValue = tarifSelect.value;
            const joursValue = joursSelect.value;

            let prix = 0;

            // Logique de calcul du prix en fonction du tarif et du nombre de jours
            if (tarifValue === "s_chauffeur" && joursValue === "3_jrs") {
                prix = 25000 * 3;
            } else if (tarifValue === "s_chauffeur" && joursValue === "7_jrs") {
                prix = 25000 * 7;
            } else if (tarifValue === "chauffeur" && joursValue === "3_jrs") {
                prix = 30000 * 3;
            } else if (tarifValue === "chauffeur" && joursValue === "7_jrs") {
                prix = 30000 * 7;
            }

            // Mettez à jour le champ "Prix Total"
            priceTotal.textContent = prix +' '+"FCFA";
        }

        // Ajoutez un écouteur d'événements "change" pour les champs "Tarif" et "Nombre de jours"
        tarifSelect.addEventListener("change", calculatePrice);
        joursSelect.addEventListener("change", calculatePrice);

        // Appelez calculatePrice initialement pour afficher le prix par défaut
        calculatePrice();
    }
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector(".php-email-form");
    if (form) {
        form.addEventListener("submit", async function(e) {
            e.preventDefault();
            const formData = new FormData(form);
            const response = await fetch("process_location.php", {
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