<?php
include("../conexion/connect_db.php");
 $valor=$_POST['valor'];

   $conec=new Conectar();
     $Buscar = new Buscar();
  $Buscar ->busqueVideojuego($valor,$conec->conecta());
?>
