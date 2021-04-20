<?php
session_start();

if($_SESSION['sesion_coordinador']=="creada"){              



                echo   "<!DOCTYPE html>
        <html lang=\"es\">

          <head>

            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">

            <title>Registro Eventos - Eventos UP</title>

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
                      <h1 class=\"mt-4 mb-3\">Registro
                        <small>Nuevos Eventos</small>
                      </h1>

                      <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\">
                          <a href=\"index_coordinador.php\">Inicio</a>
                        </li>
                        <li class=\"breadcrumb-item active\">Registro nuevos eventos</li>
                      </ol>

                      <form enctype=\"multipart/form-data\" action=\"script_registro_eventos.php\" method=\"post\">
                        Id evento:<br> <input type=\"text\" name=\"id_evento\" minlength=\"6\" maxlength=\"6\" placeholder=\"6 caracteres\" required>
                        <br><br>
                        Nombre del evento:<br> <input type=\"text\" name=\"nombre_evento\" minlength=\"3\" maxlength=\"80\" required>
                        <br><br>
                        Descripcion del evento:<br> <textarea name=\"descripcion_evento\" rows=\"5\" cols=\"40\"></textarea>
                        <br><br>
                        Lugar:<br> <input type=\"text\" name=\"lugar\" minlength=\"3\" maxlength=\"50\" required>
                        <br><br>
                        Fecha de inicio:<br> <input type=\"datetime-local\" name=\"fecha_inicio\" required>
                        <br><br>
                        Fecha de terminación:<br> <input type=\"datetime-local\" name=\"fecha_fin\" required>
                        <br><br>
                        Fecha de inscripción:<br> <input type=\"datetime-local\" name=\"fecha_inscripcion\" required>
                        <br><br>
                        Cupo:<br> <input type=\"text\" name=\"cupo\" minlength=\"1\" maxlength=\"5\" required>
                        <br><br>
                        
                        Costo:<br> <input type=\"text\" name=\"costo\" minlength=\"1\" maxlength=\"5\" required>
                        <br><br>
                        Tipo de evento:<br> <select name=\"id_tipo\" >
                                              <option value=\"1\">Congreso</option>
                                              <option value=\"2\">Foro</option>
                                              <option value=\"3\">Evento institucional</option>
                                              <option value=\"4\">Externo</option>
                                              
                                            </select>
                        <br><br>
                        Id Cordinador:<br> <input type=\"text\" name=\"id_coordinador\" minlength=\"5\" maxlength=\"8\" required>
                        <br><br>                  
                        Carrera:<br> <select name=\"id_carrera\" >
                                              <option value=\"1\">ISTI</option>
                                              <option value=\"2\">ITI</option>
                                              <option value=\"3\">ITEM</option>
                                              <option value=\"4\">ITMA</option>
                                              <option value=\"5\">LAG</option>
                                              <option value=\"6\">MKT</option>
                                              <option value=\"7\">Otra</option>
                                              
                                            </select>
                        <br><br> 
                        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"30000\" />
                        Imagen del evento: <input name=\"fichero_usuario\" type=\"file\" />
                        <br><br>
                        <input type=\"submit\" value=\"Registrar\">
                        <br><br>
                      


                      </form>

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