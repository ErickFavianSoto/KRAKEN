<?php

include ("../modelo/registroUsuario.php");
include ("../conexion/connect_db.php");

class Persona{
	public $nombre;
	public $numeroTel;
	public $carrera;
	public $turno;
	public $division;
	public $password;
	
	public function registrarUsuario($nombre,$numeroTel,$carrera,$turno,$division,$password,$conec){
	$reguser=$conec->query("SELECT * FROM usuarios WHERE nombre='$nombre'");
	$check_mail=mysqli_num_rows($reguser);
		if($password==$password){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe un usuario con ese nombre, verifique sus datos");</script> ';
				echo "<script>location.href='../index.html'</script>";
			}else{
				$conec->query ("INSERT INTO usuarios VALUES('','$nombre','$numeroTel','$carrera','$turno','$division','$password','','2')");
				echo ' <script language="javascript">alert("Usuario registrado con éxito, por favor inicia sesion");</script> ';
				echo "<script>location.href='../index.html'</script>";
			}
			
		}

		
}
}
?>