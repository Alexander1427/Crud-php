<?php
 require_once('../models/insert.php');

 $insert = new insert();

$nombre=$_POST['nombre'];
$empresa=$_POST['empresa'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];


 $insertclientess = $insert->Insertclientes($nombre,$empresa,$telefono,$correo);

 if ($insertclientess) {
     header("location: ../view/clientes-de.php");
 }
