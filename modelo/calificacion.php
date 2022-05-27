<?php
include("../conexion/connect_db.php");

 $estrella=$_POST['estrella'];
 $nombre=$_POST['nombre'];

   $conec=new Conectar();
     $calificacion = new calificacion();
  $calificacion ->calificarSitio($estrella,$nombre,$conec->conecta());
?>
