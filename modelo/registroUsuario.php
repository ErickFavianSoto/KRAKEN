<?php
	include ("../conexion/connect_db.php");
	$nombre=$_POST['nombre'];
	$numeroTel=$_POST['numeroTel'];
	$carrera= $_POST['carrera'];
	$turno=$_POST['turno'];
	$division=$_POST['division'];
	$password=$_POST['password'];
	$conec= new Conectar();
		$reg = new Persona();
		$reg->registrarUsuario($nombre,$numeroTel,$carrera,$turno,$division,$password,$conec->conecta());
		?>