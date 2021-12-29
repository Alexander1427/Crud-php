<?php
 require_once('../models/insert.php');

 $insert = new insert();


$nombre=$_POST['nombre'];
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];
$total=$_POST['total'];



 $insertventa = $insert->Insertventas($nombre,$producto,$cantidad,$precio,$total);

 if ($insertventa) {
     header("location: ../view/ventas-vista.php");
 }
