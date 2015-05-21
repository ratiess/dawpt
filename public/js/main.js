angular.module('ui.bootstrap.demo', ['ui.bootstrap']);
angular.module('ui.bootstrap.demo').config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
})
angular.module('ui.bootstrap.demo').controller('maincontroller',['$scope','$http',function ($scope, $http, $log) {

	$scope.url="http://s2q33.sdslab.cat/dawpt/public/";

	this.login = function(){
		console.log($scope.user);
		console.log($scope.passw);
		//$http.get(/*ruta_login+$scope.user+$scope.passw*/)
	           // .success(function(response) {$scope.loginid = response; console.log($scope.loginid); });
	}
	this.register = function(){
		$http.get(/*ruta_register+$scope.user+$scope.passw*/)
	            .success(function(response) {$scope.loginid = response; console.log($scope.loginid); });
	}	

	this.calcularIMC = function(){
		var alt = $scope.altura/100;
		var pes = $scope.peso;
		$scope.IMC = Math.round((pes/((alt)*(alt))));
		//console.log(Math.round($scope.IMC));
		//formula super jodida
		//$http.get(/*ruta_IMC+$scope.IMC*/)
	    //        .success(function(response) {$scope.rutinaRec = response[0]; $scope.dietaRec = response[1]; });
	}
	$scope.toggled = function(open) {
    	$log.log('Dropdown is now: ', open);
  	};

  	$scope.objetivo= [ 'Hipertrofia', 'Definición', 'Perdida de peso'];

  	$scope.items = [
    	'1','2','3','4','5','6','7'
  	];
  	$scope.items2 = [
    	'1','2','3','4','5','6','7','8','9','10'
  	];
  	/*$scope.Exfc = [
  		'brazos','piernas', 'torso', 'javi gay', 'quesada maricon'
  	]*/
  	$scope.txseries = [
  		'1','2','3','4','5','6','7'
  	]
  	$scope.txrepeticiones = [
  		'1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20'
  	]

	$scope.toggleDropdown = function($event) {
	    $event.preventDefault();
	    $event.stopPropagation();
	    $scope.status.isopen = !$scope.status.isopen;
	};

	$scope.tdias = [ ['a1','a2'], ['b1','b2'], ['c1','c2']];

	this.createtable=function(){
		var filas = $scope.dias;
		var columnas = $scope.ejercicios;
		var tabla = new Array(columnas);
		for (var i=0; i<columnas; i++){
			tabla[i]= new Array(filas);
		}
		console.log(tabla);
		for (var j=0; j<columnas;j++){
			for(var k=0; k<filas;k++){
				tabla[j][k]= $scope.items2;
			}
		}
		$scope.tdias=tabla;
	}

	$scope.tdias2 = $scope.tdias;

	this.try=function(){
		console.log($scope.tdias2);
		console.log($scope.tseries);
		console.log($scope.trepeticiones);
	}

	this.xfc = [{label: ' ', id: 0}];
	this.selected = this.xfc[0];
		
		$scope.Exfc = function(xfc){
			$http.get($scope.url+"selectejercicio?id")
	        	.success(function(response) {
				console.log(response); 
				for (i=0; i<response.length;i++){
					xfc.push(response[i]);
	 				console.log(response[i]);
				}
				
				this.selected = xfc[0]; 	
			});
		};
	$scope.Exfc(this.xfc);


}]);
