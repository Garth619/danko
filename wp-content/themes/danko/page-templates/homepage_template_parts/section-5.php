<section id="section_five">
	
	<div class="d_m_slide dm_sec_five">
		
		<span>D</span>
		<span>M</span>
	
	</div><!-- d_m_slide -->
	
	<div class="sec_five_inner content">
		
		<div class="sec_five_top">
		
			<?php the_field( 'section_five_content' ); ?>
		
		</div><!-- sec_five_top -->
	
	<div class="sec_five_bottom">
		
		<div id="sec_five_img_trigger" class="sec_five_img">
			
			<?php $section_five_image = get_field( 'section_five_image' ); ?>

			<img src="<?php echo $section_five_image['url']; ?>" alt="<?php echo $section_five_image['alt']; ?>" />
		
		</div><!-- sec_five_img -->
		
		<div class="sec_five_bottom_content">
			
			<?php the_field( 'section_five_bottom_content' ); ?>			
		
		</div><!-- sec_five_bottom_content -->
		
	</div><!-- sec_five_bottom -->
		
	</div><!-- sec_five_inner -->
	
</section><!-- section_five -->