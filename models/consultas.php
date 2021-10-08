<?php

    require "../config/conexion.php";
    class consultas{
        public function __construct() {
            
        }
        public function Getproductos()
        {
            $Sql="SELECT * FROM productos";
            return ejecutarConsulta($Sql);
        }
    }

?>