<?php get_header();?>

<div class="content">
	<section id="main-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('content', get_post_format()); ?>
			<?php get_template_part( 'author-bio' ); ?>
			<h1 style="color:red; background:green">Page</h1>
        <?php endwhile; ?>
        <?php else : ?>
			<?php get_template_part('content',get_post_format());?>
        <?php endif; ?>
	</section>
	<section id="sidebar">
		<?php get_sidebar(); ?>
	</section>
</div>

<?php get_footer();?>