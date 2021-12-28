<?php
 require_once('../models/add_venta.php');

 $insert = new insert();


$cliente=$_POST['cliente'];
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];


 $insertventa = $insert->Insertventas($cliente,$producto,$precio,$cantidad);

 if ($insertventa) {
     header("location: ../view/producto.php");
 }
