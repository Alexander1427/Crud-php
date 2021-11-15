<?php

require "../config/conexion.php";
    class update{
        public function Updateproducto($id, $nombre, $descripcion, $precio, $cantidad)
        {
            $Sql=" UPDATE `productos` SET `nombre`='$nombre',`descripcion`= '$descripcion', `precio`= '$precio',`cantidad`= '$cantidad' WHERE id='$id'";
            return ejecutarConsulta($Sql);
        }
    }




?>
