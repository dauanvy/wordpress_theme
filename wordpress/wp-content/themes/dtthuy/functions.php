<?php
/**
@Thiet lap cac hang du lieu quan trong
@THEME_URL = get_stylesheet_directory() - duong dan toi thu muc theme
@CORE = thu muc /core cua theme, chua cac file nguon quan trong
**/
define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL . '/core');
//Thiet lap $content_width de khai bao cao kich thuoc chieu rong cua noi dung
if(!isset($content_width)){
	//Neu bien $content_width chua co du lieu thi gan du lieu cho noi
	$content_width = 630;
}
//Thiet lap cac chac nang se duoc theme ho tro
if(!function_exists('dtthuy_theme_setup')){
	//neu chua co ham dtthuy_theme_setup thi se tao moi noi
	function dtthuy_theme_setup(){
		//Thiep lap theme co the dich duoc
		$language_folder = THEME_URL.'/languages';
		load_theme_textdomain('dtthuy', $language_folder);
		
		//Tu chen RSS Feed links trng <head>
		add_theme_support('automatic-feed-links');
		
		//Them chuc nang post thumbnail
		add_theme_support('post-thumbnails');
		
		//Them chuc nang title-tag de tu them title-tag
		add_theme_support('title-tag');
		
		//Them chuc nang post formats
		add_theme_support('post-formats',
			array(
				'image',
				'video',
				'gallery',
				'quote',
				'link'
			)
		);
		
		//Them chuc nang custom background
		$default_backgound = array(
			'default-color' => '#e8e8e8',		
		);
		
		add_theme_support('custom-background',$default_backgound);
		//Tao menu cho theme
		register_nav_menu ('primary-menu', __('Primary Menu', 'dtthuy'));
		
		//Tao sidebar cho theme
		$sidebar = array(
			'name' => __('Main Sidebar', 'dtthuy'),
			'id' => 'main-sidebar',
			'description' => 'Main sidebar for dtthuy theme',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		);
		register_sidebar($sidebar);
		/***************Cac ham style CSS va JS***********************/
		/**
			@ Chèn CSS và Javascript vào theme
			@ sử dụng hook wp_enqueue_scripts() để hiển thị nó ra ngoài front-end
		**/
		function dtthuy_styles() {
			/*
				* Hàm get_stylesheet_uri() sẽ trả về giá trị dẫn đến file style.css của theme
				* Nếu sử dụng child theme, thì file style.css này vẫn load ra từ theme mẹ
			*/
			wp_register_style( 'main-style', get_template_directory_uri() . '/style.css', 'all' );
			wp_enqueue_style( 'main-style' );
			/**/
			//Chèn file CSS của SuperFish Menu
			wp_register_style( 'superfish-css', get_template_directory_uri() . '/src/css/superfish.css', 'all' );
			wp_enqueue_style( 'superfish-css' );

			//Chèn file JS của SuperFish Menu

			wp_register_script( 'superfish-js', get_template_directory_uri() . '/src/js/superfish.js', array('jquery') );
			wp_enqueue_script( 'superfish-js' );
			//Chèn file JS custom.js
			wp_register_script( 'custom-js', get_template_directory_uri() . '/src/js/custom.js', array('jquery') );
			wp_enqueue_script( 'custom-js' );
			
			}
			
		add_action( 'wp_enqueue_scripts', 'dtthuy_styles' );
		
		/***************Cac ham hien thi header***********************/
		/**
			@Thiet lap jam hien thi logo
			@dtthuy_logo()
		**/
		if ( ! function_exists( 'dtthuy_logo' ) ) {
			function dtthuy_logo() {?>
				<div class="logo">			 
					<div class="site-name">
						<?php	if ( is_home() ) {
									printf(
										'<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
										get_bloginfo( 'url' ),
										get_bloginfo( 'description' ),
										get_bloginfo( 'sitename' )
									);
								}
								else {
									printf(
										'<p><a href="%1$s" title="%2$s">%3$s</a></p>',
										get_bloginfo( 'url' ),
										get_bloginfo( 'description' ),
										get_bloginfo( 'sitename' )
									  );
						} // endif ?>
					</div>
					<div class="site-description"><?php bloginfo( 'description' ); ?></div>			 
				</div>
			  <?php }
			};
		/**
			@ Thiết lập hàm hiển thị menu
			@ dtthuy_menu( $slug )
		**/		
		if ( ! function_exists( 'dtthuy_menu' ) ) {
			function dtthuy_menu( $slug ) {
				$menu = array(
					'theme_location' => $slug,
					'container' => 'nav',
					'container_class' => $slug,
					//De hien thi menu so xuong voi plugin superfish
					'items_wrap' => '<ul id="%1$s" class="%2$s sf-menu">%3$s</ul>',
				);
			wp_nav_menu( $menu );
		  }
		};
		
		/***************Cac ham hien thi footer***********************/
		/***************Cac ham hien thi content***********************/
		/**
		@ Tạo hàm phân trang cho index, archive.
		@ Hàm này sẽ hiển thị liên kết phân trang theo dạng chữ: Newer Posts & Older Posts
		@ dtthuy_pagination()
		**/
		if ( ! function_exists( 'dtthuy_pagination' ) ) {
			function dtthuy_pagination() {
				/*
				 * Không hiển thị phân trang nếu trang đó có ít hơn 2 trang
				 */
				if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
					return '';
				}?>		
				<nav class="pagination" role="navigation">
					<?php if ( get_next_post_link() ) : ?>
						<div class="prev"><?php next_posts_link( __('Older Posts', 'thachpham') ); ?></div>
					<?php endif; ?>
				 
					<?php if ( get_previous_post_link() ) : ?>
						<div class="next"><?php previous_posts_link( __('Newer Posts', 'thachpham') ); ?></div>
					<?php endif; ?>
				 
				</nav><?php
			  }
			};
		/**
			@ Hàm hiển thị ảnh thumbnail của post.
			@ Ảnh thumbnail sẽ không được hiển thị trong trang single
			@ Nhưng sẽ hiển thị trong single nếu post đó có format là Image
			@ dtthuy_thumbnail( $size )
		**/
		if ( ! function_exists( 'dtthuy_thumbnail' ) ) {
			function dtthuy_thumbnail( $size ) {
		 
			// Chỉ hiển thumbnail với post không có mật khẩu
			if ( ! is_single() &&  has_post_thumbnail()  && ! post_password_required() || has_post_format( 'image' ) ) : ?>
				<figure class="post-thumbnail"><?php the_post_thumbnail( $size ); ?></figure><?php
			endif;
		  }
		};
		/**
			@ Hàm hiển thị tiêu đề của post trong .entry-header
			@ Tiêu đề của post sẽ là nằm trong thẻ <h1> ở trang single
			@ Còn ở trang chủ và trang lưu trữ, nó sẽ là thẻ <h2>
			@ dtthuy_entry_header()
		**/
		if ( ! function_exists( 'dtthuy_entry_header' ) ) {
			function dtthuy_entry_header() {
				if ( is_single() ) : ?>			 
					<h1 class="entry-title">
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<?php the_title(); ?>
						</a>
					</h1>
				<?php else : ?>
					<h2 class="entry-title">
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<?php the_title(); ?>
						</a>
					</h2><?php			 
				endif;
		  }
		};
		/**
			@ Hàm hiển thị thông tin của post (Post Meta)
			@ dtthuy_entry_meta()
		**/
		if( ! function_exists( 'dtthuy_entry_meta' ) ) {
			function dtthuy_entry_meta() {
				if ( ! is_page() ) :
					echo '<div class="entry-meta">';
		 
					// Hiển thị tên tác giả, tên category và ngày tháng đăng bài
					printf( __('<span class="author">Posted by %1$s</span>', 'dtthuy'),
						get_the_author() );
		 
					printf( __('<span class="date-published"> at %1$s</span>', 'dtthuy'),
					  get_the_date() );
			 
					printf( __('<span class="category"> in %1$s</span>', 'dtthuy'),
					  get_the_category_list( ', ' ) );		 
				// Hiển thị số đếm lượt bình luận
				if ( comments_open() ) :
					echo ' <span class="meta-reply">';
						comments_popup_link(
						  __('Leave a comment', 'dtthuy'),
						  __('One comment', 'dtthuy'),
						  __('% comments', 'dtthuy'),
						  __('Read all comments', 'dtthuy')
						 );
					echo '</span>';
				endif;
					echo '</div>';
				endif;
			}
		};
		/*
			 * Thêm chữ Read More vào excerpt
		 */
		function dtthuy_readmore() {
			return '...<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'dtthuy') . '</a>';
		}
		add_filter( 'excerpt_more', 'dtthuy_readmore' );
		 
		/**
		@ Hàm hiển thị nội dung của post type
		@ Hàm này sẽ hiển thị đoạn rút gọn của post ngoài trang chủ (the_excerpt)
		@ Nhưng nó sẽ hiển thị toàn bộ nội dung của post ở trang single (the_content)
		@ dtthuy_entry_content()
		**/
		if ( ! function_exists( 'dtthuy_entry_content' ) ) {
			function dtthuy_entry_content() {		 
				if ( ! is_single() ) :
					the_excerpt();
				else :
					the_content();
					//Code hiển thị phân trang trong post type
					$link_pages = array(
						'before' => __('<p>Page:', 'dtthuy'),
						'after' => '</p>',
						'nextpagelink'     => __( 'Next page', 'dtthuy' ),
						'previouspagelink' => __( 'Previous page', 'dtthuy' )
					);
					wp_link_pages( $link_pages );
				endif;
		 
			}
		};
		/**
			@ Hàm hiển thị tag của post
			@ dtthuy_entry_tag()
		**/
		if ( ! function_exists( 'dtthuy_entry_tag' ) ) {
			function dtthuy_entry_tag() {
				if ( has_tag() ) :
					echo '<div class="entry-tag">';
					printf( __('Tagged in %1$s', 'dtthuy'), get_the_tag_list( '', ', ' ) );
					echo '</div>';
				endif;
		  }
		};	
		
		
	}
	add_action ('init', 'dtthuy_theme_setup');
}
?>
