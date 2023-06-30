<div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a variety of <span class="text-secondary text-capitalize"> Owl Carousel </span> components with a
      little customization that suits its design standards. For more information, please see the official <a
        class="font-weight-bold" href="https://owlcarousel2.github.io/OwlCarousel2/docs/started-welcome.html" target="_blank"> Owl Carousel Documentaion.</a></p>
  </div>
</div>

<!-- Slide Only -->
<div class="card card-default">
  <div class="card-header">
    <h2>Slide Only</h2>
    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-carousel-1" role="button"
      aria-expanded="false" aria-controls="collapse-carousel-1"> </a>


  </div>
  <div class="card-body">
    <div class="collapse" id="collapse-carousel-1">
      <pre class="language-html mb-4">
<code >
&lt;div class="container-fluid p-0 pb-5 mb-5"&gt;
    &lt;div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel"&gt;
        &lt;ol class="carousel-indicators"&gt;
            &lt;li data-target="#header-carousel" data-slide-to="0" class="active"&gt;&lt;/li&gt;
            &lt;li data-target="#header-carousel" data-slide-to="1" class=""&gt;&lt;/li&gt;
            &lt;li data-target="#header-carousel" data-slide-to="2" class=""&gt;&lt;/li&gt;
        &lt;/ol&gt;
        &lt;div class="carousel-inner " style="height: 75vh;"&gt;
            &lt;div class="carousel-item active" style="height: 75vh;"&gt;
                &lt;img class="position-relative w-100" src="views/img/publicaciones/publicacion-2.jpg" style="object-fit: cover; wdith: 100%; height:100%;"&gt;
                &lt;div class="carousel-caption d-flex align-items-center justify-content-center"&gt;
                    &lt;div class="p-5" style="width: 100%; max-width: 900px;"&gt;
                        &lt;h1 class="display-3 text-white mb-md-4"&gt;Barranquismo en rio verde&lt;/h1&gt;
                        &lt;h5 class="text-white text-uppercase mb-md-3"&gt;Uno de los paraisos naturales de la provincia de Granada, con rutas disponibles para todos los niveles.&lt;/h5&gt;
                        &lt;a href="index.php?ruta=blog-detalle&amp;id=2" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"&gt;Leer Mas&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="carousel-item" style="height: 75vh;"&gt;
                &lt;img class="position-relative w-100" src="views/img/publicaciones/publicacion-4.jpg" style=" object-fit: cover; wdith: 100%; height:100%;"&gt;
                &lt;div class="carousel-caption d-flex align-items-center justify-content-center"&gt;
                    &lt;div class="p-5" style="width: 100%; max-width: 900px;"&gt;
                        &lt;h1 class="display-3 text-white mb-md-4"&gt;SOBRE NOSOTROS&lt;/h1&gt;
                        &lt;h5 class="text-white text-uppercase mb-md-3"&gt;La mejor forma de aprender&lt;/h5&gt;
                        &lt;a href="index.php?ruta=blog-detalle&amp;id=4" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"&gt;Leer Mas&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="carousel-item" style="height: 75vh;"&gt;
                &lt;img class="position-relative w-100" src="views/img/publicaciones/publicacion-33.jpg" style=" object-fit: cover; wdith: 100%; height:100%;"&gt;
                &lt;div class="carousel-caption d-flex align-items-center justify-content-center"&gt;
                    &lt;div class="p-5" style="width: 100%; max-width: 900px;"&gt;
                        &lt;h1 class="display-3 text-white mb-md-4"&gt;Barranquismo en Garganta Verde de Grazalema&lt;/h1&gt;
                        &lt;h5 class="text-white text-uppercase mb-md-3"&gt; Situado en el Parque Natural de Grazalema&lt;/h5&gt;
                        &lt;a href="index.php?ruta=blog-detalle&amp;id=33" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"&gt;Leer Mas&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code>
      </pre>
    </div>
    <!-- Set up your HTML -->
    <div class="owl-carousel slide-only">

      <div class="single-item bg-overlay-black-40 rounded">
        <img class="rounded" src="views/images/elements/slide1.jpg" alt="Slide Image">
      </div>

      <div class="single-item bg-overlay-black-40 rounded">
        <img class="rounded" src="views/images/elements/slide2.jpg" alt="Slide Image">
      </div>

      <div class="single-item bg-overlay-black-40 rounded">
        <img class="rounded" src="views/images/elements/slide3.jpg" alt="Slide Image">
      </div>

    </div>

  </div>
</div>


