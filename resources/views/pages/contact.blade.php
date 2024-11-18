<section id="contact" class="contact section">

    <div class="container" data-aos="fade">


      <div class="row gy-5 gx-lg-5">

        <div class="col-lg-4">

          <div class="info mt-4">
            <h3 class="text-success">Contactanos!!!</h3>
            <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Correo Electronico:</h4>
                <a>info@example.com</a>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Consulta Gratis:</h4>
                <a>+1 (561) 412-7451</a>
              </div>
            </div><!-- End Info Item -->

          </div>

        </div>

        <div class="col-lg-8">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Su nombre..." required="">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Su correo electronico..." required="">
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto..." required="">
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" placeholder="Escriba su mensaje..." required=""></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Envianos un Mensaje</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section>
