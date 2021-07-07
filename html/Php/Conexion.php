<?php
//Datos para la conexion
$servidor="localhost"; //url de servidor BD de hosting
$basedatos="sistemahtml"; //BD que le ha proveido el hosting
$usuario="root"; //Usuario de su hosting
$clave=""; //Clave de su hosting

$conexion=mysqli_connect($servidor,$usuario,$clave,$basedatos);
if($conexion)
{
	//echo "Conexion exitosa...";

}
else
{
	echo "Error en la conexion<br>";
	echo "Error: ".mysqli_connect_error();
}
?>