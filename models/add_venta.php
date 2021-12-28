<?php
require_once"../config/conexion.php";
    class insert{
        public function __construct() {
            
        }
        public function Insertventas($cliente, $producto, $cantidad, $precio)
        {
            $Sql="insert into ventas (cliente, producto, cantidad, precio) values('$cliente', '$producto', '$cantidad', '$precio')";
            return ejecutarConsulta($Sql);
        }
    }

?>
