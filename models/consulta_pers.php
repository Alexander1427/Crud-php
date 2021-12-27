<?php

    require "../config/conexion.php";
    class consulta{
        public function __construct() {
            
        }
        public function Getpersonal()
        {
            $Sql="SELECT * FROM users";
            return ejecutarConsulta($Sql);
        }
   
        
        public function Consulta_personal($id)
        {
            $Sql="SELECT * FROM users WHERE id='$id'";
            return ejecutarConsulta($Sql);
        }
   
   
    }

?> 