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
			<div class="container" >
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="/">Dtthuy Blog</a>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<?php
								wp_nav_menu( array(
									'menu' => 'header-menu',
									'theme_location' => 'header-menu',
									'depth' => 2,
									'container'         => 'div',
									'container_class'   => 'navbar-collapse collapse ',
									'container_id'      => 'navbar',
									'container' => false,
									'menu_class'        => 'nav navbar-nav navbar-right',
									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'walker'            => new wp_bootstrap_navwalker())
								);
							?>
						</div><!--/.nav-collapse -->
					</div><!--/.container-fluid -->
				</nav>
			</div>
						
			<!-- End Menu Bootstrap -->
		</div>
	</header>
		