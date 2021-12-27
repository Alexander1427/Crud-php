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

        public function Consulta_c($id)
        {
            $Sql="SELECT * FROM clien WHERE id='$id'";
            return ejecutarConsulta($Sql);
        }
        public function Consulta_p($id)
        {
            $Sql="SELECT * FROM users WHERE id='$id";
            return ejecutarConsulta($Sql);
        }
   
   
    }

?> 