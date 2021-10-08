<?php
 require_once('../models/insert.php');

 $insert = new insert();

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];


 $insertproductos = $insert->Insertproductos($nombre,$descripcion,$precio,$cantidad);

 if ($insertproductos) {
     header("location: ../view/index.php");
 }
