<?php
include("../conexion/connect_db.php");

 $id_jue=$_GET['id_jueUs'];
 $id=$_GET['id'];
 $comentario=$_GET['comentario'];

   $conec=new Conectar();
     $comentarios = new comentarios();
  $comentarios ->comentarVideojuego($comentario,$id,$id_jue,$conec->conecta());
?>
