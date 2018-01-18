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
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php bloginfo('url' ); ?>">Trang chủ</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<?php
						wp_nav_menu( array(
							'menu' => 'header-menu',
							'theme_location' => 'header-menu',
							'depth' => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'container' => false,
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
					?>	
				</div>
			 </nav>				
			<!-- End Menu Bootstrap -->
		</div>
	</header>
		