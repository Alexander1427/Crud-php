<?php
 require_once('../models/update.php');

 $update = new update();

 $id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];


 $updateproductos = $update->Updateproducto($id, $nombre,$descripcion,$precio,$cantidad);

 if ($updateproductos) {
     header("location: ../view/index.php");
 }
