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
   
        
        public function Consulta_productos_id($id)
        {
            $Sql="SELECT * FROM productos WHERE id='$id'";
            return ejecutarConsulta($Sql);
        }
   
   
    }

?> 