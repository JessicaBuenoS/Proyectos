<?php
session_start();
require 'conexion.php';
$id_usuario = $_POST['id'];
$contrasena=md5($_POST['contra']);

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
	
$sql="SELECT * FROM usuarioss WHERE id_usuario='$id_usuario' AND contrasena='$contrasena' AND tipo_usuario='1'";



$result=$conn->query($sql);	

if($result->num_rows>0){
	$_SESSION['administrador']=$id_usuario;
	$_SESSION['sesion_administrador']="creada";
	header ("Location: index_administrador.php");

	
}else{
									echo "<!DOCTYPE html>
							        <html lang=\"es\">

							          <head>

							            <meta charset=\"utf-8\">
							            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
							            <meta name=\"description\" content=\"\">
							            <meta name=\"author\" content=\"\">

							            <title>Sesión administrador - Eventos UP</title>

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
						                <small>Administrador</small>
						              </h1>

						              <ol class=\"breadcrumb\">
						                <li class=\"breadcrumb-item\">
						                  <a href=\"index.php\">Inicio</a>
						                </li>
						                <li class=\"breadcrumb-item active\">Iniciar sesión administrador</li>
						              </ol>";

						            echo "<br><br><p>Id o contraseña incorrecta</p>";
              						echo "<br><a href=\"sesion_administrador.php\" class=\"btn btn-primary\">Regresar</a><br><br>";
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
}


			
		
$conn->close();
















?>