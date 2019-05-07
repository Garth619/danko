<section id="section_three">
	
	<div class="d_m_slide dm_sec_three">
		
		<span>D</span>
		<span>M</span>
	
	</div><!-- d_m_slide -->
	
	<div class="sec_three_inner content">
		
		<h1 class="sec_three_header"><?php the_field( 'section_three_header' ); ?></h1><!-- sec_three_header -->
		
		<div class="sec_three_top">
			
			<div class="sec_three_video_wrapper">
				
					<span class="sec_three_video_title"><?php the_field( 'section_three_video_call_to_action' ); ?></span><!-- sec_three_video_title -->
				
					<div class="video_overlay">
						
						<div class="play_button_wrapper"></div><!-- play_button_wrapper -->
						
						<?php $section_three_wistia_thumbnail = get_field( 'section_three_wistia_thumbnail' ); ?>

						<img class="video_placeholder" src="<?php echo $section_three_wistia_thumbnail['url']; ?>" alt="<?php echo $section_three_wistia_thumbnail['alt']; ?>" />
						
						<div class="mywistia wistia_embed wistia_async_<?php the_field( 'section_three_wistia_id' ); ?> popover=true popoverContent=html"></div><!-- mywistia -->
						
					</div><!-- video_overlay -->
				
			</div><!-- sec_three_video_wrapper -->
			
			<div class="sec_three_top_content">
				
				<?php the_field( 'section_three_top_content' ); ?>			
				
			</div><!-- sec_three_top_content -->
			
		</div><!-- sec_three_top -->
		
		<?php if(get_field('section_three_blockquote')) { ?>
		
			<div class="sec_three_blockquote_wrapper">
				
				<blockquote><?php the_field( 'section_three_blockquote' ); ?></blockquote>
				
			</div><!-- sec_three_blockquote_wrapper -->
		
		<?php } ?>
		
		<div class="sec_three_bottom">
			
			<?php the_field( 'section_three_bottom_content' ); ?>
			
		</div><!-- sec_three_bottom -->
		
	</div><!-- sec_three_inner -->
	
</section><!-- section_three -->


