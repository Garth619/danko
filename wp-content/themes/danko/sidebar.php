
<div class="sidebar_wrapper">
	
	<div class="sidebar_box">
		
		<?php
			
				if(is_404()) { ?>
					
					
					<span class="sidebar_title"><?php the_field( '404_sidebar_title','option'); ?></span>
					
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
					
					
				<?php }
				
				if ( get_field('sidebar_menu') ){ //use same classes as widgets ?>
    
   
        
        	<span class="sidebar_title">
            
            <?php if(get_field('sidebar_menu_title')){
                
                the_field('sidebar_menu_title');
            
            }
            
            else {
                
                echo 'Practice Areas';
            
            } ?>
	        
        	</span>

					<?php
            
            wp_nav_menu(array(
                'menu' => get_field('sidebar_menu'),
                'container' => 'ul',
                'depth' => 2
            ));
        	
        	?>
    	
    
			
			<?php
			
			}
			
			else {
			
			if(have_rows('sidebars','option')){
        
        $no_sidebar_yet = true;

        while(have_rows('sidebars','option')): the_row();
            
            if(is_descendant_of(get_sub_field('page')) &&  $no_sidebar_yet){
                
                echo '<!-- ancestor default -->';
                
                dynamic_sidebar( ilaw_id_friendly_text( get_sub_field( 'sidebar_name' ) ) );
                
                $no_sidebar_yet = false;
                
                break;
            }
        
        endwhile;

        if($no_sidebar_yet){
            
            echo '<!-- no ancestral sidebar -->';
            
            dynamic_sidebar( 'default_sidebar' );
            //break;
        }

    }
    	
    	else{
        
        echo '<!--  default -->';
        
        dynamic_sidebar( 'default_sidebar' );
    	
    	}
	
	};?>
			
	
	</div><!-- sidebar_box -->
	
	<?php 
		
		if(get_field('related_articles_sidebar') == 'Aviationlawmonitor.com Articles') : ?>
	
			<div class="sidebar_box">
				
				<?php if(get_field('aviationlawmonitor_sidebar_title')) :?>
				
					<span class="sidebar_title"><?php the_field( 'aviationlawmonitor_sidebar_title' ); ?></span><!-- sidebar_title -->
				
					<?php else: ?>
				
					<span class="sidebar_title">Related Articles</span><!-- sidebar_title -->
				
				<?php endif;?>
		
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
		
		<?php if(get_field('sidebar_title_for_related_sidebars')) :?>
		
				<span class="sidebar_title"><?php the_field( 'sidebar_title_for_related_sidebars' ); ?></span><!-- sidebar_title -->
			
				<?php else:?>
				
				<span class="sidebar_title">Related Articles</span><!-- sidebar_title -->
			
		<?php endif;
		
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




