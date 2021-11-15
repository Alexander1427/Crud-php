<?php

    require_once('../config/conexion.php');




    if (isset($_POST['nombre'],$_POST['email'],$_POST['empresa'],$_POST['telefono'],$_POST['password']) 
    && !empty($_POST['nombre'])  && !empty($_POST['email'] && !empty($_POST['empresa']) && !empty($_POST['telefono'])) 
     && !empty($_POST['password'])) {
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $empresa = trim($_POST['empresa']);
        $telefono = trim($_POST['telefono']);
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
                
                $sql = "insert into users (nombre, email, empresa, telefono, `password`, registro) values(:nombre,:email,:empresa,:telefono,:pass,:registro)";
                try {
                    $handle = $conexion->prepare($sql);
                    $params = [
                        ':nombre'=>$nombre,
                        ':email'=>$email,
                        ':empresa'=>$empresa,
                        ':telefono'=>$telefono,
                        ':pass'=>$hashPassword,
                        ':registro'=>$date

                    ];

                    $handle->execute($params);
                    echo 'aqu i';
                   
                    
                    
                } catch (PDOException $e) {
                    $errors[] = $e->getMessage();
                }
               
            } else {
                $valnombre = $nombre;
                $valEmail = '';
                $valempresa = $empresa;
                $valtelefono = $telefono;
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
        if (!isset($_POST['empresa']) || empty($_POST['empresa'])) {
            echo 'La empresa es requerida';
         } else {
             $valempresa = $_POST['empresa'];
         }
         if (!isset($_POST['telefono']) || empty($_POST['telefono'])) {
            echo 'El telefono es requerido';
         } else {
             $valtelefono = $_POST['telefono'];
         }

        if (!isset($_POST['password']) || empty($_POST['password'])) {
           echo 'La contraseña es requerida';
        } else {
            $valPassword = $_POST['password'];
        }

    }