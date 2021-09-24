<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/login.js"></script>
    <script src="assets/js/registro.js"></script>
</head>
<body>

        <!-- conexion -->
      
<!-- fin de conexion -->

        <!-- Inicio de login y registro -->
    
<!-- Form-->
<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Account Login</h1>
    </div>
    <div class="form-content">
      <form action="server/login.php"  method="POST">
      <?php
                    if (isset($errors) && count($errors) > 0) {
                      echo '<center><div class="alert alert-danger">'.$error_msg.'</div></center>';
                        foreach ($errors as $error_msg) {
                        }
                    }

                    if (isset($success)) {
                        echo '<div class="alert alert-success">'.$success.'</div>';
                    }
                ?>
        <div class="form-group">
          <label for="emaillogin">Username</label>
          <input type="email" id="emaillogin" name="emaillogin" required="required"/>
        </div>
        <div class="form-group">
          <label for="passwordlogin">Password</label>
          <input type="password" id="passwordlogin" name="passwordlogin" required="required"/>
        </div>
        <div class="form-group">
          <label class="form-remember">
            <input type="checkbox"/>Remember Me
          </label><a class="form-recovery" href="#">Forgot Password?</a>
        </div>
        <div class="form-group">
          <button type="submit">Log In</button>
        </div>
      </form>
    </div>
  </div>
  <div class="form-panel two">
    <div class="form-header">
      <h1>Register Account</h1>
    </div>
    <div class="form-content">
      <form method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="nombre" name="nombre" required="required"/>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required="required"/>
        </div>
       
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required="required"/>
        </div>
        <div class="form-group">
        <button type="button" onclick="Registrar_usuario()">Registro</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="pen-footer"><a href="https://www.behance.net/gallery/30478397/Login-Form-UI-Library" target="_blank"><i class="material-icons">arrow_backward</i>View on Behance</a><a href="https://github.com/andyhqtran/UI-Library/tree/master/Login%20Form" target="_blank">View on Github<i class="material-icons">arrow_forward</i></a></div>


<!-- fin de login y registro -->



</body>
</html>