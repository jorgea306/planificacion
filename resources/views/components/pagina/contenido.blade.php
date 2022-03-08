@extends('welcome')

@section('content')

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="{{route('principal')}}"> <h1 class="logo me-auto"><img src="./assets/img/logo.png" alt=""></h1></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active text" href="#comenzar">Comenzar</a></li>
          <li><a class="nav-link scrollto text" target="_blank" href="https://portal.catamarca.gob.ar/ui/" >Registro de Usuario</a></li>
          <li><a class="nav-link scrollto text" target="_blank" href="https://portal.catamarca.gob.ar/ui/">Portal de Catamarca</a></li>
          <li><a class="nav-link scrollto text" href="#formulario">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
<!--
      <a href="#formulario" class="get-started-btn scrollto">Get Started</a> -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1 class="text">Catamarca Planifica</h1>
          <h2 class="text">Ministerios de Trabajo, Planificación y Recursos Humanos</h2>
          <!-- <a href="#about" class="btn-get-started scrollto">Comenzar</a> -->
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

   <!-- ======= Tabs Section ======= -->
   <section id="tabs" class="tabs">
    <div class="container" data-aos="fade-up">

      <ul class="nav nav-tabs row d-flex">
        <li class="nav-item col-3">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <i class="ri-gps-line"></i>
            <h4 class="d-none d-lg-block">Modi sit est dela pireda nest</h4>
          </a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <i class="ri-body-scan-line"></i>
            <h4 class="d-none d-lg-block">Unde praesenti mara setra le</h4>
          </a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
            <i class="ri-sun-line"></i>
            <h4 class="d-none d-lg-block">Pariatur explica nitro dela</h4>
          </a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
            <i class="ri-store-line"></i>
            <h4 class="d-none d-lg-block">Nostrum qui dile node</h4>
          </a>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane active show" id="tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
              <h3 class="negra">Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
              <p class="negra">
              <b> casa de papa</b>
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i><b> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</b></li>
                <li><i class="ri-check-double-line"></i> <b> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</b></li>
                <li><i class="ri-check-double-line"></i> <b> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</b></li>
              </ul>
              <p> <b>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
            </b>
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3 class="negra">Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
              <p class="negra">
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-3">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
              </ul>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab-4">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/tabs-4.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Tabs Section -->

      <!-- ======= About Section ======= -->
      <section id="comenzar" class="about section-bg">
        <div class="container" data-aos="fade-up">

          <div class="row no-gutters">
            <div class="content col-xl-5 d-flex align-items-stretch">
              <div class="content">
                <h3>Voluptatem dignissimos provident quasi</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                </p>
                <a  href="{{route('desarrollo_alta')}}" class="about-btn"><span>Comenzar</span> <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
            <div class="col-xl-7 d-flex align-items-stretch">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris nisi</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <i class="bx bx-images"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <i class="bx bx-shield"></i>
                    <h4>Beatae veritatis</h4>
                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                  </div>
                </div>
              </div><!-- End .content-->
            </div>
          </div>

        </div>
      </section><!-- End About Section -->


    {{-- <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="formulario" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 class="text">Contacto</h2>
          <p class="text">
            Formulario de contacto para consulta<br>
          </p>

        </div>
        <div class="reply-form">
          <form action="">
            <div class="row">
              <div class="col-md-6 form-group m-2">
                <input name="name" type="text" class="form-control text" placeholder="Nombre">
              </div>
              <div class="col-md-6 form-group m-2">
                <input name="email" type="text" class="form-control text" placeholder="Telefono">
              </div>
            </div>
            <div class="row">
              <div class="col form-group m-2">
                <input name="website" type="email" class="form-control text" placeholder="Correo">
              </div>
            </div>
            <div class="row">
              <div class="col form-group m-2">
                <textarea name="comment" class="form-control text" placeholder="Mensaje"></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary m-2 text">Enviar Mensaje</button>

          </form>

        </div>


      </div>
    </section><!-- End Frequently Asked Questions Section --> --}}

    <!-- ======= Team Section ======= -->

  </main><!-- End #main -->
