<?php get_header( ); ?>
<div id="wrapper">
	<div class="jumbotron" style="background-image: url('<?php bloginfo('template_directory' ); ?>/images/home-bg.jpg'); height:350px" >
        <div class="container">
			<h1 style="color:#fff">Dtthuy Blog</h1>
			<p style="color:#fff">A Blog using bootstrap by Dtthuy</p>
		</div>
    </div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-8 col-sm-8 col-xs-12 col-md-push-2 col-sm-push-2">	
					<div class="box-index">
						<div class="row">
							<?php /*if(have_posts()): while(have_posts()): the_post(); )*/?>	
							<!--
							//cat=1: id cua category
							//posts_per_page = 8: cos 8 bai viet
							<?php/* $tkweb = new WP_Query('posts_per_page=8&cat=1'); if($tkweb->have_posts()): while($tkweb->have_posts()): $tkweb->the_post();*/?>	
							-->
							<?php $tkweb = new WP_Query('posts_per_page=8&cat=1'); if($tkweb->have_posts()): while($tkweb->have_posts()): $tkweb->the_post();?>							
								<div class="media">
									<div class="media-left">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'post-thumbnail')); ?></a>
									</div>
									<div class="media-body">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h3>
										<p><?php the_excerpt(); ?></p>
									</div>
								</div>
							<?php endwhile; endif;?>
							<div class="text-center">
								<!--Phai active plugin WP-PageNavi-->
								<?php wp_pagenavi(); ?>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</div><!--end div wrapper-->
<?php get_footer( ); ?>