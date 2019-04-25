<?php 

/* Template Name: PA Directory */

get_header(); ?>

<div id="internal_main">
	
	<div class="inner_banner">
		
		<div class="banner_content">
			
			<h1 class="banner_header"><?php the_title();?></h1>
			
			<a class="banner_button" href="#free_consultation">schedule free consultation</a>
			
		</div><!-- banner_content -->
		
		<img src="<?php bloginfo('template_directory');?>/images/hero-intl.jpg"/>
		
	</div><!-- inner_banner -->
	
	<div id="outer_trigger" class="outer_container">
		
		<div class="pa_directory_wrapper">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
				
		</div><!-- pa_directory_wrapper -->
		
	</div><!-- outer_container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>