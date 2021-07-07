<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title> Informaci&ooacute;n </title>
	<!---------------------- Diseño del for y su pagina --------------------------->
	<link rel="stylesheet" href="Css/EstiloPag.css">
	<!---------------------- Diseño de la barra --------------------------->
	<link rel="stylesheet" href="Css/Barra.css">
	<!---------------------- Diseño de informacion --------------------------->
	<link rel="stylesheet" href="Css/Infor.css">
	<!---------------------- Diseño del boton --------------------------->
	<link rel="stylesheet" href="Css/Boton.css">
	<!---------------------- Diseño del pie de pagina --------------------------->
	<link rel="stylesheet" href="Css/PiePag.css">
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

	
	
	<!--------------------------------- cuerpo de la pagina web----------------------------->
	<section id="cuerp">
		<h1>Informaci&oacute;n sobre la p&aacute;gina</h1>
		<center><img src="Img/Infor/info.png" height="500" width="800"></img></center>
		<br>
		<h2>Introducci&oacute;n sobre la p&aacute;gina</h2>
		<h5>
			Esta p&aacute;gina se empezo a realizar el dia 20 de abril del 2021 del presente a&ntilde;o con finalidad de poner a prueba mi conocimiento y demostrar mi capacidad en el &aacute;mbito sobre la 
			programaci&oacute;n web y as&iacute; tener en cuenta mi portafolio de proyectos para m&iacute; curriculum.
		</h5>
		<br>
		<h2>Contenido de la p&aacute;gina</h2>
		<h3><b>La p&aacute;gina contiene los siguientes lenguajes:</b></h3>
		<h4><b>HTML: </b></h4>
		<h5>		
			Es el lenguaje con el que se define el contenido de las p&aacute;ginas web. 
			B&aacute;sicamente se trata de un conjunto de etiquetas que sirven para definir el texto y otros elementos que  
			compondrán una p&aacute;gina web, como im&aacute;genes, listas, v&iacute;deos, etc.
			<br><br>
			El HTML se cre&oacute; en un principio con objetivos divulgativos de informaci&oacute;n con texto y algunas im&aacute;genes. 
			No se pens&oacute; que llegara a ser utilizado para crear &aacute;rea de ocio  y consulta con car&aacute;cter multimedia (lo que es actualmente la web), de modo que, 
			el HTML se cre&oacute; sin dar respuesta a todos los posibles usos que se le iba a dar y a todos los colectivos de gente que lo utilizar&iacute;an en un futuro.
			<br><br>
			<a href="https://desarrolloweb.com/articulos/que-es-html.html" target="_blank">&nbsp;Ver M&aacute;s</a>
			<br><br>
			<center><img src="Img/Infor/html.png" height="400" width="800"></img></center>
		</h5>
		<br>
		<h4><b>CSS: </b></h4>
		<h5>		
			Es una tecnolog&iacute;a que nos permite crear p&aacute;ginas web de una manera m&aacute;s exacta. Gracias a las CSS somos mucho m&aacute;s dueños de los resultados finales de la p&aacute;gina,
			pudiendo hacer muchas cosas que no se pod&iacute;a hacer utilizando solamente HTML, como incluir m&aacute;rgenes, tipos de letra, fondos, colores.
			<br><br>
			CSS son las siglas de Cascading Style Sheets, en español Hojas de estilo en Cascada. 
			En este reportaje vamos a ver algunos de los efectos que se pueden crear con las CSS sin necesidad de conocer la tecnolog&iacute;a entera.	
			<br><br>
			<a href="https://desarrolloweb.com/articulos/26.php" target="_blank">&nbsp;Ver M&aacute;s</a>
			<br><br>
			<center><img src="Img/Infor/css.jpg" height="400" width="800"></img></center>
		</h5>
		<h4><b>Javascript: </b></h4>
		<h5>		
			Es un lenguaje de programaci&oacute;n o de secuencias de comandos que te permite implementar funciones complejas en p&aacute;ginas web, cada vez que una p&aacute;gina web hace algo m&aacute;s que sentarse all&iacute; y mostrar informaci&oacute;n 
			est&aacute;tica para que la veas, muestra oportunas actualizaciones de contenido, mapas interactivos, animaci&oacute;n de Gráficos 2D/3D, desplazamiento de m&aacute;quinas reproductoras de v&iacute;deo, etc., 
			puedes apostar que probablemente JavaScript está involucrado. Es la tercera capa del pastel de las tecnologías web estándar, dos de las cuales <b>(HTML y CSS)</b> hemos 
			cubierto con mucho m&aacute;s detalle en otras partes del &aacute;rea de aprendizaje.	
			<br><br>
			<a href="https://developer.mozilla.org/es/docs/Learn/JavaScript/First_steps/What_is_JavaScript" target="_blank">&nbsp;Ver M&aacute;s</a>
			<br><br>
			<center><img src="Img/Infor/java.png" height="400" width="800"></img></center>
		</h5>
		<h4><b>PHP: </b></h4>
		<h5>		
			Es el acr&oacute;nimo de Hipertext Preprocesor. Es un lenguaje de programaci&oacute;n del lado del servidor gratuito e independiente de plataforma, r&aacute;pido, 
			con una gran librer&iacute;a de funciones y mucha documentaci&oacute;n.	
			<br><br>
			Un lenguaje del lado del servidor es aquel que se ejecuta en el servidor web, justo antes de que se env&iacute;e la página a trav&eacute;s de Internet al cliente. 
			Las p&aacute;ginas que se ejecutan en el servidor pueden realizar accesos a bases de datos, conexiones en red, y otras tareas para crear la p&aacute;gina final que ver&aacute; el cliente. 
			El cliente solamente recibe una p&aacute;gina con el c&oacute;digo HTML resultante de la ejecuci&oacute;n de la PHP. 
			Como la p&aacute;gina resultante contiene &uacute;nicamente c&aoacute;digo HTML, es compatible con todos los navegadores.
			<br><br>
			<a href="https://desarrolloweb.com/articulos/392.php" target="_blank">&nbsp;Ver M&aacute;s</a>
			<center><img src="Img/Infor/php.png" height="400" width="800"></img></center>
		</h5>
		<h4><b>Bootstrap: </b></h4>
		<h5>		
			Es un framework front-end utilizado para desarrollar aplicaciones web y sitios mobile first, o sea, 
			con un layout que se adapta a la pantalla del dispositivo utilizado por el usuario. ¡Aprende todo sobre esta tecnolog&iacute;a y cómo utilizarla!	
			<br><br>
			<a href="https://rockcontent.com/es/blog/bootstrap/" target="_blank">&nbsp;Ver M&aacute;s</a>
			<br><br>
			<center><img src="Img/Infor/boots.png" height="400" width="800"></img></center>
		</h5>
		<h4><b>Google Fonts: </b></h4>
		<h5>		
			Anteriormente conocido como Google Web Fonts, es un directorio interactivo y digital con m&aacute;s de 900 familias de fuentes tipogr&aacute;ficas de uso libre y gratuito. 
			Es decir, m&aacute;s de 900 fuentes de letras para usar en los sitios web, aplicaciones m&oacute;vil... Y en los diseños en general.
			La calidad de sus fuentes <b>"open source"</b> las hace imprescindibles tanto para uso personal como comercial, adem&aacute;s de que la mayor&iacute;a de las fuentes cuentan con numerosos estilos.
			<br><br>
			<a href="https://www.useit.es/blog/google-fonts-un-mundo-de-letras-y-fuentes-web-gratuito" target="_blank">&nbsp;Ver M&aacute;s</a>
			<br><br>
			<center><img src="Img/Infor/font.png" height="400" width="800"></img></center>
			<br><br>
		</h5>
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