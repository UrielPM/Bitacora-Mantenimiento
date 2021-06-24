var App = angular.module('app',[]);

App.controller('encuestadoCtrl', function($scope, $http){

	$scope.encuestado={};
	$scope.busqueda={};
	

	$scope.buscarFolio = function(){
        $http.post('./modelo/buscarFolio.php')
		.success(function(data,status,headers,config){
			$scope.encuestado.id_datos = data[0].folio;
			//alert("El folio se genera en Automático");
			 Swal.fire({
		      title: 'El folio se genera en Automático',
		      html: 'I will close in <strong></strong> seconds.',
		      timer: 1000, //tiempo del timer
		      onBeforeOpen: () => {
		        Swal.showLoading()
		        timerInterval = setInterval(() => {
		          Swal.getContent().querySelector('strong')
		            .textContent = Swal.getTimerLeft()
		        }, 100)
		      },
		      onClose: () => {
		        clearInterval(timerInterval)
		      }
		    });
		}).error(function(data,status,headers,config){
			alert("Error BD");
		});
	}

	
	$scope.buscar= function(){
		$http.post('./modelo/buscarEncuestado.php',$scope.busqueda)
		.success(function(data,status,headers,config){
			$scope.encuestado = data;
		}).error(function(data,status,headers,config){
			alert("Error BD");
		});
	}

	
	$scope.guardar = function(){

		$http.post('./modelo/guardarEncuestado.php',$scope.encuestado)
		.success(function(data,status,headers,config){
			//alert(data);
			Swal.fire({
	        type: 'success',
	        title: data});
			location.href ="./ConsultaBitacora.php";
		}).error(function(data,status,headers,config){
			alert("Error BD");
		});
		
	}
$scope.buscarFolio();


});