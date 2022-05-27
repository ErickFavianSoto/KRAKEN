<?php
	include ("../conexion/connect_db.php");
	$opcLugar=$_GET['opcLugar'];
	switch ($opcLugar){
		case 'registraLugar':
			$nomLugar=$_GET['nomLugar'];
			$decriptLugar=$_GET['decriptLugar'];
			$conec= new Conectar();
				$regLuga= new Lugar();
				$regLuga->registraLugar($nomLugar,$decriptLugar,$conec->conecta());
	break;
	case 'updateLugar':
			$idLugar=$_GET['idLugar'];
			$nomLugar=$_GET['nomLugar'];
			$decriptLugar=$_GET['decriptLugar'];
			$conec= new Conectar();
				$lug= new Lugar();
				$lug->updateLugar($idLugar,$nomLugar,$decriptLugar,$conec->conecta());
	break;
	}
	?>