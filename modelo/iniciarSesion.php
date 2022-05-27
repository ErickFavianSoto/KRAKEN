<?php
session_start();
	include ("../conexion/connect_db.php");
	
	$nombre=$_POST['nom'];
	$password=$_POST['passw'];
	
	$conec=new Conectar();
		$InicioSesion=new InicioSesion();
		$InicioSesion->iniciarSesion($nombre,$password,$conec->conecta());
	?>