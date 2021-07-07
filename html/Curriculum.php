<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title> Curriculum</title>
	<!---------------------- Diseño del cuerpo --------------------------->
	<link rel="stylesheet" href="Css/Estilocu.css">
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
						  <a class="nav-link active" aria-current="page" href="#">Curriculum</a>
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
	<!------------------------------------- cuerpo de la pagina curriculum ----------------------------------------->
	<div class="negro">
		<div class="p-3 mb-2  text-white">
			<img src="Img/Curricu/foto.png" class="img-thumbnail" id="foto" alt="..." width="100px" ><h1 >Informaci&oacute;n Personal:</h1></img>
				<h3><b>Nombre: </b>Sánchez Arias Danir Lorenzo</h3>
				<h5>Ingeniero en Sistemas | Programador</h5>
			<div class="p-3 mb-2 bg-secondary text-white" id="dentro">
				<h5><b>Dirección:</b> San Sebastián San Vicente calle francisco miranda casa #5, Barrio el transito.</h5>
				<h5><b>Teléfono:</b> 6132-9011     |     <b>E-mail:</b> <a href="mailto:danir.arias11@gmail.com" >Danir.arias11@gmail.com</a></h5>
			</div>
		</div>
	</div>
	<br>
	<div class="aqua">
		<div class="p-3 mb-2 bg text-white" id="dentro">
			<center><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-text-fill"  viewBox="0 0 16 16">
				<path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
				<br clear="right"> Resumen Profesional
			</svg>
			</center>
			
		</div>
	</div>
	<p><h5 align="justify">Profesional especializado en el área de Sistemas y computación, he tenido mucho conocimiento mediante la programación, 
	 me considero una persona llena de vida con una gran actitud positiva, con un alto nivel de esfuerzo y elevada capacidad para el trabajo, 
	 así mismo tengo una buena capacidad de iteración social. Actualmente me encuentro en la búsqueda de un nuevo puesto de trabajo en el que pueda 
	 cumplir todos los requisitos y satisfacer mi experiencia laboral.</h5></p>
	
	<br>
	<div class="aqua">
		<div class="p-3 mb-2  text-white" id="dentro">
			<center>
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
			  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
			  <br clear="right"> Habilidades Funcionales	
			</svg>
			</center>
			
		</div>
	</div>
	<center>
		<div class="container">
		  <div class="row align-items-start">
			<div class="col">
				<h5>
				<ul>
					<li>Planificación.</li>
					<li>Compromiso.</li>
					<li>Comunicación.</li>
				<ul>
				</h5>
			</div>
			<div class="col">
			  <h5>
				<ul>
					<li>Autocontrol.</li>
					<li>Capacidad crítica. </li>
					<li>Trabajo en equipo.</li>
				</ul>
			   </h5>
			</div>
			<div class="col">
				<h5>
					<ul>
						<li>Sociabilidad.</li>
						<li>Amabilidad.</li>
						<li>Integridad.</li>
					</ul>
				</h5>
			</div>
		  </div>
		</div>
	</center>
	<br>
	<div class="aqua">
		<div class="p-3 mb-2 bg text-white" id="dentro">
			<center>
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
				<path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
				<br clear="right"> Educación
			</svg>
			</center>
			
		</div>
	</div>
	<p><h3 align="justify">Técnico en Sistemas Eléctricos | 2018</h3></p>
	<p><h3 align="justify">Ingeniería en Sistemas y Computación | 2019</h3></p>
	<p><h4 align="justify"><b>Relación de posiciones anteriores: </b></h4></p>
	<ul>
		<li>Curso de Ciber Forense (5Hrs) 2019.</li>
		<li>Curso de Algoritmos (5Hrs) 2019.</li>
		<li>Curso de AutoCAD (8Hrs) 2020.</li>
		<li>Curso de GeoGebra (4Hrs) 2020.</li>
		<li>Curso de WordPress (2Hrs) 2021.</li>
		<li>Fundamentos de java (5Hrs) 2021.</li>
		<li>Introducción a la programación IOS. (5Hrs) 2021.</li>
	</ul>
	<p><h4 align="justify"><b>Idiomas: </b></h4></p>
	<ul>
		<li>Español (Avanzado).</li>
		<li>Inglés (Intermedio).</li>
	</ul>
	<br>
	<div class="aqua">
		<div class="p-3 mb-2 bg text-white" id="dentro">
			<center>
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
				<path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
				<br clear="right"> Conocimientos Informáticos 
			</svg>
			</center>	
		</div>
	</div>
	<br>
	<p><h4 align="justify"><b>Office: </b></h4></p>
	<center>
		<div class="container">
		  <div class="row align-items-start">
			<div class="col">
				<h5>
				<ul>
					<li>Word.</li>
					<li>Excel.</li>
					<li>Power Point.</li>
				<ul>
				</h5>
			</div>
			<div class="col">
			  <h5>
				<ul>
					<li>Outlook.</li>
					<li>One Drive. </li>
					<li>Forms.</li>
				</ul>
			   </h5>
			</div>
			<div class="col">
				<h5>
					<ul>
						<li>Publisher.</li>
						<li>Teams.</li>
						<li>Sky.</li>
					</ul>
				</h5>
			</div>
		  </div>
		</div>
	</center>
	<p><h4 align="justify"><b>Programas: </b></h4></p>
	<center>
		<div class="container">
		  <div class="row align-items-start">
			<div class="col">
				<h5>
				<ul>
					<li>Visual Studio 2015.</li>
					<li>Visual Studio 2019.</li>
					<li>Notepad++.</li>
				<ul>
				</h5>
			</div>
			<div class="col">
			  <h5>
				<ul>
					<li>SQL Server.</li>
					<li>GeoGebra. </li>
					<li>PSeInt.</li>
				</ul>
			   </h5>
			</div>
			<div class="col">
				<h5>
					<ul>
						<li>Balsamiq.</li>
						<li>GitHub.</li>
						<li>Logisim.</li>
					</ul>
				</h5>
			</div>
			<div class="col">
				<h5>
					<ul>
						<li>Xampp.</li>
						<li>BlueJ.</li>
						<li>Packt Tracer.</li>
					</ul>
				</h5>
			</div>
		  </div>
		</div>
	</center>
	<br>
	<div class="aqua">
		<div class="p-3 mb-2 bg text-white" id="dentro">
			<center>
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-code" viewBox="0 0 16 16">
			  <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
			  <path d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708z"/>
			<br clear="right"> Lenguajes de Programación y Framework
			</svg>
			</center>	
		</div>
	</div>
	<center>
		<div class="container">
		  <div class="row align-items-start">
			<div class="col">
				<h5>
				<ul>
					<li>Java.</li>
					<li>JavaScript.</li>
					<li>HTML.</li>
				<ul>
				</h5>
			</div>
			<div class="col">
			  <h5>
				<ul>
					<li>PHP.</li>
					<li>CSS. </li>
					<li>ASP.NET.</li>
				</ul>
			   </h5>
			</div>
			<div class="col">
				<h5>
					<ul>
						<li>Bootstrap.</li>
						<li>WordPress.</li>
						<li>Android Studio.</li>
					</ul>
				</h5>
			</div>
		  </div>
		</div>
	</center>
	<br>
	<div class="aqua">
		<div class="p-3 mb-2 bg text-white" id="dentro">
			<center>
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
				<path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
				<path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
				<br clear="right"> Referencias Personales 
			</svg>
			</center>	
		</div>
	</div>
	<center>
		<div class="container">
		  <div class="row align-items-start">
			<div class="col">
				<h5>
				<div class="personales" >
				<ul>	
					<li>Licenciada Marta Eugenia Arias Flores.</li>
					<li>Licenciada Ana Gladis Carranza.</li>
					<li>Doctora Karla Merino.</li>
					<li>Licenciada Juana Estela Abarca.</li>
					<li>Profesora Juana Ponce.</li>
				<ul>
				</div>
				</h5>
			</div>
			<div class="col">
			  <h5>
			  <div class="personales" >
				<ul>
					<li>Teléfono: 7601-6171 o 2333-9045</li>
					<li>Teléfono: 7869-1912</li>
					<li>Teléfono: 7451-4087</li>
					<li>Teléfono: 7744-6668</li>
					<li>Teléfono: 7985-4687</li>
				</ul>
				</div>
			   </h5>
			</div>
		  </div>
		</div>
	</center>
	<br>
	<div class="aqua">
		<div class="p-3 mb-2 bg text-white" id="dentro">
			<center>
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
				<path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
				<path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
				<br clear="right"> Información Adicional 
			</svg>
			</center>	
		</div>
	</div>
	<p><h5 align="justify"><b>Para los lectores: </b>Deseándoles mucha salud y bendición, esperando ser una de sus mejores elecciones 
	para darme dicha oportunidad de la lectura de mi curricúlum y al mismo tiempo de darme oportunidad de que me tomen en cuenta
	para el trabajo y mejorar mi experiencia laboral.</h5></p>
	
	<br>
	<div class="aqua">
		<div class="p-3 mb-2 bg text-white" id="dentro">
			<center>
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
			<path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
			<br clear="right"> Portafolio  
			</svg>
			</center>	
		</div>
	</div>
	<center><a href="https://github.com/Danir1509/Mi-Portafolio.git" target="_blank">
	<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
	  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
	</svg>
	CLICK AQU&Iacute;
	<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
		<path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
	</svg>
	</a></center>
	<br><br>
	
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