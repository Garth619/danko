<?php 

/* Template Name: Case Results */

get_header(); ?>


	<div id="internal_main">
	
		
	<div id="outer_trigger" class="outer_container content">
		
		<div class="d_m_slide dm_internal">
		
			<span>D</span>
			<span>M</span>
	
		</div><!-- d_m_slide -->
		
		<div class="case_results_top">
			
			<div class="case_results_left">
			
				<h1><?php the_title();?></h1>
			
				<?php the_field( 'case_results_content_top' ); ?>
			
			</div><!-- case_results_left -->
			
			<div class="case_results_right">
				
				<?php $case_results_top_image = get_field( 'case_results_top_image' ); ?>
				
				<?php if ( $case_results_top_image ) { ?>
				
					<img class="case_result_img" src="<?php echo $case_results_top_image['url']; ?>" alt="<?php echo $case_results_top_image['alt']; ?>" />
				
				<?php } ?>
			
							
			</div><!-- case_results_right -->
				
		</div><!-- case_results_top -->
		
		<div class="case_results_bottom">
			
			
			
			<div class="cr_filter_wrapper">
			
				<div class="cr_input">
					
					<span>Select A Practice Area</span>
					
					<div class="cr_input_square"></div><!-- cr_input_square -->
					
				</div><!-- cr_input -->
				
				<div class="cr_dropdown">
					
					<?php 
				
						$myarray = array();
				
						if(get_field('case_results_page')): 
				
							while(has_sub_field('case_results_page')): 
					 
								$arrayvalue[] = get_sub_field('case_results_category');
					    
								endwhile; 
					
						endif;
				
						$unique = array_unique(array_merge($myarray, $arrayvalue), SORT_REGULAR);
				
						sort($unique);
				
						echo '<ul>';
				
							foreach ($unique as $value) {
						
								$rules[] = ",";
								$rules[] = "/";
								$rules[] = " ";
								$rules[] = "'";
						
								$datatag = (str_replace($rules, "-", strtolower($value))); 
						
								echo '<li data-acfcat="' . $datatag . '">' . $value . '</li>';
					
							}
					
						echo '</ul>';
				
					?>
						
					
				</div><!-- cr_dropdown -->
			
			</div><!-- cr_filter_wrapper -->
			
			<div class="cr_post_wrapper">
				
				
				<?php if(get_field('case_results_page')):?>
				 
					<?php while(has_sub_field('case_results_page')):
					
					
						$casetype = get_sub_field('case_results_category');
						
						$rules[] = ",";
						$rules[] = "/";
						$rules[] = " ";
						$rules[] = "'";
						
						$tabclass = (str_replace($rules, "-", strtolower($casetype))); 
						
				?>
				 
				<div class="cr_single_post <?php echo $tabclass;?>">
					
					<h2 class=""><?php the_sub_field( 'case_results_settlement_title' ); ?></h2>
					
					<div class="cr_single_meta">
						
						<span><?php the_sub_field( 'case_results_category' ); ?></span>
						
						<span><?php the_sub_field( 'case_results_title' ); ?></span>
						
					</div><!-- cr_single_meta -->
					
					<?php the_sub_field( 'case_results_content' ); ?>
					
				</div><!-- cr_single_post -->
				    
				<?php endwhile;?>
				 
			<?php endif; ?>
				
				
			</div><!-- cr_post_wrapper -->
		
		</div><!-- case_results_bottom -->
			
	</div><!-- outer_container -->
	
</div><!-- internal_main -->
					
			  


<?php get_footer(); ?>
