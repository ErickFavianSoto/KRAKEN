<?php

include ("../modelo/categoria.php");
include ("../conexion/connect_db.php");

class Categoria{
	public $idCategoria;
	public $nomCategoria;
	public $descriCategoria;
	
	public function registrarCategoria($nomCategoria,$descriCategoria,$conec){
		$categor = $conec->query("SELECT * FROM categorias WHERE nomCategoria='$nomCategoria'");
		$catego=mysqli_num_rows($categor);
		if($nomCategoria==$nomCategoria){
			if($catego>0){
				echo ' <script language="javascript">alert("Ya existe una catgoria con ese nombre, verifique los datos");</script> ';
				echo "<script>location.href='../vista/admin.php'</script>";
			}else{
				$conec->query("INSERT INTO categorias VALUES('','$nomCategoria','$descriCategoria')");
				echo ' <script language="javascript">alert("La categoria se ha registrado con exito");</script> ';
				echo "<script>location.href='../vista/indexCategoria.php'</script>";
			}
			
		}else{
			echo 'La categoria ya existe';
		}
	}
	public function updateCategoria($idCategoria,$nomCategoria,$descriCategoria,$conec){
			$consola= $conec->query("UPDATE categorias
        SET nomCategoria='$nomCategoria', descriCategoria='$descriCategoria' WHERE idCategoria='$idCategoria'");
       if ($consola==true) {
        echo "<script type=\"text/javascript\">alert(\"Categoria Actualizada\");
        location.href = \"../vista/indexCategoria.php\"</script>";
      }else{
        echo "<script type=\"text/javascript\">alert(\"Categoria NO Actualizada\");</script>";
      }
    }
}
?>