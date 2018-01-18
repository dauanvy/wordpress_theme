<?php get_header( ); ?>
    <div id="wrapper">
		<div class="jumbotron" style="background-image: url('<?php bloginfo('template_directory' ); ?>/images/home-bg.jpg');center center;background-size:cover; width: 100%;height:350px;" >
			<div class="container">
				<h2 style="color:#fff"><?php single_cat_title('', true ); ?></h2>				
			</div>
		</div>
		<div class="container">
			<?php/*
				$category = get_the_category(); 
				echo $category[0]->cat_ID;//hien thiid cua category
			*/?>
			<div class="row text-center text-lg-center">				
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<div class="col-lg-3 mb-4">
						<div class="card">
							<a href="<?php the_permalink(); ?>" class="d-block h-100">
								<div class="av-hovergallery">
									<img title="image title" alt="thumb image" class="wp-post-image card-img-top" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:250px;">
								</div>
							</a>							
							<div class="card-img-overlay">
								<h4 class="card-title text-success"><strong><?php the_title( ); ?></strong></h4>		
								<p class="card-text text-success"><?php the_excerpt(); ?></p>
							</div>
						</div>
					</div>
				<?php endwhile; endif; ?>
				<div class="text-center">
					<?php wp_pagenavi(); ?>
				</div>
			</div>
		</div>
    </div>
<?php get_footer( ); ?>