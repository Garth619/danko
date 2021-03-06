<div class="inner_banner">
		
	<div class="banner_content">


		<?php  
			
			// not found
			
			if(is_404()) { ?>
			
				<h1 class="banner_header"><?php the_field( '404_title','option'); ?></h1>
				
			<?php } 
			
			
			
			// archive page
				
			if(is_archive()) {
			
				if ( have_posts() )
				
					the_post();
			
		?>

			<h1 class="banner_header">
			
				<?php 
			
				if ( is_day() ) : 
				
					printf( __( '%s', 'twentyten' ), get_the_date() );
				
				elseif ( is_month() ) : 
				
					printf( __( '%s', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); 
			
				elseif ( is_year() ) :
				
					printf( __( '%s', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) );
				
				endif; ?>
			
			</h1>
			
		<?php } 
			
		// category page
				
		if(is_category()) { ?>
			
			<h1 class="banner_header">
			
				<?php printf( __( '%s', 'twentyten' ), '' . single_cat_title( '', false ) . '' );?>
		
			</h1><!-- banner_header -->
			
		<?php } 
			
		// blog
				
		if ( is_home() ) { ?>
				
			<h1 class="banner_header">Personal Injury Blog</h1>
  
		<?php }
				
		// pa page 
			
		if(is_page() && !is_page_template()) { ?>
		
			
			<?php if(get_field('override_global_banner_title')) : ?>
				
				<?php if(get_field('banner_title') == 'H1 Tags') : ?>
					
					<h1 class="banner_header"><?php the_field( 'override_global_banner_title'); ?></h1>
					
					<?php else:?>
					
					<span><?php the_field( 'override_global_banner_title'); ?></span>
				
				<?php endif; ?>
				
				<?php 
					
					else: // default title
					
				?>
					 
					 <?php if(get_field('banner_title') == 'H1 Tags') : ?>
					 
						 <h1 class="banner_header"><?php the_field( 'inner_banner_default_title', 'option'); ?></h1>
					 
						 <?php else:?>
						
						 <span><?php the_field( 'inner_banner_default_title', 'option'); ?></span>
						
					<?php endif; ?>
			
			<?php endif; ?>
			
		
		<?php } 
		
		// testimonials and PA Directory
		
		if(is_page_template('page-templates/template-testimonials.php') || is_page_template('page-templates/template-padirectory.php')) { ?>
		
			<h1 class="banner_header"><?php the_title();?></h1>
			
		<?php } ?>

		<a class="banner_button" href="#free_consultation">schedule free consultation</a>
			
	</div><!-- banner_content -->
		
		<?php // internal banner image conditionals
			
			$sitewide_internal_banner_image = get_field('sitewide_internal_banner_image','option'); 
		
			$internal_banner_image = get_field('internal_banner_image');
		
			if(is_page()) : // page 
			
				if ( $internal_banner_image ) : ?>
			
					<img src="<?php echo $internal_banner_image['url']; ?>" alt="<?php echo $internal_banner_image['alt']; ?>" />
			
					<?php else: ?>
			
					<img src="<?php echo $sitewide_internal_banner_image['url']; ?>" alt="<?php echo $sitewide_internal_banner_image['alt']; ?>" />
		
				<?php endif; 
				
				else: // anything other than a page for global image
				
				?>
				
				<img src="<?php echo $sitewide_internal_banner_image['url']; ?>" alt="<?php echo $sitewide_internal_banner_image['alt']; ?>" />
			
			<?php endif; ?>
		
	</div><!-- inner_banner -->

