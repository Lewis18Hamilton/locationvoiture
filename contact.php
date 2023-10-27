<?php
require_once 'header.php';
require_once 'navbar.php';
?>
<main id="main">
<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

<div class="section-title">
  <h2><span>Contactez-nous</span> pour la vente et la location de voitures</h2>
  <p>Si vous avez des questions, des besoins particuliers ou si vous souhaitez obtenir de plus amples informations sur notre service de vente et de location de voitures, n'hésitez pas à nous contacter. Notre équipe est à votre disposition pour répondre à toutes vos demandes et vous assister dans le choix de la voiture parfaite pour vos besoins. Nous sommes là pour vous satisfaire.</p>
</div>>
      </div>

<div class="map">
  <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12664.18017508849!2d-4.0482662!3d5.3284547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x167d1121e9acac93%3A0x7b68b1eb31c3d2b0!2sYopougon!5e0!3m2!1sen!2sci!4v1611186860005" frameborder="0" allowfullscreen></iframe>
</div>


      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Localisation:</h4>
              <p>Yopougon<br>Abidjan</p>
            </div>

            <!-- <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div> -->

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com<br>contact@example.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Téléphone:</h4>
              <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
            </div>
          </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit" name="submit">Envoyer</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

    </main><!-- End #main -->

<?php
require_once 'footer.php';
?>