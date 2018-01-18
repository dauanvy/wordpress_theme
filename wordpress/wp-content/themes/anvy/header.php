<!DOCTYPE html>
<html/>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(); ?></title>
	<!-- Bootstrap -->
	<?php wp_head();  ?>
</head>
<body>
	<header>
		<div class="header-menu">	
			<div class="container mt-2 mb-2">
				<div class="row">
					<div class="col-3">
						<a href="/" class="logo">
							<img src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png" alt="My Logo" width=100px height=100px>					
						</a>
					</div>
					<div class="col-9" style="position: relative;">
						<div style="position: absolute;top: 50%;right:0;margin-right: 1rem;transform: translateY(-50%);">
							<h3 class="text-success text-right m-0">ANVY - MART</h3>						
							<address class="text-success text-right m-0">
							   <i class="fa fa-phone-square fa-lg" aria-hidden="true"></i> (84-4) 0123456789<br />
							   <i class="fa fa-envelope fa-lg" aria-hidden="true"></i> info@example.com<br />							  
							</address>
						</div>
					</div>
				</div>
				
			</div>				
			<!-- End Menu Bootstrap -->						
			<div class="container">
				<p class="m-0" style="border-top:1px solid green"></p>
				<nav class="navbar navbar-expand-lg navbar-light top-bar m-0 p-0">
					<a href="/" class="brand-name logo">
						<span class="text-success">ANVY - MART</span>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
						<?php
							wp_nav_menu( array(
								'menu' => 'header-menu',
								'theme_location' => 'header-menu',
								'depth' => 2,
								'container'         => 'div',
								'container_class'   => 'navbar-collapse collapse ',
								'container_id'      => 'navbar',
								'container' => false,
								'menu_class'        => 'navbar-nav', /*them class vao ul*/
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            => new wp_bootstrap_navwalker())
							);
						?>
					</div>
				</nav>
			</div>	
				
		</div>
	</header>
		