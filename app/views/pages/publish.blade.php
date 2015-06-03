<!DOCTYPE HTML>
<html>
<head>
<title>Free Gym Website Template | Trainers :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<<<<<<< HEAD
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/mobile.css" rel="stylesheet" type='text/css' media="(max-width: 500px)" />
<link href="css/publicarutinatabla.css" rel='stylesheet' type='text/css' />
=======
<!--<link href="css/style.css" rel='stylesheet' type='text/css' />-->
>>>>>>> origin/master
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script src="js/angular.min.js"></script> 
<script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.12.0.js"></script>
<script src="js/main.js"></script>
<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<!-- //grid-slider -->
<!---calender-style---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<!---//calender-style---->				  
</head>
<<<<<<< HEAD
<body style="publicar" ng-app="ui.bootstrap.demo" ng-controller="maincontroller as crtl">
=======
<body ng-app="ui.bootstrap.demo" ng-controller="maincontroller as crtl">
>>>>>>> origin/master
<!-- start header_bottom -->
	  <div class="header-bottom">
		 <div class="container">
			<div class="header-bottom_left">
				<i class="phone"> </i><span>1-200-346-2986</span>
			</div>
			<div class="social">	
			   <ul>	
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="pinterest"><a href="#"><span> </span></a></li>	
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="tumblr"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>	
				  <li class="rss"><a href="#"><span> </span></a></li>							
			   </ul>
		   </div>
		   <div class="clear"></div>
		</div>
	  </div>
	  <!-- start menu -->
    <div class="menu">
	  <div class="container">
		 <div class="logo">
			<a href="index.html"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li><a href="inicio">Inicio</a></li>
			   <li><a href="informacion">Información</a></li>
			   <li class="active"><a href="publicar">Publicar Rutina</a></li>
			   <li><a href="contacto">Contacto</a></li>
                <li><a href="registro">Registro</a></li>
               <li><a href="iniciosesion">Inicio Sesión</a></li>
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
	<div class="main">
	  <div class="about_banner_img"><img src="images/trine_img.jpg" class="img-responsive" alt=""></div>
	  <div class="about_banner_wrap">
      	  <h1 class="m_11">Timetable</h1>
      </div>
       <div class="border"> </div> 
       <div class="container">
          <div class="sap_tabs">	
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			  <ul class="resp-tabs-list">
			  	  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>RUTINA</span></li>
				  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>DIETA</span></li>
				  <div class="clear"></div>
			  </ul>				  	 
				<div class="resp-tabs-container">
				      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
						<div class="facts" style="width: 100%;">
							<ul class="tab-left">
<<<<<<< HEAD
								<div class="namedatos">Objetivo:</div>
							    <div class="cienpor"><select type="select" class="form-control selectdatos" ng-model="model_objetivo" ng-change="change(crtl.dias)" ng-options="c for c in objetivo"></select></div>
								<div class="namedatos">Introduce el número de días que quieres asistir al gimnasio:</div>
							    <div class="cienpor"><select type="select" class="form-control selectdatos SelectStyle" ng-model="dias" ng-change="change(crtl.dias)" ng-options="c for c in items"></select></div>
    							<div class="namedatos">Introduce el número máxima de ejercicios que quieres realizar por día:</div>
    							<div class="cienpor"><select type="select" class="form-control selectdatos SelectStyle" ng-model="ejercicios" ng-change="change2(ejercicios)" ng-options="c for c in items2"></select></div>
    							<div class="cienpor"><input type='submit' class="Enviarpublish SelectStyle" id='Enviar' value='Crear Tabla' ng-click="crtl.createtable()" onclick="myFunction()"></div>
			   				</ul>	
				<div id="PR" style="display: none;">
				<div class="scrollpublishtable">		
				<table class="tablePR">
					<tr ng-repeat="a in tdias track by $index">
						<td ng-repeat="b in a track by $index"> 
							<select type="select" class="form-control SelectStyle"  ng-model="crtl.tejercicios[$index][$parent.$index]" ng-options="c.label for c in crtl.xfc"></select>
							<select type="select" class="form-control SelectStyle"  ng-model="crtl.tseries[$index][$parent.$index]" ng-options="c for c in txseries"></select>
							<select type="select" class="form-control SelectStyle"  ng-model="crtl.trepeticiones[$index][$parent.$index]" ng-options="c for c in txrepeticiones"></select>
						</td>
					</tr>
				</table>
			</div>
		  <div class="cienpor"><div id="esp" class="Enviarpublish" ng-click="crtl.try(crtl.tejercicios,crtl.tseries,crtl.trepeticiones)">Enviar</div></div></div>
		  				</div>
					</div>	
