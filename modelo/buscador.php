<?php
include("../conexion/connect_db.php");
 $valor=$_POST['valor'];

   $conec=new Conectar();
     $Buscar = new Buscar();
  $Buscar ->busqueNombre($valor,$conec->conecta());
?>
