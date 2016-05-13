<?php require_once('conexion/conexion.php'); ?>

<?php 
		$opcion = filter_var($_POST['opcion'],FILTER_SANITIZE_STRING);
switch ($opcion) {
		case "registrar":
					$nom=$_POST["nombre"];
				    $cate=1;//categoria
				    $pre=1;//tipo_ejercicio
				    $ele=1;//elemento tecnico
				    $metodo="";
				    $tarea="";
				    $descrip="";
				    $destino="";
				    //probar que estan los campos llenos
																			
					//solicitando existencias

									$query = 'INSERT INTO ejercicio (idEjercicio,idTipo_ejercicio,idCategoria, nombre,idEjer_tecnico,metodo,tarea,descripcion,imagen_ejercicio)
									VALUES ("",\''.$pre.'\',\''.$cate.'\',\''.$nom.'\',\''.$ele.'\',\''.$metodo.'\',\''.$tarea.'\',\''.$descrip.'\',\''.$destino.'\')';
									mysql_query($query);	
									echo 1;
								
				    
		break;
		
		default:
			# code...
			break;
	}		
?>