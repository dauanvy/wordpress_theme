<?php get_header( ); ?>
    <div id="wrapper">
      <div class="container">
        <div class="row">
          <div class="content col-md-9 col-sm-9 col-xs-12">
            <h1 class="archive-title"><?php single_cat_title('', true ); ?></h1>
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="item-archive">
              <div class="row">
                <div class="thumb col-md-3 col-sm-4 col-xs-12"><a href="<?php the_permalink(); ?>" class="thumbnail"><?php the_post_thumbnail('thumbnail' ); ?></a></div>
                <div class="detail col-md-9 col-sm-8 col-xs-12">
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h2>
                  <?php the_excerpt(); ?>
                  <p class="text-right"><a href="<?php the_permalink(); ?>" class="readmore">Xem thêm...</a></p>
                </div>
              </div>
            </div><!-- end .item -->
            <?php endwhile; endif; ?>
            <div class="text-center">
              <?php wp_pagenavi(); ?>
            </div>
          </div>
          <div class="sidebar col-md-3 col-sm-3 col-xs-12">
            <?php get_sidebar( ); ?>
          </div>
        </div>
      </div>
    </div>

    <?php get_footer( ); ?>