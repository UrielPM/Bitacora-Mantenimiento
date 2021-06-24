<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/jpg" href="./img/logo.jpg" />
  <title>Bitacora|Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <?php require_once 'links.php'; ?>
 
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>BITACORA</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicia Sesión</p>
  <center> <img src="img/moradev1.png" width="250" height="150"></center> 
  <br>
      <form  class="form-horizontal" action="./modelo/login.php" method="post" >
        <div class="input-group mb-3">
          <input type="text" class="form-control"  name ="correo" placeholder="Correo Electrónico">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name ="pass" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
         
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión </button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body-->
  </div>
</div>
<!-- /.login-box-->

 <?php require_once 'scrips.php'; ?>

</body>
</html>
