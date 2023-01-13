<?php  
	$gradiant_blog_hs 			= get_theme_mod('blog_hs','1');
	$gradiant_blog_title 		= get_theme_mod('blog_title');
	$gradiant_blog_desc			= get_theme_mod('blog_description');  
	$gradiant_blog_display_num	= get_theme_mod('blog_display_num','3'); 
	if($gradiant_blog_hs=='1'){
?>	
<section id="post-section" class="post-section av-py-default blog-home shapes-section">
	<div class="av-container">
		<?php if(!empty($gradiant_blog_title)  || !empty($gradiant_blog_desc)): ?>
			<div class="av-columns-area">
				<div class="av-column-12">
					<div class="heading-default text-center wow fadeInUp">
						<?php if(!empty($gradiant_blog_title)): ?>
							<h3><?php echo wp_kses_post($gradiant_blog_title); ?></h3>
							<span class="separator"><span><span></span></span></span>
						<?php endif; ?>
						<?php if(!empty($gradiant_blog_desc)): ?>
							<p><?php echo wp_kses_post($gradiant_blog_desc); ?></p>
						<?php endif; ?>	
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="av-columns-area">
			<div class="av-column-12">
				<div class="post-carousel owl-carousel owl-theme">
					<?php 
					$gradiant_blog_args = array( 'post_type' => 'post', 'posts_per_page' => $gradiant_blog_display_num,'post__not_in'=>get_option("sticky_posts")) ; 	
					
				$gradiant_wp_query = new WP_Query($gradiant_blog_args);
					if($gradiant_wp_query)
					{	
					 $post_count=0;
					while($gradiant_wp_query->have_posts()):$gradiant_wp_query->the_post();
					
					?>

					<?php 
						endwhile; 
						}
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="shape20 bg-elements"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog/clipArt/shape20.png" alt="image"></div>
	<div class="shape21 bg-elements"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog/clipArt/shape21.png" alt="image"></div>
	<div class="shape22 bg-elements"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog/clipArt/shape22.png" alt="image"></div>
	<div class="shape23 bg-elements"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog/clipArt/shape23.png" alt="image"></div>
</section>
<?php } ?>