<?php
require_once"../config/conexion.php";
    class insert{
        public function __construct() {
            
        }
        public function Insertusers($nombre, $email, $empresa, $telefono, $password)
        {
            $Sql="insert into users (nombre, email, empresa, telefono, password, registro) values('$nombre', '$email', '$empresa', '$telefono', '$password', now())";
            return ejecutarConsulta($Sql);
        }
    }

?>