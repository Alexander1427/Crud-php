<?php

    require "../config/conexion.php";
    class consulta{
        public function __construct() {
            
        }
        public function Getventas()
        {
            $Sql="SELECT * FROM ventas";
            return ejecutarConsulta($Sql);
        }
   
        
        public function Consulta_ventas($id)
        {
            $Sql="SELECT * FROM ventas WHERE id='$id'";
            return ejecutarConsulta($Sql);
        }
   
   
    }

?> 