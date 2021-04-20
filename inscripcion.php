<?php
session_start();
if($_SESSION['sesion_participante']=="creada"){

$id_usuario=$_SESSION['participante'];
require 'conexion.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$id_evento = $_POST['id_evento'];

$sql="SELECT * FROM participantes WHERE id_evento='$id_evento' AND id_usuario='$id_usuario'";
$result=$conn->query($sql);



















        echo "<!DOCTYPE html>
        <html lang=\"es\">

          <head>

            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">

            <title>Inscripción - Eventos UP</title>

            <!-- Bootstrap core CSS -->
            <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

            <!-- Custom styles for this template -->
            <link href=\"css/modern-business.css\" rel=\"stylesheet\">

          </head>

          <body>

            <!-- Navigation -->
                        <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
                              <div class=\"container\">
                                <a class=\"navbar-brand\" href=\"index_participante.php\">Eventos UP</a>
                                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                  <span class=\"navbar-toggler-icon\"></span>
                                </button>
                                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                                  <ul class=\"navbar-nav ml-auto\">
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" href=\"eventos.php\">Eventos</a>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Monedero
                                      </a>
                                      <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                                        <a class=\"dropdown-item\" href=\"imprimir_monedero.php\">Imprimir monedero</a>
                                        <a class=\"dropdown-item\" href=\"informacion_monedero.php\">Información</a>
                                      </div>
                                    </li>
                                    
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" href=\"preguntas_frecuentes_AS.php\">Preguntas frecuentes</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" href=\"solicitud_ayuda_AS.php\">Solicitud ayuda</a>
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
              <h1 class=\"mt-4 mb-3\">Eventos
                <small>Inscripción al evento</small>
              </h1>

              <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\">
                  <a href=\"index.html\">Inicio</a>
                </li>
                <li class=\"breadcrumb-item active\">Inscripción al evento</li>
              </ol>";

              if($result->num_rows>0){
                echo "<br>Ya se ha inscrito al evento<br><br>";
                echo "<br><a href=\"eventos.php\" class=\"btn btn-primary\">Regresar</a><br><br>";
              }else{

                  $sql = "INSERT INTO participantes (id_usuario, id_evento) VALUES ('".$id_usuario."', '".$id_evento."')";
  
                      if ($conn->query($sql) === TRUE) {
                    echo "<br><br><p>Nuevo registro realizado correctamente</p>";
                    echo "<br><a href=\"eventos.php\" class=\"btn btn-primary\">Regresar</a><br><br>";

                    echo "<form action=\"generar_qr.php\" method=\"post\" target=\"_blank\">
                          <input type=\"hidden\" name=\"id_evento\" value=\"".$id_evento."\"> 
                          <input type=\"hidden\" name=\"id_usuario\" value=\"".$id_usuario."\"> 
                          <br><input type=\"submit\" class=\"btn btn-primary\" value=\"Generar código QR\"><br><br>
                          </form>";
                          

                  } else {
                  echo "<br><br><p>Error: " . $sql . "<br>" . $conn->error."</p>";
                  echo "<br><a href=\"eventos.php\" class=\"btn btn-primary\">Regresar</a><br><br>";
                  }
              }
            

            

            $conn->close();  
              

          echo "</div>
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