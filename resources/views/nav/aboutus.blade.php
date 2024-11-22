<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body class="index-page">

  @include('layout.header')

  <main class="main">
    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/img_h_6.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/img_h_7.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/img_h_8.jpg" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4 order-lg-1">
            <h1 class="border-bottom text-success" data-aos="fade-up">DigiWeb Solutions</h1>

            <p class="mt-3"  data-aos="fade-up">
             En DigiWeb Solutions estamos dedicados ayudar a pequenas y medianas empresas a crecer en el entorno digital.
             Nuestro equipo combina creatividad, innovacion y estrategia para desarrollar soluciones web personalizadas
             y efectivas en marketing digital. Sabemos que cada empresa es unica, por eso disenamos cada proyecto pensando
             en tus necesidades y objetivos especificos.
            </p>
            <p  data-aos="fade-up">
               Con una pasion por el desarrollo web y una vision orientada a resultados, transformamos ideas en experiencias
               digitales atractivas, optimizadas para impulsar el crecimiento de tu negocio.Nuestro compromiso es acompanarte
               en cada paso ofreciendo soporte y asesoria personalizada. Crecemos en construir relaciones de confianza y colaborar
               para juntos lograr tus metas.
          </div>

        </div>

      </div>
      <div>

      </div>
    </section><!-- /About Section -->
    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">
        <div class="row align-items-center justify-content-between">

          <div class="col-lg-4 order-lg-2">


            <p class=""  data-aos="fade-up">
                Impulsamos el exito de pequenas y medianas empresas en el mundo digital, brindandoles herramientas
                efectivas de desarrollo web y marketing que maximicen su potencial y atraigan potenciales clientes
                a sus negocios.
            </p>
            <p  data-aos="fade-up">
                Somos aliados de confianza para empresas que buscan destacarse en el entorno digital, ofreciendo
              servicios innovadores y resultados mediables. Nos enfocamos constantemente en nuevas formas de mejorar
              y adaptarnos a las tendencias tecnologicas. Creemos en la comunicacion clara y en construir relaciones
              de confianza con nuestros clientes.
              Nos aseguramos de que cada cliente cuente con el respaldo necesario para transformar su
              presencia digital en un motor de crecimiento tanto personal como economico.

          </div>
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-1" data-aos="fade-up" data-aos-delay="400">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/img_h_6.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/img_h_7.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/img_h_8.jpg" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>

      </div>
      <div>

      </div>
    </section><!-- /About Section -->





  </main>

  @include('layout.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  @include('layout.js')

</body>

</html>
