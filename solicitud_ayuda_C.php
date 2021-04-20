<?php
session_start();

if($_SESSION['sesion_coordinador']=="creada"){

			echo "<!DOCTYPE html>
        <html lang=\"es\">

          <head>

            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">

            <title>Solicitud de ayuda - Eventos UP</title>

            <!-- Bootstrap core CSS -->
            <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

            <!-- Custom styles for this template -->
            <link href=\"css/modern-business.css\" rel=\"stylesheet\">

          </head>

          <body>

            <!-- Navigation -->
            <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
                              <div class=\"container\">
                                <a class=\"navbar-brand\" href=\"index_coordinador.php\">Eventos UP</a>
                                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                  <span class=\"navbar-toggler-icon\"></span>
                                </button>
                                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                                  <ul class=\"navbar-nav ml-auto\">
                                    
                                    <li class=\"nav-item dropdown\">
                                      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Registro
                                      </a>
                                      <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                                        <a class=\"dropdown-item\" href=\"registro_eventos.php\">Registro eventos</a>
                                        <a class=\"dropdown-item\" href=\"registro_actividades.php\">Registro actividades</a>
                                      </div>
                                    </li>

                                    <li class=\"nav-item dropdown\">
                                      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Monedero
                                      </a>
                                      <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                                        <a class=\"dropdown-item\" href=\"compras.php\">Compras</a>
                                        <a class=\"dropdown-item\" href=\"incrementar_saldo.php\">Incrementar saldo</a>
                                      </div>
                                    </li>

                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" href=\"asistencia_manual.php\">Asistencia</a>
                                    </li>


                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" href=\"reportes_C.php\">Reportes</a>
                                    </li>
                                    
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" href=\"preguntas_frecuentes_C.php\">Preguntas frecuentes</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" href=\"solicitud_ayuda_C.php\">Solicitud ayuda</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" href=\"index.php\">Cerrar sesión</a>
                                    </li>
                                    
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </nav>

    <!-- Page Content -->
    <div class=\"container\">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class=\"mt-4 mb-3\">Solicitud de ayuda
        <small></small>
      </h1>

      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"index_coordinador.php\">Inicio</a>
        </li>
        <li class=\"breadcrumb-item active\">Solicitud de ayuda</li>
      </ol>

      <!-- Content Row -->
      <div class=\"row\">
        <!-- Map Column -->
        <div class=\"col-lg-8 mb-4\">
          <!-- Embedded Google Map -->
          

          <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14784.381637820896!2d-100.9842534!3d22.1223377!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe1b3dea4c6aa1c03!2sUniversidad+Polit%C3%A9cnica+de+San+Luis+Potos%C3%AD!5e0!3m2!1ses!2smx!4v1542659557661\"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class=\"col-lg-4 mb-4\">
          <h3>Detalles de contacto</h3>
          <p>
            Urbano Villalon #500
            <br>San Luis Potosí, S.L.P. 78369
            <br>
          </p>
          <p>
            <abbr title=\"Phone\">Teléfono</abbr>: +52 (444) 812-65-19 / 812-63-67
          </p>
          
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class=\"row\">
        <div class=\"col-lg-8 mb-4\">
          <h3>Envie un mensaje</h3>
          <form name=\"sentMessage\" id=\"contactForm\" novalidate>
            <div class=\"control-group form-group\">
              <div class=\"controls\">
                <label>Nombre:</label>
                <input type=\"text\" class=\"form-control\" id=\"name\" required data-validation-required-message=\"Por favor ingrese su nombre.\">
                <p class=\"help-block\"></p>
              </div>
            </div>
            <div class=\"control-group form-group\">
              <div class=\"controls\">
                <label>Teléfono:</label>
                <input type=\"tel\" class=\"form-control\" id=\"phone\" required data-validation-required-message=\"Por favor ingrese su número de teléfono\">
              </div>
            </div>
            <div class=\"control-group form-group\">
              <div class=\"controls\">
                <label>Email :</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" required data-validation-required-message=\"Por favor ingrese su dirección de correo.\">
              </div>
            </div>
            <div class=\"control-group form-group\">
              <div class=\"controls\">
                <label>Mensaje:</label>
                <textarea rows=\"10\" cols=\"100\" class=\"form-control\" id=\"message\" required data-validation-required-message=\"Por favor ingrese su mensaje\" maxlength=\"999\" style=\"resize:none\"></textarea>
              </div>
            </div>
            <div id=\"success\"></div>
            <!-- For success/fail messages -->
            <button type=\"submit\" class=\"btn btn-primary\" id=\"sendMessageButton\">Enviar mensaje</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

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


            <!-- Contact form JavaScript -->
    		<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
   			 <script src=\"js/jqBootstrapValidation.js\"></script>
    		<script src=\"js/contact_me.js\"></script>

    </body>

     </html>";

 }else{
  echo "<!DOCTYPE html>
                      <html lang=\"es\">

                        <head>

                          <meta charset=\"utf-8\">
                          <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
                          <meta name=\"description\" content=\"\">
                          <meta name=\"author\" content=\"\">

                          <title>Error inicio de sesión - Eventos UP</title>

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

                          <!-- Page Content -->
                        <div class=\"container\">

                          <!-- Page Heading/Breadcrumbs -->
                          <h1 class=\"mt-4 mb-3\">Iniciar sesion
                            <small>Error</small>
                          </h1>

                          <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                              <a href=\"index.php\">Inicio</a>
                            </li>
                            <li class=\"breadcrumb-item active\">Error de inicio de sesión </li>
                          </ol>";

                        echo "<br><br><p>No se ha iniciado sesión</p>";
                          echo "<br><a href=\"iniciar_sesion.php\" class=\"btn btn-primary\">Ir a inicio de sesión</a><br><br>";
                          echo "</div>
                        <!-- /.container -->";

                        echo " <!-- Footer -->
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
 }   

  



?>