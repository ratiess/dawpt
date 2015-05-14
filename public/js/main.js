angular.module('ui.bootstrap.demo', ['ui.bootstrap']);
angular.module('ui.bootstrap.demo').config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
})
angular.module('ui.bootstrap.demo').controller('maincontroller',['$scope','$http',function ($scope, $http, $log) {

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

}]);