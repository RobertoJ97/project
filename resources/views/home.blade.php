<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body class="index-page">

  @include('layout.header')

  <main class="main">

    @include('pages.about')

   @include('pages.services')
   @include('pages.project')

    <div class="border-bottom"></div>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">

        <h2 class="text-success mb-2">Testimonios</h2>
        <div class="border-bottom"></div>
        <div class="text-center mt-3">

        <a type="button" class="btn btn-success" href="{{ route('create') }}">
        Deje su comentario
        </a>

        </div>

      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-7">
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
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-1.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Adam Aderson</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-2.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Lukas Devlin</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-3.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Kayla Bryant</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>

            </div>
          </div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    @include('pages.contact')

  </main>

  @include('layout.footer')
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  @include('layout.js')

</body>

</html>
