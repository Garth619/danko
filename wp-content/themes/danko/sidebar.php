
<div class="sidebar_wrapper">
	
	<div class="sidebar_box">
		
		<span class="sidebar_title">Practice Areas</span><!-- sidebar_title -->
		
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
		
</div><!-- sidebar_box -->
	
	
	<div class="sidebar_box">
		
		<span class="sidebar_title">Related Articles</span><!-- sidebar_title -->
		
		<?php 

			$terms = get_field('sidebar_categories');

			if( $terms ): 

				$related_terms = array();

				foreach( $terms as $term ): 
		
					$acf_terms[] = $term->term_id;
		
				
				endforeach; 
		
		
				$related_terms_array = array_merge($related_terms, $acf_terms);
		
				print_r($related_terms_array);
		
		
			endif; 
			
			
			
			$args = array(
				'post_type' => 'post',
				'tax_query' => array(
        	array(
            'taxonomy' => 'category',
            //'field'    => 'slug',
            'terms'    => $related_terms_array,
					)
				),
			);
			
			
			$mymain_query = new WP_Query($args); 
				
				while($mymain_query->have_posts()) : $mymain_query->the_post(); 
				
					the_title();
           
        endwhile;
      
      wp_reset_postdata(); ?>

		
		<ul>
			<li><a href="">Recent story  that takes up two lines</a></li>
			<li><a href="">Recent story  that takes up two lines</a></li>
			<li><a href="">Recent story  that takes up two lines</a></li>
			<li><a href="">Recent story  that takes up two lines</a></li>
		</ul>

		
	</div><!-- sidebar_box -->
	
	
</div><!-- sidebar_wrapper -->




