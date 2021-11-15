<?php
session_start();
error_reporting(0);
require_once('../config/conexion.php');

 /*****login */

        $email = trim($_POST['emaillogin']);
        $password = trim($_POST['passwordlogin']);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = "select * from users where email = :email ";
            
            $handle = $conexion->prepare($sql);
            $params = ['email'=>$email];
            $handle->execute($params);
            if ($handle->rowCount() > 0) {
                $getRow = $handle->fetch(PDO::FETCH_ASSOC);

                if (password_verify($password, $getRow['password'])) {
                    unset($getRow['password']);
                    $_SESSION['id'] = $getRow['id'];
                    $_SESSION['correo'] = $getRow['email'];
          
                    header('location: ../view/dashboard.php');
                    exit();
                } else {
                    $errors[] = "Contraseña o Correo invalidos";

                }
            } else {
                $errors[] = "Contraseña o Correo invalidos";

            }
        } else {
            $errors[] = "El correo no es valido";

        }
  


?>
