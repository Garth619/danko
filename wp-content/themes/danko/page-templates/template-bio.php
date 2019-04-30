<?php 

/* Template Name: Att Bio */

get_header(); ?>



<div id="internal_main">
	
	<div id="outer_trigger" class="outer_container">
		
		<div class="d_m_slide dm_internal">
		
			<span>D</span>
			<span>M</span>
	
		</div><!-- d_m_slide -->
		
		<div class="att_bio_container content">
			
			<div class="att_bio_title_wrapper">
				
				<img class="wreath" src="<?php bloginfo('template_directory');?>/images/ico-star-wreath.svg"/>
				
				<h1><?php the_title();?></h1>
				
				<?php if(get_field('att_bio_position')) {?>
				
					<span class="att_position"><?php the_field( 'att_bio_position' ); ?></span><!-- att_position -->
				
				<?php } ?>
				
			</div><!-- att_bio_title_wrapper -->
			
			<div class="att_bio_inner">
				
				<div class="att_bio_left">
					
					<?php $att_bio_profile_image = get_field( 'att_bio_profile_image' ); ?>
					
					<?php if ( $att_bio_profile_image ) : ?>
					
						<img src="<?php echo $att_bio_profile_image['url']; ?>" alt="<?php echo $att_bio_profile_image['alt']; ?>" />
					
					<?php else: ?>
					
						<img src="<?php bloginfo('template_directory');?>/images/att-placeholder.jpg" alt="placeholder"/>
					
					<?php endif; ?>
					
					</div><!-- att_bio_left -->
				
				<div class="att_bio_right">
					
					<?php the_field( 'att_top_content' ); ?>
					
				</div><!-- att_bio_right -->
				
			</div><!-- att_bio_inner -->
			
			<div class="att_bio_bottom">
				
				<?php the_field( 'att_bottom_content' ); ?>
				
				<div class="att_accolades">
					
					<div class="att_accolades_col">
						
						<?php if(get_field('accolades_column_one')): ?>
						 
							<?php while(has_sub_field('accolades_column_one')): ?>
						 
								
								<div class="single_accolade">
							
									<span class="accolade_title"><?php the_sub_field( 'accolades_title' ); ?></span><!-- accolade_title -->
									
									<?php if(get_sub_field('accolade_bullets')): ?>
									
										<ul>
									 
										<?php while(has_sub_field('accolade_bullets')): ?>
									 
											<li><?php the_sub_field( 'accolade_bullets' ); ?></li>
									    
										<?php endwhile; ?>
										
										</ul>
									 
									<?php endif; ?>
														
								</div><!-- single_accolade -->

						   <?php endwhile; ?>
						 
						<?php endif; ?>
												
					</div><!-- att_accolades_col -->
					
					<div class="att_accolades_col">
						
						<?php if(get_field('accolades_column_two')): ?>
						 
							<?php while(has_sub_field('accolades_column_two')): ?>
						 
								
								<div class="single_accolade">
							
									<span class="accolade_title"><?php the_sub_field( 'accolades_title' ); ?></span><!-- accolade_title -->
									
									<?php if(get_sub_field('accolade_bullets')): ?>
									
										<ul>
									 
										<?php while(has_sub_field('accolade_bullets')): ?>
									 
											<li><?php the_sub_field( 'accolade_bullets' ); ?></li>
									    
										<?php endwhile; ?>
										
										</ul>
									 
									<?php endif; ?>
														
								</div><!-- single_accolade -->

						   <?php endwhile; ?>
						 
						<?php endif; ?>
						
					</div><!-- att_accolades_col -->

				</div><!-- att_accolades -->
				
			</div><!-- att_bio_bottom -->
			
		</div><!-- att_bio_containers -->
		
	</div><!-- outer_container -->
	
</div><!-- internal_main -->

					 
					 	
<?php get_footer(); ?>
