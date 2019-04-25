<?php get_header(); ?>



<div id="internal_main">
	
	<div id="outer_trigger" class="outer_container">
		
		<div class="d_m_slide dm_internal">
		
			<span>D</span>
			<span>M</span>
	
		</div><!-- d_m_slide -->
		
		<div class="container two_col">
			
			<?php get_sidebar('blog'); ?>
			
			<div class="content_wrapper content">
				
				<h1 class="single_blog_header"><?php the_title();?></h1><!-- single_blog_header -->
				
				<?php get_template_part( 'loop', 'single' );?>
				
			</div><!-- content_wrapper -->
			
		</div><!-- container -->
		
	</div><!-- outer_container -->
	
</div><!-- internal_main -->

			
<?php get_footer(); ?>




