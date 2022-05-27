<?php
	include ("../modelo/consola.php");
	include ("../conexion/connect_db.php");
	$idConsola=$_POST['idConsola'];
	$nomConsola=$_POST['nomConsola'];
	$conec= new Conectar();
		$cons= new Consola();
		$cons->updateConsola($idConsola,$nomConsola,$conec->conecta());
?>