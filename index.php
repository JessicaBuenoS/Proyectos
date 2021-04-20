<?php
session_start();
session_destroy();



                   echo "<!DOCTYPE html>
                        <html lang=\"es\">

                          <head>

                            <meta charset=\"utf-8\">
                            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
                            <meta name=\"description\" content=\"\">
                            <meta name=\"author\" content=\"\">

                            <title>Inicio - Eventos UP</title>

                            <!-- Bootstrap core CSS -->
                            <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

                            <!-- Custom styles for this template -->
                            <link href=\"css/modern-business.css\" rel=\"stylesheet\">

                          </head>

                          <body>

                            <!-- Navigation -->
                            <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
                              <div class=\"container\">
                                <a class=\"navbar-brand\" href=\"index.php\">Eventos UP</a>
                                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                  <span class=\"navbar-toggler-icon\"></span>
                                </button>
                                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                                  <ul class=\"navbar-nav ml-auto\">
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" href=\"iniciar_sesion.php\">Iniciar sesión</a>
                                    </li>
                                    
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </nav>
                            <!-- header -->
                        <header>
                          <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\" role=\"listbox\">
                              <!-- Slide One - Set the background image for this slide in the line below -->
                              <div class=\"carousel-item active\" style=\"background-image: url('imagenes/index1.jpg')\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                  
                                </div>
                              </div>
                              <!-- Slide Two - Set the background image for this slide in the line below -->
                              <div class=\"carousel-item\" style=\"background-image: url('imagenes/index2.jpg')\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                  <h3>Eventos UP</h3>
                                  <p>Sitio de eventos de la Universidad Politécnica de San Luis Potosí</p>
                                </div>
                              </div>
                              <!-- Slide Three - Set the background image for this slide in the line below -->
                              <div class=\"carousel-item\" style=\"background-image: url('imagenes/index3.jpg')\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                  <h3>Eventos UP</h3>
                                  <p>¡Inscríbete!</p>
                                </div>
                              </div>
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                              <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                              <span class=\"sr-only\">Next</span>
                            </a>
                          </div>
                        </header>

                        <!-- Page Content -->
                        <div class=\"container\">

                          <h1 class=\"my-4\">Bienvenidos a Eventos UP</h1>

                          <!-- Marketing Icons Section -->
                          <div class=\"row\">
                            <div class=\"col-lg-4 mb-4\">
                              <div class=\"card h-100\">
                                <h4 class=\"card-header\">Conoce</h4>
                                <div class=\"card-body\">
                                  <p class=\"card-text\">Conoce todos los eventos de la Universidad Politécnica de San Luis Potosí.</p>
                                </div>
                                
                              </div>
                            </div>
                            <div class=\"col-lg-4 mb-4\">
                              <div class=\"card h-100\">
                                <h4 class=\"card-header\">Descubre</h4>
                                <div class=\"card-body\">
                                  <p class=\"card-text\">Descubre todo lo que puedes hacer en los eventos.</p>
                                </div>
                                
                              </div>
                            </div>
                            <div class=\"col-lg-4 mb-4\">
                              <div class=\"card h-100\">
                                <h4 class=\"card-header\">Inscríbete</h4>
                                <div class=\"card-body\">
                                  <p class=\"card-text\">Inscríbete a los eventos disponibles</p>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                          <!-- /.row -->

                          <!-- Portfolio Section -->
                          <h2>Principales eventos</h2>

                          <div class=\"row\">
                            <div class=\"col-lg-4 col-sm-6 portfolio-item\">
                              <div class=\"card h-100\">
                                <a ><img class=\"card-img-top\" src=\"imagenes/evento1.jpg\" alt=\"\"></a>
                                <div class=\"card-body\">
                                  <h4 class=\"card-title\">
                                    <a >Sales Force Fest</a>
                                  </h4>
                                  <p class=\"card-text\">Las famosas tortas de merca, ven a disfrutar con toda tu familia y amigos la variedad de tortas disponibles.</p>
                                </div>
                              </div>
                            </div>
                            <div class=\"col-lg-4 col-sm-6 portfolio-item\">
                              <div class=\"card h-100\">
                                <a ><img class=\"card-img-top\" src=\"imagenes/evento2.jpg\" alt=\"\"></a>
                                <div class=\"card-body\">
                                  <h4 class=\"card-title\">
                                    <a >Semana ITI</a>
                                  </h4>
                                  <p class=\"card-text\">Toda una semana de ITI, asiste al foro dónde encontrarás diversas conferencias, habrá concursos, cursos y mucho más</p>
                                </div>
                              </div>
                            </div>
                            <div class=\"col-lg-4 col-sm-6 portfolio-item\">
                              <div class=\"card h-100\">
                                <a ><img class=\"card-img-top\" src=\"imagenes/evento3.jpg\" alt=\"\"></a>
                                <div class=\"card-body\">
                                  <h4 class=\"card-title\">
                                    <a >Sonic PI</a>
                                  </h4>
                                  <p class=\"card-text\">Sonic PI es un evento diferente, organizado por alumnos de 9no semestre de la carrera de Ingeniería en Tecnologías de la información para la materia de compiladores. 5 DJs compilando la mejor música. Un sólo ganador; ¡apoya al mejor! </p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                          <!-- /.row -->

                          

                        <!-- Footer -->
                        <footer class=\"py-5 bg-dark\">
                          <div class=\"container\">
                            <p class=\"m-0 text-center text-white\">Copyright &copy; Eventos UP 2018</p>
                          </div>
                          <!-- /.container -->
                        </footer>

                        <!-- Bootstrap core JavaScript -->
                        <script src=\"vendor/jquery/jquery.min.js\"></script>
                        <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

                      </body>

                    </html>";

?>