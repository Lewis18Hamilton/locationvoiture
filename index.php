<?php
require_once 'header.php';
require_once 'navbar.php';
require_once 'fonction/fonctions.php';
$Ventes = afficherVente();
$Locations = afficherLocation();
?>
<style>

</style>
<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(images/voiture-0.webp);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Location</span> Découvrez Notre Flotte</h2>
                <p class="animate__animated animate__fadeInUp">Explorez notre flotte de voitures de qualité pour la location ou la vente. Choisissez parmi une variété de modèles pour répondre à vos besoins de déplacement.</p>
                <div>
                  <a href="contact.php" class="btn-menu animate__animated animate__fadeInUp scrollto">Contactez-nous</a>
                  <a href="services.php" class="btn-book animate__animated animate__fadeInUp scrollto">Nos Services</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(images/voiture-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Réservez Votre Voiture Idéale</h2>
                <p class="animate__animated animate__fadeInUp">Trouvez la voiture parfaite pour votre voyage. Que ce soit pour une location à court terme ou pour l'achat, nous avons ce qu'il vous faut.</p>
                <div>
                  <a href="contact.php" class="btn-menu animate__animated animate__fadeInUp scrollto">Contactez-nous</a>
                  <a href="services.php" class="btn-book animate__animated animate__fadeInUp scrollto">Nos Services</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(images/voiture-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Service de Chauffeur de Premier Ordre</h2>
                <p class="animate__animated animate__fadeInUp">Profitez de notre service de chauffeur professionnel. Nos chauffeurs expérimentés sont à votre disposition pour rendre votre voyage agréable et sûr.</p>
                <div>
                  <a href="contact.php" class="btn-menu animate__animated animate__fadeInUp scrollto">Contactez-nous</a>
                  <a href="services.php" class="btn-book animate__animated animate__fadeInUp scrollto">Nos Services</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

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
                  <h4><a href="vente.php">voir plus</a></h4>
                  <h3><?= $Vente->nom; ?></h3>
                </div>                
                <p><?= $Vente->descri; ?></p>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <?php endforeach; ?>
        </div>       
      </div>
    </section><!-- End vente Section -->


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
                  <h4><a href="vente.php">voir plus</a></h4>
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


    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Le service était excellent. La voiture était en parfait état et la réservation a été simple.                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Le service était excellent. La voiture était en parfait état et la réservation a été simple.                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Je recommande cette entreprise. Le personnel était amical et professionnel.                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Je recommande cette entreprise. Le personnel était amical et professionnel.                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Je recommande cette entreprise. Le personnel était amical et professionnel.                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->

          <!-- </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Testimonials Section -->

  <!-- ======= Partenaires Section ======= -->
  <div class="container-fluid py-5">
  <div class="row px-xl-5">
   <div class="col">
    <div class="partners-carousel">
        <div class="owl-carousel vendor-carousel carousel-inne">
            <div class="partner-logo bg-light p-4">
                <img src="images/Toyota.jpg" alt="Partenaire 1">
            </div>
            <div class="partner-logo bg-light p-4">
                <img src="images/Acura.jpg" alt="Partenaire 2">
            </div>
            <div class="partner-logo bg-light p-4">
                <img src="images/BMW.jpg" alt="Partenaire 2">
            </div>
            <div class="partner-logo bg-light p-4">
                <img src="images/Logo-Honda.png" alt="Partenaire 2">
            </div>
            <div class="partner-logo bg-light p-4">
                <img src="images/Mercedes-Benz.jpg" alt="Partenaire 2">
            </div>
            <div class="partner-logo bg-light p-4">
                <img src="images/Nissan.webp" alt="Partenaire 2">
            </div>
            <div class="partner-logo bg-light p-4">
                <img src="images/Symbole-Renault.jpg" alt="Partenaire 2">
            </div>
            <!-- Ajoutez d'autres partenaires ici -->
        </div>
    </div>
    </div>
    </div>
    </div><!-- End Partenaires Section -->

  </main><!-- End #main -->

<?php
require_once 'footer.php';
?>