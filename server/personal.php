<?php
 require_once('../models/insert.php');

 $insert = new insert();

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$empresa=$_POST['empresa'];
$telefono=$_POST['telefono'];
$password=$_POST['password'];


 $insertusers = $insert->Insertusers($nombre,$email,$empresa,$telefono,$password);

 if ($insertusers) {
     header("location: ../view/person.php");
 }
