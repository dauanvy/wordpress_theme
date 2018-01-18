<?php get_header( ); ?>
<div id="wrapper">
	<!-- Banner
	<div class="jumbotron" style="background-image: url('<?php/* bloginfo('template_directory' ); */?>/images/home-bg.jpg'); height:350px" >
        <div class="container">
			<h1 style="color:#fff">Dtthuy Blog</h1>
			<p style="color:#fff">A Blog using bootstrap by Dtthuy</p>
		</div>
    </div>
	-->
	<!--== Slider ==-->
	<div id="demo" class="carousel slide" data-ride="carousel" data-interval="3000">
		<!-- Indicators -->
		<ul class="carousel-indicators">
			<?php $tkweb = new WP_Query('cat=3'); if($tkweb->have_posts()): while($tkweb->have_posts()): $tkweb->the_post();?>										
				<? if( has_post_thumbnail( $post_id ) ): ?>
					<?php $index = $tkweb->current_post?>						
					<? if( $index == 0 ): ?><li class="active" data-target="#demo" data-slide-to="'.$index.'"></li><? endif; ?>
					<? if( $index != 0 ): ?><li data-target="#demo" data-slide-to="'.$index.'"></li><? endif; ?>
				<? endif; ?>
			<?php endwhile; endif;?>
		</ul>
		<!-- The slideshow -->
		<div class="carousel-inner">
			<?php $tkweb = new WP_Query('cat=3'); if($tkweb->have_posts()): while($tkweb->have_posts()): $tkweb->the_post();?>										
				<? if( has_post_thumbnail( $post_id ) ): ?>
					<?php $index = $tkweb->current_post?>	
					<? if( $index == 0 ): ?>
						<div class="carousel-item active">
							<img title="image title" alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:400px;">						
						</div>
					<? endif; ?>
					<? if( $index != 0 ): ?>
						<div class="carousel-item">
							<img title="image title" alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:400px;">						
						</div>
					<? endif; ?>
				<? endif; ?>
			<?php endwhile; endif;?>
		</div>
		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
	<!--== Main Homepage ==-->
	<section id="section1" class="mt-4">
		<div class="container">
			<h2 class="text-center text-success mb-4">Category</h2>
			<div class="row text-center text-lg-center">
				<?php $tkweb = new WP_Query('cat=5'); if($tkweb->have_posts()): while($tkweb->have_posts()): $tkweb->the_post();?>										
					<? if( has_post_thumbnail( $post_id ) ): ?>
					<div class="col-lg-4 mb-4">
						<div class="card">
							<a href="<?php the_permalink(); ?>" class="d-block h-100">
								<div class="av-hovergallery">
									<img title="image title" alt="thumb image" class="wp-post-image card-img-top" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:350px;">
								</div>								
							</a>							
							<div class="card-img-overlay">
								<h4 class="card-title text-success"><strong><?php the_title( ); ?></strong></h4>		
								<p class="card-text text-success"><?php the_excerpt(); ?></p>
							</div>
						</div>
					</div>
				<? endif; ?>
				<?php endwhile; endif;?>
			</div>
		</div>
	</section>
	<!--
	<section id="section2" class="mt-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-8 col-sm-8 col-xs-12 col-md-push-2 col-sm-push-2">	
						<div class="row">
							<?php /* $tkweb = new WP_Query('posts_per_page=8&cat=1'); if($tkweb->have_posts()): while($tkweb->have_posts()): $tkweb->the_post();?>							
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
								<?php wp_pagenavi(); */?>
							</div>							
						</div>
					</div>				
				</div>
			</div>
		</div>
	</section>
	-->
</div><!--end div wrapper-->
<?php get_footer( ); ?>