<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(); ?></title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_directory' ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory' ); ?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <meta property="fb:app_id" content="appid" />
  </head>
  <body>
    <!-- comment facebook -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4&appId=appid";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- end comment facebook -->
    <header>
      <div class="container">
        <div class="row">
          <div class="logo col-md-6 col-sm-6 col-xs-12"><h1><a href="<?php bloginfo('url' ); ?>">Xuân Thức Theme</a></h1></div>
          <div class="search col-md-6 col-sm-6 col-xs-12 text-right">
            <form method="get" action="#">
              <input type="text" placeholder="Nhập từ khóa tìm kiếm" id="q" name="q" value="">
              <input type="submit" value="Tìm Kiếm">
            </form>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="header-menu">
          <!-- Menu do Bootstrap cung cấp có hỗ trợ menu trên di động -->
          <nav class="navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php bloginfo('url' ); ?>">Trang chủ</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <?php    /**
                * Displays a navigation menu
                * @param array $args Arguments
                */
                $args = array(
                  'theme_location' => 'header-menu',
                  'menu' => '',
                  'container' => false,
                  'menu_class' => 'nav navbar-nav'
                );
              
                wp_nav_menu( $args ); ?>
            </div>
          </nav>
          <!-- End Menu Bootstrap -->
        </div>
      </div>
    </header>