<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>

<div id="internal_main">
	
		<div class="d_m_slide dm_internal">
		
			<span>D</span>
			<span>M</span>
	
		</div><!-- d_m_slide -->
		
		<div class="contact_wrapper">
			
			<div class="contact_left">
				
				<?php the_field( 'firm_map_embed','option'); ?>
				
			</div><!-- contact_left -->
			
			<div class="contact_right">
				
				<div class="contact_inner">
					
					<h1><?php the_title();?></h1>
					
					<span class="contact_address"><?php the_field( 'firm_street_address','option'); ?></span><!-- contact_address -->
					
					<a class="contact_tel" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('firm_phone', 'option')); ?>"><?php the_field( 'firm_phone','option'); ?></a><!-- contact_address -->
					
					<a class="contact_get_directions" href="<?php the_field( 'firm_directions_link','option'); ?>" target="_blank" rel="noopener">Get Directions</a><!-- contact_get_directions -->
					
				</div><!-- contact_inner -->
				
			</div><!-- contact_right -->
						
		</div><!-- contact_wrapper -->
		
	</div><!-- internal_main -->


			
<?php get_footer(); ?>