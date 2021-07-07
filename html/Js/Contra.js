var boton = document.getElementById("ver");
var input = document.getElementById("contrase");
boton.addEventListener('click', mostrarContraseña);

	function mostrarContraseña(){
		if(input.type=="password"){
			input.type="text";
			ver.src="Img/cerrar.png";
			setTimeout("ocultar()",5000);
		}
		else{
			input.type="password";
			ver.src="Img/ojo1.png";
		}
	}
	function ocultar(){
		input.type="password";
		ver.src="Img/ojo1.png";
	}