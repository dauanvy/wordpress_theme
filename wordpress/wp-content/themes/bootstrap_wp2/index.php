<?php get_header( ); ?>
<div id="wrapper">
	<div class="container">
		<div class="row">
			<div class="content col-md-9 col-sm-9 col-xs-12">				
				<div class="box-index">
					<h2>Thiết kế web</h2>
					<div class="row">
						<?php /*
							Dung de lap category va hien thi so luong post tren 1 trang
							//cat=1: id cua category
							//posts_per_page = 8: cos 8 bai viet
							$tkweb = new WP_Query('posts_per_page=8&cat=1'); if($tkweb->have_posts()): while($tkweb->have_posts()): $tkweb->the_post(); 
							*/?>						
						<?php if(have_posts()): while(have_posts()): the_post(); ?>						
							<div class="item col-md-3 col-sm-3 col-xs-6">
								<?php if ( has_post_thumbnail() ) {?>								
										<span><a href="<?php the_permalink(); ?>" class="thumbnail"><?php the_post_thumbnail('thumbnail' ); ?></a></span>
								<?php } ?>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h3>
							</div>
						<?php endwhile; endif;?>
						<div class="text-center">
							<?php wp_pagenavi(); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="sidebar-item">
				<div class="sidebar col-md-3 col-sm-3 col-xs-12">
						<?php/*
							if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('right-sidebar') ) :
							endif;
							*/?>
							
						<?php
							if( is_active_sidebar('right-sidebar') ) :
								dynamic_sidebar('right-sidebar');
							else :
								_e('This is sidebar. You have to add some widgets', 'Testing Side3');
							endif;
						?>
				</div><!-- end .sidebar-item -->
			</div>
		</div>
	</div>
<?php get_footer( ); ?>