<?php get_header(); ?>




<div id="internal_main">
	
	<div class="inner_banner">
		
		<div class="banner_content">
			
			<h1 class="banner_header">Not Found</h1>
			
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
			
			<?php get_sidebar(); ?>
			
			<div class="content_wrapper content">
				
				<h2>Try Again</h2>
				
				<p>The page you were looking for appears to have been moved, deleted or does not exist. You could <span class="go_back" onclick="goBack()">go back</span> to where you were or head straight to our <a href="/">home page</a>.</p>
		
		
	<script type="text/javascript">
		function goBack() {
    	window.history.back();
		}
	</script>

				
				
				
			</div><!-- content_wrapper -->
			
		</div><!-- container -->
		
	</div><!-- outer_container -->
	
</div><!-- internal_main -->




		
		
	

<?php get_footer(); ?>