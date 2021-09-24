<?php

    require_once('../config/conexion.php');
    if (isset($_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['cantidad'],) 
    && !empty($_POST['nombre'])  && !empty($_POST['descripcion'])
     && !empty($_POST['precio']) && !empty($_POST['cantidad'])) {
        $nombre = trim($_POST['nombre']);
        $descripcion = trim($_POST['descripcion']);
        $precio = trim($_POST['precio']);
        $cantidad = trin($_POST['cantidad']);


        $options = array("cost"=>4);
        $precio = precio($precio);
        $date = date('Y-m-d H:i:s');

       
            $sql = 'select * from users where descripcion = :descripcion';
            $stmt = $conexion->prepare($sql);
            $p = ['descripcion'=>$descripcion];
            $stmt->execute($p);
            if ($stmt->rowCount() == 0) {
                $sql = "insert into users (nombre, descripcion, `precio`, registro) values(:nombre,:descripcion,:pass,:registro)";
                try {
                    $handle = $conexion->prepare($sql);
                    $params = [
                        ':nombre'=>$nombre,
                        ':descripcion'=>$descripcion,
                        ':pass'=>$precio,
                        ':registro'=>$date

                    ];

                    $handle->execute($params);

                   
                    
                    // echo '<div class="alert success" id="alerta"><span class="closebtn" onclick="quitar_alerta();">&times;</span> <strong>¡Éxito!</strong> Usuario creado, por favor inicia sesión con tus credenciales</div>';
                } catch (PDOException $e) {
                    $errors[] = $e->getMessage();
                }
            } else {
                $valnombre = $nombre;
                $valdescrip = $descripcion;
                $valprecio = $precio;
                $valcontenido = $contenido;


                echo '<div class="alert warning" id="alerta"><span class="closebtn" onclick="quitar_alerta();">&times;</span> <strong>¡Error!</strong> El correo ya existe</div>';
                
            }
        
    } else {
        if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
           echo 'El Nombre es requerido';
        } else {
            $valnombre = $_POST['nombre'];
        }
      
        if (!isset($_POST['descripcion']) || empty($_POST['descripcion'])) {
           echo 'El correo es requerido';
        } else {
            $valdescrip = $_POST['descripcion'];
        }

        if (!isset($_POST['precio']) || empty($_POST['precio'])) {
           echo 'EL precio es requerido';
        } else {
            $valprecio = $_POST['precio'];
        }
        if (!isset($_POST['cantidad']) || empty($_POST['cantidad'])) {
            echo 'La cantidad es requerida';
        }else{
            $valcontenido = $_POST['cantidad'];
        }

    }