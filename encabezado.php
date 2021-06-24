<!DOCTYPE html>
<html lang="en" ng-app="app">
<?php
@session_start();
if(isset($_SESSION['correo'])){

}
else {
  header("Location: index.php");
}
?>
 <link rel="icon" type="image/jpg" href="./img/logo.jpg" />
 <script src="./controlador/angular.min.js"></script>
   <script src="./controlador/jquery.js"></script>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Bienvenidos</a>
      </li>
    </ul>
    </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="img/moradev1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/moradev1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <p><?php echo $_SESSION['correo']; ?></p>
            <i class="fa fa-circle text-success"></i> Conectado</a>
              
            </a>
          

        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Registrar
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="DatosGenerales.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Datos Generales</p>
                </a>
              </li>
            </ul>




                <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
             <i class="nav-icon far fa-address-card"></i>
              <p>
               Consultar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="ConsultaBitacora.php" class="nav-link">
               <i class=" nav-icon  fas fa-align-justify"></i>
                  <p>Bitacora</p>
                </a>
              </li>
            </ul>
          </li>

         
    

                <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
              Salir
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./modelo/salir.php" class="nav-link">
               <i class=" nav-icon  fas fa-times-circle"></i>
                  <p>Cerrar Sesión</p>
                </a>
              </li>
            </ul>
          </li>
          <!--  para egregar otra pestaña al menu-->

          </li>
        </ul>




      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  </html>