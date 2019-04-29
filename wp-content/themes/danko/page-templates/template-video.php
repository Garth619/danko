<?php 

/* Template Name: Video Center */

get_header(); ?>


<div id="internal_main">
	
	<div id="outer_trigger" class="outer_container">
		
		<div class="d_m_slide dm_internal">
		
			<span>D</span>
			<span>M</span>
	
		</div><!-- d_m_slide -->
		
		<div class="video_page_wrapper content">
			
			<h1 class="center"><?php the_title();?></h1>
			
			<?php if(get_field('video_center')): ?>
			
				<div class="video_inner">
			 
				<?php while(has_sub_field('video_center')): ?>
				
					<span class="video_category_title">News Clips</span><!-- video_category_title -->
			 
					<?php if(get_sub_field('single_video')): ?>
					
						<div class="video_category">
					 
						<?php while(has_sub_field('single_video')): ?>
					 
							<div class="single_video">
					
								<div class="myvideo">
							
									<div class="video_overlay">
								
										<div class="play_button_wrapper"></div><!-- play_button_wrapper -->
								
									</div><!-- video_overlay -->
							
									<div class="video_page_wistia wistia_embed wistia_async_waichudc62 popover=true popoverContent=thumbnail"></div><!-- video_page_wistia -->
							
								</div><!-- myvideo -->
						
								<span class="single_video_name">Firm Overview</span><!-- single_video_name -->
					
							</div><!-- single_video -->
					    
						<?php endwhile; ?>
						
						</div><!-- video_category -->
					 
					<?php endif; ?>
					
				<?php endwhile; ?>
				
				</div><!-- video_inner -->
			 
			<?php endif; ?>
						
		</div><!-- video_wrapper -->
			
	</div><!-- outer_container -->
	
</div><!-- internal_main -->

<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

<?php get_footer(); ?>
