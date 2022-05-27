<?php

	class Conectar{
		public $conec;
		function Conecta() {
		$conect= mysqli_connect("db746642552.db.1and1.com", "dbo746642552","0269ACmk.", "db746642552")
			or die ("problemas en la conexion a la base de datos");
			return $conect;
		}
	}
?>