
<div class="sidebar_wrapper">
	
	<div class="sidebar_box">
		
		<span class="sidebar_title">Practice Areas</span><!-- sidebar_title -->
		
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
		
	</div><!-- sidebar_box -->
	
	<?php 
		
		if(get_field('related_articles_sidebar') == 'Aviationlawmonitor.com Articles') : ?>
	
			<div class="sidebar_box">
		
				<span class="sidebar_title">Related Articles</span><!-- sidebar_title -->
		
				<div id="app">
			
					<ul>
			
						<li v-for="pos in posts">
		
							<a :href="pos.link" target="_blank" rel="noopener">{{pos.title.rendered}}</a>
			
					 </li>
			
					</ul>
	
				</div><!-- vue app -->
	
			</div><!-- sidebar_box -->
			
			
			<?php else:
	
			$terms = get_field('sidebar_categories');

			if( $terms ): 

			foreach( $terms as $term ): 
		
				$acf_terms[] = $term->term_id;
		
			endforeach; 
		
			$postperpage = get_field('sidebar_categories_post_count');
			
	?>
	
	<div class="sidebar_box">
		
		<span class="sidebar_title">Related Articles</span><!-- sidebar_title -->
		
		
		<?php 
			
			$args = array(
				'post_type' => 'post',
				'order' => 'ASC',
				'orderby' => 'Title',
				'posts_per_page' => $postperpage,
				'tax_query' => array(
        	array(
            'taxonomy' => 'category',
            'field'    => 'term_id',
            'terms'    => $acf_terms,
					)
				),
			);
			
			$mymain_query = new WP_Query($args); 
			
				echo "<ul>";
				
				while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
				
					<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
           
        <?php endwhile;
        
        echo "</ul>";
      
      wp_reset_postdata(); ?>
      
		
	</div><!-- sidebar_box -->
	
	<?php endif;
	
	
	endif;?>
	
	
</div><!-- sidebar_wrapper -->




