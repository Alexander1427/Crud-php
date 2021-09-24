<?php

require_once 'key.php';


try {
    $conexion = new PDO(DB_HOST, DB_USERNAME, DB_PASSWORD);

	$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	// $conexion->exec("SET CHARACTER SET utf8");
	$conexion->exec("set names utf8");


	if (!function_exists('ejecutarConsulta')) {
		Function ejecutarConsulta($sql){ 
		global $conexion;
		$query=$conexion->prepare($sql);
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		return $query;
	
		}

		Function ejecutarConsulta_conparametro($sql){ 
			$idactual=$_POST['id'];
			global $conexion;
			$query=$conexion->prepare($sql);
			$query->setFetchMode(PDO::FETCH_ASSOC);
			$query->execute(array(":id_acti"=>$idactual));
			return $query;
		
			}

		
	
		function ejecutarConsultaSimpleFila($sql){
	global $conexion;
	$query=$conexion->prepare($sql);
	$row=$query->fetch_assoc();
	$query->execute();
	return $row;
		}
	function ejecutarConsulta_retornarID($sql){
	global $conexion;
	$query=$conexion->prepare($sql);
	
	$query->execute();
	return $conexion->insert_id;
	}
	
	/*function limpiarCadena($str){
	global $conexion;
	$str=mysqli_real_escape_string($conexion,trim($str));
	return htmlspecialchars($str);
	}
	*/
	}
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

?>