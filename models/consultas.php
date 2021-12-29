<?php

    require "../config/conexion.php";
    class consultas{
        public function __construct() {
            
        }
        //consulta productos
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
        //consulta clientes
        public function Getclientes()
        {
            $Sql="SELECT * FROM clientes";
            return ejecutarConsulta($Sql);
        }
   
        //?
        public function Consulta_p($id)
        {
            $Sql="SELECT * FROM users WHERE id='$id";
            return ejecutarConsulta($Sql);
        }
        //consulta ventas
        public function Consulta_v()
        {
            $Sql="SELECT * FROM clientes";
            return ejecutarConsulta($Sql);
        }
        public function Consulta_vent()
        {
            $Sql="SELECT ventas.id as id_venta, clientes.nombre as cliente, productos.nombre as producto, ventas.cantidad as can, ventas.precio as pre, ventas.total
            FROM clientes INNER JOIN ventas ON clientes.id = ventas.id_cliente INNER JOIN productos ON ventas.id_producto = productos.id";
            return ejecutarConsulta($Sql);
        }
        //consulta ventas
        public function Consulta_pro()
        {
            $Sql="SELECT * FROM productos";
            return ejecutarConsulta($Sql);
        }

        //consulta productos
        public function Getpersonal()
        {
            $Sql="SELECT * FROM users";
            return ejecutarConsulta($Sql);
        }
   

        
   

    }

?> 