<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title> Pagina de Registro </title>
	<!---------------------- Diseño del for y su pagina --------------------------->
	<link rel="stylesheet" href="Css/DiseñoForm.css">
	<!---------------------- Diseño del formulario --------------------------->
	<link rel="stylesheet" href="Css/Formulario.css">
	<!---------------------- Estilo de letra --------------------------->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital@1&display=swap" rel="stylesheet">
	
</head> 
	<body>
		
		<!---------------------- fondo del formulario --------------------------->
		<video   src="Img/fondo.mp4" autoplay loop muted poster="Img/fondo.png"></video>
		<!---------------------- Formulario de la pagina --------------------------->
		<center>
			<form name="formulario" class="registrer" action="php/Login.php" method="POST">
				<h3>Inicio de Sesión</h3>
				<label for="corr">Correo:</label>
				<br>
				<input type="email" class="txt" id="correo" name="correo"  placeholder="Escriba su correo" required >
				<br>
				<label for="contra">Contrase&ntilde;a:</label>
				<br>
				<input type="password" class="txt" id="contrase" name="contra" placeholder="Escriba su contrase&ntilde;a"  required minlength="8" maxlength="15">
				<br>
				<img src="Img/ojo1.png"  id="ver" width="30" height="20"></img><label> &#128072; Ver contraseña</label>
				<br>
				<input type=submit class= "ingre" id="ingresar"  value="Ingresar" >
				<br>
				<label>¿Aun no tienes cuenta?</label>
				<a href="Registro.php" >Registrarse</a>
				<br><br>
				<a href="PaginaInicio.php" >Entrar como invitado</a>
			</form>
		</center>
		<!---------------------- mostrar la contraseña --------------------------->
		<script src="Js/Contra.js"></script>
	</body>	
</html>
