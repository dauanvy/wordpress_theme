<?php get_header( ); ?>
<div id="wrapper">
	<div class="jumbotron" style="background-image: url('<?php bloginfo('template_directory' ); ?>/images/home-bg.jpg'); height:350px" >
        <div class="container">
			<h2 style="color:#fff"><?php the_title( ); ?></h2>
			<p style="color:#fff"><?php the_excerpt(); ?></p>
		</div>
    </div>
	<div class="container">
		<div class="row">
			<div class="col-md-push-2 col-sm-push-2 col-md-8 col-sm-8 col-xs-12">				
				<div class="single-content">
					<?php the_post(); the_content( ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer( ); ?>