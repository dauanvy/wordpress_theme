<?php get_header( ); ?>
    <div id="wrapper">
      <div class="container">
        <div class="row">
          <div class="content col-md-9 col-sm-9 col-xs-12">
            <h1 class="single-title"><?php the_title( ); ?></h1>
            <div class="single-content">
              Bài viết không tồn tại, vui lòng quay về trang chủ hoặc xem menu bên trên
            </div>
          </div>
          <div class="sidebar col-md-3 col-sm-3 col-xs-12">
            <?php get_sidebar( ); ?>
          </div>
        </div>
      </div>
    </div>
<?php get_footer( ); ?>