<?php get_header( ); ?>
<div id="wrapper">
	<div class="container">
		<div class="row">
			<!--=Content=-->
			<div class="content col-md-9 col-sm-9 col-xs-12">
				<div class="slider"><img src="http://placehold.it/850x250"></div>
				<div class="box-index">
						<h2>Thiết kế web</h2>
						<div class="row">
							<!--
								$tkweb : biến con trỏ này dùng để chứa nội dung mình thiết lập trong phần WP_Query.
								posts_per_page=8 : là thiết lập số lượng bài post được hiển thị.
								cat=1 : là thiết lập chuyên mục nào sẽ được lấy, các bạn có thể lấy ID của category bằng cách vào quản lý chuyên mục trong admin và rê chuột vào từng category sẽ thấy ID trong thanh trạng thái bên dưới của trình duyệt.
								$tkweb->have_posts() : là hàm kiểm tra có bài post nào trong biến hay không.
								the_permalink(); : là hàm dùng để hiển thị url của bài viết.
								the_post_thumbnail(‘thumbnail’ ); : là hàm dùng để hiển thị Featured Image với kích thước 150×150 bởi tham số truyền vào ở đây là ‘thumbnail’, 
							-->
							<?php $tkweb = new WP_Query('posts_per_page=8&cat=1');
								if($tkweb->have_posts()): while($tkweb->have_posts()): $tkweb->the_post(); 
							?>
							<div class="item col-md-3 col-sm-3 col-xs-6">
								<span><a href="#" class="thumbnail"><img src="http://placehold.it/200x200"></a></span>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h3>
							</div>	
							<!--
							<div class="item col-md-3 col-sm-3 col-xs-6">
								<span><a href="<?php the_permalink(); ?>" class="thumbnail"><?php the_post_thumbnail('thumbnail' ); ?></a></span>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h3>
							</div>
							-->
							<?php endwhile; endif; ?>
						</div>
					<!--
					<h2>Thiết kế web</h2>
					<div class="row">
						<div class="item col-md-3 col-sm-3 col-xs-6">
							<span><a href="#" class="thumbnail"><img src="http://placehold.it/200x200"></a></span>
							<h3><a href="#">Tiêu đề bài viết</a></h3>
						</div>
						<div class="item col-md-3 col-sm-3 col-xs-6">
							<span><a href="#" class="thumbnail"><img src="http://placehold.it/200x200"></a></span>
							<h3><a href="#">Tiêu đề bài viết</a></h3>
						</div>							
					</div>
					-->
			  </div>
			</div>
			<div class="sidebar col-md-3 col-sm-3 col-xs-12">
				<?php get_sidebar( ); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer( ); ?>