@include('pages.layouts.link')

<body>

@include('pages.layouts.header')

<main id="main">
    <section id="contact" class="contact mb-5">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">Contactez Nous</h1>
          </div>
        </div>

        <div class="row gy-4">

          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-geo-alt"></i>
              <h3>ADRESSE</h3>
              <address>A108 Adam Street, NY 535022, États-Unis</address>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item info-item-borders">
              <i class="bi bi-phone"></i>
              <h3>NUMÉRO DE TÉLÉPHONE</h3>
              <p><a href="tel:+155895548855">E-MAIL</a></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="form mt-5">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Envoyez le message</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>
    </section>

  </main><!-- End #main -->

@include('pages.layouts.footer')

@include('pages.layouts.scrypt')

</body>

</html>

