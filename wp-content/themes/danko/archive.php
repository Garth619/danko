<?php get_header(); ?>



		
			
		
		

<div id="internal_main">
	
	<div class="inner_banner">
		
		<div class="banner_content">
			
			<?php
				
				if ( have_posts() )
				
				the_post();
			
			?>

			<h1 class="page-title">
			
			<?php if ( is_day() ) : ?>
				
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date() ); ?>
				
			<?php elseif ( is_month() ) : ?>
				
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
			
			<?php elseif ( is_year() ) : ?>
				
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
				
				<?php else : ?>
				
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
			
			<?php endif; ?>
			
			</h1>

			
			<a class="banner_button" href="#free_consultation">schedule free consultation</a>
			
		</div><!-- banner_content -->
		
		<img src="<?php bloginfo('template_directory');?>/images/hero-intl.jpg"/>
		
	</div><!-- inner_banner -->
	
	<div id="outer_trigger" class="outer_container">
		
		<div class="d_m_slide dm_internal">
		
			<span>D</span>
			<span>M</span>
	
		</div><!-- d_m_slide -->
		
		<div class="container two_col">
			
			<?php get_sidebar('blog'); ?>
			
			<div class="content_wrapper content">
				
						
			<?php
	/*
	 * Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/* include a file called loop-archive.php and that will be used instead.
	 */
	get_template_part( 'loop', 'archive' );
?>



				
			</div><!-- content_wrapper -->
			
		</div><!-- container -->
		
	</div><!-- outer_container -->
	
</div><!-- internal_main -->
		
			


<?php get_footer(); ?>


		




