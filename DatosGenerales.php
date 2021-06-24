  <?php require_once 'encabezado.php'; ?>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Datos |Generales</title>
    <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
  <?php require_once 'links.php'; ?>
  </head>
   
      <script src="./controlador/formularioEncuestado.js"></script>
  <body ng-controller="encuestadoCtrl" class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
 

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
  <div class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
  <div class="col-sm-6">
  </div><!-- /.col -->
  </div><!-- /.row -->

    <div class="card bg-light  text-dark">
            <div class="card-body"><h5 align="center">BITACORA RECEPCIÓN DE EQUIPO  </h5>
         

          </div>
          </div>
  </div><!-- /.container-fluid -->
  </div>
      <!-- /.content-header -->

      <!-- Main content -->
  <section class="content">
  <div class="container-fluid">
         
  <div class="col-md-6">
  <div class="card card-primary">
  <div class="card-header">
  <h3 class="card-title">Datos Generales</h3>
  </div>
                <!-- /.card-header -->
                <!-- form start -->
  <form role="form">
  <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">FOLIO:</label>
            <input type="text" class="form-control" name ="id_datos"  ng-model="encuestado.id_datos" placeholder="FOLIO AUTOMATICO" readonly required>
             </div>

            <div class="form-group">
            <label for="exampleInputPassword1">NOMBRE DE LA EMPRESA:</label>
            <input type="text" class="form-control" name ="empresa"
       		ng-model="encuestado.empresa" placeholder="Empresa:">
            </div>

            <div class="form-group">
            <label for="exampleInputPassword1">ÁREA A LA QUE PERTENECE:</label>
            <input type="text" class="form-control" name ="area"
       		ng-model="encuestado.area" placeholder="Área">
            </div>


             <div class="form-group">
             <label for="exampleInputPassword1">DIRECCIÓN:</label>
             <input type="text" class="form-control" name ="direccion" 
             ng-model="encuestado.direccion"placeholder="Dirección">
             </div>

    

        <div class="form-group">
            <label for="exampleInputPassword1">TELÉFONO:</label>
            <input type="text" class="form-control" name ="telefono" 
     		 ng-model="encuestado.telefono" placeholder="Teléfono">
            </div>

        <div class="form-group">
            <label for="exampleInputPassword1">CORREO:</label>
            <input type="text" class="form-control" name ="correo" 
     		  ng-model="encuestado.correo" placeholder="Correo">
            </div>


             <div class="form-group">
            <label for="exampleInputPassword1">FECHA:</label>
            <input type="date" class="form-control" name ="fecha" 
     		  ng-model="encuestado.fecha" placeholder="Municipio">
            </div>

            <div class="form-group">
                          <label for="exampleInputPassword1">MARCA:</label>
                          <input type="text" class="form-control" name ="marca"
                          ng-model="encuestado.marca" placeholder="Marca">
                          </div>

                          <div class="form-group">
                          <label for="exampleInputPassword1">DESCRIPCIÓN  :</label>
                          <input type="text" class="form-control" name ="descripcion"
                          ng-model="encuestado.descripcion" placeholder="Descripción">
                          </div>


                          <div class="form-group">
                          <label for="exampleInputPassword1">NO. DE SERIE:</label>
                          <input type="text" class="form-control" name ="no_serie"
                          ng-model="encuestado.no_serie" placeholder="No.Serie">
                          </div>

                          <div class="form-group">
                          <label for="exampleInputPassword1">OBSERVACIONES TÉCNICAS:</label>
                          <input type="text" class="form-control" name ="obser_tec"
                          ng-model="encuestado.obser_tec" placeholder="Observaciones técnicas">
                          </div>

                           <div class="form-group">
                          <label for="exampleInputPassword1">OBSERVACIONES DEL EQUIPO ANTES DEL MANTENIMIENTO:</label>
                          <input type="text" class="form-control" name ="obser_mante"
                          ng-model="encuestado.obser_mante" placeholder="Observaciones">
                          </div>


             <div class="card-footer">
            <button type="submit" value ="enviar" ng-click="guardar()"
            class="btn btn-primary"> Guardar</button>
            </div>

   			</div>
            </div>
            </form>



          
            <br>
      
          <!-- Main row -->
      <!-- aqui iran las graficas
       -->
          <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
            </section>
      <!-- /.content -->
            </div>
    <!-- /.content-wrapper -->
            <?php require_once 'pie.php'; ?>

    <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
          </aside>
    <!-- /.control-sidebar -->
          </div>
  <!-- ./wrapper -->

          <?php require_once 'scrips.php'; ?>
          </body>
          </html>
