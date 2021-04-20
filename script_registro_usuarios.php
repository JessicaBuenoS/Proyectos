<?php
session_start();
if($_SESSION['sesion_administrador']=="creada"){


/*if(empty($_POST['id_usuario'])||empty($_POST['contrasena'])){
  echo "error";
}else{*/


require 'conexion.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$id_usuario = $_POST['id_usuario'];
$contrasena = md5($_POST['contrasena']);
$nombre=$_POST['nombre'];
$apellido_mat=$_POST['apellido_mat'];
$apellido_pat=$_POST['apellido_pat'];
$email=$_POST['email'];
$rfc=$_POST['rfc'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$tipo_usuario=$_POST['tipo_usuario'];
$id_monedero=$_POST['id_usuario'];
$id_monedero=$id_monedero.$tipo_usuario;

$sql = "INSERT INTO usuarioss (id_usuario, contrasena, nombre, apellido_mat, apellido_pat, email, rfc, telefono, direccion, tipo_usuario, id_monedero)
VALUES ('".$id_usuario."', '".$contrasena."', '".$nombre."', '".$apellido_mat."', '".$apellido_pat."', '".$email."','".$rfc."', '".$telefono."', '".$direccion."', '".$tipo_usuario."', '".$id_monedero."')";
  

$sql2 = "INSERT INTO monedero (id_monedero, id_usuario)
VALUES ('".$id_monedero."', '".$id_usuario."')";













        echo "<!DOCTYPE html>
        <html lang=\"es\">

          <head>

            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">

            <title>Registro usuarios - Eventos UP</title>

            <!-- Bootstrap core CSS -->
            <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

            <!-- Custom styles for this template -->
            <link href=\"css/modern-business.css\" rel=\"stylesheet\">

          </head>

          <body>

           
            <!-- Navigation -->
                            <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
                              <div class=\"container\">
                                <a class=\"navbar-brand\" href=\"index_administrador.php\">Eventos UP</a>
                                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                  <span class=\"navbar-toggler-icon\"></span>
                                </button>
                                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                                  <ul class=\"navbar-nav ml-auto\">
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" href=\"registro_usuarios.php\">Registro usuarios</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" href=\"reportes_A.php\">Reportes</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" href=\"preguntas_frecuentes_A.php\">Preguntas frecuentes</a>
                                    </li>
                                    <li class=\"nav-item\">
                                      <a class=\"nav-link\" href=\"solicitud_ayuda_A.php\">Solicitud ayuda</a>
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
                <small>Nuevos usuarios</small>
              </h1>

              <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\">
                  <a href=\"index_administrador.php\">Inicio</a>
                </li>
                <li class=\"breadcrumb-item active\">Registro nuevos usuarios</li>
              </ol>";

            /*echo $id_usuario."<br>";
            echo $contrasena."<br>";
            echo $nombre."<br>";
            echo $apellido_mat."<br>";
            echo $apellido_pat."<br>";
            echo $email."<br>";
            echo $rfc."<br>";
            echo $tel."<br>";
            echo $direccion."<br>";
            echo $tipo_usuario."<br>";
            echo $id_monedero."<br>";*/
            if(empty($_POST['id_usuario'])||empty($_POST['contrasena'])){
                    echo "<br><br><p>Error: No se ingresaron datos</p>";
                    echo "<br><a href=\"registro_usuarios.php\" class=\"btn btn-primary\">Regresar</a><br><br>";
            }else{
                    if (($conn->query($sql) === TRUE)&&($conn->query($sql2) === TRUE)) {
                      echo "<br><br><p>Nuevo registro realizado correctamente</p>";
                      echo "<br><a href=\"registro_usuarios.php\" class=\"btn btn-primary\">Regresar</a><br><br>";

                    } else {
                    echo "<br><br><p>Error: " . $sql . "<br>" . $conn->error."</p>";
                    echo "<br><a href=\"registro_usuarios.php\" class=\"btn btn-primary\">Regresar</a><br><br>";
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

        </html>";//}

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