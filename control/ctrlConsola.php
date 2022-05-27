<?php

include ("../modelo/consola.php");
include ("../conexion/connect_db.php");

class Consola{
	public $idConsola;
	public $nomConsola;
	
	public function registrarConsola($nomConsola,$conec){
		$cons = $conec->query("SELECT * FROM consola WHERE nomConsola='$nomConsola'");
		$consol=mysqli_fetch_array($cons);
		if($nomConsola==$nomConsola){
			if($consol>0){
				echo ' <script language="javascript">alert("Ya existe una consola con ese nombre, verifique los datos");</script> ';
				echo "<script>location.href='../vista/indexConsola.php'</script>";
			}else{
				$conec->query("INSERT INTO consolas VALUES('','$nomConsola')");
				echo ' <script language="javascript">alert("La consola se ha registrado con exito");</script> ';
				echo "<script>location.href='../vista/indexConsola.php'</script>";
			}
			
		}else{
			echo 'La categoria ya existe';
		}
	}
	public function updateConsola($idConsola,$nomConsola,$conec){
			$consola= $conec->query("UPDATE consolas
        SET nomConsola='$nomConsola' WHERE idConsola='$idConsola'");
       if ($consola==true) {
        echo "<script type=\"text/javascript\">alert(\"Consola Actualizada\");
        location.href = \"../vista/indexConsola.php\"</script>";
      }else{
        echo "<script type=\"text/javascript\">alert(\"Videojuego NO Actualizado\");</script>";
      }

    }
}
?>