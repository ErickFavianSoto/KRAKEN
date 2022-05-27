<html>
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
              <a class="nav-link js-scroll-trigger" href="../index.html"><h3>Inicio</h3></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#menu"><h3>Categorias</h3></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><h3>Inicio de sesion</h3></a>
        <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#registro"><h3>Regístrate</h3></a>
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
      <form class="flexsearch--form" nam action="../control/ctrlBuscar.php" method="post">
          <input name="valor" class="flexsearch--input" type="search" placeholder="Buscar" required>
        <input class="flexsearch--submit" type="submit" value="&#10140;" name="buscar"/>
      </form>
  </div>
</div><br/>


<?php
include("../modelo/buscador.php");

class Buscar{

  public $valor;


public function busqueNombre($valor,$conec){


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

?> <?php
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
 ?>


  </div>
                            </div>
                      </div>

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


 ?>
                          </div></div></div>
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


 ?>

                         </div>
                        </div></div>
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
                    <li class="type-webdesign"><span><a href="../control/ctrlBuscarConsola.php?consola=Nintendo Switch">Switch</a></span></li>

                    <li class="type-webdevelopment"><span><a href="../control/ctrlBuscarConsola.php?consola=PlayStation 4">PlayStation 4</a></span></li>

                    <li class="type-webdesign"><span><a href="../control/ctrlBuscarConsola.php?consola=Nintendo 2ds">Nintendo 2DS XL</a></span></li>

    				        <li class="type-webdevelopment"><span><a href="../control/ctrlBuscarConsola.php?consola=psp">PSP</a></span></li>

                    <li class="type-webdesign"><span><a href="../control/ctrlBuscarConsola.php?consola=Nintendo 3ds">Nintendo new 3DS XL</a></span></li>

                    <li class="type-webdevelopment"><span><a href="../control/ctrlBuscarConsola.php?consola=Play Station vr">PlayStation VR</a></span></li>

                    <li class="type-graphicdesign"><span><a href="../control/ctrlBuscarConsola.php?consola=xbox one">Xbox One X</a></span></li>

                    <li class="type-webdevelopment"><span><a href="../control/ctrlBuscarConsola.php?consola=PlayStation 3">PlayStation 3</a></span></li>

    				        <li class="type-graphicdesign"><span><a href="../control/ctrlBuscarConsola.php?consola=xbox 360">Xbox 360</a></span></li>
                </ul>
            </div>
        </div>
    </div>


    <section class="bg-primary" id="contact">
    <div class="omb_login">
          <h1 class="omb_authTitle">Inicia sesion</h3>
        <!--<div class="row omb_row-sm-offset-3 omb_socialButtons">

        	 <!--<div class="col-xs-4 col-sm-2">
                <a href="https://es-la.facebook.com/" class="btn btn-lg btn-block omb_btn-facebook">
                  <i class="fa fa-facebook visible-xs"></i>
                  <span class="hidden-xs"><h1>Facebook</h1></span>
                </a>
              </div>
              <div class="col-xs-4 col-sm-2">
                <a href="https://es-la.facebook.com/" class="btn btn-lg btn-block omb_btn-twitter">
                  <i class="fa fa-facebook visible-xs"></i>
                  <span class="hidden-xs"><h1></h1></span>
                </a>
              </div>
              <div class="col-xs-4 col-sm-2">
                <a href="#" class="btn btn-lg btn-block omb_btn-google">
                  <i class="fa fa-google-plus visible-xs"></i>
                  <span class="hidden-xs"><h1>Google+</h1></span>
                </a>
              </div>
        </div></h1>

        <div class="row omb_row-sm-offset-3 omb_loginOr">
          <div class="col-xs-50 col-sm-50">
            <hr class="omb_hrOr">
            <span class="omb_spanOr"><h1>o</h1></span>
          </div>
        </div>-->

        <div class="row omb_row-sm-offset-3">
          <div class="col-xs-12 col-sm-6">
              <form class="omb_loginForm" action="../control/ctrlInicioSesion.php" autocomplete="off" method="POST">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" REQUIRED name="nom" placeholder="Ingresa tu usuario">
              </div>
              <span class="help-block"></span>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input  type="password" class="form-control" REQUIRED name="passw" placeholder="Ingresa tu contraseña">
              </div>
    			</br>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesion</button>
            </form>
          </div>
          </div>
        <div class="row omb_row-sm-offset-3">
          <div class="col-xs-8 col-sm-2">
            <label class="checkbox">
              <input type="checkbox" value="remember-me"><h5>Recuerdame</h5>
            </label>
          </div>
          <div class="col-xs-12 col-sm-3">
            <p class="omb_forgotPwd">
              <a href="#"><h5>Olvidaste la contraseña?</h5></a>
            </p>
          </div>
    	  </div>
    			<section class="bg-primary" id="registro">
    			<div class="row omb_row-sm-offset-3">
          <div class="col-xs-12 col-sm-6">
    	  <h1 class="omb_authTitle">Registro</h3>
    				<form class="omb_loginForm" action="../control/ctrlRegistrarUsuario.php" autocomplete="off" method="POST">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" REQUIRED name="nombre" placeholder="Ingresa tu nombre de usuario">
              </div>
    		  </br>
    		  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="number" class="form-control" REQUIRED name="numeroTel" placeholder="Ingresa tu numero celular">
              </div>
    		  <span class="help-block"></span>
    		  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" REQUIRED name="carrera" placeholder="Ingresa carrera">
              </div>
    		  </br>
    		  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" REQUIRED name="turno" placeholder="Ingresa turno">
              </div>
    		  </br>
    		  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" REQUIRED name="division" placeholder="Ingresa division">
              </div>
              <span class="help-block"></span>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input  type="password" class="form-control" REQUIRED name="password" placeholder="Ingresa contraseña">
              </div>
    		  </br>
    		 <!--<button class="btn btn-lg btn-primary btn-block" type="submit"><h1>Registrar</h1></button>-->

    										<button class="btn btn-lg btn-primary btn-block" type="submit"></h1>Aceptar</h1></button>
    											<!--<ul class="actions">
    												<li><input type="submit" name="submit" class="special" value="Registrarse" /></li>
    											</ul>-->


    								</form>

    							<?php
    							if(isset($_POST['submit'])){
    								require("registro.php");
    							}
    					       	?>
    </div>
        </div>
    	</select>
    		</br></br></br>
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
