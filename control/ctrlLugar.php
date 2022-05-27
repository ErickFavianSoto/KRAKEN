<?php

include ("../modelo/lugar.php");
include ("../conexion/connect_db.php");

class Lugar{
	public $idLugar;
	public $nomLugar;
	public $decriptLugar;
	
	public function registraLugar($nomLugar,$decriptLugar,$conec){
		$lug = $conec->query("SELECT * FROM lugares WHERE nomLugar='$nomLugar'");
		$luga=mysqli_num_rows($lug);
		if($nomLugar==$nomLugar){
			if($luga>0){
				echo ' <script language="javascript">alert("Ya existe un lugar registrado con ese nombre, verifique los datos");</script> ';
				echo "<script>location.href='../vista/indexLugar.php'</script>";
			}else{
				$conec->query("INSERT INTO lugares VALUES('','$nomLugar','$decriptLugar')");
				echo ' <script language="javascript">alert("El lugar se ha registrado con exito");</script> ';
				echo "<script>location.href='../vista/indexLugar.php'</script>";
			}
			
		}else{
			echo 'La categoria ya existe';
		}
		}
		public function updateLugar($idLugar,$nomLugar,$decriptLugar,$conec){
			$consola= $conec->query("UPDATE lugares
        SET nomLugar='$nomLugar', decriptLugar='$decriptLugar' WHERE idLugar='$idLugar'");
       if ($consola==true) {
        echo "<script type=\"text/javascript\">alert(\"Lugar Actualizado\");
        location.href = \"../vista/indexLugar.php\"</script>";
      }else{
        echo "<script type=\"text/javascript\">alert(\"Lugar NO Actualizado\");</script>";
      }

    }
}
?>