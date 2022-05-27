<?php

include("../modelo/videojuego_usuario.php");
include("../conexion/connect_db.php");

class videojuegos_usuario{

  public $nombre;
  public $descripcion;
  public $consola;
  public $categoria;
  public $precio;
  public $intercambio;
  public $accion;
  public $id; 

public function registrarVideojuego($nombre,$descripcion,$consola,$categoria,$precio,$intercambio,$id,$conec){
  $videojuegos= $conec->query("INSERT INTO `videojuegos_usuario`( `nombreVideojuego`, `decriptVideojuego`, `idCategoria`, `idConsola`, `precio`, `intercambioJuego`, `idUsuario`, `idEstatus`, `idVideojuego`)
     VALUES ('$nombre','$descripcion','$categoria','$consola','$precio','$intercambio','$id','1','1')");
     if ($videojuegos==true) {
     $mysqli = new mysqli('db746642552.db.1and1.com','dbo746642552','0269ACmk.','db746642552');
       $sql=("SELECT * FROM videojuegos WHERE nombreVideojuego like '$nombre'");
       $query=mysqli_query($mysqli,$sql);
       $totalFilas=$query->num_rows;
       if(empty($totalFilas)){
         $vid= $conec->query("INSERT INTO `videojuegos`(`nombreVideojuego`)
          VALUES ('$nombre')");
       }
       echo "<script type=\"text/javascript\">alert(\"Videojuego Registrado \");
      location.href = \"../vista/user.php\"</script>";
    }else{
      echo "<script type=\"text/javascript\">alert(\"Videojuego NO Registrado  
      te falto seleccionar : Consola, Categoria o Juegos de intercambio\");location.href = \"../vista/user.php\"</script>";
    }

  }
  public function actualizarVideojuego($idregistro,$descripcion,$precio,$intercambio,$conec){
      $videojuegos= $conec->query("UPDATE `videojuegos_usuario`
        SET `decriptVideojuego`='$descripcion',`precio`='$precio',`intercambioJuego`='$intercambio' WHERE `id_jueUs`= '$idregistro'");
       if ($videojuegos==true) {
        echo "<script type=\"text/javascript\">alert(\"Videojuego Actualizado\");
        location.href = \"../vista/user.php\"</script>";
      }else{
        echo "<script type=\"text/javascript\">alert(\"Videojuego NO Actualizado\");location.href = \"../vista/user.php\"</script>";
      }

    }

    public function borrarVideojuego($idregistro,$conec){
        $videojuegos= $conec->query("UPDATE `videojuegos_usuario`
          SET `idEstatus`='2' WHERE `id_jueUs`= '$idregistro'");
         if ($videojuegos==true) {
          echo "<script type=\"text/javascript\">alert(\"Videojuego Eliminado\");
          location.href = \"../vista/user.php\"</script>";
        }else{
          echo "<script type=\"text/javascript\">alert(\"Videojuego NO Eliminado\");location.href = \"../vista/user.php\"</script>";
        }

      }
  }
 ?>
