<?php

				echo "<!DOCTYPE html>
				        <html lang=\"es\">

				          <head>

				            <meta charset=\"utf-8\">
				            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
				            <meta name=\"description\" content=\"\">
				            <meta name=\"author\" content=\"\">

				            <title>Sesión participante - Eventos UP</title>

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
						    <div class=\"container\" >

						      <!-- Page Heading/Breadcrumbs -->
						      <h1 class=\"mt-4 mb-3\">Iniciar sesión
						        <small>Participante</small>
						      </h1>

						      <ol class=\"breadcrumb\">
						        <li class=\"breadcrumb-item\">
						          <a href=\"index.php\">Inicio</a>
						        </li>
						        <li class=\"breadcrumb-item active\">Iniciar sesión participante</li>
						      </ol>

						      		<div align=\"center\">

						      					<div class=\"col-lg-4 mb-4\" align=\"center\">
										          <div class=\"card h-100\" align=\"center\">
										            <h4 class=\"card-header\">Participante</h4>
										            <div class=\"card-body\">
										              <p class=\"card-text\" ><img src=\"imagenes/usuario.png\" height=\"20%\"></p>
										            </div>
										            <div class=\"card-footer\">
										              <form action=\"script_sesion_participante.php\" method=\"post\">
										              Id usuario<br>
										              <input type=\"text\" name=\"id\" minlength=\"6\" maxlength=\"10\" required>
										              <br>Contraseña<br>
										              <input type=\"password\" name=\"contra\" minlength=\"8\" maxlength=\"16\" required>

										            </div>
										            <div class=\"card-footer\">
										              <input type=\"submit\" class=\"btn btn-primary\" value=\"Iniciar sesión\">
										              </form>
										            </div>
										          </div>
										        </div>

						    		</div>
						    </div>

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