<!-- With Control -->
<div class="card card-default">
  <div class="card-header">
    <h2>With Control</h2>
    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-carousel-2" role="button"
      aria-expanded="false" aria-controls="collapse-carousel-2"> </a>


  </div>
  <div class="card-body">
    <div class="collapse" id="collapse-carousel-2">
      <pre class="language-html mb-4">
<code >
&lt;div class="owl-carousel owl-theme carousel-with-control"&gt;
  &lt;div class="single-item bg-overlay-black-40 rounded"&gt;
    &lt;img class="rounded" src="views/images/elements/slide2.jpg" alt="Slide Image"&gt;
  &lt;/div&gt;
  &lt;div class="single-item bg-overlay-black-40 rounded"&gt;
    &lt;img class="rounded" src="views/images/elements/slide1.jpg" alt="Slide Image"&gt;
  &lt;/div&gt;
  &lt;div class="single-item bg-overlay-black-40 rounded"&gt;
    &lt;img class="rounded" src="views/images/elements/slide3.jpg" alt="Slide Image"&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code>
      </pre>
    </div>
    <!-- Set up your HTML -->
    <div class="owl-carousel owl-theme carousel-with-control">

      <div class="single-item bg-overlay-black-40 rounded">
        <img class="rounded" src="views/images/elements/slide2.jpg" alt="Slide Image">
      </div>

      <div class="single-item bg-overlay-black-40 rounded">
        <img class="rounded" src="views/images/elements/slide1.jpg" alt="Slide Image">
      </div>

      <div class="single-item bg-overlay-black-40 rounded">
        <img class="rounded" src="views/images/elements/slide3.jpg" alt="Slide Image">
      </div>

    </div>

  </div>
</div>

<!-- With Indicators -->
<div class="card card-default">
  <div class="card-header">
    <h2>With Indicators</h2>
    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-carousel-3" role="button"
      aria-expanded="false" aria-controls="collapse-carousel-3"> </a>


  </div>
  <div class="card-body">
    <div class="collapse" id="collapse-carousel-3">
      <pre class="language-html mb-4">
<code >
&lt;div class="owl-carousel owl-theme carousel-with-indicators"&gt;
  &lt;div class="single-item bg-overlay-black-40 rounded"&gt;
    &lt;img class="rounded" src="views/images/elements/slide3.jpg" alt="Slide Image"&gt;
  &lt;/div&gt;
  &lt;div class="single-item bg-overlay-black-40 rounded"&gt;
    &lt;img class="rounded" src="views/images/elements/slide2.jpg" alt="Slide Image"&gt;
  &lt;/div&gt;
  &lt;div class="single-item bg-overlay-black-40 rounded"&gt;
    &lt;img class="rounded" src="views/images/elements/slide1.jpg" alt="Slide Image"&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code>
      </pre>
    </div>
    <!-- Set up your HTML -->
    <div class="owl-carousel owl-theme carousel-with-indicators">

      <div class="single-item bg-overlay-black-40 rounded">
        <img class="rounded" src="views/images/elements/slide3.jpg" alt="Slide Image">
      </div>

      <div class="single-item bg-overlay-black-40 rounded">
        <img class="rounded" src="views/images/elements/slide2.jpg" alt="Slide Image">
      </div>

      <div class="single-item bg-overlay-black-40 rounded">
        <img class="rounded" src="views/images/elements/slide1.jpg" alt="Slide Image">
      </div>

    </div>

  </div>
</div>


<!-- With Captions -->
<div class="card card-default">
  <div class="card-header">
    <h2>With Captions</h2>
    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-carousel-4" role="button"
      aria-expanded="false" aria-controls="collapse-carousel-4"> </a>


  </div>
  <div class="card-body">
    <div class="collapse" id="collapse-carousel-4">
      <pre class="language-html mb-4">
