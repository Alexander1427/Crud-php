<?php
require_once "../config/conexion.php";
    class Delete{
        public function __construct() {
            
        }
        public function Deleteproductos($id)
        {
            $Sql="DELETE FROM productos WHERE id='$id'";
            return ejecutarConsulta($Sql);
        }
    }
?>