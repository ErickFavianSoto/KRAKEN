
<?php

include ("../modelo/PersonaActualizar.php");
include ("../conexion/connect_db.php");

class PersonaActualizar{
	public $idUsuario;
	public $nombre;
	public $numeroTel;
	public $carrera;
	public $turno;
	public $division;
	public $password;
	
	public function ActualizarPersona($idUsuario,$nombre,$numeroTel,$carrera,$turno,$division,$password,$conec){
	$actuaUser=$conec->query("update usuarios set nombre='$nombre', numeroTel='$numeroTel', carrera='$carrera', turno='$turno', division='$division', password='$password' where idUsuario='$idUsuario'");
	if ($actuaUser==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("No se pudo actualizado l")</script> ';
		echo "<script>location.href='../vista/user.php'</script>";
	}else {
		echo '<script>alert("Registro actualizado, para visualizar los cambios vuelve a iniciar sesión")</script> ';
		
		echo "<script>location.href='../vista/user.php'</script>";
		}
}
}
?>
