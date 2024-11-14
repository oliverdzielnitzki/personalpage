<?php require_once('.\assets\layout\header.php');?>

<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Kontakt</h2>
      <p>Für Risiken und Nebenwirkungen fragen Sie uns.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4">
          <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-geo-alt"></i>
            <h3>Homebase</h3>
            <p>Irgendwo, Nirgendwo</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-4">
          <div class="info-item d-flex flex-column justify-content-center align-items-center info-item-borders">
            <i class="bi bi-telephone"></i>
            <h3>Ruf mich an</h3>
            <p>0800 116 117</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-4">
          <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-envelope"></i>
            <h3>Schreib uns</h3>
            <p>niemand@gehtdichgarnixan.de</p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Name" required="">
          </div>

          <div class="col-md-6 ">
            <input type="email" class="form-control" name="email" placeholder="Email" required="">
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" name="subject" placeholder="Betreff" required="">
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Deine Nachricht" required=""></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Deine Nachricht wurde versendet. Vielen Dank</div>

            <button type="submit">Senden</button>
          </div>

        </div>
      </form><!-- End Contact Form -->

    </div>

  </section><!-- /Contact Section -->
  <?php require_once('.\assets\layout\footer.php');?>