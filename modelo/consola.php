<?php
	include ("../conexion/connect_db.php");
	$opcConsola=$_GET['opcConsola'];
	switch ($opcConsola){
		case 'registrar':
			$nomConsola=$_GET['nomConsola'];
			$conec= new Conectar();
				$consoll= new Consola();
				$consoll->registrarConsola($nomConsola,$conec->conecta());
		break;
		case 'updateConsol':
			$idConsola=$_GET['idConsola'];
			$nomConsola=$_GET['nomConsola'];
			$conec= new Conectar();
				$actualizarConsola= new Consola();
				$actualizarConsola->updateConsola($idConsola,$nomConsola,$conec->conecta());
		break;
	}
?>