=======
								Objetivo:
							    <select type="select" class="form-control" ng-model="model_objetivo" ng-change="change(crtl.dias)" ng-options="c for c in objetivo"></select>
						     	<br />
								Introduce el número de días que quieres asistir al gimnasio:
							    <select type="select" class="form-control" ng-model="dias" ng-change="change(crtl.dias)" ng-options="c for c in items"></select>
						     	<br />
    							Introduce el número máxima de ejercicios que quieres realizar por día:
    							<select type="select" class="form-control" ng-model="ejercicios" ng-change="change2(ejercicios)" ng-options="c for c in items2"></select> <br />
    							<input type='submit' id='Enviar' value='Crear Tabla' ng-click="crtl.createtable()">
    							<br />
			   				</ul>	
<<<<<<< HEAD
						</div>
						
				<table >
					<tr ng-repeat="a in tdias track by $index">
						<td ng-repeat="b in a track by $index"> 
							<select type="select" class="form-control"  ng-model="crtl.tejercicios[$index][$parent.$index]" ng-options="c.label for c in crtl.xfc"></select>
							<select type="select" class="form-control"  ng-model="crtl.tseries[$index][$parent.$index]" ng-options="c for c in txseries"></select>
							<select type="select" class="form-control"  ng-model="crtl.trepeticiones[$index][$parent.$index]" ng-options="c for c in txrepeticiones"></select>
						</td>
					</tr>
				</table>
		  <div id="esp" style="width:50px;height:50px;background-color:red" ng-click="crtl.try(crtl.tejercicios,crtl.tseries,crtl.trepeticiones)"/>
					</div>	
=======
			 </div>
		    </div>	
>>>>>>> origin/master
>>>>>>> origin/master
			<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-2">
			  <div class="facts">
				<ul class="tab-left">
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
				  <!-- PROGRAMAR DIETAS AQUÍ -->
			  </ul>	
			 </div>
			</div>			
				</div>	
		       </div>
	        </div>
	        <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>
      </div>
      </div>
<<<<<<< HEAD
      <div class="header-bottom">
		 <div class="container">
			<div class="header-bottom_left">
				<i class="phone"> </i><span>1-200-346-2986</span>
			</div>
			<div class="social">	
			   <ul>	
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="pinterest"><a href="#"><span> </span></a></li>	
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="tumblr"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>	
				  <li class="rss"><a href="#"><span> </span></a></li>							
			   </ul>
		   </div>
		   <div class="clear"></div>
		</div>
	  </div>
		 <div class="footer-bottom">
		   <div class="container">
		 	 <div class="row section group">
				<div class="col-md-4 FootSusc">
				   <h4 class="m_7">Suscripción</h4>
				   <p class="m_8">Suscríbete a DAW-PT y recibirás toda la información necesária.</p>
				      <form class="subscribe">
			             <input type="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
					  </form>
			          <div class="subscribe1">
			            <a href="#">Enviar<i class="but_arrow"> </i></a>
			          </div>
				</div>
				<div class="col-md-4 FootInfo">
					<div class="f-logo">
						<img src="images/logo.png" alt=""/>
					</div>
					<p class="m_9">Para más información acceda a la sección de <a href="#contact">contacto</a>, o contacte con nosotros por email o voz.</p>
					<p class="address">Teléfono móvil: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">665897651</span></p>
					<p class="address">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">tuentrenador@dawpt.com</span></p>
				</div>
				<div class="col-md-4 FootMenu">
					<ul class="list">
						<h4 class="m_7">Menu</h4>
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Información</a></li>
						<li><a href="#">Publicar rutina i/o dieta</a></li>
						<li><a href="#">Puntuar rutinas i/o dietas</a></li>
						<li><a href="#">Contacto</a></li>
					</ul>
					<ul class="list1">
						<h4 class="m_7">Consultar rutinas/dietas</h4>
						<li><a href="#">Objetivos</a></li>
						<li><a href="#">Recomendación</a></li>
						
					</ul>
				</div>
				<div class="clear"></div>
=======
      <div class="footer-bottom">
		   <div class="container">
		 	 <div class="row section group">
				<!-- Aqui --> 
>>>>>>> origin/master
	  		  </div>
		 	</div>
		 </div>
		 <div class="copyright">
		  <div class="container">
		    <div class="copy">
		        <p>© 2014 Plantilla creada por <a href="#" target="_blank">Javier Ortega</a></p>
		    </div>
		   <div class="clear"></div>
		  </div>
		  <table >
		  	<tr ng-repeat="a in tdias track by $index">
		  		<td ng-repeat="b in a track by $index">
		  			<select type="select" class="form-control" ng-model="tdias2[$index][$parent.$index]" ng-options="c for c in Exfc"></select>
		  			<select type="select" class="form-control" ng-model="tseries[$index][$parent.$index]" ng-options="c for c in txseries"></select>
		  			<select type="select" class="form-control" ng-model="trepeticiones[$index][$parent.$index]" ng-options="c for c in txrepeticiones"></select>
		  		</td>
		  	</tr>
		  </table>
		  <div id="esp" style="width:50px;height:50px;background-color:red" ng-click="crtl.try()"/>
	     </div>
</body>
<<<<<<< HEAD
<script>
	function myFunction() {
    		document.getElementById("PR").style.display = "block";
	}
</script>
</html>
=======
</html>
>>>>>>> origin/master
