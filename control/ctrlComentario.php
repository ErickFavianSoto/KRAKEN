<?php
include("../modelo/comentario.php");

class comentarios{

  public $id_jue;
  public $id;
  public $comentario;


public function comentarVideojuego($comentario,$id,$id_jue,$conec){

$comentarios= $conec->query("INSERT INTO comentarios(`comentario`, `idUsuario`, `id_jueUs`)
VALUES ('$comentario','$id','$id_jue')");
     if ($comentarios==true) {
      echo "<script type=\"text/javascript\">alert(\"Gracias por comentar .\");
      location.href = \"../vista/comentarios.php?id_jueUs=$id_jue\"</script>";
    }else{
      echo "<script type=\"text/javascript\">alert(\"Error al comentar\");
	  location.href = \"../vista/comentarios.php?id_jueUs=$id_jue\"</script>";
  }

  }
}
 ?>
