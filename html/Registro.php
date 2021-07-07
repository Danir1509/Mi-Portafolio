<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Pagina de Registro </title>
	<!---------------------- Diseño del for y su pagina --------------------------->
	<link rel="stylesheet" href="Css/DiseñoForm.css">
	<!---------------------- Diseño del formulario --------------------------->
	<link rel="stylesheet" href="Css/Formulario.css">
	<!---------------------- Estilo de letra --------------------------->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital@1&display=swap" rel="stylesheet">
	<?php
	require('Php/Conexion.php');
	?>
</head> 
	<body>
		
		<!---------------------- fondo del formulario --------------------------->
		<video   src="Img/fondo.mp4" autoplay loop muted poster="Img/fondo.png"></video>
		<!---------------------- Formulario de la pagina --------------------------->
		<center>
			<form name="formulario" class="registrer" method="POST" action="Php/RegistroCompletado.php">
				<h3>Registro </h3>
				<label for="nombre">Nombre:</label>
				<br>
				<input type="text" class="txt" id="nomb" name="nombre" placeholder="Escriba su nombre" minlength="5" maxlength="40" required pattern="[A-Za-z0-9]+" title="Sólo se permiten letras (mayúsculas y minúsculas) y números.">
				<br>
				<label for="apellidos">Apellidos:</label>
				<br>
				<input type="text" class="txt" id="ap" name="apellido" placeholder="Escriba su apellidos (opcional)">
				<br><br>
				<label>Ingrese su fecha de nacimiento: </label>
				<br><br>
				<input type=date required title="Ingrese su fecha de nacimiento" name="fecha">
				<br><br>
				
				<label>Seleccione su Sexo:</label>
				<br><br>
				<input type=radio name="sex" value="M" selected>
				<label>Mujer</label>
				<input type=radio name="sex" value="H">
				<label>Hombre</label>
				<input type=radio name="sex" value="O">
				<label>Otro...</label>
			
				<br><br>
				<label for="correo">Correo:</label>
				<br>
				<input type="email" class="txt" name="corre"id="corre"placeholder="Escriba su correo" required>
				<br>
				<label for="contra">Contrase&ntilde;a:</label>
				<br>
				<input type="password" class="txt" id="contrase" name="contra" placeholder="Escriba su contrase&ntilde;a" minlength="8" maxlength="15" required  title="Digite su contraseña  entre letras mayusculas, minusculas o numeros">
				<br>
				<img src="Img/ojo1.png"  id="ver" width="30" height="20"></img><label> &#128072; Ver contraseña</label>
				<br><br>
				<input type="checkbox" id="terminos"  value="acep" required title="Acepte los terminos para continuar...">
				<label for="term"> Aceptar terminos</label>
				<br>
				<input type="submit" name="btnAceptar" class= "ingre" id="ingresar"  value="Registrarse">
				<br>
				<a href="Login.php" >Regresar</a>
				<br>
			</form>	
		</center>
		<br><br><br><br><br><br>
		<!---------------------- mostrar la contraseña --------------------------->
		<script src="Js/Contra.js"></script>
		
			
	</body>	
</html>