
<div class="sidebar_wrapper">
	
	<div class="sidebar_box">
		
		<span class="sidebar_title">Practice Areas</span><!-- sidebar_title -->
		
		
		<?php if(get_field('subfolder_sidebar') == 'Yes') :?>
		
			<?php wp_nav_menu( array('menu'=> 'PA Sidebar Menu','sub_menu' => true, 'direct_parent' => true, 'show_parent' => true));?>
		
		<?php else:?>
		
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
		
		<?php endif;?>

		
	</div><!-- sidebar_box -->
	
	
	<div class="sidebar_box">
		
		<span class="sidebar_title">Related Articles</span><!-- sidebar_title -->
		
		
		<ul>
			<li><a href="">Recent story  that takes up two lines</a></li>
			<li><a href="">Recent story  that takes up two lines</a></li>
			<li><a href="">Recent story  that takes up two lines</a></li>
			<li><a href="">Recent story  that takes up two lines</a></li>
		</ul>

		
	</div><!-- sidebar_box -->
	
	
</div><!-- sidebar_wrapper -->




