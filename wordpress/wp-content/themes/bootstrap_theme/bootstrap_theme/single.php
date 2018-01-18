<?php get_header( ); ?>
    <div id="wrapper">
      <div class="container">
        <div class="row">
          <div class="content col-md-9 col-sm-9 col-xs-12">
            <h1 class="single-title"><?php the_title( ); ?></h1>
            <div class="single-content">
              <?php the_post(); the_content( ); ?>
            </div>
            <div class="comment">
              <div id="ja-fb-comments" class="fb-comments" data-width="100%" data-numposts="15" data-href="<?php the_permalink(); ?>"></div>
            </div>
            <div class="box-index">
              <h2>Thiết kế web</h2>
              <div class="row">
                <?php $tkweb = new WP_Query('posts_per_page=8&cat=1');
                if($tkweb->have_posts()): while($tkweb->have_posts()): $tkweb->the_post(); ?>
                <div class="item col-md-3 col-sm-3 col-xs-6">
                  <span><a href="<?php the_permalink(); ?>" class="thumbnail"><?php the_post_thumbnail('thumbnail' ); ?></a></span>
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h3>
                </div>
                <?php endwhile; endif; ?>
              </div>
            </div>
          </div>
          <div class="sidebar col-md-3 col-sm-3 col-xs-12">
            <?php get_sidebar( ); ?>
          </div>
        </div>
      </div>
    </div>
<?php get_footer( ); ?>