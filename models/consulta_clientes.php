<?php

    require "../config/conexion.php";
    class consulta{
        public function __construct() {
            
        }
        public function Getclientes()
        {
            $Sql="SELECT * FROM clientes";
            return ejecutarConsulta($Sql);
        }
   
        
        public function Consulta_clientes($id)
        {
            $Sql="SELECT * FROM clientes WHERE id='$id'";
            return ejecutarConsulta($Sql);
        }
   
   
    }

?> 