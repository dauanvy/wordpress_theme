<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(); ?></title>
		<title>Bootstrap Wordpress Template</title> 
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	</head>
	<body>
		<div id="wrapper">
			<div class="container">
				<div class="row">
					<div class="content col-md-9 col-sm-9 col-xs-12">				
						<h1 class="single-title"><?php the_title( ); ?></h1>
						<div class="single-content">
							<?php the_post(); the_content( ); ?>
						</div>
					</div>
					<div class="sidebar col-md-3 col-sm-3 col-xs-12">
						<?php get_sidebar( ); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>