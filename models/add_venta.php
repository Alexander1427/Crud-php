<?php
require_once"../config/conexion.php";
    class insert{
        public function __construct() {
            
        }
        public function Insertventas($nombre, $producto, $cantidad, $precio, $total)
        {
            $Sql="INSERT INTO `ventas`(`id_cliente`, `id_producto`, `cantidad`, `precio`, `total`) VALUES ('$nombre','$producto','$cantidad','$precio','$total')";
            return ejecutarConsulta($Sql);
        }
    }

?>
