<!DOCTYPE HTML>
<html>
<head>
<title>Free Gym Website Template | Trainers :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!--<link href="css/style.css" rel='stylesheet' type='text/css' />-->
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
<body ng-app="ui.bootstrap.demo" ng-controller="maincontroller as crtl">
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
						<div class="facts">
							<ul class="tab-left">
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
			<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-2">
			  <div class="facts">
				<ul class="tab-left">
				  <table class="timetable">
				<thead>
					<tr>
						<th></th>	<th>MONDAY</th>	<th>TUESDAY</th>	<th>WEDNESDAY</th>	<th>THURSDAY</th>	<th>FRIDAY</th>	<th>SATURDAY</th>	<th>SUNDAY</th>	</tr>
				</thead>
				<tbody><tr class="row_1 row_gray">
						<td>
							06.00 - 07.00
						</td><td class="event"><a href="#" title="Gym Fitness">Gym Fitness</a>06.00 - 07.00</td><td class="event"><a href="#" title="Gym Fitness">Gym Fitness</a>06.00 - 07.00</td><td class="event" rowspan="3"><a href="#" title="Gym Fitness">Gym Fitness</a>06.00 - 08.30</td><td class="event" rowspan="3"><a href="#" title="Gym Fitness">Gym Fitness</a>06.00 - 08.30</td><td class="event" rowspan="3"><a href="#" title="Gym Fitness">Gym Fitness</a>06.00 - 08.30</td><td></td><td></td></tr><tr class="row_2">
						<td>
							07.00 - 08.00
						</td><td></td><td></td><td></td><td></td></tr><tr class="row_3 row_gray">
						<td>
							08.00 - 09.00
						</td><td></td><td></td><td></td><td></td></tr><tr class="row_4">
						<td>
							09.00 - 10.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_5 row_gray">
						<td>
							10.00 - 11.00
						</td><td></td><td></td><td></td><td></td><td></td><td class="event"><a href="#" title="Gym Fitness">Gym Fitness</a>10.00 - 11.00</td><td class="event"><a href="#" title="Gym Fitness">Gym Fitness</a>10.00 - 11.00</td></tr><tr class="row_6">
						<td>
							11.00 - 12.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_7 row_gray">
						<td>
							12.00 - 13.00
						</td><td></td><td></td><td class="event"><a href="#" title="Gym Fitness">Gym Fitness</a>12.00 - 13.00</td><td class="event"><a href="#" title="Gym Fitness">Gym Fitness</a>12.00 - 13.00</td><td></td><td class="event"><a href="#" title="Gym Fitness">Gym Fitness</a>12.00 - 13.00</td><td class="event"><a href="#" title="Gym Fitness">Gym Fitness</a>12.00 - 13.00</td></tr><tr class="row_8">
						<td>
							13.00 - 14.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_9 row_gray">
						<td>
							14.00 - 15.00
						</td><td class="event" rowspan="3"><a href="#" title="Gym Fitness">Gym Fitness</a>14.00 - 16.15</td><td class="event" rowspan="3"><a href="#" title="Gym Fitness">Gym Fitness</a>14.00 - 16.15</td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_10">
						<td>
							15.00 - 16.00
						</td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_11 row_gray">
						<td>
							16.00 - 17.00
						</td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_12">
						<td>
							17.00 - 18.00
						</td><td></td><td></td><td></td><td></td><td class="event" rowspan="3"><a href="#" title="Gym Fitness">Gym Fitness</a>17.30 - 20.00</td><td class="event"><a href="#" title="Gym Fitness">Gym Fitness</a>17.00 - 18.00</td><td class="event"><a href="#" title="Gym Fitness">Gym Fitness</a>17.00 - 18.00</td></tr><tr class="row_13 row_gray">
						<td>
							18.00 - 19.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_14">
						<td>
							19.00 - 20.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>	
				</tbody>
			</table>
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
      <div class="footer-bottom">
		   <div class="container">
		 	 <div class="row section group">
				<!-- Aqui --> 
	  		  </div>
		 	</div>
		 </div>
		 <div class="copyright">
		  <div class="container">
		    <div class="copy">
		        <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
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
</body>
</html>