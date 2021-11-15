<?php
require_once ("../models/consultas.php");
 session_start();
 $id_productos=$_POST['id'];

 $consulta = new consultas();

 $getproductos = $consulta->Consulta_productos_id($id_productos);
 
 
             while ($datos=$getproductos->fetch()) {
                 $id=$datos['id'];
                 $nombre=$datos['nombre'];
                 $descripcion=$datos['descripcion'];
                 $precio=$datos['precio'];
                 $cantidad=$datos['cantidad'];
                 $registro=$datos['registro'];
             }
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrega un producto</title>
    <?php require_once 'complementos.php'?>

    <link rel="stylesheet" href="../assets/css/generales.css">
    <link rel="stylesheet" href="../assets/css/add-product.css">
    <link rel="stylesheet" href="../assets/css/inicio.css">
    <script src="../assets/js/add-product.js"></script>
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>
<body>


    <form action="../server/updateproductos.php" method="post">
        <div class="container">
            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre  ?>" aria-describedby="emailHelp" required>
    
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $descripcion ?>" aria-describedby="emailHelp" required>
  
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" name="precio" id="precio" value="<?php echo $precio ?>" aria-describedby="emailHelp" required>
  
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" class="form-control" name="cantidad" id="cantidad" value="<?php echo $cantidad ?>" aria-describedby="emailHelp" required>
  
    </div>
    
    <button type="submit"  class="btn btn-primary">Cambiar productos</button>
    </div>

    <div class="pen-footer"><a href="https://www.behance.net/gallery/30478397/Login-Form-UI-Library" target="_blank"><i class="material-icons">arrow_backward</i>View on Behance</a><a href="https://github.com/andyhqtran/UI-Library/tree/master/Login%20Form" target="_blank">View on Github<i class="material-icons">arrow_forward</i></a></div>
    </form>

</main>
</body>
</html>