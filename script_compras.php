<?php
session_start();

if($_SESSION['sesion_coordinador']=="creada"){
require 'conexion.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$id_monedero=$_POST['id_monedero'];
$monto=$_POST['monto'];




//$sql = "INSERT INTO compras_monedero (id_monedero,monto)
//VALUES ('".$id_monedro."','".$monto."')";

//$sSQL="Update monedero Set saldo='$fecha' Where id='$id'";
//mysql_query($sSQL);
   

















        echo "<!DOCTYPE html>
        <html lang=\"es\">

          <head>

            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">

            <title>Modern Business - Start Bootstrap Template</title>

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
              <h1 class=\"mt-4 mb-3\">Compras
                <small>Monedero electrónico</small>
              </h1>

              <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\">
                  <a href=\"index_coordinador.php\">Inicio</a>
                </li>
                <li class=\"breadcrumb-item active\">Compras</li>
              </ol>";

              /*echo $lugar."<br>";
              echo $fecha_inicio."<br>" ;
              echo $fecha_fin."<br>";
              echo $cupo."<br>";

              echo $costo."<br>";
              echo $id_tipo."<br>";
              echo $id_coordinador."<br>";
              echo $id_carrera."<br>";
              echo $fecha_inscripcion."<br>";
              echo $id_agenda."<br>";*/

            //if (($conn->query($sql) === TRUE)&&($conn->query($sql2) === TRUE)){

            /*if ($conn->query($sql) === TRUE){
              echo "<br><br><p>Nuevo registro realizado correctamente</p>";
              echo "<br><a href=\"registro_eventos.php\" class=\"btn btn-primary\">Regresar</a><br><br>";

            } else {
            echo "<br><br><p>Error: " . $sql . "<br>" . $conn->error."</p>";
            echo "<br><a href=\"registro_eventos.php\" class=\"btn btn-primary\">Regresar</a><br><br>";
            }*/
          if(isset($_POST["id_monedero"])){
            $sql="SELECT * FROM monedero WHERE id_monedero='$id_monedero'";
            $result=$conn->query($sql);
            if($result->num_rows>0){
            $row=$result->fetch_assoc();
            $saldo=$row["saldo"];
            $saldo_final=$saldo-$monto;

                if($saldo_final>=0){

                    $sql = "INSERT INTO compras_monedero (id_monedero,monto)
                    VALUES ('".$id_monedero."','".$monto."')";

                    

                        if ($conn->query($sql) === TRUE){
                          echo "<br><br><p>Nuevo registro realizado correctamente</p>";
                          echo "<br><a href=\"compras.php\" class=\"btn btn-primary\">Regresar</a><br><br>";
                          
                        } else {
                          echo "<br><br><p>Error: " . $sql . "<br>" . $conn->error."</p>";
                          echo "<br><a href=\"compras.php\" class=\"btn btn-primary\">Regresar</a><br><br>";
                        }
                $conn->close();
                mysql_connect($servername,$username,$password);
                mysql_select_db($dbname); 

                $sSQL="Update monedero Set saldo='$saldo_final' Where id_monedero='$id_monedero'";
                mysql_query($sSQL);  
                //$conn->close();
                }else{
                   echo "<br><br><p>Saldo insuficiente</p>";
                   echo "<br><a href=\"compras.php\" class=\"btn btn-primary\">Regresar</a><br><br>";
                }
            }else{
              echo "<br><br><p>Id de monedero incorrecto</p>";
              echo "<br><a href=\"compras.php\" class=\"btn btn-primary\">Regresar</a><br><br>";

            }
        }else{
          echo "<br><br>No se ingresaron datos<br><br>";
          echo "<br><a href=\"compras.php\" class=\"btn btn-primary\">Regresar</a><br><br><br><br>";

        }
            
              

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