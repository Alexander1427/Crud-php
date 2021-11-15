<?php


require_once('../models/consultas.php');

$consulta = new consultas();

$getproductos = $consulta->Getproductos();


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
<button class="btn btn-success btn_producto" onclick="redirect('add-producto.php');">Agregar producto</button>

    <br>
    <div class="container">
        
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Registro</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($datos=$getproductos->fetch()) {
                $id=$datos['id'];
                $nombre=$datos['nombre'];
                $descripcion=$datos['descripcion'];
                $precio=$datos['precio'];
                $cantidad=$datos['cantidad'];
                $registro=$datos['registro'];

            ?>
            <tr>
            <th scope="row"><?php echo $nombre?></th>
            <td><?php echo $descripcion?></td>
            <td><?php echo $precio?></td>
            <td><?php echo $cantidad?></td>
            <td><?php echo $registro?></td>
            <td>

               
                    <form action="update_productos.php" method="post" style="display: inline-block;">
                        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

                        <button > Editar </button>
                    </form>
                    <button type= "Button" onclick="btneliminar()"> eliminar </button>
               

            </td>

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