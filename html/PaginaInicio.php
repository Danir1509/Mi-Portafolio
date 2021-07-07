<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title> Pagina Principal </title>
	<!---------------------- Diseño del for y su pagina --------------------------->
	<link rel="stylesheet" href="Css/EstiloPag.css">
	<!---------------------- Diseño del pie de pagina --------------------------->
	<link rel="stylesheet" href="Css/PiePag.css">
	<!---------------------- Diseño de la barra --------------------------->
	<link rel="stylesheet" href="Css/Barra.css">
	<!---------------------- Diseño del boton --------------------------->
	<link rel="stylesheet" href="Css/Boton.css">
	<!--------------------------------- Diseño de bootstrap----------------------------------------->
	<link rel="stylesheet" href="Css/Bootstrap/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<!---------------------- Estilo de letra --------------------------->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>
<body>
	
	<!------------------------------------- barra de inicio ------------------------------------->
	<div class="barra">
		<nav class="navbar navbar-expand-lg navbar-light ">
			<div class="container-fluid">
				<a class="navbar-brand" href="PaginaInicio.php">Inicio</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
						  <a class="nav-link active" aria-current="page" href="Curriculum.php">Curriculum</a>
						</li>
						
						<li class="nav-item">
						  <a class="nav-link" href="Informacion.php">Informaci&oacute;n</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="Contactos.php">Contactenos</a>
						</li> 
						<div class="botonBarra">
							<li class="nav-item  dropdown" >
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
										<path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"/>
									</svg>
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<li><a class="dropdown-item" href="Cuenta.php">Cuenta</a></li>
									<li><a class="dropdown-item" href="Configuracion.php">Configuraci&oacute;n</a></li>
									<li><a class="dropdown-item" href="Login.php">Cerrar Sesi&oacute;n</a></li>
								</ul>
							</li>
						</div>
					</ul>
				</div>	
			</div>
		</nav>
	</div>

	<!------------------------------------- video de pagina principal ------------------------------------->
	<main>
		<section id="banner">
			<video   src="Img/Pag/videini.mp4" autoplay loop muted poster="Img//Pag/videini.png"></video>
			<div class="contenedor">	
				<h2>Bienvenido a mi p&aacute;gina web</h2>
				<p>Creador de p&aacute;ginas web</p>
				<a href="Curriculum.php" id="curri"> Ver <br>Curriculum</a>
				<br>
				<a href="Informacion.php" id="verpag"> Ver M&aacute;s</a>
			</div>
		</section>
	</main>
	
	<!--------------------------------- cuerpo de la pagina web----------------------------->
	<section id="cuerp">
		<center><h2>Bienvenido Usuario</h2></center>
		<p>Lorem Ipsum is simply dummy text of the printing
		and typesetting industry. Lorem Ipsum has been the industry's
		standard dummy text ever since the 1500s, when an unknown 
		printer took a galley of type and scrambled it to make a type
		specimen book. It has survived not only five centuries,
		but also the leap into electronic typesetting, remaining essentially unchanged.
		It was popularised in the 1960s with the release of Letraset
		sheets containing Lorem Ipsum passages, and more recently with desktop
		publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<br>
		<p>
			Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. 
			It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,
			a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, 
			from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
			Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
			written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
			"Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
		</p>
	</section>
	
	<section id="blog">
		<h3>Lo ultimo de la p&aacute;gina web</h3>
		<div class="contenedor">
			<article>
				<a href="Curriculum.php" class="linkpag"><img src="Img//Pag/Cv.png" alt="imagen de curriculum">
				<h4>Curriculum</h4></a>
			</article>
			<article>
				<a href="Informacion.php" class="linkpag"><img src="Img//Pag/Info.png" alt="imagen de informaci&oacute;n">
				<h4>Informaci&oacute;n </h4></a>
			</article>
			<article>
				<a href="Contactos.php" class="linkpag"><img src="Img//Pag/Contac.png" alt="imagen de contactos">
				<h4>Contactos</h4></a>
			</article>
		</div>
	</section>
	
		
	<!------------------------------------- pie de pagina ----------------------------------------->
	<footer>
		<div class="contenedor">
			<br>
			<p id="cop">MI P&Aacute;GINA WEB &copy 2021 <br> Redes Sociales</p>
			<div class="redes">
				<a href="https://www.facebook.com/danir.arias.3/" id="" target="_blank">
					<button type="button" class="btn btn-outline-dark">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
						  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
						</svg>
					</button>
				</a>
				&nbsp;
				&nbsp;
				&nbsp;
				<a href="mailto:danir.arias11@gmail.com" id="" target="_blank">
					<button type="button" class="btn btn-outline-dark">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
						  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
						</svg>
					</button>
				</a>
				&nbsp;
				&nbsp;
				&nbsp;
				<a href="https://www.instagram.com/danir_arias/?hl=es-la" id="" target="_blank">
					<button type="button" class="btn btn-outline-dark">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
						  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
						</svg>
					</button>
				</a>
			</div>
			<br>
		</div>
	</footer>
	
	<div class="arribacontenedor">
		<div class="botonarriba">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
			  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
			</svg>
		</div>
	</div>
	<!---------------------- boton para arriba --------------------------->
	<script src="Js/Boton.js"></script>
	<!------------------------------------- javascript de bootstrap----------------------------------------->
	<script src="Js/Bootstrap/jquery-3.6.0.min.js"></script>
	<script src="Js/Bootstrap/bootstrap.min.js"></script>
	<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	-->
</body>
</html>

