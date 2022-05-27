<?php
	include ("../modelo/lugar.php");
	include ("../conexion/connect_db.php");
	$idLugar=$_POST['idLugar'];
	$nomLugar=$_POST['nomLugar'];
	$decriptLugar=$_POST['decriptLugar'];
	$conec= new Conectar();
		$lug= new Lugar();
		$lug->updateLugar($idLugar,$nomLugar,$decriptLugar,$conec->conecta());
?>