<section id="section_one">
	
		<div class="sec_one_left">
			
			
			<?php 
							
					$section_one_banner_image = get_field( 'section_one_banner_image' );
							
					$section_one_banner_image_tablet = get_field( 'section_one_banner_image_tablet' );
					
					$section_one_banner_image_tablet_webp = get_field( 'section_one_banner_image_tablet_webp' );
						
					$section_one_banner_image_mobile = get_field( 'section_one_banner_image_mobile' );
							
					$section_one_banner_image_mobile_webp = get_field( 'section_one_banner_image_mobile_webp' );
						
				?>
			
			
			<picture>
					
				<source type="image/webp" media="(max-width: 767px)" srcset="<?php echo $section_one_banner_image_mobile_webp['url']; ?>">
				
				<source type="image/jpg" media="(max-width: 767px)" srcset="<?php echo $section_one_banner_image_mobile['url']; ?>">
						
				<source type="image/webp" media="(max-width: 1175px)" srcset="<?php echo $section_one_banner_image_tablet_webp['url']; ?>">
				
				<source type="image/jpg" media="(max-width: 1175px)" srcset="<?php echo $section_one_banner_image_tablet['url']; ?>">
						
				<img src="<?php echo $section_one_banner_image['url']; ?>" alt="<?php echo $section_one_banner_image['alt']; ?>"/>
			
			</picture>
			
		</div><!-- sec_one_left -->
		
		<div class="sec_one_right">
			
			<div class="sec_one_inner">
				
				<div class="play_button_wrapper wistia_embed wistia_async_<?php the_field( 'section_one_wistia_id' ); ?> popover=true popoverContent=html"></div><!-- play_button_wrapper -->
				
					<span class="sec_one_title"><?php the_field( 'section_one_header' ); ?></span><!-- sec_one_title -->
				
					<span class="goldline"></span><!-- goldline -->
					
					<?php if(get_field('section_one_bullets')): ?>
					
						<ul>
					 
						<?php while(has_sub_field('section_one_bullets')): ?>
					 
							<li><?php the_sub_field( 'section_one_bullet' ); ?></li>
					    
						<?php endwhile; ?>
						
						</ul>
					 
					<?php endif; ?>
				
					<a class="free_consult_button" href="#free_consultation"><?php the_field( 'section_one_free_consultation_verbiage' ); ?></a><!-- free_consult_button -->
				
				</div><!-- sec_one_inner -->
			
			</div><!-- sec_one_right -->

	</section><!-- section_one -->

