<?php
 session_start();

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


    <form action="../server/clientes.php" method="post">
        <div class="container">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" required>
    
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Empresa</label>
        <input type="text" class="form-control" name="empresa" id="empresa" aria-describedby="emailHelp" required>
  
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">correo</label>
        <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp" required>
  
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label">telefono</label>
        <input type="number" class="form-control" name="telefono" id="telefono" aria-describedby="emailHelp" required>
  
    </div>
    
    <button type="submit"  class="btn btn-primary">Agregar</button>
    </div>

    <div class="pen-footer"><a href="https://www.behance.net/gallery/30478397/Login-Form-UI-Library" target="_blank"><i class="material-icons">arrow_backward</i>View on Behance</a><a href="https://github.com/andyhqtran/UI-Library/tree/master/Login%20Form" target="_blank">View on Github<i class="material-icons">arrow_forward</i></a></div>
    </form>

</main>
</body>
</html>