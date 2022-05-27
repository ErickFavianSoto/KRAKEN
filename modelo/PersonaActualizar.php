<?php
	include ("../conexion/connect_db.php");
	$idUsuario=$_POST['idUsuario'];
	$nombre=$_POST['nombre'];
	$numeroTel=$_POST['numeroTel'];
	$carrera= $_POST['carrera'];
	$turno=$_POST['turno'];
	$division=$_POST['division'];
	$password=$_POST['password'];
	$conec= new Conectar();
		$actUser = new PersonaActualizar();
		$actUser ->ActualizarPersona($idUsuario,$nombre,$numeroTel,$carrera,$turno,$division,$password,$conec->conecta());
		?>