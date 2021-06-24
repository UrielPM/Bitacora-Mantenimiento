var App = angular.module('app',[]);

App.controller('encuestaACtrl', function($scope, $http){

$scope.encuestaA={};

	$scope.guardar = function(){

		$http.post('./modelo/guardarEncuestaA.php', $scope.encuestaA).success(function(data,status,headers,config){
			//alert(data);
			Swal.fire({
		        type: 'success',
		        title: data });
			location.href ="./formularioEncuestaB.php";
		}).error(function(data,status,headers,config){
            alert("Error BD");

		})
		
	}


	$scope.buscarFolio = function(){
        $http.post('./modelo/buscarFolio.php')
		.success(function(data,status,headers,config){
			$scope.encuestaA.id_pregunta_a = data[0].folio;
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

	$scope.buscarFolio();



});