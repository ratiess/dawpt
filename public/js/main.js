angular.module('ui.bootstrap.demo', ['ui.bootstrap']);
angular.module('ui.bootstrap.demo').config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
})
angular.module('ui.bootstrap.demo').controller('maincontroller',['$scope','$http',function ($scope, $http, $log) {

	$scope.url="http://s2q33.sdslab.cat/dawpt/public/";
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

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
>>>>>>> origin/master
>>>>>>> origin/master

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
  	/*$scope.Exfc = [
  		'brazos','piernas', 'torso', 'javi gay', 'quesada maricon'
  	]*/
>>>>>>> origin/master
>>>>>>> origin/master
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

<<<<<<< HEAD
	$scope.tdias = [ ['a1','a2'], ['b1','b2'] ];
=======
<<<<<<< HEAD
	$scope.tdias = [ ['a1','a2'], ['b1','b2'] ];
=======
	$scope.tdias = [ ['a1','a2'], ['b1','b2'], ['c1','c2']];
>>>>>>> origin/master
>>>>>>> origin/master

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

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
	this.try=function(tejercicios, tseries, trepeticiones){
		$http.get($scope.url+"insertrutina?descripcion=aaa&clase=bbb&usuarios_id=2").success(function(response) {
				var idrutina= response;
				for (var i in tejercicios){
					var item = tejercicios[i];
					var item2 = tseries[i];
					var item3 = trepeticiones[i];
					for (var l in item){
						console.log("id ejercicio is: "+ item[l].id);
						console.log("serie is: "+ item2[l]);
						console.log("repeticion is: "+ item3[l]);
					$http.get($scope.url+"insertejrutina?ejercicios_id="+item[l].id+"&series="+item2[l]+"&repeticiones="+item3[l]+"&rutina_id="+idrutina).success(function(response) { });
						
						
					}
				}
		});
	}
//===================== SELECT TODOS LOS EJERCICIOS + PONERLOS EN EL DROPDOWN LIST ========
<<<<<<< HEAD
=======
=======
	$scope.tdias2 = $scope.tdias;

	this.try=function(){
		console.log($scope.tdias2);
		console.log($scope.tseries);
		console.log($scope.trepeticiones);
	}
>>>>>>> origin/master
>>>>>>> origin/master

	this.xfc = [{label: ' ', id: 0}];
	this.selected = this.xfc[0];
		
		$scope.Exfc = function(xfc){
			$http.get($scope.url+"selectejercicio?id")
	        	.success(function(response) {
				console.log(response); 
				for (i=0; i<response.length;i++){
					xfc.push(response[i]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
					
				}
				$scope.mainejercicios=xfc;
				this.selected = xfc[0];
				//console.log(xfc);
				//console.log($scope.mainejercicios) 	
<<<<<<< HEAD
=======
=======
	 				console.log(response[i]);
				}
				
				this.selected = xfc[0]; 	
>>>>>>> origin/master
>>>>>>> origin/master
			});
		};
	$scope.Exfc(this.xfc);

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
//=========================================================================================	
//===================== SELECT TODOS LOS ALIMENTOS + PONERLOS EN EL DROPDOWN LIST =========

	/*this.ali = [{label: ' ', id: 0}];
	this.selected = this.ali[0];
		
		$scope.axli = function(ali){
			$http.get($scope.url+"selectalimentos?id")
	        	.success(function(response) {
				console.log(response); 
				for (i in response.alimentos){
					ali.push(i);
				}
				this.selected = ali[0];
				console.log(ali); 	
			});
		};
	$scope.axli(this.ali);*/

//=========================================================================================	
<<<<<<< HEAD
=======
=======
>>>>>>> origin/master
>>>>>>> origin/master

}]);
