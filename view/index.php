<?php
session_start();
require_once('../config/conexion.php');

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
    <script src="../assets/js/redirect.js"></script>
</head>
<body>

<br>
<button class="btn btn-success btn_producto" onclick="redirect('add-producto.php');">Agregar producto</button>

    <br>
    <div class="container">
        
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>

        
        </tbody>
        </table>

    </div>
    
</body>
</html>