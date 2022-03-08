@extends('welcome')

@section('content')

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <a href="{{route('principal')}}">
                <h1 class="logo me-auto"><img src="./assets/img/logo.png" alt=""></h1>
            </a>
            <!-- Unpregunta17 below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active text" href="#datos">Actualizacion de Datos</a></li>
                    <li><a class="nav-link scrollto text" target="_blank" href="https://portal.catamarca.gob.ar/ui/">Registro
                            de Usuario</a></li>
                    <li><a class="nav-link scrollto text" target="_blank" href="https://portal.catamarca.gob.ar/ui/">Portal
                            de Catamarca</a></li>
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



        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="formulario" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2 class="text">Contacto</h2>
                    <p class="text">
                        <b> Formulario de contacto para consulta<br> </b>
                    </p>

                </div>
                <div class="reply-form">
                    <form action="{{route('altaDesarrollo')}}" method="POST">
                        @csrf

                        @error('pregunta1')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta2')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta3')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta4')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta5')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta6')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta7')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta8')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta9')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta10')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta11')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta12')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta13')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta14')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta15')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta16')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        @error('pregunta17')
                        <div class="alert alert-danger" role="alert">
                            La Pregunta: ........................ Es Obligatoria
                        </div>
                        @enderror

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b>  1. ¿Qué propuestas de mejoras considera más importantes para complementar el proyecto de la Costanera del Rio del Valle? *<br> </b>
                                </p>
                                <textarea name="pregunta1" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b>  2. ¿Dónde considera que sería adecuado ubicar un espacio público recreativo para todo el municipio? *<br> </b>
                                </p>
                                <textarea name="pregunta2" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b> 3. ¿Los canales de riego son atractivos y necesarios? .¿Qué sugiere usted para resolver los problemas ocasionados por los canales de riego? *<br></b>
                                </p>
                                <textarea name="pregunta3" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b> 4. ¿Mencione si tiene alguna sugerencia para resolver el problema de inundabilidad en su barrio? Mencione el barrio *<br> </b>
                                </p>
                                <textarea name="pregunta4" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b> 5. ¿Qué propone para que la circulación del tránsito en la ciudad sea más fluida? *<br> </b>
                                </p>
                                <textarea name="pregunta5" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b> 6. ¿Qué zonas/calle considera Ud. que hay mayor demanda de transporte público? *<br> </b>
                                </p>
                                <textarea name="pregunta6" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b> 7. ¿Qué servicios requiere fuera de Valle Viejo? *<br> </b>
                                </p>
                                <textarea name="pregunta7" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b>  8. ¿Dónde cree que es conveniente instalar un centro de salud para Valle Viejo? *<br> </b>
                                </p>
                                <textarea name="pregunta8" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b> 9. ¿Dónde cree que es conveniente instalar un establecimiento escolar para Valle Viejo? *<br> </b>
                                </p>
                                <textarea name="pregunta9" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b>  10. ¿Considera que genera problemas la ubicación de la fábrica de cerámica en el centro del área urbana? *<br> </b>
                                </p>
                                <textarea name="pregunta10" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b>  11. ¿Qué acuerdos con los municipios de FME y de Capital considera que son más importantes? *<br> </b>
                                </p>
                                <textarea name="pregunta11" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b> 12. ¿Cuáles cree que son los trabajos que cuentan con mayor salida laboral en Valle Viejo? *<br> </b>
                                </p>
                                <textarea name="pregunta12" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b>  13. ¿Qué oficios considera hacen falta en Valle Viejo? *<br> </b>
                                </p>
                                <textarea name="pregunta13" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b>  14. ¿En qué localidad de Valle Viejo le gustaría vivir? *<br> </b>
                                </p>
                                <textarea name="pregunta14" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b> 15. Mencione su barrio, cuéntenos los tres problemas principales de su barrio y que solución les daría. *<br> </b>
                                </p>
                                <textarea name="pregunta15" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b>  16. Como se imagina Valle Viejo en 10 años. *<br> </b>
                                </p>
                                <textarea name="pregunta16" class="form-control text negra" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group m-2">
                                <p class="text">
                                    <b> 17. ¿Con cuál de estos temas puede usted comprometerse para mejorar el ordenamiento de su territorio? *<br> </b>
                                </p>
                                <b>
                                    <textarea name="pregunta17" class="form-control text negra" placeholder="Mensaje"></textarea>
                                </b>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary m-2 text">Enviar Formulario</button>

                    </form>

                </div>


            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Team Section ======= -->

    </main><!-- End #main -->
