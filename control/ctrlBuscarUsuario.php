<html>
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
              <a class="nav-link js-scroll-trigger" href="../vista/indexUsuario.php"><h3>Inicio</h3></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#menu"><h3>Categorias</h3></a>
            </li>
            <li class="nav-item">
            			<a class="nav-link js-scroll-trigger" href="../conexion/desconectar.php"><h3>Cerrar sesión</h3></a>
        <li class="nav-item">
            </li>
            </li>
          </ul>
        </div>

      </div>
    </nav>

<div></div>
<section class="bg-primary" id="about">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">


  </div>
</div>

<div >
      <div class="container">
         <h1 class="h1">Buscar videojuegos</h1>
      <form class="flexsearch--form" nam action="../control/ctrlBuscarUsuario.php" method="post">
          <input name="valor" class="flexsearch--input" type="search" placeholder="Buscar"required>
        <input class="flexsearch--submit" type="submit" value="&#10140;" name="buscar"/>
      </form>
  </div>
</div><br/>


<?php
include("../modelo/buscadorUsuario.php");

class Buscar{

  public $valor;


public function busqueVideojuego($valor,$conec){


         $mysqli = new mysqli('db746642552.db.1and1.com','dbo746642552','0269ACmk.','db746642552');

         $sql="SELECT * FROM categorias WHERE nomCategoria like '$valor'";
         $nombreC=$mysqli ->query($sql);
         $cat= mysqli_fetch_array($nombreC);
         $categ=$cat[0];

         $sqls="SELECT * FROM consolas WHERE nomConsola like '$valor'";
         $nombreC=$mysqli ->query($sqls);
         $consolau= mysqli_fetch_array($nombreC);
         $conso=$consolau[0];


if (empty($categ)&&!empty($conso)) {
?><center><h1>Encontramos estos videojuegos para ti...</h1></center><?php
  $sql=("SELECT * FROM videojuegos_usuario WHERE idConsola like $conso");
  $query=mysqli_query($mysqli,$sql);

           while($GetNomDesPre=mysqli_fetch_array($query)){
           ?> <center> <div>
                    <div >
                      <div class="col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
 <?php


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

        <form class="omb_loginForm" action="../vista/comentarios.php" autocomplete="off" method="GET">
        <input type="hidden"  name="id_jueUs" value="<?php echo $id_jue; ?>" style="color:black">
          <button class="btn btn-lg btn-primary btn-block">Comentar</button></form>

 			</div>
  </div></div>
                      
 <?php
 }

}
elseif (empty($conso)&&!empty($categ)) {
  ?><center><h1>Encontramos estos videojuegos para ti...</h1></center><?php
  $sql=("SELECT * FROM videojuegos_usuario WHERE idCategoria like $categ");
  $query=mysqli_query($mysqli,$sql);

           while($GetNomDesPre=mysqli_fetch_array($query)){
           ?> <center> <div>
                    <div >
                      <div class="col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                      <?php


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

        <form class="omb_loginForm" action="../vista/comentarios.php" autocomplete="off" method="GET">
        <input type="hidden"  name="id_jueUs" value="<?php echo $id_jue; ?>" style="color:black">
        <button class="btn btn-lg btn-primary btn-block">Comentar</button>

          
                         </div>
                    
                   </div>
                 </div>
 <?php
}

}elseif (empty($categ)&&empty($conso)) {
  ?><?php
  $sql=("SELECT * FROM videojuegos_usuario WHERE nombreVideojuego like '$valor'");
  $query=mysqli_query($mysqli,$sql);
  $totalFilas=$query->num_rows;
  if(empty($totalFilas)){
    ?>
    <center><h1>No encontramos videojuegos... <h3>(vuelva intentarlo)</h3></h1></center>
    <center> <div >
        <div >
          <center><div>
            <br/>
            <img src="../img/noencontrado.gif" width="400px">
          </div></center></center>
          <?php
  }else {
           while($GetNomDesPre=mysqli_fetch_array($query)){
           ?><center><h1>Encontramos estos videojuegos para ti...</h1></center>
           <center> <div>
                    <div >
                      <div class="col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
 <?php


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

 <form class="omb_loginForm" action="../vista/comentarios.php" autocomplete="off" method="GET">
 <input type="hidden"  name="id_jueUs" value="<?php echo $id_jue; ?>" style="color:black">
 <button class="btn btn-lg btn-primary btn-block">Comentar</button>
                         </div>
                 
                   </div>
                 </div>
 <?php
}
}
}
}
}
?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

    <link href="../css/estilo.css" rel="stylesheet">
        <div class="main-wrapper">


            <div class="container" id="menu">
                <input name="category-css" id="all" type="radio" checked>
                <input name="category-css" id="webdesign" type="radio">
                <input name="category-css" id="webdevelopment" type="radio">
                <input name="category-css" id="graphicdesign" type="radio">
                <input name="category-css" id="javascript" type="radio">
                <ul class="list-category">
                    <li><label for="all">Todos</label></li>
                    <li><label for="webdesign">Nintendo<img src="../img/nin.png" width='45px'></label></li>
                    <li><label for="webdevelopment">PlayStation<img src="../img/play.png" width='60px'></label></li>
                    <li><label for="graphicdesign">Xbox<img src="../img/xb.png" width='60px'></label></li>
                </ul>


                <!-- Lista de Imagenes -->
                <ul class="list-images clearfix">
                    <li class="type-webdesign"><span><a href="../control/ctrlBuscarConsolaUsuario.php?consola=Nintendo Switch">Switch</a></span></li>

                    <li class="type-webdevelopment"><span><a href="../control/ctrlBuscarConsolaUsuario.php?consola=PlayStation 4">PlayStation 4</a></span></li>

                    <li class="type-webdesign"><span><a href="../control/ctrlBuscarConsolaUsuario.php?consola=Nintendo 2ds">Nintendo 2DS XL</a></span></li>

                    <li class="type-webdevelopment"><span><a href="../control/ctrlBuscarConsolaUsuario.php?consola=psp">PSP</a></span></li>

                    <li class="type-webdesign"><span><a href="../control/ctrlBuscarConsolaUsuario.php?consola=Nintendo 3ds">Nintendo new 3DS XL</a></span></li>

                    <li class="type-webdevelopment"><span><a href="../control/ctrlBuscarConsolaUsuario.php?consola=Play Station vr">PlayStation VR</a></span></li>

                    <li class="type-graphicdesign"><span><a href="../control/ctrlBuscarConsolaUsuario.php?consola=xbox one">Xbox One X</a></span></li>

                    <li class="type-webdevelopment"><span><a href="../control/ctrlBuscarConsolaUsuario.php?consola=PlayStation 3">PlayStation 3</a></span></li>

                    <li class="type-graphicdesign"><span><a href="../control/ctrlBuscarConsolaUsuario.php?consola=xbox 360">Xbox 360</a></span></li>
                </ul>
            </div>
        </div>
    </div>


    		</br></br></br>
            <div class="row">
              <div class="col-lg-4 ml-auto text-center">
                <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                <p>123-456-6789</p>
              </div>
              <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                <p>
                  <a href="mailto:your-email@your-dol.com">kraken@gmail.com</a>
                </p>
              </div>
            </div>
          </div>
        </section>

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
