<?php
	include ("../modelo/categoria.php");
	include ("../conexion/connect_db.php");
	$idCategoria=$_POST['idCategoria'];
	$nomCategoria=$_POST['nomCategoria'];
	$descriCategoria=$_POST['descriCategoria'];
	$conec= new Conectar();
		$cat= new Categoria();
		$cat->updateCategoria($idCategoria,$nomCategoria,$descriCategoria,$conec->conecta());
?>