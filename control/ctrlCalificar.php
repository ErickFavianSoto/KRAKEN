<?php
include("../modelo/calificacion.php");
//include("../conexion/connect_db.php");

class calificacion{

  public $estrella;
  public $nombre;
  

  
public function calificarSitio($estrella,$nombre,$conec){
   $enlace = mysql_connect("db746642552.db.1and1.com", "dbo746642552", "0269ACmk.");
mysql_select_db("db746642552", $enlace);

$resultado = mysql_query("SELECT * FROM `calificacion` WHERE `nobre` like '$nombre'", $enlace);
$totalFilas = mysql_num_rows($resultado);

if(empty($totalFilas)){
    $calificacion= $conec->query("INSERT INTO `calificacion`(`calificacion`,`nobre`)
     VALUES ('$estrella','$nombre')");
     if ($calificacion==true) {
      echo "<script type=\"text/javascript\">alert(\"Gracias $nombre por darnos una calificacion de $estrella Krakpunto(s)\");
      location.href = \"../vista/indexUsuario.php\"</script>";
    }else{
      echo "<script type=\"text/javascript\">alert(\"Error al calificar\");
	  location.href = \"../vista/indexUsuario.php\"</script>";
    }
  }else {
    echo "<script type=\"text/javascript\">alert(\"$nombre solo puedes calificar 1 vez (Gracias por haber comentado $nombre)\");
	  location.href = \"../vista/indexUsuario.php\"</script>";
  }
  }
}
 ?>
