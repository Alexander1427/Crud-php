<?php


require_once('../models/consulta_pers.php');

$consulta = new consulta();

$getpersonal = $consulta->Getpersonal();


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
            <th scope="col">Email</th>
            <th scope="col">Empresa</th>
            <th scope="col">Telefono</th>
        
            </tr>
        </thead>
        <tbody>
            <?php
            while ($datos=$getpersonal->fetch()) {
                $id=$datos['id'];
                $nombre=$datos['nombre'];
                $email=$datos['email'];
                $empresa=$datos['empresa'];
                $telefono=$datos['telefono'];
            

            ?>
            <tr>
            <th scope="row"><?php echo $nombre?></th>
            <td><?php echo $email?></td>
            <td><?php echo $empresa?></td>
            <td><?php echo $telefono?></td>
        
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