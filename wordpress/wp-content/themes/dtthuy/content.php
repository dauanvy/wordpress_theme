<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-thumbnail">
		<?php dtthuy_thumbnail( 'thumbnail' ); ?>
	</div>
	<header class="entry-header">
		<?php dtthuy_entry_header(); ?>
		<?php dtthuy_entry_meta() ?>
	</header>
	<div class="entry-content">
		<?php dtthuy_entry_content(); ?>
        <?php ( is_single() ? dtthuy_entry_tag() : '' ); ?>
	</div>
</article>