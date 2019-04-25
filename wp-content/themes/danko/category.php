<?php get_header(); ?>


				
<div id="internal_main">
	
	<div class="inner_banner">
		
		<div class="banner_content">
			
			<h1 class="banner_header">
				
				<?php printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );?>
			
			</h1><!-- banner_header -->
			
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
				
				<?php get_template_part( 'loop', 'index' );?>
				
			</div><!-- content_wrapper -->
			
		</div><!-- container -->
		
	</div><!-- outer_container -->
	
</div><!-- internal_main -->

				
		

<?php get_footer(); ?>




				
				
			
		
