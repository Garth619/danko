<div class="sidebar_wrapper">
	
	<div class="singlepost_form" style="background:url(<?php bloginfo('template_directory');?>/images/pattern.jpg);background-size:78px 39px;">
		
		<span class="singlepost_form_title">Free Consultation</span><!-- singlepost_form_title -->
		
		<span class="required"><span>*</span>-Required</span><!-- required -->
		
		<?php gravity_form(5, false, false, false, '', true, 3755); ?>
		
	</div><!-- singlepost_form -->
	
	<div class="sidebar_box blog">
		
		<span class="sidebar_title">Recent Posts</span><!-- sidebar_title -->
		
		<?php dynamic_sidebar( 'recent_posts' ); ?>
				
	</div><!-- sidebar_box -->
	
	
	<div class="sidebar_box blog">
		
		<span class="sidebar_title">Categories</span><!-- sidebar_title -->
		
		<?php dynamic_sidebar( 'category_sidebar' ); ?>

	</div><!-- sidebar_box -->
	
	
	<div class="sidebar_box blog">
		
		<span class="sidebar_title">Archive</span><!-- sidebar_title -->
		
		<?php dynamic_sidebar( 'archive_sidebar' ); ?>

	</div><!-- sidebar_box -->
	
	
</div><!-- sidebar_wrapper -->