<code >
&lt;div class="owl-carousel owl-theme carousel-with-captions"&gt;
  &lt;div class="single-item bg-overlay-black-40 rounded"&gt;
    &lt;img class="rounded" src="views/images/elements/slide4.jpg" alt="Slide Image"&gt;
    &lt;div class="carousel-caption d-none d-md-block"&gt;
      &lt;h3 class="text-white mb-3"&gt;First Title Goes Here&lt;/h3&gt;
      &lt;p class="text-white"&gt;Praesent commodo cursus magna vel scelerisque&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="single-item bg-overlay-black-40 rounded"&gt;
    &lt;img class="rounded" src="views/images/elements/slide3.jpg" alt="Slide Image"&gt;
    &lt;div class="carousel-caption d-none d-md-block"&gt;
      &lt;h3 class="text-white mb-3"&gt;Second Title Goes Here&lt;/h3&gt;
      &lt;p class="text-white"&gt;Praesent commodo cursus magna vel scelerisque&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="single-item bg-overlay-black-40 rounded"&gt;
    &lt;img class="rounded" src="views/images/elements/slide1.jpg" alt="Slide Image"&gt;
    &lt;div class="carousel-caption d-none d-md-block"&gt;
      &lt;h3 class="text-white mb-3"&gt;Third Title Goes Here&lt;/h3&gt;
      &lt;p class="text-white"&gt;Praesent commodo cursus magna vel scelerisque&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code>
      </pre>
    </div>
    <!-- Set up your HTML -->
    <div class="owl-carousel owl-theme carousel-with-captions">

      <div class="single-item bg-overlay-black-40 rounded">
        <img class="rounded" src="views/images/elements/slide4.jpg" alt="Slide Image">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-white mb-3">First Title Goes Here</h3>
          <p class="text-white">Praesent commodo cursus magna vel scelerisque</p>
        </div>
      </div>

      <div class="single-item bg-overlay-black-40 rounded">
        <img class="rounded" src="views/images/elements/slide3.jpg" alt="Slide Image">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-white mb-3">Second Title Goes Here</h3>
          <p class="text-white">Praesent commodo cursus magna vel scelerisque</p>
        </div>
      </div>

      <div class="single-item bg-overlay-black-40 rounded">
        <img class="rounded" src="views/images/elements/slide1.jpg" alt="Slide Image">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-white mb-3">Third Title Goes Here</h3>
          <p class="text-white">Praesent commodo cursus magna vel scelerisque</p>
        </div>
      </div>

    </div>

  </div>
</div>


<!-- User Carousel -->
<div class="card card-default">
  <div class="card-header">
    <h2>User Carousel</h2>
    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-carousel-5" role="button"
      aria-expanded="false" aria-controls="collapse-carousel-5"> </a>


  </div>
  <div class="card-body">
    <div class="collapse" id="collapse-carousel-5">
      <pre class="language-html mb-4">
<code >
&lt;div class="container"&gt;
  &lt;div class="owl-carousel owl-theme carousel-user"&gt;
    &lt;div class="card border-0"&gt;
      &lt;img src="views/images/elements/user-lg-1.jpg" class="card-img-top rounded-circle" alt="User Image"&gt;
      &lt;div class="card-body text-center"&gt;
        &lt;span class="h4 d-block"&gt;Steven Foster&lt;/span&gt;
        &lt;span&gt;Co-Founder&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="card border-0"&gt;
      &lt;img src="views/images/elements/user-lg-2.jpg" class="card-img-top rounded-circle" alt="User Image"&gt;
      &lt;div class="card-body text-center"&gt;
        &lt;span class="h4 d-block"&gt;Randy Ortan&lt;/span&gt;
        &lt;span&gt;Graphic designer&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="card border-0"&gt;
      &lt;img src="views/images/elements/user-lg-3.jpg" class="card-img-top rounded-circle" alt="User Image"&gt;
      &lt;div class="card-body text-center"&gt;
        &lt;span class="h4 d-block"&gt;Mark Henry&lt;/span&gt;
        &lt;span&gt;Photographer&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="card border-0"&gt;
      &lt;img src="views/images/elements/user-lg-4.jpg" class="card-img-top rounded-circle" alt="User Image"&gt;
      &lt;div class="card-body text-center"&gt;
        &lt;span class="h4 d-block"&gt;Katy Perry&lt;/span&gt;
        &lt;span&gt;Interior designer&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="card border-0"&gt;
      &lt;img src="views/images/elements/user-lg-1.jpg" class="card-img-top rounded-circle" alt="User Image"&gt;
      &lt;div class="card-body text-center"&gt;
        &lt;span class="h4 d-block"&gt;Steven Foster&lt;/span&gt;
        &lt;span&gt;Co-Founder&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="card border-0"&gt;
      &lt;img src="views/images/elements/user-lg-2.jpg" class="card-img-top rounded-circle" alt="User Image"&gt;
      &lt;div class="card-body text-center"&gt;
        &lt;span class="h4 d-block"&gt;Randy Ortan&lt;/span&gt;
        &lt;span&gt;Graphic designer&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code>
      </pre>
    </div>
    <!-- Set up your HTML -->
    <div class="container">
      <div class="owl-carousel owl-theme carousel-user">
        <div class="card border-0">
          <img src="views/images/elements/user-lg-1.jpg" class="card-img-top rounded-circle" alt="User Image">
          <div class="card-body text-center">
            <span class="h4 d-block">Steven Foster</span>
            <span>Co-Founder</span>
          </div>
        </div>
        <div class="card border-0">
          <img src="views/images/elements/user-lg-2.jpg" class="card-img-top rounded-circle" alt="User Image">
          <div class="card-body text-center">
            <span class="h4 d-block">Randy Ortan</span>
            <span>Graphic designer</span>
          </div>
        </div>
        <div class="card border-0">
          <img src="views/images/elements/user-lg-3.jpg" class="card-img-top rounded-circle" alt="User Image">
          <div class="card-body text-center">
            <span class="h4 d-block">Mark Henry</span>
            <span>Photographer</span>
          </div>
        </div>
        <div class="card border-0">
          <img src="views/images/elements/user-lg-4.jpg" class="card-img-top rounded-circle" alt="User Image">
          <div class="card-body text-center">
            <span class="h4 d-block">Katy Perry</span>
            <span>Interior designer</span>
          </div>
        </div>
        <div class="card border-0">
          <img src="views/images/elements/user-lg-1.jpg" class="card-img-top rounded-circle" alt="User Image">
          <div class="card-body text-center">
            <span class="h4 d-block">Steven Foster</span>
            <span>Co-Founder</span>
          </div>
        </div>
        <div class="card border-0">
          <img src="views/images/elements/user-lg-2.jpg" class="card-img-top rounded-circle" alt="User Image">
          <div class="card-body text-center">
            <span class="h4 d-block">Randy Ortan</span>
            <span>Graphic designer</span>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>


