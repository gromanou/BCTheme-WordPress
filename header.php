<!DOCTYPE html>

<html>

	<head>

		<title> <?php wp_title('&laquo;', true , 'right'); bloginfo('name'); ?> </title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type='text/css' media='screen' >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		<!-- Link to a responcive menu app -->
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/BC.responsiveMenu.js"></script>	

		<!-- load menu magnet app  --> 
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/magnet.js"></script>	

		<!-- GOOGLE FONT  font-family: 'Lato', sans-serif; -->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,400italic' rel='stylesheet' type='text/css'>

		<script>

		

			$(document).ready(function($) {				

				// Weather API
				$.ajax({
					url : "http://api.wunderground.com/api/7d01ae20bf13052e/geolookup/conditions/q/NY/brooklyn.json",
					dataType : "jsonp",
					success : function(parsed_json) {
						var location = parsed_json['location']['city'];
						var temp_f = parsed_json['current_observation']['temperature_string'];
						//alert("Temperature in " + location + " is: " + temp_f);
					}
				});



			  	// RESPONCIVE MENU 
			  	// options for responcive menu
				var options = {
					triggerElement: $("#triger"),
					targetElement: $("#mainNav ul"),
					toggleSpeed: 200,	// optional
					triggerWidth: 960
				}
				// initiate menu function
				BCresponsiveMenu(options);
				//////////////////

				// Magnet function 
				// lets menu stick to the top on scroll
				BCmagnet("mainNav","magnet",true);
				//////////////////


			});

		</script>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		

		<?php wp_head(); ?>


	</head>



	

	<body <?php body_class(); ?> >
		

		<header>
			<div class="container">
				<div id="headerTop">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('template_url');?>/images/tigr-small.png" alt="logo" id="logo">
						<div id="site-name"><h2><?php bloginfo( 'name' ); ?></h2></div>
						<div id="slogan">
							<h5><?php bloginfo( 'description' ); ?></h5>
						</div>
					</a>
				</div>



			</div>
			<nav id="mainNav">
				<div class="container">
					<div id="triger">Menu</div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
									
				</div>		
			</nav>	
		</header>	


