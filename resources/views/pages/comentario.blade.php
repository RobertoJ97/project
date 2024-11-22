<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body class="index-page">

  @include('layout.header')

  <main class="main">
    <section id="contact" class="contact section">

        <div class="container" data-aos="fade">


          <div class="row gy-5 gx-lg-5">

            <div class="col-lg-4">

              <div class="info mt-4">
                <h3 class="text-success">Contactanos!!!</h3>
                <p>Para una cotizacion gratis,por favor contactenos ya sea mediante nuestro telefono
                    o nuestro correo electronico.</p>

                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Correo Electronico:</h4>
                    <a href="mailto:digiwebsolutions24@gmail.com">digiwebsolutions24@gmail.com</a>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-phone flex-shrink-0"></i>
                  <div>
                    <h4>Consulta Gratis:</h4>
                    <a href="https://wa.me/15614127451">+1 (561) 412-7451</a>
                  </div>
                </div><!-- End Info Item -->

              </div>

            </div>

            <div class="col-lg-8">
              <form action="{{ route('store') }}" method="post" role="form" class="php-email-form">
                @csrf
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Escriba su nombre" >
                  </div>

                </div>

                <div class="form-group mt-3">
                  <textarea class="form-control" name="mensaje" placeholder="Dejenos un mensaje" ></textarea>
                </div>
                <div class="form-group mt-3">
                    <input type="file" class="form-control" name="image" id="image">
                  </div>

                <div class="text-center"><button type="submit">Deje su comentario</button></div>
              </form>
            </div><!-- End Contact Form -->

          </div>

        </div>

      </section>


  </main>

  @include('layout.footer')
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  @include('layout.js')

</body>

</html>
