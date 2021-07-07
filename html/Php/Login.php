<?php
session_start(); 
if(!isset($_POST['correo']))
{
	header('location:../Login.php');
}

$Correo=$_REQUEST['correo'];
$password=$_REQUEST['contra'];

require("Conexion.php");

$sql="select * from usuario where Correo='$Correo' and Contra='$password'";
$consulta=mysqli_query($conexion,$sql);
$existe=mysqli_num_rows($consulta);

if ($existe>0)
{
	$usuarios=mysqli_fetch_array($consulta);

	header("location:../PaginaInicio.php");

}
else 
{
	echo '<script language="javascript">alert("Usuario no existe o contraseña incorrecta!!!"); location.href = "../login.php";</script>';
	
};

?>