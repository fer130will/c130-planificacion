<?php
require 'conexion.php';
session_start();
$usuario=$_POST['user'];
$clave=$_POST['pass'];
$query=("SELECT * FROM personas 
	WHERE nombre='$usuario' AND clave='$clave'");

$consulta=pg_query($conexion,$query);
$cantidad=pg_num_rows($consulta);

if($cantidad>0){

	$_SESSION['nombre']=$usuario;
	header('Location:datos.html');
}
else{
		header('Location:ingreso.html');
}
