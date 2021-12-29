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

        public function Consulta_vent()
        {
            $Sql="SELECT ventas.id as id_venta, clientes.nombre as cliente, productos.nombre as producto, ventas.cantidad as can, ventas.precio as pre, ventas.total
            FROM clientes INNER JOIN ventas ON clientes.id = ventas.id_cliente INNER JOIN productos ON ventas.id_producto = productos.id";
            return ejecutarConsulta($Sql);
        }
        
   
   
    }

?> 