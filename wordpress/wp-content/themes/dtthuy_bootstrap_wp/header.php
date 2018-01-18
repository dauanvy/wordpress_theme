<!DOCTYPE html>
<html lang="en">
<?php wp_head(); ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?php wp_title(); ?></title> 
	<!-- Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" rel="stylesheet">
	
	<link href="<?php bloginfo('template_directory' ); ?>style.css" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="logo col-md-6 col-sm-6 col-xs-12">
					<h3><a href="#">Dtthuy Theme</a></h3>
					</div>
				<div class="search col-md-6 col-sm-6 col-xs-12 text-right">
					<form method="get" action="#">
						<input type="text" placeholder="Nhập từ khóa tìm kiếm" id="q" name="q" value="">
						<input type="submit" value="Tìm Kiếm">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header-menu">
				<!-- Menu do Bootstrap cung cấp có hỗ trợ menu trên di động -->
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<!--bloginfo('url' ) : là hàm để lấy đường dẫn trang của trang web.-->
						<a class="navbar-brand" href="<?php bloginfo('url' ); ?>">Trang chủ</a>
					</div>
									
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<!--
							theme_location: để khai báo vị trí menu ở đây là ‘header-menu’ mình đã tạo trước đó trong file functions.php
							container: là biến để khai báo thẻ chứa menu ở đây để false nghĩa là ko cần thẻ chứa nào.
							menu_class: đây là nội dung class của <ul>, ở đây bootstrap quy định các class này "nav navbar-nav".
				      		-->
						<?php 
							$args = array( 
								'theme_location' => 'header-menu',
								'menu' => '',
								'container' => false,
								'menu_class' => 'nav navbar-nav',
								'items_wrap' => '<ul id="%1$s" class="%2$s sf-menu">%3$s</ul>',
								);
							wp_nav_menu( $args ); 
						?>
				    </div>
					
					<!--
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="#">Giới thiệu</a></li>
							<li><a href="#">Thiết kế web</a></li>
						</ul>
					</div>
					-->
				</nav>
				<!-- End Menu Bootstrap -->
			</div>
		</div>
	</header>