<?php
include("../conexion/connect_db.php");

 $consola=$_GET['consola'];

   $conec=new Conectar();
     $BuscarC = new BuscarC();
  $BuscarC ->busqueConsola($consola,$conec->conecta());
?>
