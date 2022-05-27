<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
	if (@!$_SESSION['nombre']) {
		header("Location:indexVis.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link href="../css/estilos.css" rel="stylesheet">


<head><link rel="shortcut icon" href="../img/logonegro.ico" /><title>Kraken</title></head>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <img src="../img/image.png" width="100">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><h1>Kraken</h1></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="indexUsuario.php"><h3>Inicio</h3></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#comenta"><h3>Comentar</h3></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#comentaA"><h3>Comentarios Antiguos</h3></a>
            </li><li class="nav-item">
            			<a class="nav-link js-scroll-trigger" href="../conexion/desconectar.php"><h3>Cerrar sesión</h3></a>
        </li>
          </ul>
        </div>
      </div>
    </nav>


<section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <hr class="light my-4">
          </div>
        </div>
      </div>


<div id=menu><center>


<link href="../css/estilo.css" rel="stylesheet">
    <div class="main-wrapper">

        <div class="container">

<?php
include("../conexion/connect_db.php");

$juego=$_GET['id_jueUs'];
$mysqli = new mysqli('db746642552.db.1and1.com','dbo746642552','0269ACmk.','db746642552');
?>
<center><h1><strong>Comenta!</strong> </h1></center><?php
  $sql=("SELECT * FROM videojuegos_usuario WHERE id_jueUs like $juego");
  $query=mysqli_query($mysqli,$sql);

           while($GetNomDesPre=mysqli_fetch_array($query)){
           ?>  <?php


 $sqls="SELECT * FROM usuarios WHERE idUsuario like $GetNomDesPre[7]";
 $nombrecategoria=$mysqli ->query($sqls);
 $arreglocategoria= mysqli_fetch_array($nombrecategoria);
 echo "<h2>Propietario: $arreglocategoria[1]</h2><br/>";

 ?>

 <img src="../img/catalogo/xboxone/callofdutyghost.jpg"/>

 <?php

 $sql="SELECT * FROM videojuegos ";
 $nombrevideojuego=$mysqli ->query($sql);
 $arreglonomvi= mysqli_fetch_array($nombrevideojuego);
 echo "<h3>Nombre del videojuego: $GetNomDesPre[1]</h3><br/>";
 echo "<h3>Descripcion: $GetNomDesPre[2]</h3><br/>";
 echo "<h3>Precio: $GetNomDesPre[5]</h3><br/>";
 echo "<h4> Ò <h4><br/>";

 $sql="SELECT * FROM videojuegos WHERE idVideojuego like $GetNomDesPre[6]";
 $nombrevideojuego=$mysqli ->query($sql);
 $arreglonomvi= mysqli_fetch_array($nombrevideojuego);
 echo "<h3>Videojuego de intercambio: $arreglonomvi[1]</h3><br/>";

 $sqll="SELECT * FROM consolas WHERE idConsola like $GetNomDesPre[4]";
 $nombreconsola=$mysqli ->query($sqll);
 $arregloconsola= mysqli_fetch_array($nombreconsola);
 echo "<h3>Consola: $arregloconsola[1]</h3><br/>";

 $sqls="SELECT * FROM categorias WHERE idCategoria like $GetNomDesPre[3]";
 $nombrecategoria=$mysqli ->query($sqls);
 $arreglocategoria= mysqli_fetch_array($nombrecategoria);
 echo "<h3>Categoria: $arreglocategoria[1]</h3><br/>";

 $idUsuario=$_SESSION['nombre'];

 $sqls="SELECT * FROM usuarios WHERE nombre like '$idUsuario'";
 $nombreUsu=$mysqli ->query($sqls);
 $arregloidUsu= mysqli_fetch_array($nombreUsu);
 $id=$arregloidUsu[0];

 $id_jue=$GetNomDesPre[0];

 ?>

 <div id=comenta>
 			<div>

        <?php
        echo "<h3 style='color:white'><strong> ________________________________________________</strong></h3><br/>";?>
<h1><center><strong>Comenta sobre el videojuego:</strong></center></h1><br/>
        <form class="omb_loginForm" action="../control/ctrlComentario.php" autocomplete="off" method="GET">
        <input type="hidden"  name="id_jueUs" value="<?php echo $id_jue; ?>" style="color:black">
        <input type="hidden"  name="id" value="<?php echo $id; ?>" style="color:black">
        <h3 style="color:black"><input type="text" name="comentario" style="width:800px; height:150px;" required pattern=".{2,}" maxlength="150" title="El coemtario debe tener minimo 2 letras y maximo 150 letras(los espacios tambien cuentan)" placeholder="Ingresa un comentario"/></h3>
          <button class="btn btn-lg btn-primary btn-block">Comentar</button><br/><br/></form><form action="user.php" method="post">
              <button class="btn btn-lg btn-primary btn-block">Regresar</button></form>

         			</div>
         		</div>
 <?php
 echo "<br/><center><h1 id='comentaA'><strong>Comentarios anteriores sobre este videojuego:</strong></h1></center>";

 $sql=("SELECT * FROM comentarios WHERE id_jueUs like $id_jue");
 $query=mysqli_query($mysqli,$sql);
 				 while($GetDatComen=mysqli_fetch_array($query)){

 					 $sqls="SELECT * FROM usuarios WHERE idUsuario like '$GetDatComen[2]'";
 					 $nombreU=$mysqli ->query($sqls);
 					 $arregloU= mysqli_fetch_array($nombreU);
 ?>
 <?php
 echo "<h3 style='color:white'><strong> ________________________________________________</strong></h3><br/>";
 echo "<h3 style='color:white'><strong> $arregloU[1]</strong></h3><br/>";
 echo "<h2 align='center' style='color:white'>$GetDatComen[1]</h2><br/>";
} ?>


                         </div>

                   </div>
                 </center>
                 </div>
 <?php
}?>
          </link>






    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/creative.min.js"></script>


  </body>

</html>
