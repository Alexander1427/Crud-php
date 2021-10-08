<?php
require_once"../config/conexion.php";
    class insert{
        public function __construct() {
            
        }
        public function Insertproductos($nombre, $descripcion, $precio, $cantidad)
        {
            $Sql="insert into productos (nombre, descripcion, precio, cantidad, registro) values('$nombre', '$descripcion', '$precio', '$cantidad', now())";
            return ejecutarConsulta($Sql);
        }
    }

?>