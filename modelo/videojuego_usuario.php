<?php
include("../conexion/connect_db.php");
  $accion=$_GET['accion'];
  //echo $accion;
switch ($accion) {
  case 'agregar':
  $nombre=$_GET['nombre'];;
  $descripcion=$_GET['descripcion'];
  $consola=$_GET['consola'];
  $categoria=$_GET['categoria'];
  $precio=$_GET['precio'];
  $intercambio=$_GET['intercambio'];
  $id=$_GET['id'];

  $conec=new Conectar();
    $video = new videojuegos_usuario();
$video ->registrarVideojuego($nombre,$descripcion,$consola,$categoria,$precio,$intercambio,$id,$conec->conecta());
    break;

case 'modificar':
  $idregistro=$_GET['idregistro'];
  $descripcion=$_GET['descripcion'];
  $precio=$_GET['precio'];
  $intercambiobox=$_GET['intercambiobox'];
  $intercambioname=$_GET['intercambioname'];

  if (empty($intercambiobox)) {
    $intercambio=$intercambioname;
  }else{
    $intercambio=$intercambiobox;
  }

$conec=new Conectar();
  $video = new videojuegos_usuario();
  $video ->actualizarVideojuego($idregistro,$descripcion,$precio,$intercambio,$conec->conecta());
  break;

case 'eliminar':
$idregistro=$_GET['id'];

$conec=new Conectar();
$video = new videojuegos_usuario();
$video ->borrarVideojuego($idregistro,$conec->conecta());
  break;

  default:
  echo "<script type=\"text/javascript\">alert(\"Ya lo rompiste 7n7 \");
  location.href = \"../vista/user.php\"</script>";
    break;
}

?>
