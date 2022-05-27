<?php
	include ("../conexion/connect_db.php");
	$opc=$_GET['opc'];
	switch ($opc){
		case 'registrar':
			$nomCategoria=$_GET['nomCategoria'];
			$descripCategoria=$_GET['descripCategoria'];
			$conec= new Conectar();
				$categ= new Categoria();
				$categ->registrarCategoria($nomCategoria,$descripCategoria,$conec->conecta());
		break;
		case 'update':
			$idCategoria=$_GET['idCategoria'];
			$nomCategoria=$_GET['nomCategoria'];
			$descriCategoria=$_GET['descriCategoria'];
			$conec= new Conectar();
				$cat= new Categoria();
				$cat->updateCategoria($idCategoria,$nomCategoria,$descriCategoria,$conec->conecta());
		break;
	}
	?>