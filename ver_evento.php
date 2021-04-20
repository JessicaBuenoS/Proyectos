<?php
session_start();

if($_SESSION['sesion_participante']=="creada"){
require 'conexion.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$id_evento = $_POST['id_evento'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_inscripcion = $_POST['fecha_inscripcion'];

$fecha_actual=date("Y-m-d H:i:s");







  















        echo "<!DOCTYPE html>
        <html lang=\"es\">

          <head>

            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">

            <title>Ver evento - Eventos UP</title>

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
                <small>Información del evento</small>
              </h1>

              <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\">
                  <a href=\"index_participante.php\">Inicio</a>
                </li>
                <li class=\"breadcrumb-item active\">Información del evento</li>
              </ol>";

                



              if($fecha_actual<$fecha_inicio){
              //echo"evento activo";
                    if($fecha_actual>$fecha_inscripcion){
                    //echo"te puedes inscribir";
                      $sql = "SELECT * FROM eventos where id_evento='$id_evento'";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
       
                          while($row = $result->fetch_assoc()) {
                            $nombre_evento=$row["nombre_evento"];
                            $descripcion_evento=$row["descripcion_evento"];
                            $fecha_inicio=$row["fecha_inicio"];
                            $fecha_fin=$row["fecha_fin"];
                            $cupo=$row["cupo"];
                            $costo=$row["costo"];
                            $id_agenda=$row["id_agenda"];
                            echo"<h3>".$nombre_evento."</h3>
                            <br>
                            <h4> Descripción del evento</h4>
                            <br>
                            <p>".$descripcion_evento."</p>
                            <h4> Fecha de inicio</h4>
                            <br>
                            <p>".$fecha_inicio."</p>
                            <h4> Fecha de terminación</h4>
                            <br>
                            <p>".$fecha_fin."</p>
                            <h4> Cupo</h4>
                            <br>
                            <p>".$cupo."</p>
                            <h4> Costo</h4>
                            <br>
                            <p>$ ".$costo."</p>";

                          }
                      }



                      $sql = "SELECT * FROM actividades where id_agenda='$id_agenda' order by h_inicio";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                      echo"<br><h3>Actividades</h3><table width=\"50%\">";
                      echo"<tr>
                            <td><h5>Actividad</h5></td>
                            
                            <td><h5>Ubicación</h5></td>
                            
                            <td><h5>Hora de inicio</h5></td>
                            
                            <td><h5>Hora de terminación</h5></td>
                            </tr>";
                          while($row = $result->fetch_assoc()) {
                            $nombre_actividad=$row["nombre_actividad"];
                            $ubicacion=$row["ubicacion"];
                            $h_inicio=$row["h_inicio"];
                            $h_fin=$row["h_fin"];

                            echo"<tr>
                            <td><h6>".$nombre_actividad."</h6></td>
                            
                            <td><h6>".$ubicacion."</h6></td>
                            
                            <td><h6>".$h_inicio."</h6></td>
                            
                            <td><h6>".$h_fin."</h6></td>
                            </tr>";


                           

                          }
                          echo"</table><br><br>";
                          
                      }
                            echo"<form action=\"inscripcion.php\" method=\"post\">
                            <input type=\"hidden\" name=\"id_evento\" value=\"".$id_evento."\">
                            
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"Inscríbete\">
                          
                          </form>";

                    }else{
                    echo"<p>Todavia no te puedes inscribir</p>";
                    }
              }else{
                 echo"<p>Evento terminado</p>";
              }

            
            
            echo "<br><br>";

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