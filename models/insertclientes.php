<?php
require_once"../config/conexion.php";
    class insert{
        public function __construct() {
            
        }
        public function Insertclientes($nombre, $empresa, $correo, $telefono)
        {
            $Sql="insert into clientes (nombre, empresa, correo, telefono) values('$nombre', '$empresa', '$telefono', '$correo')";
            return ejecutarConsulta($Sql);
        }
    }

?>