<!DOCTYPE html>
<html lang="en">

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
              <a class="nav-link js-scroll-trigger" href="user.php"><h3>Atras</h3></a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html"><h3>Cerrar Sesion</h3></a>
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

	<?php
  
  $idvar=$_GET['id'];
require("../conexion/connect_db.php"); 

$mysqli = new mysqli('db746642552.db.1and1.com','dbo746642552','0269ACmk.','db746642552');
$sql="SELECT * FROM videojuegos_usuario WHERE id_jueUs like $idvar";
$nombrevideojuego=$mysqli ->query($sql);
$arreglonomvi= mysqli_fetch_array($nombrevideojuego);
 echo "<tr class='success'>";

 //nombre
   $ids=$arreglonomvi[0];
//descripcion
$nombre=$arreglonomvi[1];
   $desc=$arreglonomvi[2];
   //consolas
   $consola=$arreglonomvi[4];
   //categorias
   $catego=$arreglonomvi[3];
   //precio
   $pre=$arreglonomvi[5];
   //Intercambio
   $intercambio=$arreglonomvi[6];
   //Imagenes

//nombreVideojuego
$sqlv="SELECT * FROM videojuegos_usuario WHERE id_jueUs like $ids";
$nombrevideojuegos=$mysqli ->query($sqlv);
$arreglonomviv= mysqli_fetch_array($nombrevideojuegos);
?>

<div id=menu>
      

<link href="../css/estilo.css" rel="stylesheet">
    <div class="main-wrapper">
      
        <div class="container">

<center><h3>Modificar Videojuego</h3></center>
<form class="omb_loginForm" action="../control/ctrlVideojuego.php" autocomplete="off" method="GET">
	
	<h4>Nombre:</h4>
		<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text"class="form-control" name="nombre" style="color:black" value="<?php echo $nombre; ?>" readonly='readonly'/>
					</div>
				<br/>

   <input  type="hidden" class="form-control" name="accion" value="modificar"/>
  <input type="hidden" name="idregistro" value="<?php echo $idvar; ?>"/>
<!--Descripcion-->
<h4>Desripcion</h4>
<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" name="descripcion" style="color:black" required pattern=".{10,}" maxlength="1300"  title="Ingresa una descripcion de minimo 10 letras y maximo 300 letras(los espacios tambien cuentan)" value="<?php echo $desc; ?>" />
					</div>
				<br/>

<!--Consola-->
<?php
  $sqlc="SELECT * FROM consolas WHERE idConsola like $consola";
  $nombreconsolas=$mysqli ->query($sqlc);
  $arregloconso= mysqli_fetch_array($nombreconsolas);
  $conso=$arregloconso[1];
?>
<h4>Consola:</h4>
<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text"class="form-control" name="consola" style="color:black" value="<?php echo $conso; ?>" readonly='readonly'/>
					</div>
				<br/>

<!-- Categoria-->
<?php
  $sqlca="SELECT * FROM categorias WHERE idCategoria like $catego";
  $nombrecatego=$mysqli ->query($sqlca);
  $arregloca= mysqli_fetch_array($nombrecatego);
  $categoria=$arregloca[1];
?>
<h4>Categoria:</h4>
<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text"class="form-control" name="categoria" style="color:black" value="<?php echo $categoria; ?>" readonly='readonly'/>
					</div>
				<br/>

<!-- Precio -->
<h4>Precio:</h4>
<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text"class="form-control" name="precio" style="color:black" required pattern="[0-9]{2,4}" title="El precio minimo es de 10 y maximo de 9999" value="<?php echo $pre; ?>" />
					</div>
				<br/>
<!-- Intercambio -->
<?php
$sqlv="SELECT * FROM videojuegos WHERE idVideojuego like $intercambio";
$nombrevideojuegos=$mysqli ->query($sqlv);
$arreglonomviv= mysqli_fetch_array($nombrevideojuegos);
$intercambio=$arreglonomviv[1];
$nombreinter=$arreglonomviv[0];

?>
<h4>Intercambio:</h4>
<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text"class="form-control" style="color:black" value="<?php echo $intercambio;  ?>" readonly='readonly' required />
					</div>
				<br/>
<input type="hidden" name="intercambioname"  value="<?php echo $nombreinter; ?>" />
<h4>Seleccione un nuevo videojuego:</h4>
  <div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
 <?php
    $mysqli = new mysqli('db746642552.db.1and1.com','dbo746642552','0269ACmk.','db746642552');
  ?> <select style="color:black" name="intercambio" >
          <option value="">Seleccione juego de intercambio:</option>
          <?php
            $query = $mysqli -> query ("SELECT * FROM videojuegos");
            while ($valores = mysqli_fetch_array($query)) {
              echo '<option value="'.$valores[idVideojuego].'">'.$valores[nombreVideojuego].'</option>';
            }
          ?>
        </select>				</div>
				<br/>
					<button class="btn btn-lg btn-primary btn-block">Confirmar</button>
					<br>
					
  </form>
<form class="omb_loginForm" action="user.php" autocomplete="off" method="post">
          
  <button class="btn btn-lg btn-primary btn-block" >Cancelar</button></form>
      </div>
    </section>

		<div class="col-md-4">
      <div class="thumbnail">
       
          </div>
        </div>	
	
	
	

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
