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
            <h1 class="border-bottom text-success" data-aos="fade-up">DigiWebSolutions</h1>

            <p class="mt-3"  data-aos="fade-up">
             En DigiWeb Solutions estamos dedicados ayudar a pequeñas y medianas empresas a crecer en el entorno digital.
             Nuestro equipo combina creatividad, innovacion y estrategia para desarrollar soluciones web personalizadas
             y efectivas en marketing digital. Sabemos que cada empresa es unica, por eso diseñamos cada proyecto pensando
             en tus necesidades y objetivos especificos.
            </p>
            <p  data-aos="fade-up">
               Con una pasion por el desarrollo web y una vision orientada a resultados, transformamos ideas en experiencias
               digitales atractivas, optimizadas para impulsar el crecimiento de tu negocio.Nuestro compromiso es acompanarte
               en cada paso ofreciendo soporte y asesoria personalizada. Crecemos en construir relaciones de confianza y colaborar
               para juntos lograr tus metas.
          </div>

        </div>
        <a class="text-success" href="{{ route('about') }}">Leer mas</a>
      </div>
      <div>

      </div>
    </section><!-- /About Section -->



