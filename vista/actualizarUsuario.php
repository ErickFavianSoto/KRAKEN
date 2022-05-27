<!DOCTYPE HTML>
<?php
	session_start();
	if (@!$_SESSION['nombre']) {
		header("Location:indexVis.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>
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

    
<head><link rel="shortcut icon" href="../img/logonegro.ico" /><title>Kraken/actualizar</title></head>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='../https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='../https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

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
        <li><h1><a href="">Bienvenido <strong><?php echo $_SESSION['nombre'];?></strong> </a></h1></li>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
			<a class="nav-link js-scroll-trigger" href="user.php"><h3>Atras</h3></a>	 
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


<div id=menu>
      

<link href="../css/estilo.css" rel="stylesheet">
    <div class="main-wrapper">
      
        <div class="container">
			<h3>Actualización</h3>
								
								<form method="post" action="../control/ctrlActualizarUsuario.php">
								
								    <h4>ID:</h4>
									<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" name="idUsuario" readonly="readonly" value= "<?php echo $_SESSION['idUsuario']; ?>"/>
									</div>
									<br/>
									<h4>Usuario:</h4>
									<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" required pattern="[A-Za-z0-9\s]{5,20}" title="Ingresa un nombre de minimo 5 letras y maximo 20 letras(los espacion tambien cuentan)" name="nombre" value= "<?php echo $_SESSION['nombre']; ?>"/>
									</div>
									<br/>
									<h4>Número Telefónico:</h4>
									<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" required pattern="[0-9]{10,15}" title="Ingresa un numero telefonico de minimo 10 y maximo 15 numeros, sin espacios y no se admiten letras ni (.,-,#)" name="numeroTel" placeholder="Ingresa tu numero celular"  name="numeroTel" value= "<?php echo $_SESSION['numeroTel']; ?>"/>
									</div>
									<br/>
									<h4>Carrera:</h4>
									<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" REQUIRED required pattern="[A-Za-z\s]{10,60}" title="Ingresa una carrera de minimo 10 letras y maximo 60 letras(los espacion tambien cuentan)" name="carrera" value= "<?php echo $_SESSION['carrera']; ?>"/>
									</div>
									<br/>
									<h4>Turno:</h4>
									<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" required pattern="[A-Za-z]{5,15}" title="Ingresa un turno de minimo 5 letras y maximo 15 letras(los espacion tambien cuentan)" name="turno" value= "<?php echo $_SESSION['turno']; ?>"/>
									</div>
									<br/>
									<h4>Division:</h4>
									<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" required pattern="[A-Za-z\s]{10,50}" title="Ingresa una division de minimo 10 letras y maximo 50 letras(los espacion tambien cuentan)" name="division" value= "<?php echo $_SESSION['division']; ?>"/>
									</div>
									<br/>
									<h4>Contraseña:</h4>
									<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" required pattern="[A-Za-z0-9]{5,20}" title="Ingresa una contraseña de minimo 5 y maximo 20 letras o numeros y sin espacion. No se permiten (.,-,#)" name="password" value= "<?php echo $_SESSION['password']; ?>"/>
									</div>
									<br/>
									<button class="btn btn-lg btn-primary btn-block" type="submit"></h1>Confirmar</h1></button>
									</br></br></br></br></br>
								</form>

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
