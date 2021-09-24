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
    
</head>
<body>


    <form>
        <div class="container">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Descripcion</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Precio</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Cantidad</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
    </div>
    
    <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
    </form>

</main>
</body>
</html>