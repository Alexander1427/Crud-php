<?php
require_once"../config/conexion.php";
    class insert{
        public function __construct() {
            
        }
        //Insert de productos
        public function Insertproductos($nombre, $descripcion, $precio, $cantidad)
        {
            $Sql="insert into productos (nombre, descripcion, precio, cantidad, registro) values('$nombre', '$descripcion', '$precio', '$cantidad', now())";
            return ejecutarConsulta($Sql);
        }
        //Insert de usuarios
        public function Insertusers($nombre, $email, $empresa, $telefono, $password)
        {
            $Sql="insert into users (nombre, email, empresa, telefono, password, registro) values('$nombre', '$email', '$empresa', '$telefono', '$password', now())";
            return ejecutarConsulta($Sql);
        }
        //Insert de clientes
        public function Insertclientes($nombre, $empresa, $correo, $telefono)
        {
            $Sql="insert into clientes (nombre, empresa, correo, telefono) values('$nombre', '$empresa', '$telefono', '$correo')";
            return ejecutarConsulta($Sql);
        }
        //Insert venta
        public function Insertventas($nombre, $producto, $cantidad, $precio, $total)
        {
            $Sql="INSERT INTO `ventas`(`id_cliente`, `id_producto`, `cantidad`, `precio`, `total`) VALUES ('$nombre','$producto','$cantidad','$precio','$total')";
            return ejecutarConsulta($Sql);
        }
    }

?>