<?php require_once 'encabezado.php'; ?>

  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DATOS BITACORA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
<!-- ponerle color a los select-->




  <?php require_once 'links.php'; ?>

  </head>
  <script src="./controlador/administrarUsuarios.js"></script>
  <body ng-controller="buscarCtrl" class="hold-transition sidebar-mini layout-fixed">
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

    
          </div><!-- /.container-fluid -->
          </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
       
               <div class="col-xs-12">
               <div class="card card-primary">
               <div class="card-header">
               <h3 class="card-title">Datos Bitacora</h3>
               </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form role="form-horizontal">
                      <div class="card-body">
                    

            






              <div class="card-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th class="text-center">Folio</th>
                  <th class="text-center">Fecha</th>
                  <th class="text-center">Modelo</th>
                  <th class="text-center">Serie</th>
                  <th class="text-center">Descripción</th>
                  <th class="text-center">Falla</th>
                  <th class="text-center"><i class="fas fa-print"></i></th>
                 </tr>
                 </thead>
                 <tbody>

               <tr ng-repeat="usuario in usuarios">
               <td class="text-center">{{usuario.id_datos}}</td>
               <td align="center">{{usuario.fecha}}</td>
               <td class="text-center">{{usuario.marca}}</td>
               <td class="text-center">{{usuario.no_serie}}</td>
               <td class="text-center">{{usuario.descripcion}}</td>
               <td class="text-center">{{usuario.obser_mante}}</td>
               
           

              <td class="text-center">
               <a href="./pdf/Reimprimir.php?folio={{usuario.id_datos}}" class="btn btn-primary" role="button">
                <i class="fas fa-print"></i>
                  </a>
              </td>
              
                </tr>
               </tbody> 
              </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>


           </form>
           </div>
           </div>
            <br>
        <!-- Main row -->
    <!-- aqui iran las graficas-->
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
     
        <script>
          $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
              theme: 'bootstrap4'
            })
          })
        </script>
        </body>
        </html>


