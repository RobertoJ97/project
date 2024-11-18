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

    @include('pages.testiomonials')

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
