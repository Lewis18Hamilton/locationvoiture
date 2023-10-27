 <!-- ======= Footer ======= -->
 <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

<div class="footer-newsletter">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h4>Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
      </div>
      <div class="col-lg-6">
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Contact Us</h4>
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>

      </div>

      <div class="col-lg-3 col-md-6 footer-info">
        <h3>About Moderna</h3>
        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="asset/vendor/purecounter/purecounter.js"></script>
<script src="asset/vendor/aos/aos.js"></script>
<script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
<script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
<script src="asset/vendor/waypoints/noframework.waypoints.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

  <script>
        // Vendor carousel
        $('.vendor-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:2
            },
            576:{
                items:3
            },
            768:{
                items:4
            },
            992:{
                items:5
            },
            1200:{
                items:6
            }
        }
    });


        // Related carousel
        $('.related-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            }
        }
    });
  </script>

  <script>
$(document).ready(function () {
    $('a[id^="open-order-form"]').on('click', function (e) {
        e.preventDefault();
        var modalId = $(this).data('target');
        var id = modalId.replace('#orderModal', ''); // Extrait l'ID du modal
        $(modalId).find('p[name="marque"]').text($('#open-order-form' + id).data('marque'));
        $(modalId).find('p[name="prix"]').text($('#open-order-form' + id).data('prix') + ' FCFA');
    });
});


// $(document).ready(function () {
//     $('a[id="open-order-form"]').on('click', function (e) {
//       e.preventDefault();
//       var modalId = $(this).data('target');
//       $(modalId).find('p[name="nom"]').text($(this).data('nom'));
//       $(modalId).find('p[name="prix"]').text($(this).data('prix') + ' FCFA');
//     });
//   });


    // Récupérez les éléments du DOM
//     const openOrderFormLink = document.getElementById("open-order-form");
// const orderFormContainer = document.getElementById("order-form-container");

// Ajoutez un gestionnaire d'événements pour afficher le formulaire
// openOrderFormLink.addEventListener("click", function () {
  // Affiche la boîte de dialogue modale en utilisant Bootstrap
//   $('#orderModal').modal('show');
// });

// Gérez l'envoi du formulaire ici
// document.getElementById("submitOrderForm").addEventListener("click", function () {
  // Récupérez les données du formulaire et traitez-les ici
  // Vous pouvez utiliser JavaScript pour valider et soumettre le formulaire
  // Puis fermez la boîte de dialogue modale si nécessaire
//   $('#orderModal').modal('hide');
// });

  </script>

</body>

</html>