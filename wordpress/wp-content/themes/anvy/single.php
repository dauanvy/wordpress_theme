<?php get_header( ); ?>
<div id="wrapper">
	<!--Neu co anh-->
	<? if( get_the_post_thumbnail( $post_id) ): ?>
		<div class="container">
			<img title="image title" alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:350px;">	
			<h2 class="text-success mt-4"><?php the_title( ); ?></h2>
			<hr />
			<p><i><span><?php the_excerpt(); ?></span></i></p>
			<hr />
		</div>
	<? endif; ?>	
	<!--Neu khong co anh-->
	<? if( !get_the_post_thumbnail( $post_id) ): ?>
		<div class="jumbotron" style="background-image: url('<?php bloginfo('template_directory' ); ?>/images/home-bg.jpg');center center;background-size:cover; width: 100%;height:350px;" >
			<div class="container">
				<h2 style="color:#fff"><?php the_title( ); ?></h2>
				<h4 style="color:#fff"><?php the_excerpt(); ?></h4>
			</div>
		</div>
	<? endif; ?>
	<div class="container av-container">		
		<?php
		/*lay link va du lieu tu filed custom, voi testing1 la ten truong*/
		/* $values = get_post_custom_values("testing1"); echo bloginfo('template_directory' ).$values[0]; */
		?>
		<div class="row">				
			<img title="image title" alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:400px;">			
			<div class="single-content mt-4">
				<p><?php the_post(); the_content( ); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 p-0">
				<h2 class="text-info mt-4 mb-4"><a class="text-info" href="/?page_id=10" >Contact us</a></h2>
				<p class="dropdown-divider" style="border-top: 1px solid #17a2b8;"></p>
				<p class="text-info mt-3 mb-3" style="font-size:120%"><strong>Address:</strong> abc street, xyz Dist, Hanoi City, Vietnam</p>
				<p class="text-info mt-3 mb-3" style="font-size:120%"><strong>Phone:</strong> (84-4) 0123456789</p>
				<p class="text-info mt-3 mb-3" style="font-size:120%"><strong>Hotline:</strong> (84-4) 0123456789</p>
				<p class="text-info mt-3 mb-3" style="font-size:120%"><strong>Email:</strong> info@example.com</p>				
			</div>
			<h2>
				<a class="text-info" target="_blank" href="https://www.facebook.com"><i class="fa fa-facebook-square"></i></a>
				<a class="text-info" target="_blank" href="https://twitter.com"><i class="fa fa-twitter"></i></a>
				<a class="text-info" target="_blank" href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>				
				<a class="text-info" target="_blank" rel="publisher" href="https://plus.google.com"><i class="fa fa-google-plus-square"></i></a>				
			</h2>
		</div>
	</div>
</div>
<?php get_footer( ); ?>