<?php get_header( ); ?>
<div id="wrapper">
	<div class="jumbotron" style="background-image: url('<?php bloginfo('template_directory' ); ?>/images/home-bg.jpg');center center;background-size:cover; width: 100%;height:350px;" >
        <div class="container">
			<h2 style="color:#fff"><?php the_title( ); ?></h2>
			<p style="color:#fff"><?php the_excerpt(); ?></p>
		</div>
    </div>
	<div class="container">	
		<?php the_post(); the_content( ); ?>
	</div>
</div>
<?php get_footer( ); ?>