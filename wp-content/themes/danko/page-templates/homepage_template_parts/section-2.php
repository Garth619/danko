<section id="section_two" style="background:url(<?php bloginfo('template_directory');?>/images/pattern.jpg);background-size:78px 39px;">
	
	<div class="sec_two_inner">
		
		<div class="sec_two_slider">
			
			<?php if(get_field('section_two_cases')): ?>
			 
				<?php while(has_sub_field('section_two_cases')): ?>
			 
					<div class="sec_two_single_slide">
				
						<div class="sec_two_reg">
					
							<div class="sec_two_reg_inner">
						
								<div class="img_wrapper">
									
									<?php if(get_sub_field('svg') == 'Medical Icon') { ?>
						
										<img class="<?php the_sub_field( 'class' ); ?>" src="<?php bloginfo('template_directory');?>/images/result-01.svg"/>
									
									<?php } ?>
									
									<?php if(get_sub_field('svg') == 'CO2 Icon') { ?>
						
										<img class="<?php the_sub_field( 'class' ); ?>" src="<?php bloginfo('template_directory');?>/images/result-02.svg"/>
									
									<?php } ?>
									
									<?php if(get_sub_field('svg') == 'Airplane Icon') { ?>
						
										<img class="<?php the_sub_field( 'class' ); ?>" src="<?php bloginfo('template_directory');?>/images/result-03.svg"/>
									
									<?php } ?>
									
									<?php if(get_sub_field('svg') == 'Pedestrian Icon') { ?>
						
										<img class="<?php the_sub_field( 'class' ); ?>" src="<?php bloginfo('template_directory');?>/images/result-04.svg"/>
									
									<?php } ?>
						
								</div><!-- img_wrapper -->
						
								<span class="sec_two_amount"><?php the_sub_field( 'case_amount' ); ?></span><!-- sec_two_amount -->
						
								<span class="sec_two_type"><?php the_sub_field( 'case_type' ); ?></span><!-- sec_two_type -->
						
								<span class="sec_two_content"><?php the_sub_field( 'case_description' ); ?></span><!-- sec_two_content -->
						
							</div><!-- sec_two_reg_inner -->
				
							<div class="sec_two_hover">
					
								<span class="sec_two_hover_title"><?php the_sub_field( 'case_type' ); ?></span><!-- sec_two_hover_title -->
					
								<span class="sec_two_content"><?php the_sub_field( 'case_description' ); ?></span><!-- sec_two_content -->
						
								<a class="sec_two_readmore" href="<?php the_sub_field( 'read_more_link' ); ?>">Read More</a><!-- sec_two_readmore -->
					
							</div><!-- sec_two_hover -->
				
						</div><!-- sec_two_reg -->
				
					</div><!-- sec_two_single_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- sec_two_slider -->
		
	</div><!-- sec_two_inner -->
	
</section><!-- section_two -->