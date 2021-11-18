<?php


require_once('../models/consulta_clientes.php');

$consulta = new consulta();

$getclientes = $consulta->Getclientes();


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <?php  require_once 'complementos.php'; ?>
    <link rel="stylesheet" href="../assets/css/generales.css">
    <link rel="stylesheet" href="../assets/css/inicio.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/js/redirect.js"></script>
</head>
<body>


    <br>
    <div class="container">
        
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Empresa</th>
            <th scope="col">Correo</th>
            <th scope="col">telefono</th>
           
            </tr>
        </thead>
        <tbody>
            <?php

            while ($datos=$getclientes->fetch()) {
                $id=$datos['id'];
                $nombre=$datos['nombre'];
                $empresa=$datos['empresa'];
                $correo=$datos['correo'];
                $telefono=$datos['telefono'];
                

            ?>
            <tr>
            <th scope="row"><?php echo $nombre?></th>
            <td><?php echo $empresa?></td>
            <td><?php echo $correo?></td>
            <td><?php echo $telefono?></td>
            
            

            </tr>
            
            <?php
            }
            ?>
        
        </tbody>
        </table>

    </div>
    <script src="../assets/js/eliminar_productos.js"></script>
</body>
</html>