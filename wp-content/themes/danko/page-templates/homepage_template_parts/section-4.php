<section id="section_four">
	
	<div class="sec_four_left">
		
		<div class="sec_four_left_inner">
			
			<div class="news_title_wrapper">
				
				<?php echo file_get_contents("wp-content/themes/danko/images/news-city.svg"); ?>
				
				<span class="news_title"><?php the_field( 'section_four_news_title' ); ?></span><!-- news_title -->
				
			</div><!-- news_title_wrapper -->
			
			<div class="news_feed">
				
				<?php if(get_field('section_four_news_posts')): ?>
				 
					<?php while(has_sub_field('section_four_news_posts')): ?>
				 
						<div class="news_row">
							
							<?php $post_object = get_sub_field( 'news_posts' ); ?>
							
							<?php if ( $post_object ): ?>
							
								<?php $post = $post_object; ?>
							
								<?php setup_postdata( $post ); ?> 
				
									<a class="" href="<?php the_permalink();?>">
					
										<div class="news_logo">
						
											<?php $news_logo = get_sub_field( 'news_logo' ); ?>
									
											<img data-src="<?php echo $news_logo['url']; ?>" alt="<?php echo $news_logo['alt']; ?>" />
		
										</div><!-- news_logo -->
					
										<div class="news_post">
											
						
											<span class="news_date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span><!-- news_date -->
						
											<span class="news_title"><?php the_title();?></span><!-- news_title -->
						
											<span class="news_readmore">Read More</span><!-- news_readmore -->
						
										</div><!-- news_post -->
					
									</a>
							
								<?php wp_reset_postdata(); ?>
		
							<?php endif; ?>
					
						</div><!-- news_row -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- news_feed -->
			
			<a class="news_view_more" href="<?php the_permalink(12);?>">View More</a><!-- news_view_more -->
			
		</div><!-- sec_four_left_inner -->
		
	</div><!-- sec_four_left -->
	
	<div class="sec_four_right" style="background:url(<?php bloginfo('template_directory');?>/images/pattern.jpg);background-size: 78px 39px;">
		
			<div class="sec_four_img_inner">
			
			
			<?php 
				
				$section_four_image = get_field( 'section_four_image' ); 
				
				$section_four_mobile = get_field( 'section_four_mobile' );
				
			?>

			
			
				<img class="sec_four_desktop" data-src="<?php echo $section_four_image['url']; ?>" alt="<?php echo $section_four_image['alt']; ?>" />
				
						
				<img class="sec_four_mobile" data-src="<?php echo $section_four_mobile['url']; ?>" alt="<?php echo $section_four_mobile['alt']; ?>" />
			
		</div><!-- sec_four_img_inner -->
				
	
	</div><!-- sec_four_right -->
	
	
	<div class="d_m_slide dm_sec_four">
		
		<span>D</span>
		<span>M</span>
	
	</div><!-- d_m_slide -->
	
</section><!-- section_four -->