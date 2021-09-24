<?php

    require_once('../config/conexion.php');
    if (isset($_POST['nombre'],$_POST['email'],$_POST['password'],) 
    && !empty($_POST['nombre'])  && !empty($_POST['email'])
     && !empty($_POST['password'])) {
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);


        $options = array("cost"=>4);
        $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);
        $date = date('Y-m-d H:i:s');

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = 'select * from users where email = :email';
            $stmt = $conexion->prepare($sql);
            $p = ['email'=>$email];
            $stmt->execute($p);
            if ($stmt->rowCount() == 0) {
                $sql = "insert into users (nombre, email, `password`, registro) values(:nombre,:email,:pass,:registro)";
                try {
                    $handle = $conexion->prepare($sql);
                    $params = [
                        ':nombre'=>$nombre,
                        ':email'=>$email,
                        ':pass'=>$hashPassword,
                        ':registro'=>$date

                    ];

                    $handle->execute($params);

                   
                    
                    // echo '<div class="alert success" id="alerta"><span class="closebtn" onclick="quitar_alerta();">&times;</span> <strong>¡Éxito!</strong> Usuario creado, por favor inicia sesión con tus credenciales</div>';
                } catch (PDOException $e) {
                    $errors[] = $e->getMessage();
                }
            } else {
                $valnombre = $nombre;
                $valEmail = '';
                $valPassword = $password;


                echo '<div class="alert warning" id="alerta"><span class="closebtn" onclick="quitar_alerta();">&times;</span> <strong>¡Error!</strong> El correo ya existe</div>';
                
            }
        } else {
           echo "El correo no es valido";
        }
    } else {
        if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
           echo 'El Nombre es requerido';
        } else {
            $valnombre = $_POST['nombre'];
        }
      
        if (!isset($_POST['email']) || empty($_POST['email'])) {
           echo 'El correo es requerido';
        } else {
            $valEmail = $_POST['email'];
        }

        if (!isset($_POST['password']) || empty($_POST['password'])) {
           echo 'La contraseña es requerida';
        } else {
            $valPassword = $_POST['password'];
        }

    }