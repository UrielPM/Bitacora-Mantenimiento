var App = angular.module('app',[]);

App.controller('buscarCtrl', function($scope, $http){

	$scope.usuarios={};
	$scope.busqueda={};
	$scope.promod={};
	$scope.promod1={};

	$scope.consultar = function(){
	$http.post('modelo/buscarUsuarios.php',$scope.busqueda)
	.success(function(data,status,headers,config){
		$scope.usuarios = data;
	}).error(function(data,status,headers,config){
		alert("Error BD" + data);
	});
}

$scope.consultar();


});
