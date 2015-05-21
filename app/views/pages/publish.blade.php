<!DOCTYPE HTML>
<html>
<head>
<title>Free Gym Website Template | Trainers :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
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
			<div class="row trainers_middle_bottom">
			  <div class="col-md-4">
		        <h3 class="m_2">Our Trainers</h3>
		         <div class="course_demo">
		          <ul id="flexiselDemo3">	
					<li><img src="images/pic4.jpg" /><div class="desc">
						<h3>Lorem Ipsum<br><span class="m_text">Spinning</span></h3>
						<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
						<div class="coursel_list">
							<i class="heart1"> </i>
							<i class="like"> </i>
						</div>
						<div class="coursel_list1">
							<i class="twt"> </i>
							<i class="fb"> </i>
						</div>
						<div class="clear"></div>
					</div></li>
					<li><img src="images/pic5.jpg" /><div class="desc">
						<h3>Lorem Ipsum<br><span class="m_text">Kik Boxing</span></h3>
						<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
						<div class="coursel_list">
							<i class="heart2"> </i>
							<i class="like1"> </i>
						</div>
						<div class="coursel_list1">
							<i class="twt"> </i>
							<i class="fb"> </i>
						</div>
						<div class="clear"></div>
					</div></li>	
					<li><img src="images/pic4.jpg" /><div class="desc">
						<h3>Lorem Ipsum<br><span class="m_text">Spinning</span></h3>
						<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
						<div class="coursel_list">
							<i class="heart2"> </i>
							<i class="like1"> </i>
						</div>
						<div class="coursel_list1">
							<i class="twt"> </i>
							<i class="fb"> </i>
						</div>
						<div class="clear"></div>
					</div></li>	
					<li><img src="images/pic5.jpg" /><div class="desc">
						<h3>Lorem Ipsum<br><span class="m_text">Kik Boxing</span></h3>
						<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
						<div class="coursel_list">
							<i class="heart2"> </i>
							<i class="like1"> </i>
						</div>
						<div class="coursel_list1">
							<i class="twt"> </i>
							<i class="fb"> </i>
						</div>
						<div class="clear"></div>
					</div></li>	
					<li><img src="images/pic4.jpg" /><div class="desc">
						<h3>Lorem Ipsum<br><span class="m_text">Spinning</span></h3>
						<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
						<div class="coursel_list">
							<i class="heart2"> </i>
							<i class="like1"> </i>
						</div>
						<div class="coursel_list1">
							<i class="twt"> </i>
							<i class="fb"> </i>
						</div>
						<div class="clear"></div>
					</div></li>							    	  	       	   	    	
				</ul>
				<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo3").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: { 
			    		portrait: { 
			    			changePoint:480,
			    			visibleItems: 1
			    		}, 
			    		landscape: { 
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: { 
			    			changePoint:768,
			    			visibleItems: 2
			    		}
			    	}
			    });
			    
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	  </div>
     </div>
     <div class="col-md-4">
     	 <h3 class="m_2">Next Events</h3>
     	 <div class="events">
     	 	<div class="event-top">
	     	 	<ul class="event1">
	     	 		<h4>26 April, 2014</h4>
	     	 		<img src="images/pic.jpg" alt=""/>
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<span class="m_5">h.12.00-h.13.00</span>
	     	 		<h4>Aerobics</h4>
	     	 		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,. </p>
	     	 		<div class="btn2">
					   <a href="#">Reservation</a>
					</div>
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	<div class="event-bottom">
	     	 	<ul class="event1">
	     	 		<h4>26 April, 2014</h4>
	     	 		<img src="images/pic.jpg" alt=""/>
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<span class="m_5">h.12.00-h.13.00</span>
	     	 		<h4>Spinning</h4>
	     	 		<p>Lorem ipsum dolor sit amet. </p>
	     	 		<div class="btn2">
					   <a href="#">Reservation</a>
					</div>
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 </div>
       </div>
       <div class="col-md-4">
     	 <h3 class="m_2">From the blog</h3>
     	 <div class="blog_events">
     	 	<ul class="tab-left1">
				<span class="tab1-img"><img src="images/pic7.jpg" alt=""></span>
				<div class="tab-text1">
				 <p><a href="#">nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip</a></p>
				 <span class="m_date">25 April, 2014</span>
				</div>
				<div class="clear"></div>
			</ul>
			<ul class="tab-left1">
				<span class="tab1-img"><img src="images/pic6.jpg" alt=""></span>
				<div class="tab-text1">
				 <p><a href="#">soluta nobis eleifend option congue nihil imperdiet doming id</a></p>
				 <span class="m_date">25 April, 2014</span>
				</div>
				<div class="clear"></div>
			</ul>
			<ul class="tab-last1">
				<span class="tab1-img"><img src="images/pic8.jpg" alt=""></span>
				<div class="tab-text1">
				 <p><a href="#">quod mazim placerat facer possim assum. Typi non habent</a></p>
				 <span class="m_date">25 April, 2014</span>
				</div>
				<div class="clear"></div>
			</ul>
     	 </div>
        </div>
        <div class="clear"></div>
       </div>
      </div>
      <div class="traine_login">
	  	    <div class="row login_details">
		 	  <div class="col-md-6">
				  <div class="join">
				  	 <h3>Why Join ?</h3>
				  	 <h4>sed diam nonummy nibh euismod</h4>
				  	 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam<br> nibh euismod tincidunt ut laoreet dolore magna . </p>	
				  	 <div class="btn3">
				       <a href="#">Join Today</a>
			         </div>	
				  </div>
				</div>
				 <div class="col-md-6">
				  <div class="join-right">
				  	 <h3>Why Join ?</h3>
				  	 <h4>sed diam nonummy nibh euismod</h4>
				  	 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam<br> nibh euismod tincidunt ut laoreet dolore magna . </p>	
				  	 <div class="buttons_login">
				  	 <div class="btn4">
				       <a href="login.html">Log In</a>
			         </div>	
			         <div class="p-ww">
					  <form>
					   <input class="date" id="datepicker" type="text" value="View Calender" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'View Calender';}">
					  </form>
				     </div>
			         <div class="clear"></div>
			         <!---strat-date-piker---->
				  <script src="js/jquery-ui.js"></script>
				  <script>
				  $(function() {
				    $( "#datepicker" ).datepicker();
				  });
				  </script>
				  </div>
				  </div>
				</div>
				<div class="clear"></div>
		   </div>
	  </div>
	  <div class="about_gallery">
		 	<div class="container">
		 	  <div class="col-md-8">
		     	 <h3 class="m_2">Gallery</h3>
		     	 <div id="ca-container" class="ca-container">
				    <div class="ca-wrapper">
				         <div class="ca-item ca-item-1">
						   <div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon1"> </div>
							</div>
						  </div>
						<div class="ca-item ca-item-2">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon2"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-3">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon3"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-4">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon4"> </div>
						     </div>
						</div>
						<div class="ca-item ca-item-5">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon5"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-6">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon6"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-7">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon7"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-8">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon"> </div>
							</div>
						</div>
			    </div>
			 </div>
				    <script type="text/javascript">
						$('#ca-container').contentcarousel();
					</script>
		   </div>
		   <div class="col-md-4">
		   	 <h3 class="m_2">Partner</h3>
			  <ul class="partner">
			  	<li><img src="images/p6.png" alt=""/></li>
			  	<li><img src="images/p5.png" alt=""/></li>
			  	<li><img src="images/p4.png" alt=""/></li>
			  	<li><img src="images/p3.png" alt=""/></li>
			  	<li><img src="images/p2.png" alt=""/></li>
			  	<li><img src="images/p1.png" alt=""/></li>
			  	 <div class="clear"></div>
			  </ul>
		    </div>
	        <div class="clear"></div>
	       </div>
		  </div>
      </div>
      <div class="footer-bottom">
		   <div class="container">
		 	 <div class="row section group">
				<div class="col-md-4">
				   <h4 class="m_7">Newsletter Signup</h4>
				   <p class="m_8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy.</p>
				      <form class="subscribe">
			             <input type="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
					  </form>
			          <div class="subscribe1">
			            <a href="#">Submit Email<i class="but_arrow"> </i></a>
			          </div>
				</div>
				<div class="col-md-4">
					<div class="f-logo">
						<img src="images/logo.png" alt=""/>
					</div>
					<p class="m_9">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis</p>
					<p class="address">Phone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">(00) 222 666 444</span></p>
					<p class="address">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">info[at]mycompany.com</span></p>
				</div>
				<div class="col-md-4">
					<ul class="list">
						<h4 class="m_7">Menu</h4>
						<li><a href="#">About</a></li>
						<li><a href="#">Trainers</a></li>
						<li><a href="#">Classes</a></li>
						<li><a href="#">Pricing</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<ul class="list1">
						<h4 class="m_7">Community</h4>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Forum</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Newsletter</a></li>
					</ul>
				</div>
				<div class="clear"></div>
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
</html>
