
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("../conexion/connect_db.php");

	$name=$_POST['name'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE nombre='$name'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['idUsuario']=$f2['idUsuario'];
			$_SESSION['nombre']=$f2['nombre'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='../vista/admin.php'</script>";
		
		}
		
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE nombre='$name'");
	if($f=mysqli_fetch_array($sql)){
		if($pass==$f['password']){
			$_SESSION['idUsuario']=$f['idUsuario'];
			$_SESSION['nombre']=$f['nombre'];
			$_SESSION['rol']=$f['rol'];
			$_SESSION['numeroTel']=$f['numeroTel'];
			$_SESSION['carrera']=$f['carrera'];
			$_SESSION['turno']=$f['turno'];
			$_SESSION['division']=$f['division'];
			$_SESSION['password']=$f['password'];
			
			echo '<script>alert("BIENVENIDO Usuario")</script> ';
			echo "<script>location.href='../vista/index.php'</script>";	

	}
	}

?>