<!-- Testimonial Carousel -->
<div class="card card-default">
  <div class="card-header">
    <h2>Testimonial Carousel</h2>
    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-carousel-6" role="button"
      aria-expanded="false" aria-controls="collapse-carousel-6"> </a>


  </div>
  <div class="card-body">
    <div class="collapse" id="collapse-carousel-6">
      <pre class="language-html mb-4">
<code >
&lt;div class="owl-carousel owl-theme carousel-testimonial"&gt;
  &lt;div class="card border-0"&gt;
    &lt;img src="views/images/elements/user-md-1.jpg" class="card-img-top rounded-circle mb-5" alt="User Image"&gt;
    &lt;div class="card-body text-center"&gt;
      &lt;p class="mb-5"&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor reprehenderit.&lt;/p&gt;
      &lt;span class="h4 d-block"&gt;Peter Kain&lt;/span&gt;
      &lt;span&gt;Consultance Acme. inc.&lt;/span&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card border-0"&gt;
    &lt;img src="views/images/elements/user-md-2.jpg" class="card-img-top rounded-circle mb-5" alt="User Image"&gt;
    &lt;div class="card-body text-center"&gt;
      &lt;p class="mb-5"&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor reprehenderit.&lt;/p&gt;
      &lt;span class="h4 d-block"&gt;Mary Johnson&lt;/span&gt;
      &lt;span&gt;Promotions manager&lt;/span&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card border-0"&gt;
    &lt;img src="views/images/elements/user-md-3.jpg" class="card-img-top rounded-circle mb-5" alt="User Image"&gt;
    &lt;div class="card-body text-center"&gt;
      &lt;p class="mb-5"&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor reprehenderit.&lt;/p&gt;
      &lt;span class="h4 d-block"&gt;Mark henry&lt;/span&gt;
      &lt;span&gt;Fashion designer&lt;/span&gt;
    &lt;/div&gt;
  &lt;/div&gt;

&lt;/div&gt;
</code>
      </pre>
    </div>
    <!-- Set up your HTML -->
    <div class="owl-carousel owl-theme carousel-testimonial">

      <div class="card border-0">
        <img src="views/images/elements/user-md-1.jpg" class="card-img-top rounded-circle mb-5" alt="User Image">
        <div class="card-body text-center">
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
          <span class="h4 d-block">Peter Kain</span>
          <span>Consultance Acme. inc.</span>
        </div>
      </div>
      <div class="card border-0">
        <img src="views/images/elements/user-md-2.jpg" class="card-img-top rounded-circle mb-5" alt="User Image">
        <div class="card-body text-center">
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor reprehenderit.</p>
          <span class="h4 d-block">Mary Johnson</span>
          <span>Promotions manager</span>
        </div>
      </div>
      <div class="card border-0">
        <img src="views/images/elements/user-md-3.jpg" class="card-img-top rounded-circle mb-5" alt="User Image">
        <div class="card-body text-center">
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor reprehenderit.</p>
          <span class="h4 d-block">Mark henry</span>
          <span>Fashion designer</span>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
          
        </div>