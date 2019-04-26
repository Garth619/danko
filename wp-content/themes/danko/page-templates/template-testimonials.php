<?php 

/* Template Name: Testimonials */

get_header(); ?>


<div id="internal_main">
	
	<div class="inner_banner">
		
		<div class="banner_content">
			
			<h1 class="banner_header center"><?php the_title();?></h1>
			
			<a class="banner_button" href="#free_consultation">schedule free consultation</a>
			
		</div><!-- banner_content -->
		
		<img src="<?php bloginfo('template_directory');?>/images/hero-intl.jpg"/>
		
	</div><!-- inner_banner -->
	
	<div id="outer_trigger" class="outer_container">
		
		<div class="d_m_slide dm_internal">
		
			<span>D</span>
			<span>M</span>
	
		</div><!-- d_m_slide -->
		
		<div class="testimonial_wrapper">
			
			<?php if(get_field('client_testimonials')): ?>
			 
				<?php while(has_sub_field('client_testimonials')): ?>
			 
					<div class="single_testimonial">
				
						<div class="single_testimonial_inner">
				
							<img src="<?php bloginfo('template_directory');?>/images/ico-star-wreath.svg"/>
				
							<span class="testimonial_title"><?php the_sub_field( 'testimonial_title' ); ?></span><!-- testimonial_title -->
					
							<?php the_sub_field( 'testimonial_content' ); ?>
					
							<div class="testimonial_meta">
						
								<span><?php the_sub_field( 'client_name' ); ?></span>
								<span><?php the_sub_field( 'type_of_case' ); ?></span>
						
						</div><!-- testimonial_meta -->
				
					</div><!-- single_testimonial_inner -->
				
				</div><!-- single_testimonial -->

			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
						
		</div><!-- testimonial_wrapper -->
			
	</div><!-- outer_container -->
	
</div><!-- internal_main -->



<?php get_footer(); ?>
