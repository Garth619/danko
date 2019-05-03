<?php get_header(); ?>


<div id="internal_main">
	
	<?php get_template_part( 'page-templates/template', 'internalbanner' ); ?>
	
	<div id="outer_trigger" class="outer_container">
		
		<div class="d_m_slide dm_internal">
		
			<span>D</span>
			<span>M</span>
	
		</div><!-- d_m_slide -->
		
		<div class="container two_col">
			
			<?php get_sidebar(); ?>
			
			<div class="content_wrapper content">
				
				<?php the_field( '404_verbiage','option'); ?>
				
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


