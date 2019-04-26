<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<style>

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700,800|Unna');

@import url("https://use.typekit.net/njn0djq.css");

<?php the_field( 'review_css','option'); ?>

</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

</head>

<body <?php body_class(); ?>>
	
	<header>
		
		<div class="header_left">
			
			<a class="logo" href="<?php bloginfo('url');?>">
				
				<img src="<?php bloginfo('template_directory');?>/images/logo.svg"/>
				
			</a><!-- logo -->
			
		</div><!-- header_left -->
		
		<div class="header_middle">
			
			<nav>
				
				<div class="nav_inner">
				
					<div class="laptop_col_one laptop_col">
			
						<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
				
					</div><!-- laptop_col_one -->
					
					<div class="laptop_col_two laptop_col">
						
						<div class="laptop_sub_nav"></div><!-- laptop_sub_nav -->
						
					</div><!-- laptop_col_two -->
				
				</div><!-- nav_inner -->
				
				<div class="laptop_form" style="background:url(<?php bloginfo('template_directory');?>/images/pattern.jpg);background-size: 78px 39px;">
					
					<div class="laptop_form_inner">
					
						<span class="form_title">Free Consultation</span><!-- form_title -->
						
						<span class="required"><span>*</span>-Required</span><!-- required -->
					
						<?php gravity_form(1, false, false, false, '', true, 12); ?>
					
					</div><!-- laptop_form_inner -->
					
				</div><!-- laptop_form -->
			
			</nav>
			
		</div><!-- header_middle -->
		
		<div class="header_right">
			
			<div class="header_right_inner">
			
				<span class="free_consultation">Free Consultation</span><!-- free_consultation -->
			
				<a class="tel" href="">(650) 453-3600</a><!-- tel -->
			
			</div><!-- header_right_inner -->
			
			<div class="menu_wrapper">
				
				<div class="menu_wrapper_inner">
			
					<span class="menu_bar"></span><!-- menu_bar -->
					<span class="menu_bar"></span><!-- menu_bar -->
					<span class="menu_bar"></span><!-- menu_bar -->
			
					<span class="menu_title">Menu</span><!-- menu_title -->
			
				</div><!-- menu_wrapper_inner -->
			
			<div class="menu_close"></div><!-- menu_close -->
			
		</div><!-- menu_wrapper -->
		
		</div><!-- header_right -->
		
		<div class="internal_free_consultation">
			
			<a href="#free_consultation">Free Consultation Here</a>
			
		</div><!-- internal_free_consultation -->
		
	</header>
				
	

			